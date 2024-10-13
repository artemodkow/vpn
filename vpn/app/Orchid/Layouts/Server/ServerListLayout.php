<?php

namespace App\Orchid\Layouts\Server;

use App\Models\Server;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ServerListLayout extends Table
{
    protected $target = 'servers'; // Определение источника данных для таблицы

    protected function columns(): array
    {
        return [
            TD::make('name', 'Название')
                ->sort()
                ->filter(TD::FILTER_TEXT),

            TD::make('host', 'Хост')
                ->sort(),

            TD::make('username', 'Пользователь'),

            TD::make('created_at', 'Дата создания')
                ->sort()
                ->render(function (Server $server) {
                    return $server->created_at->toDateTimeString();
                }),
            TD::make('status', 'Статус')
                ->render(function ($server) {
                    return $server->status;
                }),
            TD::make('actions', 'Действия')
                ->render(function (Server $server) {
                    return Link::make('Управление клиентами')
                        ->route('platform.servers.clients', $server->id)
                        ->icon('bs-user');
                }),
            TD::make('delete', 'Удалить')
                ->render(function (Server $server) {
                    return Button::make('Удалить')
                        ->confirm('Вы действительно хотите удалить сервер?')
                        ->method('deleteServer', [
                            'id' => $server->id,
                        ]);
                }),
        ];
    }
}
