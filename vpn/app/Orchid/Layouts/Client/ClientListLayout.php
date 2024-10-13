<?php

namespace App\Orchid\Layouts\Client;

use App\Models\Client;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ClientListLayout extends Table
{
    protected $target = 'clients';

    protected function columns(): array
    {
        return [
            TD::make('id', 'ID')
                ->sort()
                ->render(function (Client $client) {
                    return $client->id;
                }),

            TD::make('name', 'Название')
                ->sort()
                ->filter(TD::FILTER_TEXT)
                ->render(function (Client $client) {
                    return Link::make($client->name)
                        ->route('platform.client.view', $client->id);
                }),

            TD::make('address', 'Адрес')
                ->render(function (Client $client) {
                    return $client->address;
                }),

            TD::make('enabled', 'Состояние')
                ->render(function (Client $client) {
                    return $client->enabled ? 'Включен' : 'Выключен';
                }),

            TD::make('created_at', 'Дата создания')
                ->sort()
                ->render(function (Client $client) {
                    return $client->created_at->toDateTimeString();
                }),
            TD::make('expired_at', 'Дата отключения')
                ->sort()
                ->render(function (Client $client) {
                    return $client->expired_at?->toDateTimeString();
                }),
            TD::make('actions', 'Действия')->render(function (Client $client) {
                return
                    Button::make($client->enabled ? 'Отключить' : 'Включить')
                    ->method($client->enabled ? 'disableClient' : 'enableClient', ['id' => $client->id])
                    .Button::make('Скачать конфигурацию')
                            ->icon('check')
                            ->turbo(false)
                            ->method('downloadConfig',['id' => $client->id])
                    ;
            }),
            TD::make('delete', 'Удалить')
                ->render(function (Client $client) {
                    return Button::make('Удалить')
                        ->icon('trash')
                        ->confirm('Вы действительно хотите удалить клиента?')
                        ->method('deleteClient', [
                            'id' => $client->id,
                        ]);
                }),
        ];
    }
}
