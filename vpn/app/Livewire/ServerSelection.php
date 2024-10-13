<?php
namespace App\Livewire;

use App\Models\Server;
use Livewire\Component;

class ServerSelection extends Component
{
    public $selectedServer;
    public $user;

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function selectServer($serverId)
    {
        $subscription = $this->user->activeSubscription();

        if (!$subscription) {
            session()->flash('error', 'У вас нет активной подписки.');
            return;
        }

        if ($subscription->active_servers >= $subscription->max_servers) {
            session()->flash('error', 'Вы достигли максимального количества подключенных серверов.');
            return;
        }

        $this->selectedServer = Server::find($serverId);

        // Логика подключения к выбранному серверу:
        $this->user->connectToServer($this->selectedServer);
        session()->flash('success', 'Сервер успешно подключен!');
    }



    public function render()
    {
        return view('livewire.server-selection', [
            'servers' => Server::all(),
        ]);
    }
}
