<?php

namespace App\Orchid\Layouts\Client;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Label;
use Orchid\Screen\Layouts\Rows;

class ClientViewLayout extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): array
    {
        return [
            Label::make('client.address')
                ->title('IP Адрес')
                ->value($this->query['client']['address']),

            Label::make('client.server_public_key')
                ->title('Публичный ключ сервера')
                ->value($this->query['client']['server_public_key']),

            Label::make('client.private_key')
                ->title('Приватный ключ')
                ->value($this->query['client']['private_key']),

            Label::make('client.public_key')
                ->title('Публичный ключ клиента')
                ->value($this->query['client']['public_key']),

            Label::make('client.preshared_key')
                ->title('Предварительно общий ключ')
                ->value($this->query['client']['preshared_key']),

            Label::make('client.allowed_ips')
                ->title('Разрешенные IP')
                ->value($this->query['client']['allowed_ips']),

            Label::make('client.dns')
                ->title('DNS')
                ->value($this->query['client']['dns'] ?? 'Не указан'),

            Label::make('client.persistent_keepalive')
                ->title('Keepalive')
                ->value($this->query['client']['persistent_keepalive']),

            Label::make('client.endpoint')
                ->title('Удаленный узел (Endpoint)')
                ->value($this->query['client']['endpoint']),

            Label::make('client.last_online')
                ->title('Последний онлайн')
                ->value($this->query['client']['last_online'] ?? 'Неизвестно'),

            Label::make('client.traffic')
                ->title('Трафик')
                ->value($this->query['client']['traffic'] ?? 'Нет данных'),
        ];
    }

}
