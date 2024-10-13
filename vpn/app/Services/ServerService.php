<?php

namespace App\Services;

use App\Models\Server;
use Illuminate\Support\Facades\Log;

class ServerService
{
    protected $zabbixService;

    public function __construct(ZabbixService $zabbixService)
    {
        $this->zabbixService = $zabbixService;
    }

    public function deleteServerWithZabbixHost($serverId)
    {
        $server = Server::find($serverId);

        if (!$server) {
            throw new \Exception('Server not found');
        }

        try {
            $hostname = 'server_' . $server->id;

            $hostId = $this->zabbixService->getHostIdByName($hostname);

            if ($hostId) {
                $this->zabbixService->deleteHost($hostId);
            } else {
                Log::warning('Host не найден в Zabbix: ' . $hostname);
            }
            $server->delete();
            Log::info('Сервер удален: ' . $server->host);
        } catch (\Exception $e) {
            Log::error('Ошибка при удалении сервера: ' . $e->getMessage());
            throw new \Exception('Ошибка при удалении сервера');
        }
    }
}
