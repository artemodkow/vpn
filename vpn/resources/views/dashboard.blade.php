@include('vpn.head')
<main class="user-area" id="app">

    @include('vpn.sidebar')
    @include('vpn.header')

    @yield('content')
</main>
@include('vpn.footer')
