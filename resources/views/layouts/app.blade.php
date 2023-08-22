<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Шаблон для сайта &quot;Дизайн ногтей&quot; из категории &quot;Нэйл-мастер&quot;. Идеален для: студии дизайна, маникюрного салона, визитки и&nbsp;портфолио нэйл-мастера.">
    <meta name="author" content="U-Light">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/base.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/neowizard.css')}}">
    <link rel="stylesheet" href="{{asset('css/seowizard.css')}}">
@yield('head')
<!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/libs/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/libs/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/libs/fontawesome-brand.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/my-style.css') }}">   <!--- Подключил стили для себя   --->
    <link rel="stylesheet" href="{{ asset('css/main-desktop.css') }}" media="screen and (min-width : 992px)">
    <link rel="stylesheet" href="{{ asset('css/main-tablet.css') }}" media="screen and (min-width: 768px) and (max-width: 991px)">
    <link rel="stylesheet" href="{{ asset('css/main-phone.css') }}" media="screen and (max-width : 768px)">
    <script type="text/javascript" src="{{ asset('js/libs/jquery-2.1.0.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--<script type="text/javascript" charset="utf-8" src="{{ asset('js/libs/owl.carousel.min.js') }}"></script>-->
    <script defer type="text/javascript" charset="utf-8" src="{{ asset('js/main.js') }}"></script>
</head>
<body>
<div id="main">
    <div id="body" class="g-theme-site-1" data-mode="published" data-site-theme="g-theme-site-1">
        <div id="body-fict" class="g-theme-block-1 ul-page-common-index">
            @yield('login')
            @yield('header')

            @yield('content')
        </div>
        @yield('footer')
    </div>
</div>

</body>
</html>
