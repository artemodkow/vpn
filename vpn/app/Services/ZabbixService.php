<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ZabbixService
{
    protected $apiUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->apiUrl = env('ZABBIX_API_URL');
        $this->apiKey = env('ZABBIX_API_KEY');
    }
    /**
     * Получить ID группы по названию
     */
    public function getGroupIdByName($groupName)
    {
        $response = Http::post($this->apiUrl, [
            'jsonrpc' => '2.0',
            'method' => 'hostgroup.get',
            'params' => [
                'filter' => [
                    'name' => $groupName,
                ],
            ],
            'auth' => $this->apiKey,
            'id' => 1,
        ]);

        $result = $response->json();

        if (!empty($result['result']) && isset($result['result'][0]['groupid'])) {
            return $result['result'][0]['groupid'];
        }

        return null;
    }

    public function getTemplateIdByName($templateName)
    {
        $response = Http::post($this->apiUrl, [
            'jsonrpc' => '2.0',
            'method' => 'template.get',
            'params' => [
                'filter' => [
                    'host' => $templateName,
                ],
            ],
            'auth' => $this->apiKey,
            'id' => 1,
        ]);

        $result = $response->json();

        if (!empty($result['result']) && isset($result['result'][0]['templateid'])) {
            return $result['result'][0]['templateid'];
        }

        return null;
    }

    public function addHost($hostname, $name, $ip, $groupId, $templateId)
    {
        $response = Http::post($this->apiUrl, [
            'jsonrpc' => '2.0',
            'method' => 'host.create',
            'params' => [
                'host' => $hostname,
                'name' => $name,
                'interfaces' => [
                    [
                        'type' => 1,
                        'main' => 1,
                        'useip' => 1,
                        'ip' => $ip,
                        'dns' => '',
                        'port' => '10050',
                    ],
                ],
                'groups' => [
                    [
                        'groupid' => $groupId,
                    ],
                ],
                'templates' => [
                    [
                        'templateid' => $templateId,
                    ],
                ],
            ],
            'auth' => $this->apiKey,
            'id' => 1,
        ]);

        return $response->json();
    }

    public function getHostIdByName($hostname)
    {
        $response = Http::post($this->apiUrl, [
            'jsonrpc' => '2.0',
            'method' => 'host.get',
            'params' => [
                'filter' => [
                    'host' => [$hostname]
                ]
            ],
            'auth' => $this->apiKey,
            'id' => 1,
        ]);

        $result = $response->json();

        if (!empty($result['result'])) {
            return $result['result'][0]['hostid'];
        }

        return null;
    }

    public function deleteHost($hostId)
    {
        $response = Http::post($this->apiUrl, [
            'jsonrpc' => '2.0',
            'method' => 'host.delete',
            'params' => [
                $hostId
            ],
            'auth' => $this->apiKey,
            'id' => 1,
        ]);

        return $response->json();
    }
}
