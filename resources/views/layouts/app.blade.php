
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @yield('head')
    <!-- Styles -->
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
    <link rel="stylesheet" href="{{ asset('/css/my-style.css') }}">
</head>
<body>
    <div id="main">
        <div id="body" class="g-theme-site-1" data-mode="published" data-site-theme="g-theme-site-1">
            <div id="body-fict" class="g-theme-block-1 ul-page-common-index">

                @yield('header')

                <div class="container">
                    <div class="">
                        @yield('content')
                    </div>
                </div>

                @yield('footer')
            </div>
        </div>

    </div>
</body>
</html>
