<?php

namespace App\Orchid\Layouts\City;

use App\Models\City;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CityListLayout extends Table
{
    public $target = 'cities';

    protected function columns(): array
    {
        return [
            TD::make('name', 'City Name')
                ->sort()
                ->filter(TD::FILTER_TEXT)
                ->render(function (City $city) {
                    return $city->name;
                }),

            TD::make('country.name', 'Country')
                ->sort()
                ->filter(TD::FILTER_TEXT)
                ->render(function (City $city) {
                    return $city->country->name;
                }),

            TD::make('created_at', 'Created')
                ->sort()
                ->render(function (City $city) {
                    return $city->created_at->toDateTimeString();
                }),
        ];
    }
}
