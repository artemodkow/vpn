<?php

    namespace App\Jobs;

    use App\Http\Requests\Client\CreateClientRequest;
    use App\Models\Server;
    use App\Services\SshService;
    use App\Services\WireGuardService;
    use App\Services\ZabbixService;
    use Exception;
    use Illuminate\Bus\Queueable;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Foundation\Bus\Dispatchable;
    use Illuminate\Queue\InteractsWithQueue;
    use Illuminate\Queue\SerializesModels;
    use Illuminate\Support\Facades\Log;

    class SetupServerJob implements ShouldQueue
    {
        use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

        public $tries = 3;
        public $timeout = 300;
        protected $server;

        public function __construct(Server $server)
        {
            $this->server = $server;
        }

        public function handle(SshService $sshService, WireGuardService $wireGuardService, ZabbixService
        $zabbixService)
        {
            Log::info('Настройка сервера началась: ' . $this->server->host);
            try {
                // Подключаемся к серверу
                $connect = $sshService->connect($this->server->host, $this->server->port, $this->server->username, $this->server->password);

                $hostname = 'server_'.$this->server->id;
                $app_ip = env('APP_IP');
                $dockerInstallFile = "
#!/bin/bash

# Проверка и установка Docker
if ! [ -x \"\$(command -v docker)\" ]; then
  curl -sSL https://get.docker.com | sh
  sudo usermod -aG docker \$(whoami)
fi

# Создание Docker Compose файла
mkdir -p ~/wg-zabbix
cat > ~/wg-zabbix/docker-compose.yml << EOF
version: '3'
services:
  wireguard:
    image: leonovk/wg-rest-api
    container_name: wireguard
    environment:
      - WG_HOST={$this->server->host}
      - AUTH_TOKEN={$this->server->wg_auth_token}
      - ENVIRONMENT=production
    volumes:
      - ~/.wg-rest:/etc/wireguard
    ports:
      - '51820:51820/udp'
      - '3000:3000'
    cap_add:
      - NET_ADMIN
    restart: unless-stopped

  zabbix-agent2:
    image: zabbix/zabbix-agent2:alpine-latest
    container_name: zabbix-agent2
    environment:
      - ZBX_SERVER_HOST={$app_ip}
      - ZBX_SERVER_PORT=10051
      - ZBX_SERVER_ACTIVE={$app_ip}
      - ZBX_HOSTNAME={$hostname}
    volumes:
      - /var/run/docker.sock:/var/run/docker.sock
    privileged: true
    user: root
    restart: always
    ports:
      - '10050:10050'
EOF
";
$runDockerFile = "
cd ~/wg-zabbix
docker compose down
docker compose up -d
";

                $dockerInstall = "cat > ~/install.sh << 'EOF'
                " . $dockerInstallFile . "EOF";
                $runDocker = "cat > ~/run.sh << 'EOF'
                " . $runDockerFile . "EOF";
                $o = $connect->exec($dockerInstall, function ($o) {
                    Log::info($o);
                });
                $o = $connect->exec($runDocker, function ($o) {
                    Log::info($o);
                });
                $connect->setTimeout(1000);
                $connect->exec('sh ~/install.sh', function ($o) {
                    Log::info($o);
                });
                $connect->exec('sh ~/run.sh', function ($o) {
                    Log::info($o);
                });
                // Добавление хоста в Zabbix
                $zabbixService->addHost(
                    $hostname,
                    $this->server->name,
                    $this->server->host,
                    $zabbixService->getGroupIdByName('Wireguard'),
                    $zabbixService->getTemplateIdByName('Docker by Zabbix agent 2')
                );

                $this->server->status = 'Настроен';
                $this->server->save();

                Log::info('Настройка сервера завершена: ' . $this->server->host);
            } catch (Exception $e) {
                Log::error('Ошибка при настройке сервера: ' . $e->getMessage());
                $this->server->status = 'Ошибка';
                $this->server->save();
            }
        }
    }
