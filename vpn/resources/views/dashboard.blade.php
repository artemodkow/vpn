@include('vpn.head')
<main class="user-area" id="app">
    
    @include('vpn.sidebar')
    @include('vpn.header')

        @yield('content')
    </div>
</main>
@include('vpn.footer')
