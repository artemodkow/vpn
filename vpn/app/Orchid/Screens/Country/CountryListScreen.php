<?php

namespace App\Orchid\Screens\Country;

use App\Models\Country;
use App\Orchid\Layouts\Country\CountryListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class CountryListScreen extends Screen
{
    public function query(): array
    {
        return [
            'countries' => Country::paginate()
        ];
    }

    public function name(): ?string
    {
        return 'Countries';
    }

    public function commandBar(): array
    {
        return [
            Link::make('Create Country')
                ->icon('plus')
                ->route('platform.country.edit')
        ];
    }

    public function layout(): array
    {
        return [
            CountryListLayout::class
        ];
    }
}
