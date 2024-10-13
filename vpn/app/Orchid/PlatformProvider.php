<?php

declare(strict_types=1);

namespace App\Orchid;

use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\Menu;
use Orchid\Support\Color;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @param Dashboard $dashboard
     *
     * @return void
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);

        // ...
    }

    /**
     * Register the application menu.
     *
     * @return Menu[]
     */
    public function menu(): array
    {
        return [


            Menu::make(__('Users'))

                ->icon('bs.people')

                ->route('platform.systems.users')

                ->permission('platform.systems.users')

                ->title(__('Access Controls')),


            Menu::make(__('Roles'))

                ->icon('bs.shield')

                ->route('platform.systems.roles')

                ->permission('platform.systems.roles')

                ->divider(),


            Menu::make(__('Server'))

                ->route('platform.servers')

                ->title(__('Servers'))

                ->badge(function () {

                    return \App\Models\Server::count();

                })
                ->divider(),

            Menu::make('Страны')
                ->icon('globe')
                ->route('platform.country.list'),

            Menu::make('Города')
                ->icon('map')
                ->route('platform.city.list')
                ->divider(),

            Menu::make('Тарифы')
                ->icon('wallet')
                ->route('platform.tariff.list')
        ];
    }

    /**
     * Register permissions for the application.
     *
     * @return ItemPermission[]
     */
    public function permissions(): array
    {
        return [
            ItemPermission::group(__('System'))
                ->addPermission('platform.systems.roles', __('Roles'))
                ->addPermission('platform.systems.users', __('Users')),
        ];
    }
}
