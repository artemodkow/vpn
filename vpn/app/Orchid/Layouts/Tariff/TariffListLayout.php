<?php

namespace App\Orchid\Layouts\Tariff;

use App\Models\Tariff;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class TariffListLayout extends Table
{
    public $target = 'tariffs';

    protected function columns(): array
    {
        return [
            TD::make('name', 'Название')
                ->sort()
                ->filter(TD::FILTER_TEXT)
                ->render(function (Tariff $tariff) {
                    return Link::make($tariff->name)
                        ->route('platform.tariff.edit', $tariff);
                }),

            TD::make('price', 'Цена')
                ->sort()
                ->render(function (Tariff $tariff) {
                    return number_format($tariff->price, 2) . ' ₽';
                }),

            TD::make('days', 'Длительность (дни)')
                ->sort(),

            TD::make('peers', 'Устройства')
                ->sort(),

            TD::make('is_demo', 'Демо')
                ->render(function (Tariff $tariff) {
                    return $tariff->is_demo ? 'Да' : 'Нет';
                }),

            TD::make('is_visible', 'Видимость')
                ->render(function (Tariff $tariff) {
                    return $tariff->is_visible ? 'Опубликован' : 'Скрыт';
                }),

            TD::make('updated_at', 'Обновлен')
                ->sort()
                ->render(function (Tariff $tariff) {
                    return $tariff->updated_at->toDateTimeString();
                }),
        ];
    }
}
