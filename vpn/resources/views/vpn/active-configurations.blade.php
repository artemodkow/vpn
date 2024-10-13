@extends('dashboard')

@section('content')
<div class="user-area__right-col">

    <div class="user-area__header-row user-area__header-row--mobile">
        <span class="user-area__header-section-title">Активные конфигурации</span>
    </div>

    <div class="user-area__main">
        <section class="devices">
            <div class="devices__active-count">
                Вы используете
                {{ isset($activeConfigurations) ? $activeConfigurations->count() : 0 }}
                из
                {{ isset($totalServers) ? $totalServers : 0 }}
                доступных серверов.
            </div>
            <div class="devices__wrapper">
                <div class="devices__left-col">
                    <div class="devices__list">
                        @if (isset($activeConfigurations) && $activeConfigurations->isNotEmpty())
                            @foreach ($activeConfigurations as $configuration)
                                <div class="devices__list-item">
                                    <div class="devices__list-item-col">
                                        <svg class="icon flag">
                                            <use xlink:href="/img2/flags.svg#{{ $configuration->country_code }}"></use>
                                        </svg>
                                    </div>
                                    <div class="devices__list-item-col">
                                        <div class="devices__list-item-country">
                                            {{ $configuration->country }}, {{ $configuration->city }}
                                            <span class="protocol">({{ $configuration->protocol }})</span>
                                        </div>
                                        <div class="devices__list-item-ip">IP: {{ $configuration->ip_address }}</div>
                                    </div>
                                    <div class="devices__list-item-col">
                                        <div class="devices__list-item-created">
                                            <svg class="icon calendar">
                                                <use xlink:href="/img2/sprite.svg#calendar"></use>
                                            </svg> Добавлен:
                                        </div>
                                        <div class="devices__list-item-created-date">{{ $configuration->created_at->format('d.m.Y H:i') }}</div>
                                    </div>
                                    <div class="devices__list-item-col">
                                        <a href="#" onclick="deleteConfig({{ $configuration->id }}, event)">
                                            <svg class="icon delete">
                                                <use xlink:href="/img2/sprite.svg#delete"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="devices__list-item">Нет активных конфигураций.</div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<script>
    function toggleUserAreaMenu(event) {
        event.preventDefault();
        // Логика для открытия/закрытия меню пользователя
    }

    function toggleUserMenu(event) {
        event.preventDefault();
        // Логика для открытия/закрытия меню пользователя
    }

    function toggleNotifications(event) {
        event.preventDefault();
        // Логика для открытия/закрытия уведомлений
    }

    function deleteConfig(configId, event) {
        event.preventDefault();
        // Логика для удаления конфигурации
        console.log('Delete config ID:', configId);
        // Здесь можно сделать AJAX-запрос для удаления
    }
</script>
@endsection
