<?php

namespace App\Orchid\Screens\Tariff;

use App\Models\Tariff;
use App\Orchid\Layouts\Tariff\TariffListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class TariffListScreen extends Screen
{
    public function query(): array
    {
        return [
            'tariffs' => Tariff::paginate()
        ];
    }

    public function name(): ?string
    {
        return 'Тарифы';
    }

    public function commandBar(): array
    {
        return [
            Link::make('Создать тариф')
                ->icon('plus')
                ->route('platform.tariff.create')
        ];
    }

    public function layout(): array
    {
        return [
            TariffListLayout::class
        ];
    }
}
