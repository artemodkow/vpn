<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="/dist/img/Logo.svg" type="image/x-icon">
  <title>NetMimic</title>
  <style>
    /* npx tailwindcss -i ./src/input.css -o ./dist/output.css --watch */

    @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
  </style>

  <link href="/dist/main.css" rel="stylesheet">
</head>

<body class="vsc-initialized">
  <header>
    <div class="center-container">
      <div class="row">
        <div class="header__brand">
            <svg class="icon brand">
              <use xlink:href="/dist/img/Logo.svg"></use>
            </svg>
        </div>
        <div class="header__desktop">
          <div class="header__navigation">
            <ul>
              <li class="header__navigation-open">
                <a href="#">Скачать Proxy сервер  <svg class="icon next">
                    <use xlink:href="/dist/img/sprite.svg#next"></use>
                  </svg></a>
                <ul class="header__navigation-submenu">
                  <li>
                    <a href="/ru/free-iphone">
                      <svg class="icon apple">
                        <use xlink:href="/dist/img/sprite.svg#apple"></use>
                      </svg> Proxy сервер для IPhone</a>
                  </li>
                  <li>
                    <a href="/ru/free-android">
                      <svg class="icon android">
                        <use xlink:href="/dist/img/sprite.svg#android"></use>
                      </svg> Proxy сервер для Android</a>
                  </li>
                  <li>
                    <a href="/ru/free-macos">
                      <svg class="icon macos">
                        <use xlink:href="/dist/img/sprite.svg#macos"></use>
                      </svg> Proxy сервер для MacOS</a>
                  </li>
                  <li>
                    <a href="/ru/free-windows">
                      <svg class="icon windows">
                        <use xlink:href="/dist/img/sprite.svg#win"></use>
                      </svg> Proxy сервер для Windows</a>
                  </li>
                  <li>
                    <a href="/ru/free-google-chrome">
                      <svg class="icon chrome">
                        <use xlink:href="/dist/img/sprite.svg#chrome"></use>
                      </svg> Proxy сервер для Chrome</a>
                  </li>
                </ul>
              </li>
              <li>
              </li>
              <li><a href="/ru/pricing">Тарифы</a></li>

              <li>

              </li>
              <li>
                <a href="/ru/support">Поддержка</a>
              </li>
            </ul>
          </div>
          <div class="header__user-area">
            @auth
            <div>
              <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" href="{{ route('register') }}" class="button header__user-area-button">
                  Logout</button>
              </form>
              @endauth
            </div>
            @guest
            <div>
              <a href="{{ route('login') }}" class="button header__user-area-button" style="margin-right:10px">Sign In</a>
            </div>
            <div>
              <a href="{{ route('register') }}" class="button header__user-area-button">Sign Up</a>
            </div>
            @endguest
          </div>
        </div>
        <div class="header__mobile">
          <a href="#">
            <svg class="icon menu mobile-menu-toggler">
              <use xlink:href="/dist/img/sprite.svg#menu"></use>
            </svg>
          </a>
          <div class="header__mobile-menu">
            <div class="header__mobile-menu-top">
              <a href="#">
                <svg class="icon brand">
                  <use xlink:href="/dist/img/sprite.svg#brand"></use>
                </svg>
              </a>
              <a href="#">
                <svg class="icon close mobile-menu-toggler">
                  <use xlink:href="/dist/img/sprite.svg#close"></use>
                </svg>
              </a>
            </div>
            <div class="header__mobile-menu-content">
              <ul>
                <li><a href="/lk">Личный кабинет</a></li>
                <li class="header__navigation-open header__navigation-open--opened">
                  <a href="#">Скачать Proxy сервер  <svg class="icon next">
                      <use xlink:href="/dist/img/sprite.svg#next"></use>
                    </svg></a>
                  <ul class="header__navigation-submenu">
                    <li>
                      <a href="/ru/free-iphone">
                        <svg class="icon apple">
                          <use xlink:href="/dist/img/sprite.svg#apple"></use>
                        </svg> Proxy сервер для IPhone</a>
                    </li>
                    <li>
                      <a href="/ru/free-android">
                        <svg class="icon android">
                          <use xlink:href="/dist/img/sprite.svg#android"></use>
                        </svg> Proxy сервер для Android</a>
                    </li>
                    <li>
                      <a href="/ru/free-macos">
                        <svg class="icon macos">
                          <use xlink:href="/dist/img/sprite.svg#macos"></use>
                        </svg> Proxy сервер для MacOS</a>
                    </li>
                    <li>
                      <a href="/ru/free-windows">
                        <svg class="icon windows">
                          <use xlink:href="/dist/img/sprite.svg#win"></use>
                        </svg> Proxy сервер для Windows</a>
                    </li>
                    <li>
                      <a href="/ru/free-google-chrome">
                        <svg class="icon chrome">
                          <use xlink:href="/dist/img/sprite.svg#chrome"></use>
                        </svg> Proxy сервер для Chrome</a>
                    </li>
                  </ul>
                </li>
                <li><a href="/ru/pricing">Тарифы</a></li>
                <li>

                </li>
                <li>
                  <a href="/ru/support">Поддержка</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main>

    <section class="main-promo">
      <div class="center-container">

        <div class="row main-promo__content">
          <div class="col col-left">
            <h1 class="main-promo__title">NetMimic VPN &amp; Proxy на ПК и телефон для России</h1>
            <div class="main-promo__title-sub">Скачайте NetMimic VPN &amp; Proxy для устройств на Windows, MacOS, iPhone, Android.
              <br>
              <br> Настройка VPN &amp; Proxy занимет не более 2 минут. Подключите  сервера с высокой скорость до 100 mb/s. Сервис 'Название vpn' использует OpenSoure приложения для подключения к VPN &amp; Proxy.</div>
            <div class="main-promo__title-actions">

              <a class="button black-button" href="/register" onclick="ym(92743388,'reachGoal','step_tg');">
                Начать</a>
            </div>

            <div class="main-promo__platforms">
              <div class="main-promo__platforms-icons">
                <svg class="icon apple">
                  <use xlink:href="/dist/img/sprite.svg#apple"></use>
                </svg>
                <svg class="icon macos">
                  <use xlink:href="/dist/img/sprite.svg#macos"></use>
                </svg>
                <svg class="icon android">
                  <use xlink:href="/dist/img/sprite.svg#android"></use>
                </svg>
                <svg class="icon win">
                  <use xlink:href="/dist/img/sprite.svg#win"></use>
                </svg>
                <svg class="icon chrome">
                  <use xlink:href="/dist/img/sprite.svg#chrome"></use>
                </svg>
              </div>
              <div class="main-promo__platforms-title">Данный сервис соблюдает требование РКН по блокированию доступа к запрещенным ресурсам.</div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="advantages">
      <div class="center-container">
        <div class="advantages__title">
          <h2>Почему 'NetMimic'?</h2></div>
        <div class="advantages__list">
          <div class="advantages__card">
            <div class="advantages__card-icon"><img src="/dist/img/card1.webp"></div>
            <div class="advantages__card-content">
              <div class="advantages__card-title">Подключение до 10 устройств</div>
              <div class="advantages__card-text">Доступно на платформах iOS, Mac, Android, Windows, Google Chrome</div>
            </div>
          </div>
          <div class="advantages__card">
            <div class="advantages__card-icon"><img src="/dist/img/card2.webp"></div>
            <div class="advantages__card-content">
              <div class="advantages__card-title">Высокая скорость 100 Mb/s без потерь</div>
              <div class="advantages__card-text">Самые надежные и быстрые сервера от облачных провайдеров Digital Ocean, OVH</div>
            </div>
          </div>
          <div class="advantages__card">
            <div class="advantages__card-icon"><img src="/dist/img/card3.webp"></div>
            <div class="advantages__card-content">
              <div class="advantages__card-title">Устойчивость к блокировкам</div>
              <div class="advantages__card-text">Использует современные протоколы: Vless, Shadowsocks, SSTP, OpenVPN (UDP/TCP), WireGuard</div>
            </div>
          </div>
          <div class="advantages__card">
            <div class="advantages__card-icon"><img src="/dist/img/card4.webp"></div>
            <div class="advantages__card-content">
              <div class="advantages__card-title">Шифрование военного уровня AES-256</div>
              <div class="advantages__card-text">Обеспечивает превосходную безопасность данных и признан правительством США</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="about">
      <div class="center-container">
        <div class="about__title">
          <h2>О сервисе</h2></div>
        <div class="about__list">
          <div class="about__list-card">
            <div class="about__card-image"><img src="/dist/img/who-we-are.webp"></div>
            <div class="about__card-title">Кто мы?</div>
            <div class="about__card-text">'NetMimic' - сообщество IT-специалистов, глубоко увлеченных и преданных своему делу профессионалов. Мы стремимся восполнить пробел в доступности и надежности Proxy сервер -сервисов обеспечивая прозрачность и стабильность их использования.</div>
          </div>
          <div class="about__list-card">
            <div class="about__card-image"><img src="/dist/img/our-mission.webp"></div>
            <div class="about__card-title">Наша миссия:</div>
            <div class="about__card-text">Создать VPN сервер -сервис, который будет отличаться поддержкой всех современных протоколов и возможностью подключения в один клик. Мы нацелены на обеспечение безопасности и конфиденциальности данных наших пользователей.</div>
          </div>
          <div class="about__list-card">
            <div class="about__card-image"><img src="/dist/img/telegram-bot.webp"></div>
            <div class="about__card-title">Почему мы?</div>
            <div class="about__card-text">Мы опирались на открытые и проверенные временем opensource-решения, которые уже зарекомендовали себя. Благодаря устойчивости наших серверов к блокировкам и высокому уровню безопасности, мы обеспечиваем непрерывную работу и быструю связь с пользователями.</div>
          </div>
        </div>
      </div>
    </section>

    <section class="faq">
      <div class="center-container">
        <div class="faq__title">
          <h2>Часто задаваемые вопросы</h2></div>
        <div class="faq__questions-list">
          <div class="faq__questions-list-col">

            <div class="faq__questions-list-item faq__questions-list-item--opened" itemscope="" itemtype="https://schema.org/Question">
              <div class="faq__questions-list-item-title">
                <svg class="icon question">
                  <use xlink:href="/dist/img/sprite.svg#question"></use>
                </svg>
                <span itemprop="name">Что такое VPN?</span>
                <a href="#" @click.prevent="toggleQuestion($event)">
                  <svg class="icon next">
                    <use xlink:href="/dist/img/sprite.svg#next"></use>
                  </svg>
                </a>
              </div>
              <div class="faq__questions-list-item-text" itemscope="" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  VPN - это технологическое решение, которое позволяет создать безопасное и приватное соединение между вашим устройством и Интернетом. Оно обеспечивает защиту вашей онлайн-активности от неавторизованного доступа и наблюдения.
                  <p>Основные применения VPN:
                  </p>
                  <ul>
                    <li>Защита конфиденциальности данных пользователя в сети;</li>
                    <li>Обход географических и цензурных ограничений, применяемых в некоторых регионах;</li>
                    <li>Доступ к контенту, который обычно недоступен в вашем регионе.</li>
                  </ul>
                  <p></p>
                </div>
              </div>
            </div>

            <div class="faq__questions-list-item faq__questions-list-item--opened" itemscope="" itemtype="https://schema.org/Question">
              <div class="faq__questions-list-item-title">
                <svg class="icon question">
                  <use xlink:href="/dist/img/sprite.svg#question"></use>
                </svg>
                <span itemprop="name">Что делать, если VPN не работает?</span>
                <a href="#" @click.prevent="toggleQuestion($event)">
                  <svg class="icon next">
                    <use xlink:href="/dist/img/sprite.svg#next"></use>
                  </svg>
                </a>
              </div>
              <div class="faq__questions-list-item-text" itemscope="" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <ul>
                    <li>Включить или выключить режим полета на вашем устройстве;</li>
                    <li>Сменить сервер или протокол VPN;</li>
                    <li>Попытаться подключиться к другой сети, если существует блокировка от вашего провайдера;</li>
                    <li>Протестировать VPN на другом устройстве;</li>
                    <li>Убедиться, что у вас активно оплаченное интернет-соединение;</li>
                    <li>Проверить, не подключены ли вы одновременно к другим VPN-сервисам.</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="faq__questions-list-item faq__questions-list-item--opened" itemscope="" itemtype="https://schema.org/Question">
              <div class="faq__questions-list-item-title">
                <svg class="icon question">
                  <use xlink:href="/dist/img/sprite.svg#question"></use>
                </svg>
                <span itemprop="name">Можно ли доверять VPN при использовании банковских приложений?</span>
                <a href="#" @click.prevent="toggleQuestion($event)">
                  <svg class="icon next">
                    <use xlink:href="/dist/img/sprite.svg#next"></use>
                  </svg>
                </a>
              </div>
              <div class="faq__questions-list-item-text" itemscope="" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  Использование нашего надежного и проверенного VPN-сервиса значительно снижает риски утечки финансовых данных при работе с банковскими приложениями. Однако полностью исключить риск невозможно, особенно при использовании менее известных VPN сервер-провайдеров.
                </div>
              </div>
            </div>

            <div class="faq__questions-list-item faq__questions-list-item--opened" itemscope="" itemtype="https://schema.org/Question">
              <div class="faq__questions-list-item-title">
                <svg class="icon question">
                  <use xlink:href="/dist/img/sprite.svg#question"></use>
                </svg>
                <span itemprop="name">Как установить VPN сервер?</span>
                <a href="#" @click.prevent="toggleQuestion($event)">
                  <svg class="icon next">
                    <use xlink:href="/dist/img/sprite.svg#next"></use>
                  </svg>
                </a>
              </div>
              <div class="faq__questions-list-item-text" itemscope="" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <ol>
                    <li>Стороннее программное обеспечение (приложение):
                      <ul>
                        <li>Скачайте клиент VPN только с официального сайта, чтобы избежать вредоносных программ.</li>
                        <li>Установка обычно проста: следуйте инструкциям и обратите внимание на дополнительные опции при установке, чтобы избежать нежелательного программного обеспечения.</li>
                      </ul>
                    </li>
                    <li>Расширения для браузера:
                      <ul>
                        <li>Расширения для VPN можно найти в интернет-магазине вашего браузера или на официальном сайте VPN-сервиса.</li>
                        <li>Однако такой метод шифрует только трафик, проходящий через браузер, оставляя другие приложения незащищенными.</li>
                      </ul>
                    </li>
                    <li>Стандартные средства Windows:
                      <ul>
                        <li>Windows предлагает встроенные инструменты для подключения к сетям, но они больше подходят для корпоративных, а не личных нужд.</li>
                        <li>Большинство VPN-сервисов не совместимы со стандартными средствами Windows и предлагают свои приложения, которые предоставляют расширенные возможности управления подпиской и выбора серверов.</li>
                      </ul>
                    </li>
                  </ol>
                </div>
              </div>
            </div>

          </div>

          <div class="faq__questions-list-col">

            <div class="faq__questions-list-item faq__questions-list-item--opened" itemscope="" itemtype="https://schema.org/Question">
              <div class="faq__questions-list-item-title">
                <svg class="icon question">
                  <use xlink:href="/dist/img/sprite.svg#question"></use>
                </svg>
                <span itemprop="name">Какие бывают протоколы шифрования VPN?</span>
                <a href="#" @click.prevent="toggleQuestion($event)">
                  <svg class="icon next">
                    <use xlink:href="/dist/img/sprite.svg#next"></use>
                  </svg>
                </a>
              </div>
              <div class="faq__questions-list-item-text" itemscope="" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  PPTP (Point-to-Point Tunneling Protocol):
                  <ul>
                    <li>Один из самых старых протоколов, предлагает базовую безопасность.</li>
                    <li>Прост в настройке, но считается устаревшим и менее безопасным.</li>
                  </ul>
                  L2TP/IPsec (Layer 2 Tunneling Protocol with IPsec)
                  <ul>
                    <li>Комбинация двух протоколов: L2TP для создания туннеля и IPsec для шифрования.</li>
                    <li>Более безопасный, чем PPTP, но может быть медленнее из-за двойного шифрования.</li>
                  </ul>
                  SSTP (Secure Socket Tunneling Protocol):
                  <ul>
                    <li>Использует SSL/TLS для шифрования, что делает его более безопасным.</li>
                    <li>Хорошо интегрируется с Windows, но менее совместим с другими операционными системами.</li>
                  </ul>
                  IKEv2/IPsec (Internet Key Exchange version 2 with IPsec):
                  <ul>
                    <li>Очень надежный и безопасный, поддерживает автоматическое переподключение при потере сигнала.</li>
                    <li>Хорошо подходит для мобильных устройств, поддерживает различные алгоритмы шифрования.</li>
                  </ul>
                  OpenVPN:
                  <ul>
                    <li>Один из самых популярных и рекомендуемых протоколов.</li>
                    <li>Открытый исходный код, высокая степень безопасности и настраиваемость.</li>
                    <li>Может работать через любой порт, что помогает обходить блокировки.</li>
                  </ul>
                  WireGuard:
                  <ul>
                    <li>Новейший протокол, предлагает высокую производительность и безопасность.</li>
                    <li>Легкий и быстрый, использует современные методы шифрования.</li>
                    <li>Подходит для использования в мобильных и десктопных приложениях.</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="faq__questions-list-item faq__questions-list-item--opened" itemscope="" itemtype="https://schema.org/Question">
              <div class="faq__questions-list-item-title">
                <svg class="icon question">
                  <use xlink:href="/dist/img/sprite.svg#question"></use>
                </svg>
                <span itemprop="name">VPN обеспечивает защиту от различных угроз?</span>
                <a href="#" @click.prevent="toggleQuestion($event)">
                  <svg class="icon next">
                    <use xlink:href="/dist/img/sprite.svg#next"></use>
                  </svg>
                </a>
              </div>
              <div class="faq__questions-list-item-text" itemscope="" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <ul>
                    <li>Интернет-провайдеры контролируют ваш трафик и могут перенаправлять вас на различные сайты, включая рекламные или заблокированные страницы.</li>
                    <li>VPN скрывает вашу онлайн-активность от провайдера, предотвращая перенаправление и нежелательное слежение.</li>
                    <li>Другие пользователи в общедоступной сети, например в кафе или библиотеке, могут пытаться перехватить ваш трафик.</li>
                    <li>VPN шифрует ваше соединение, защищая от подобных попыток перехвата и направления на мошеннические сайты.</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="faq__questions-list-item faq__questions-list-item--opened" itemscope="" itemtype="https://schema.org/Question">
              <div class="faq__questions-list-item-title">
                <svg class="icon question">
                  <use xlink:href="/dist/img/sprite.svg#question"></use>
                </svg>
                <span itemprop="name">VPN приводит к снижению скорости интернета?</span>
                <a href="#" @click.prevent="toggleQuestion($event)">
                  <svg class="icon next">
                    <use xlink:href="/dist/img/sprite.svg#next"></use>
                  </svg>
                </a>
              </div>
              <div class="faq__questions-list-item-text" itemscope="" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <ul>
                    <li>VPN направляет ваш трафик через свои сервера, что может увеличить расстояние, которое проходят данные и добавить задержки.</li>
                    <li>Шифрование требует дополнительных ресурсов. Если VPN использует аппаратное шифрование, оно обычно быстрее, чем программное.</li>
                    <li>Если сервис активно следит за нагрузкой на своих серверах и своевременно увеличивает их количество, это может помочь минимизировать потери скорости.</li>
                  </ul>
                  Качественный VPN-сервис с минимальной загрузкой серверов и эффективным шифрованием может снизить скорость интернета незначительно и пользователь вряд ли почувствует разницу в повседневном использовании.
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

  </main>

  @include('vpn.footer')

  <div class="modal-window" :class="[isPopupOpen ? 'modal-window--opened' : '']">
    <div class="modal-window__container">
      <a href="#" class="modal-close" style="display: none;">
        <svg class="icon close">
          <use xlink:href="/dist/img/sprite.svg#close2"></use>
        </svg>
      </a>

    </div>
  </div>

</body>

</html>
