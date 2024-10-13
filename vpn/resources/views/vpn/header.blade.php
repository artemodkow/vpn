<div class="user-area__right-col">
        <div class="user-area__header-row">
        <a class="user-area__burger-menu-opener" href="#">
            <svg class="icon menu">
                <use xlink:href="/dist/img/sprite.svg#menu"></use>
            </svg>
        </a>
        <span class="user-area__header-section-title"> 
                @if(Request::path() === 'connect-vpn')
                    Подключить VPN
                @elseif (Request::path() === 'active-configurations')
                    Активные конфигурации
                @elseif (Request::path() === 'subscription')
                    Подписка
                @elseif (Request::path() === 'referal')
                    Реферальная программа
                @elseif (Request::path() === 'settings')
                    Настройки
                @elseif (Request::path() === 'support')
                    Поддержка
                @endif
           </span>
        <span class="user-area__profile"><!---->
            <svg class="icon user">
                <use xlink:href="/dist/img/sprite.svg#user"></use>
            </svg>
            <a href="#"> {{ Auth::user()->name }}
                <svg class="icon next">
                    <use xlink:href="/dist/img/sprite.svg#next">
                    </use>
                </svg>
            </a>
            <ul class="header__navigation-submenu user-area__user-menu">
                <li>
                    <a href="/settings">
                        <svg class="icon setting">
                            <use xlink:href="/dist/img/sprite.svg#setting"></use>
                        </svg> Настройки аккаунта</a>
                    </li><li>
                            <a href="/logout">
                                <svg class="icon logout">
                                    <use xlink:href="/dist/img/sprite.svg#logout">
                                    </use></svg> Выйти</a></li></ul><a href="#">
                                        <svg class="icon bell">
                                            <use xlink="" href="/dist/img/sprite.svg#bell">
                                            </use>
                                        </svg></a><div class="header__navigation-submenu user-area__notifications"></div>
                                    </span>
        </div>
