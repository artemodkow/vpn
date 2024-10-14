@extends('dashboard')

@section('content')
<div class="user-area__main">
    <section>
        <form method="GET" action="{{ route('connect-vpn') }}">
            <div>
                <div class="connect__step-title">
                    Выберите страну для подключения
                </div>
                <div class="connect__step-platforms">
                    <select name="country" required>
                        <option value="" disabled selected>Выберите страну</option>

                        @php
                        $countries = [
                            ['code' => 'NL', 'name' => 'Нидерланды', 'city' => 'Амстердам', 'speed' => '50 Mbs', 'traffic' => '45.23%'],
                            ['code' => 'UK', 'name' => 'Великобритания', 'city' => 'Лондон', 'speed' => '42 Mbs', 'traffic' => '52.34%'],
                            ['code' => 'DE', 'name' => 'Германия', 'city' => 'Берлин', 'speed' => '47 Mbs', 'traffic' => '40.12%'],
                            ['code' => 'FR', 'name' => 'Франция', 'city' => 'Париж', 'speed' => '55 Mbs', 'traffic' => '48.56%'],
                            ['code' => 'US', 'name' => 'США', 'city' => 'Нью-Йорк', 'speed' => '60 Mbs', 'traffic' => '50.78%'],
                        ];
                        @endphp

                        @foreach ($countries as $country)
                            <option value="{{ $country['code'] }}">
                                {{ $country['name'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit">Подключиться</button>
        </form>

        @if (request()->has('country'))
            @php
                $selectedCountry = collect($countries)->firstWhere('code', request('country'));
            @endphp
            @if ($selectedCountry)
                <div class="connect__step-server-config-download">
                    <div class="connect__step-server-config-download-title connect__step-server-item">
                        <span>
                            <svg class="icon flag">
                                <use xlink:href="{{ asset('/dist/img/flags.svg#' . $selectedCountry['code']) }}"></use>
                            </svg>
                            {{ $selectedCountry['name'] }}, {{ $selectedCountry['city'] }}
                        </span>
                        <span class="speed">
                            <svg class="icon signal">
                                <use xlink:href="{{ asset('/dist/img/sprite.svg#signal2') }}"></use>
                            </svg>
                            {{ $selectedCountry['speed'] }}
                            <svg class="icon-traffic">
                                <use xlink:href="{{ asset('/dist/img/sprite.svg#trafic') }}"></use>
                            </svg>
                            {{ $selectedCountry['traffic'] }}
                        </span>
                    </div>
                    <div class="connect__step-server-config-download-content">
                        <div class="connect__step-server-config-download-content-file">
                            <div class="connect__step-server-config-download-content-text">
                                Скачайте конфигурационный файл
                            </div>
                            <div class="input-wrap input-wrap--disabled">
                                <svg class="icon file">
                                    <use xlink:href="{{ asset('/dist/img/sprite.svg#file') }}"></use>
                                </svg>
                                <span class="file-name">{{ $selectedCountry['name'] }}-{{ $selectedCountry['city'] }}.ovpn (8.0Kb)</span>
                                <a href="{{ asset('configurations/' . $selectedCountry['code'] . '.ovpn') }}" target="_blank" class="config-download-link">
                                    Скачать
                                    <svg class="icon download">
                                        <use xlink:href="{{ asset('/dist/img/sprite.svg#download') }}"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endif
    </section>
</div>
@endsection
