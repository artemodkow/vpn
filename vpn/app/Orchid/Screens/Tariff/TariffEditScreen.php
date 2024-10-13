<?php

namespace App\Orchid\Screens\Tariff;

use App\Models\Tariff;
use Illuminate\Support\Facades\Validator;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class TariffEditScreen extends Screen
{
    public $tariff;

    public function query(Tariff $tariff): array
    {
        return [
            'tariff' => $tariff
        ];
    }

    public function name(): ?string
    {
        return $this->tariff->exists ? 'Редактировать тариф' : 'Создать тариф';
    }

    public function commandBar(): array
    {
        return [
            Button::make('Создать')
                ->icon('check')
                ->method('createOrUpdate')
                ->canSee(!$this->tariff->exists),

            Button::make('Сохранить')
                ->icon('check')
                ->method('createOrUpdate')
                ->canSee($this->tariff->exists),

            Button::make('Удалить')
                ->icon('trash')
                ->method('remove')
                ->confirm('Вы уверены, что хотите удалить этот тариф?')
                ->canSee($this->tariff->exists),
        ];
    }

    public function layout(): array
    {
        return [
            Layout::rows([
                Input::make('tariff.name')
                    ->title('Название')
                    ->placeholder('Введите название тарифа')
                    ->required(),

                TextArea::make('tariff.description')
                    ->title('Описание')
                    ->rows(5)
                    ->placeholder('Введите описание тарифа'),

                Input::make('tariff.price')
                    ->title('Цена')
                    ->type('number')
                    ->step(0.01)
                    ->required(),

                Input::make('tariff.days')
                    ->title('Длительность (в днях)')
                    ->type('number')
                    ->required(),

                Input::make('tariff.peers')
                    ->title('Максимальное количество устройств')
                    ->type('number')
                    ->required(),

                Switcher::make('tariff.is_demo')
                    ->sendTrueOrFalse()
                    ->title('Демо тариф')
                    ->help('Если включено, это демо-тариф'),

                Relation::make('tariff.next_tariff_id')
                    ->fromModel(Tariff::class, 'name')
                    ->title('Следующий тариф для демо')
                    ->empty('Выберите следующий тариф'),


                Switcher::make('tariff.is_visible')
                    ->sendTrueOrFalse()
                    ->title('Видимость')
                    ->help('Если выключено, тариф не будет отображаться на сайте'),
            ])
        ];
    }

    public function createOrUpdate(Tariff $tariff)
    {
        $data = request()->get('tariff');

        // Валидация данных
        $validatedData = Validator::make($data, [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'days' => 'required|integer|min:1',
            'peers' => 'required|integer|min:1',
            'is_demo' => 'required|boolean',
            'next_tariff_id' => 'nullable|exists:tariffs,id',
            'is_visible' => 'required|boolean',
        ])->validate();

        if ($validatedData['is_demo'] && empty($validatedData['next_tariff_id'])) {
            Toast::error('Для демо-тарифа необходимо выбрать следующий тариф.');
            return;
        }

        $tariff->fill($validatedData)->save();

        Toast::info('Тариф сохранен успешно.');
        return redirect()->route('platform.tariff.list');
    }

    public function remove(Tariff $tariff)
    {
        $tariff->delete();

        Toast::info('Тариф удален успешно.');
        return redirect()->route('platform.tariff.list');
    }
}
