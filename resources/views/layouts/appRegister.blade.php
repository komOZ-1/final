<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/libs/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/libs/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/libs/fontawesome-brand.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/my-style.css') }}">   <!--- Подключил стили для себя   --->
    <link rel="stylesheet" href="{{ asset('css/main-desktop.css') }}" media="screen and (min-width : 992px)">
    <link rel="stylesheet" href="{{ asset('css/main-tablet.css') }}" media="screen and (min-width: 768px) and (max-width: 991px)">
    <link rel="stylesheet" href="{{ asset('css/main-phone.css') }}" media="screen and (max-width : 768px)">
    <script type="text/javascript" src="{{ asset('js/libs/jquery-2.1.0.min.js') }}"></script>
    <script type="text/javascript" charset="utf-8" src="{{ asset('/js/libs/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" charset="utf-8" src="{{ asset('/js/main.js') }}"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/home') }}">
                {{ config('app.name', 'HOME') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>


        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

    @yield('footer')



</div>
</body>
</html>
