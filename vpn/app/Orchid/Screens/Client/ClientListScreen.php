<?php

namespace App\Orchid\Screens\Client;

use App\Http\Controllers\WireGuard\WireGuardController;
use App\Http\Requests\Client\CreateClientRequest;
use App\Models\Client;
use App\Models\Server;
use App\Orchid\Layouts\Client\ClientAddLayout;
use App\Orchid\Layouts\Client\ClientListLayout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Orchid\Support\Facades\Toast;

use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class ClientListScreen extends Screen
{
    public $name = 'Клиенты';

    public $server;

    public function query(Server $server): array
    {
        $this->server = $server;
        return [
            'clients' => Client::filters()
                ->where('server_id', $server->id)
                ->get(),
        ];
    }

    public function commandBar(): array
    {
        return [
            ModalToggle::make('Добавить клиента')
                ->modal('createClient')
                ->method('createClient')
                ->icon('plus'),
        ];
    }

    public function layout(): array
    {
        return [
            ClientListLayout::class,
            Layout::modal('createClient', [
                ClientAddLayout::class,
            ])->title('Добавить клиента')
                ->applyButton('Create'),
        ];
    }
    public function createClient(CreateClientRequest $request, WireGuardController $wgController)
    {
        $wgController->createClient($request, $this->server->id);
        Toast::info('Клиент успешно создан');
    }

    public function enableClient($id, WireGuardController $wgController)
    {
        $wgController->enableClient($this->server->id, $id);
        Toast::info('Клиент включен');
    }

    public function disableClient($id, WireGuardController $wgController)
    {
        $wgController->disableClient($this->server->id, $id);
        Toast::info('Клиент выключен');
    }

    public function deleteClient($id, WireGuardController $wgController)
    {
        $wgController->deleteClient($this->server->id, $id);
        Toast::info('Клиент успешно удален');
    }

    public function downloadConfig($id, WireGuardController $wgController)
    {
        $config = $wgController->getClientConfig($this->server->id, $id);
        $path = "config/wg-client-config-{$id}.conf";
        Storage::put($path, $config->getContent());
        return response()->download(Storage::path($path))->deleteFileAfterSend();
    }
}
