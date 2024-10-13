<?php

namespace App\Orchid\Screens\City;

use App\Models\City;
use App\Orchid\Layouts\City\CityListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class CityListScreen extends Screen
{
    public function query(): array
    {
        return [
            'cities' => City::with('country')->paginate()
        ];
    }

    public function name(): ?string
    {
        return 'Cities';
    }

    public function commandBar(): array
    {
        return [
            Link::make('Create City')
                ->icon('plus')
                ->route('platform.city.edit')
        ];
    }

    public function layout(): array
    {
        return [
            CityListLayout::class
        ];
    }
}
