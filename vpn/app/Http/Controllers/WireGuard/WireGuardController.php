<?php
    namespace App\Http\Controllers\WireGuard;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\Client\CreateClientRequest;
    use App\Http\Resources\ClientResource;
    use App\Models\Client;
    use App\Models\Server;
    use App\Repositories\ClientRepository;
    use App\Services\WireGuardService;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Http;

    class WireGuardController extends Controller
    {
        protected $wireGuardService;
        protected $clientRepository;

        public function __construct(WireGuardService $wireGuardService, ClientRepository $clientRepository)
        {
            $this->wireGuardService = $wireGuardService;
            $this->clientRepository = $clientRepository;
        }

        public function getClients($serverId)
        {
            $clients = Client::where('server_id', $serverId)->get();
            return ClientResource::collection($clients);
        }
        public function getClient($serverId, $clientId)
        {
            $client = Client::findOrFail($clientId);
            return $this->wireGuardService->getClient($serverId, $client->client_id);
        }
        public function createClient(CreateClientRequest $request, $serverId)
        {
            $apiClient = $this->wireGuardService->createClient($serverId, $request->expired_at);
            $client = $this->clientRepository->createClient($serverId, $apiClient, $request);

            return new ClientResource($client);
        }

        public function enableClient($serverId, $clientId)
        {
            $client = Client::findOrFail($clientId);
            $this->wireGuardService->updateClient($serverId, $client->client_id, ['enable' => true]);
            $this->clientRepository->updateClientStatus($client, true);

            return new ClientResource($client);
        }

        public function disableClient($serverId, $clientId)
        {
            $client = Client::findOrFail($clientId);
            $this->wireGuardService->updateClient($serverId, $client->client_id, ['enable' => false]);
            $this->clientRepository->updateClientStatus($client, false);

            return new ClientResource($client);
        }

        public function deleteClient($serverId, $clientId)
        {
            $client = Client::findOrFail($clientId);
            $this->wireGuardService->deleteClient($serverId, $client->client_id);
            $this->clientRepository->deleteClient($client);

            return response()->json(['message' => 'Client deleted successfully']);
        }

        public function getClientConfig($serverId, $clientId) {
            $client = Client::findOrFail($clientId);
            $config = $this->wireGuardService->getClientConfig($serverId, $client->client_id);
            return response($config)
                ->header('Content-Type', 'text/plain');
        }
    }
