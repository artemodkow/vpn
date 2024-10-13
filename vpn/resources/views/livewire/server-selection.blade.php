
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6">
        @foreach($servers as $server)
            <div class="bg-white rounded-lg p-6 shadow-lg flex justify-between items-center cursor-pointer transform transition hover:scale-105" wire:click="selectServer({{ $server->id }})">
                <div class="text-center flex flex-col items-center justify-center">
                    <span class="text-xl text-gray-800 font-bold">{{ $server->country->name }}</span>
                    <span class="text-lg text-gray-500">{{ $server->city->name }}</span>
                </div>
            </div>
        @endforeach
    </div>

