<?php

    namespace App\Orchid\Screens\Server;

    use App\Models\Server;
    use App\Orchid\Layouts\Server\ServerListLayout;
    use App\Services\ServerService;
    use Orchid\Screen\Actions\Link;
    use Orchid\Screen\Screen;
    use Orchid\Support\Facades\Toast;

    class ServerListScreen extends Screen
    {
        public function query(): array
        {
            return [
                'servers' => Server::filters()
                    ->paginate(10),
            ];
        }

        public function commandBar(): array
        {
            return [
                Link::make('Добавить сервер')
                    ->icon('plus')
                    ->route('platform.servers.create')
            ];
        }

        public function layout(): array
        {
            return [
                ServerListLayout::class,
            ];
        }

        public function deleteServer($id, ServerService $serverService){
            try {
                $serverService->deleteServerWithZabbixHost($id);
            }
            catch (\Exception $exception){
                Toast::error($exception->getMessage());
                return redirect()->route('platform.servers.index');
            }
        }
    }
