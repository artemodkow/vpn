<?php

namespace App\Repositories;

use App\Models\Client;
use Illuminate\Support\Str;

class ClientRepository
{
    public function createClient($serverId, $apiClient, $clientData)
    {
        return Client::create([
            'server_id' => $serverId,
            'client_id' => $apiClient['id'],
            'name' => Str::random(10),
            'expired_at' => $clientData->expired_at ?? null,
            'enabled' => $apiClient['enable'],
            'address' => $apiClient['address'],
        ]);
    }

    public function updateClientStatus(Client $client, bool $enabled)
    {
        $client->enabled = $enabled;
        $client->save();
    }

    public function deleteClient(Client $client)
    {
        $client->delete();
    }
}
