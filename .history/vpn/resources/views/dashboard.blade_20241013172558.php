<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex">
        <!-- aside -->
        <aside class="w-1/4 bg-white p-4 shadow-lg">
            <ul class="space-y-4">
                <li><a href="javascript:void(0)" onclick="showSection('connect-vpn')" class="block p-2 rounded text-gray-600">Подключить VPN</a></li>
                <li><a href="javascript:void(0)" onclick="showSection('active-configurations')" class="block p-2 rounded text-gray-600">Активные конфигурации</a></li>
                <li><a href="javascript:void(0)" onclick="showSection('subscription')" class="block p-2 rounded text-gray-600">Подписка</a></li>
                <li><a href="javascript:void(0)" onclick="showSection('referal')" class="block p-2 rounded text-gray-600">Реферальная программа</a></li>
                <li><a href="javascript:void(0)" onclick="showSection('settings')" class="block p-2 rounded text-gray-600">Настройки аккаунта</a></li>
                <li><a href="javascript:void(0)" onclick="showSection('support')" class="block p-2 rounded text-gray-600">Поддержка</a></li>
            </ul>
        </aside>

        <!-- Основной контент -->
        <div class="w-3/4 p-6">
            <div id="connect-vpn" class="content-section">
                <h2 class="text-2xl font-bold mb-6">Подключить VPN</h2>
                <div id="app">
                    <connect-vpn></connect-vpn>
                </div>
            </div>

            <div id="active-configurations" class="content-section hidden">
                <h2 class="text-2xl font-bold mb-6">Активные конфигурации</h2>
                <p>Здесь будет информация об активных конфигурациях.</p>
            </div>

            <div id="subscription" class="content-section hidden">
                <h2 class="text-2xl font-bold mb-6">Подписка</h2>
                <p>Здесь будет информация о вашей подписке.</p>
            </div>

            <div id="referal" class="content-section hidden">
                <h2 class="text-2xl font-bold mb-6">Реферальная программа</h2>
                <p>Здесь будет информация о вашей подписке.</p>
            </div>

            <div id="settings" class="content-section hidden">
                <h2 class="text-2xl font-bold mb-6">Настройки аккаунта</h2>
                <p>Здесь будет информация о вашей подписке.</p>
            </div>

            <div id="support" class="content-section hidden">
                <h2 class="text-2xl font-bold mb-6">Поддержка</h2>
                <p>Здесь будет информация о вашей подписке.</p>
            </div>
        </div>
    </div>

    <script>
        function showSection(sectionId) {
            // Скрыть все секции
            const sections = document.querySelectorAll('.content-section');
            sections.forEach(section => {
                section.classList.add('hidden');
            });

            // Показать выбранную секцию
            const activeSection = document.getElementById(sectionId);
            if (activeSection) {
                activeSection.classList.remove('hidden');
            }
        }
    </script>
</x-app-layout>
