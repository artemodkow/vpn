<?php

    namespace App\Services;

    use Exception;
    use phpseclib3\Net\SSH2;

    class SshService
    {
        protected $ssh;

        public function connect($host, $port, $username, $password)
        {
            $this->ssh = new SSH2($host, $port);
            try {
                if (!$this->ssh->login($username, $password)) {
                    throw new Exception('SSH-авторизация по паролю не удалась');
                }
            } catch (Exception $e) {
                throw new Exception('Ошибка при попытке подключения: ' . $e->getMessage());
            }
            return $this->ssh;
        }

    }
