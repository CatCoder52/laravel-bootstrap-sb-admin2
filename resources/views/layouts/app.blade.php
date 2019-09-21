<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/Chart.min.js') }}" defer></script>
    <script src="{{ asset('js/demo/chart-area-demo.js') }}" defer></script>
    <script src="{{ asset('js/demo/chart-bar-demo.js') }}" defer></script>
    <script src="{{ asset('js/demo/chart-pie-demo.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body class="{{request()->routeIs('login') || request()->routeIs('register') || request()->routeIs('password*') ? 'bg-gradient-primary': ''}}">    
    <main id="app">
        <div id="page-top">
            <div id="wrapper">
            @auth
                @include('layouts.sidebar')
            @endauth
                <div id="content-wrapper" class="d-flex flex-column">
                    <div id="content">
                    @auth
                        @include('layouts.navbar')
                    @endauth
                        @yield('content')        
                        @include('layouts.footer')                
                    </div>
                </div>
            </div>
        </div>    
    </main>
    @yield('js')        
</body>
</html>
