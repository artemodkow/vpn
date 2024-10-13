<?php

namespace App\Orchid\Screens\City;

use App\Models\City;
use App\Models\Country;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class CityEditScreen extends Screen
{
    public $city;

    public function query(City $city): array
    {
        return [
            'city' => $city
        ];
    }

    public function name(): ?string
    {
        return $this->city->exists ? 'Edit City' : 'Create City';
    }

    public function commandBar(): array
    {
        return [
            Button::make('Create')
                ->icon('check')
                ->method('createOrUpdate')
                ->canSee(!$this->city->exists),

            Button::make('Update')
                ->icon('check')
                ->method('createOrUpdate')
                ->canSee($this->city->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->confirm('Are you sure you want to remove this city?')
                ->canSee($this->city->exists),
        ];
    }

    public function layout(): array
    {
        return [
            Layout::rows([
                Input::make('city.name')
                    ->title('City Name')
                    ->placeholder('Enter city name')
                    ->required(),

                Select::make('city.country_id')
                    ->fromModel(Country::class, 'name')
                    ->title('Country')
                    ->required(),
            ])
        ];
    }

    public function createOrUpdate(City $city)
    {
        $city->fill(request()->get('city'))->save();

        Toast::info('City saved successfully.');
        return redirect()->route('platform.city.list');
    }

    public function remove(City $city)
    {
        $city->delete();

        Toast::info('City removed successfully.');
        return redirect()->route('platform.city.list');
    }
}
