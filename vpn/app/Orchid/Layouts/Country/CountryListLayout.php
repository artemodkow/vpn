<?php

namespace App\Orchid\Layouts\Country;

use App\Models\Country;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CountryListLayout extends Table
{
    public $target = 'countries';

    protected function columns(): array
    {
        return [
            TD::make('name', 'Country Name')
                ->sort()
                ->filter(TD::FILTER_TEXT)
                ->render(function (Country $country) {
                    return $country->name;
                }),

            TD::make('created_at', 'Created')
                ->sort()
                ->render(function (Country $country) {
                    return $country->created_at->toDateTimeString();
                }),
        ];
    }
}
