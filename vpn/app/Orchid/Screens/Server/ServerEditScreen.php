<?php
namespace App\Orchid\Screens\Server;

use App\Jobs\SetupServerJob;
use App\Models\City;
use App\Models\Country;
use App\Models\Server;

use App\Services\SshService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Orchid\Screen\Fields\Select;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout as OrchidLayout;

class ServerEditScreen extends Screen
{
    public $name = 'Добавить SSH сервер';

    public $description = 'Введите данные для подключения по SSH';

    public $server;

    public function query(Server $server): array
    {
        return [
            'server' => $server,
        ];
    }

    public function commandBar(): array
    {
        return [
            Button::make('Сохранить')
                ->icon('check')
                ->method('save'),
        ];
    }

    public function layout(): array
    {
        return [
            OrchidLayout::rows([
                Input::make('server.name')
                    ->title('Название сервера')
                    ->placeholder('Введите название сервера')
                    ->required(),

                Input::make('server.host')
                    ->title('IP адрес')
                    ->placeholder('Введите IP адрес сервера')
                    ->required(),

                Input::make('server.port')
                    ->title('Порт')
                    ->placeholder('22')
                    ->value(22)
                    ->required(),

                Input::make('server.username')
                    ->title('Имя пользователя')
                    ->placeholder('Введите имя пользователя')
                    ->required(),

                Input::make('server.password')
                    ->title('Пароль')
                    ->type('password')
                    ->placeholder('Введите пароль')
                    ->required(),

                Select::make('server.country_id')
                    ->fromModel(Country::class, 'name')
                    ->title('Страна')
                    ->empty('Страна не выбрана')
                    ->required(),

                Select::make('server.city_id')
                    ->fromModel(City::class, 'name')
                    ->title('Город')
                    ->empty('Город не выбран')
            ]),
        ];
    }

    /**
     * @throws \Exception
     */
    public function save(Request $request, Server $server)
    {
        $serverData = $request->get('server');

        $ssh = new SshService();
        try {
            $ssh->connect(
                $serverData['host'],
                $serverData['port'],
                $serverData['username'],
                $serverData['password']
            );
        }
        catch (\Exception $e) {
            Toast::error('Не удалось подключиться по SSH. Проверьте данные подключения.');
            return redirect()->back();
        }
        $server->fill($serverData);
        $server->wg_auth_token = Str::random(16);
        $server->status = 'Настраивается';
        $server->save();
        Toast::info('Сервер успешно добавлен');
        SetupServerJob::dispatch($server);
        return redirect()->route('platform.servers');
    }
}
