<div class="user-area__left-col">
    <div @touchstart="touchStartMethod" @touchEndMethod="touchEndMethod" class="user-area__menu-container" :class="[userNavMenuOpened ? 'user-area__menu-container--opened' : '']">
        <div class="user-area__menu-logo">
            <a href="/"><svg class="icon brand">
                <use xlink:href="{{ asset('img2/sprite.svg#brand') }}"></use>
            </svg></a>
            <span class="user-area__profile select-language" :class="[languageListOpened ? 'header__navigation-open--opened' : '']">
                <a href="#" @click.prevent="toggleLanguageSelect">RU<svg class="icon next">
                    <use xlink:href="{{ asset('img2/sprite.svg#next') }}"></use>
                </svg></a>
                <ul class="header__navigation-submenu">
                    <li><a href="?lang=ru">Русский</a></li>
                    <li><a href="?lang=en">English</a></li>
                </ul>
            </span>
        </div>
        <div class="user-area__menu-nav">
            <ul>
                <li><a href="{{ url('/lk/connect') }}"><svg class="icon internet-security">
                    <use xlink:href="{{ asset('img2/sprite.svg#internet-security') }}"></use>
                </svg> Подключить VPN</a></li>
                <li class="current"><a href="{{ url('/lk/configurations') }}"><svg class="icon active">
                    <use xlink:href="{{ asset('img2/sprite.svg#active') }}"></use>
                </svg> Активные конфигурации</a></li>
                <li><a href="{{ url('/lk/subscription') }}"><svg class="icon rocket">
                    <use xlink:href="{{ asset('img2/sprite.svg#rocket') }}"></use>
                </svg> Подписка</a></li>
                <li><a href="{{ url('/lk/gift') }}"><svg class="icon gift">
                    <use xlink:href="{{ asset('img2/sprite.svg#gift') }}"></use>
                </svg> Подарить подписку</a></li>
                <li><a href="{{ url('/lk/partner') }}"><svg class="icon link">
                    <use xlink:href="{{ asset('img2/sprite.svg#link') }}"></use>
                </svg> Реферальная программа</a></li>
                <li><a href="{{ url('/lk/settings') }}"><svg class="icon setting">
                    <use xlink:href="{{ asset('img2/sprite.svg#setting') }}"></use>
                </svg> Настройки аккаунта</a></li>
                <li><a href="{{ url('/lk/support') }}"><svg class="icon ask">
                    <use xlink:href="{{ asset('img2/sprite.svg#ask') }}"></use>
                </svg> Поддержка</a></li>
            </ul>
            <div class="user-area__menu-nav-bottom">
                <a href="/" class="go-back-link main-link"><svg class="icon arrow">
                    <use xlink:href="{{ asset('img2/sprite.svg#arrow') }}"></use>
                </svg> Вернуться на сайт</a>
            </div>
        </div>
    </div>
</div>
