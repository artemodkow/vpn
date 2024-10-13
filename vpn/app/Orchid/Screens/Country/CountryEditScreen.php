<?php

namespace App\Orchid\Screens\Country;

use App\Models\Country;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class CountryEditScreen extends Screen
{
    public $country;

    public function query(Country $country): array
    {
        return [
            'country' => $country
        ];
    }

    public function name(): ?string
    {
        return $this->country->exists ? 'Edit Country' : 'Create Country';
    }

    public function commandBar(): array
    {
        return [
            Button::make('Create')
                ->icon('check')
                ->method('createOrUpdate')
                ->canSee(!$this->country->exists),

            Button::make('Update')
                ->icon('check')
                ->method('createOrUpdate')
                ->canSee($this->country->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->confirm('Are you sure you want to remove this country?')
                ->canSee($this->country->exists),
        ];
    }

    public function layout(): array
    {
        return [
            Layout::rows([
                Input::make('country.name')
                    ->title('Country Name')
                    ->placeholder('Enter country name')
                    ->required(),
            ])
        ];
    }

    public function createOrUpdate(Country $country)
    {
        $country->fill(request()->get('country'))->save();

        Toast::info('Country saved successfully.');
        return redirect()->route('platform.country.list');
    }

    public function remove(Country $country)
    {
        $country->delete();

        Toast::info('Country removed successfully.');
        return redirect()->route('platform.country.list');
    }
}
