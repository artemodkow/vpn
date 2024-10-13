@include('vpn.header')
<main class="user-area" id="app">
    @include('vpn.sidebar')
    <div class="user-area__right-col">
        @yield('content')
    </div>
</main>
@include('vpn.footer')
