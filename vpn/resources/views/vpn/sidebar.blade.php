<div class="user-area__left-col">
    <div @touchstart="touchStartMethod" @touchEndMethod="touchEndMethod" class="user-area__menu-container" :class="[userNavMenuOpened ? 'user-area__menu-container--opened' : '']">
        <div class="user-area__menu-logo">
            <a href="/"><svg class="icon brand">
                <use xlink:href="{{ asset('dist/img/sprite.svg#brand') }}"></use>
            </svg></a>
            <span class="user-area__profile select-language" :class="[languageListOpened ? 'header__navigation-open--opened' : '']">
                <a href="#" @click.prevent="toggleLanguageSelect">RU<svg class="icon next">
                    <use xlink:href="{{ asset('dist/img/sprite.svg#next') }}"></use>
                </svg></a>
                <ul class="header__navigation-submenu">
                    <li><a href="?lang=ru">Русский</a></li>
                    <li><a href="?lang=en">English</a></li>
                </ul>
            </span>
        </div>
        <div class="user-area__menu-nav">
            <ul>
                <li><a href="{{ url('/connect-vpn') }}"><svg class="icon internet-security">
                    <use xlink:href="{{ asset('/dist/img/sprite.svg#internet-security') }}"></use>
                </svg> Подключить VPN</a></li>
                <li class="current"><a href="{{ url('/active-configurations') }}"><svg class="icon active">
                    <use xlink:href="{{ asset('/dist/img/sprite.svg#active') }}"></use>
                </svg> Активные конфигурации</a></li>
                <li><a href="{{ url('/subscription') }}"><svg class="icon rocket">
                    <use xlink:href="{{ asset('/dist/img/sprite.svg#rocket') }}"></use>
                </svg> Подписка</a></li>
                <li><a href="{{ url('/referal') }}"><svg class="icon link">
                    <use xlink:href="{{ asset('/dist/img/sprite.svg#link') }}"></use>
                </svg> Реферальная программа</a></li>
                <li><a href="{{ url('/settings') }}"><svg class="icon setting">
                    <use xlink:href="{{ asset('/dist/img/sprite.svg#setting') }}"></use>
                </svg> Настройки аккаунта</a></li>
                <li><a href="{{ url('/support') }}"><svg class="icon ask">
                    <use xlink:href="{{ asset('/dist/img/sprite.svg#ask') }}"></use>
                </svg> Поддержка</a></li>
                <li><a href="/" class="go-back-link main-link"><svg class="icon arrow">
                    <use xlink:href="{{ asset('dist/img/sprite.svg#arrow') }}"></use>
                </svg> Вернуться на сайт</a></li>
            </ul>
        </div>
    </div>
</div>
