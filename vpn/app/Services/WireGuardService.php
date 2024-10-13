<?php

namespace App\Services;

use App\Models\Server;
use Illuminate\Support\Facades\Http;

class WireGuardService
{
    protected function apiUrl($host, $path)
    {
        return 'http://' . $host . ':3000/api' . $path;
    }

    public function makeRequest($serverId, $method, $path, $data = [])
    {
        $server = Server::findOrFail($serverId);
        $url = $this->apiUrl($server->host, $path);
        $token = $server->wg_auth_token;

        $response = Http::withToken($token)->$method($url, $data);

        if ($response->failed()) {
            dd($response);
            throw new \Exception("API Request failed");
        }

        return $response->json();
    }

    public function checkServerHealth($serverId)
    {
        $response = $this->makeRequest($serverId, 'get', '/healthz');
        return $response['status'] === 'ok';
    }

    public function getClients($serverId)
    {
        return $this->makeRequest($serverId, 'get', '/clients');
    }

    public function getClient($serverId, $clientId) {
        return $this->makeRequest($serverId,'get', "/clients/{$clientId}");
    }

    public function getClientConfig($serverId, $clientId)
    {
        return $this->makeRequest($serverId, 'get', "/clients/{$clientId}?format=conf");
    }

    public function createClient($serverId, $expiredDate = null)
    {
        return $this->makeRequest($serverId, 'post', '/clients');
    }

    public function updateClient($serverId, $clientId, $data)
    {
        return $this->makeRequest($serverId, 'patch', "/clients/{$clientId}", $data);
    }

    public function deleteClient($serverId, $clientId)
    {
        return $this->makeRequest($serverId, 'delete', "/clients/{$clientId}");
    }
}
