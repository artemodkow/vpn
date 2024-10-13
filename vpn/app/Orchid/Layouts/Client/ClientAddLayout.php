<?php

namespace App\Orchid\Layouts\Client;

use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;

class ClientAddLayout extends Rows
{

    protected function fields(): array
    {
        return [
            DateTimer::make('expired_at')
                ->title('Дата отключения')
                ->enableTime()
                ->placeholder('Выберите время отключения пользователя или оставьте пустым'),
        ];
    }
}
