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
                        @php
                            // Заглушки для примера
                            $activeConfigurations = collect([
                                (object)[
                                    'country_code' => 'US',
                                    'country' => 'США',
                                    'city' => 'Нью-Йорк',
                                    'protocol' => 'WireGuard',
                                    'ip_address' => '192.168.1.1',
                                    'created_at' => now()->subHours(2),
                                    'id' => 1
                                ],
                                (object)[
                                    'country_code' => 'DE',
                                    'country' => 'Германия',
                                    'city' => 'Берлин',
                                    'protocol' => 'WireGuard',
                                    'ip_address' => '192.168.1.2',
                                    'created_at' => now()->subHours(1),
                                    'id' => 2
                                ]
                            ]);

                            $totalServers = 5; // Пример общего количества серверов
                        @endphp

                        @if (isset($activeConfigurations) && $activeConfigurations->isNotEmpty())
                            @foreach ($activeConfigurations as $configuration)
                                <div class="devices__list-item">
                                    <div class="devices__list-item-col">
                                        <svg class="icon flag">
                                            <use xlink:href="dist/img/flags.svg#{{ $configuration->country_code }}"></use>
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
                                                <use xlink:href="dist/img/sprite.svg#calendar"></use>
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
                                    <div class="connect__step-server-config-download-content" style="width: 100%; margin-top: 10px; display: flex;
                                                                                                                                        justify-content: space-between;">
                                        <div class="connect__step-server-config-download-content-file">
                                            <div class="input-wrap input-wrap--disabled">
                                                <button class="qr-button" onclick="openModal('{{ $configuration->country_code }}')">Показать QR-код</button>
                                                <a href="{{ asset('configurations/' . $configuration->country_code . '.ovpn') }}" target="_blank" class="config-download-link">
                                                    Скачать
                                                    <svg class="icon download">
                                                        <use xlink:href="{{ asset('/dist/img/sprite.svg#download') }}"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div id="qrModal" class="modal" style="display: none;">
                                <div class="modal-content">
                                    <span class="close" onclick="closeModal()">&times;</span>
                                    <h2>QR-код для подключения</h2>
                                    <img id="qrCode" src="" alt="QR-код" />
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
    function openModal(countryCode) {
        // Генерация QR-кода (здесь вы можете использовать ваш метод генерации QR-кода)
        const qrImage = '/path/to/qr/generator?code=' + countryCode; // замените на ваш путь
        document.getElementById('qrCode').src = qrImage;

        document.getElementById('qrModal').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('qrModal').style.display = 'none';
    }

    // Закрытие модального окна при нажатии вне его
    window.onclick = function(event) {
        const modal = document.getElementById('qrModal');
        if (event.target === modal) {
            closeModal();
        }
    }
</script>

<style>
    .modal {
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 35%;
        height:45%;
        text-align: center;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>
@endsection
