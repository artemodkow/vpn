@extends('dashboard')

@section('content')
<div class="user-area__main">
    <section>
        <div class="connect__step-title">
            Доступные VPN сервера
        </div>
        <div class="connect__step-servers" style="display: flex; flex-wrap: wrap; gap: 20px;">
            @php
                $countries = [
                    ['code' => 'BY', 'name' => 'Беларусь', 'city' => 'Минск', 'speed' => '42 Mbs', 'traffic' => '52.34%'],
                    ['code' => 'DE', 'name' => 'Германия', 'city' => 'Берлин', 'speed' => '47 Mbs', 'traffic' => '40.12%'],
                    ['code' => 'FR', 'name' => 'Франция', 'city' => 'Париж', 'speed' => '55 Mbs', 'traffic' => '48.56%'],
                    ['code' => 'NL', 'name' => 'Нидерланды', 'city' => 'Амстердам', 'speed' => '50 Mbs', 'traffic' => '45.23%'],
                    ['code' => 'US', 'name' => 'США', 'city' => 'Нью-Йорк', 'speed' => '60 Mbs', 'traffic' => '50.78%'],
                ];
            @endphp

            @foreach ($countries as $country)
                <a href="#" class="connect__step-server-item" style="flex: 0 0 48%; box-sizing: border-box; margin-bottom: 16px; text-decoration: none;">
                    <div class="connect__step-select" style="padding: 16px; border: 1px solid #ccc; border-radius: 10px; display: flex; align-items: center;">
                        <span style="flex-grow: 1;">
                            <svg class="icon flag">
                                <use xlink:href="{{ asset('/dist/img/flags.svg#' . $country['code']) }}"></use>
                            </svg>
                            {{ $country['name'] }}, {{ $country['city'] }}
                        </span>
                        <input id="server-{{ $country['code'] }}" type="radio" name="server" value="{{ $country['code'] }}" style="display: none;">
                    </div>
                </a>
            @endforeach
        </div>
    </section>
</div>
@endsection
