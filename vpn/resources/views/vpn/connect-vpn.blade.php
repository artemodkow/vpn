@extends('dashboard')

@section('content')
<div class="user-area__main">
    <section>
        <form method="GET" action="{{ route('connect-vpn') }}">
            <div >
                <div class="connect__step-title">
                    Выберите страну для подключения
                </div>
                <div class="connect__step-platforms">
                    <select name="country" required>
                        <option value="" disabled selected>Выберите страну</option>

                        @php
                        // Пример переменной с данными стран
                        $countries = [
                            ['code' => 'NL', 'name' => 'Нидерланды'],
                            ['code' => 'UK', 'name' => 'Великобритания'],
                            ['code' => 'DE', 'name' => 'Германия'],
                            ['code' => 'FR', 'name' => 'Франция'],
                            ['code' => 'US', 'name' => 'США'],
                        ];
                        @endphp

                        @foreach ($countries as $country)
                            <option value="{{ $country['code'] }}">

                                    <img src="{{ asset('/dist/img/flag.svg#' . $country['code']) }}" alt="{{ $country['name'] }}" style="width: 20px; height: 20px; vertical-align: middle; margin-right: 5px;">

                                {{ $country['name'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit">Подключиться</button>
        </form>

        @if (request()->has('country'))
            <div class="connection-status">
                Вы подключены к: <strong>{{ request('country') }}</strong>
            </div>
        @endif
    </section>
</div>
@endsection
