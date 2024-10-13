<div class="user-area__left-col">
    <div @touchstart="touchStartMethod" @touchEndMethod="touchEndMethod" class="user-area__menu-container" :class="[userNavMenuOpened ? 'user-area__menu-container--opened' : '']">
        <div class="user-area__menu-logo">
            <a href="/"><svg class="icon brand">
                <use xlink:href="{{ asset('dist/img/Logo.svg') }}"></use>
            </svg></a>
            </span>
        </div>
        <div class="user-area__menu-nav">
            <ul>
                <li @if(Request::path() === '/connect-vpn')
                        class="current"
                    @endif>
                    <a  href="{{ url('/connect-vpn') }}"><svg class="icon internet-security">
                    <use xlink:href="{{ asset('/dist/img/sprite.svg#internet-security') }}"></use>
                </svg> Подключить VPN</a></li>
                <li @if(Request::path() === 'active-configurations')
                        class="current"
                    @endif>
                    <a href="{{ url('/active-configurations') }}"><svg class="icon active">
                    <use xlink:href="{{ asset('/dist/img/sprite.svg#active') }}"></use>
                </svg> Активные конфигурации</a></li>
                <li @if(Request::path() === 'subscription')
                        class="current"
                    @endif>
                    <a  href="{{ url('/subscription') }}"><svg class="icon rocket">
                    <use xlink:href="{{ asset('/dist/img/sprite.svg#rocket') }}"></use>
                </svg> Подписка</a></li>
                <li @if(Request::path() === 'referal')
                        class="current"
                    @endif>
                    <a  href="{{ url('/referal') }}"><svg class="icon link">
                    <use xlink:href="{{ asset('/dist/img/sprite.svg#link') }}"></use>
                </svg> Реферальная программа</a></li>
                <li @if(Request::path() === 'settings')
                        class="current"
                    @endif>
                    <a  href="{{ url('/settings') }}"><svg class="icon setting">
                    <use xlink:href="{{ asset('/dist/img/sprite.svg#setting') }}"></use>
                </svg> Настройки аккаунта</a></li>
                <li @if(Request::path() === 'support')
                        class="current"
                    @endif>
                    <a  href="{{ url('/support') }}"><svg class="icon ask">
                    <use xlink:href="{{ asset('/dist/img/sprite.svg#ask') }}"></use>
                </svg> Поддержка</a></li>
                <li><a href="/" class="go-back-link main-link"><svg class="icon arrow">
                    <use xlink:href="{{ asset('dist/img/sprite.svg#arrow') }}"></use>
                </svg> Вернуться на сайт</a></li>
            </ul>
        </div>
    </div>
</div>
