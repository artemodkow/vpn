<?php
namespace App\Orchid\Screens\Client;

use App\Http\Controllers\WireGuard\WireGuardController;
use App\Models\Client;
use App\Orchid\Layouts\Client\ClientViewLayout;
use Illuminate\Support\Facades\Storage;
use Orchid\Screen\Screen;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ClientViewScreen extends Screen
{
    public $client;
    public $clientID;

    public $serverID;

    public function query(Client $client, WireGuardController $wgController): array
    {
        $this->clientID = $client->id;
        $this->serverID = $client->server_id;
        $this->client = $wgController->getClient($client->server_id, $client->id);
        return [
            'client' => $this->client,
        ];
    }

    public function name(): ?string
    {
        return 'Просмотр клиента';
    }

    public function commandBar(): array
    {
        return [
            Button::make('Включить')
                ->icon('check')
                ->method('enableClient',['id' => $this->clientID]),

            Button::make('Выключить')
                ->icon('ban')
                ->method('disableClient',['id' => $this->clientID]),

            Button::make('Удалить')
                ->icon('trash')
                ->method('deleteClient',['id' => $this->clientID]),

            Button::make('Скачать конфигурацию')
                ->icon('check')
                ->method('downloadConfig',['id' => $this->clientID])
                ->turbo(false),
        ];
    }

    public function layout(): array
    {
        return [
            ClientViewLayout::class,
        ];
    }

    public function enableClient($id, WireGuardController $wgController)
    {
        $wgController->enableClient($this->serverID,$id);
        Toast::info('Client enabled successfully.');
    }

    public function disableClient($id, WireGuardController $wgController)
    {
        $wgController->disableClient($this->serverID,$id);
        Toast::info('Client disabled successfully.');
    }

    public function deleteClient($id, WireGuardController $wgController)
    {
        $wgController->deleteClient($this->serverID,$id);
        Toast::info('Client deleted successfully.');
        return redirect()->route('platform.servers');
    }
    public function downloadConfig($id, WireGuardController $wgController)
    {
        $config = $wgController->getClientConfig($this->serverID,$id);
        $path = "config/wg-client-config-{$id}.conf";
        Storage::put($path, $config->getContent());
        return response()->download(Storage::path($path))->deleteFileAfterSend();
    }
}
