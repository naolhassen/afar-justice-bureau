<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.metadata.title') }}</title>
    <meta name="description" content="{{ __('messages.metadata.description') }}">

    <!--===== FAB ICON =======-->
    <link rel="shortcut icon" href="{{ asset('images/logo.jpg') }}" type="image/x-icon">

    <!--===== CSS LINK =======-->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <style>
        :root {
            --prosperity-purple: #9b59b6;
            --prosperity-purple-dark: #7d3c98;
            --prosperity-purple-light: #c19cd9;
        }

        html, body {
            direction: ltr !important;
            text-align: left !important;
            unicode-bidi: normal !important;
        }

        .vl-header-area,
        .vl-header-sticky.sticky,
        .vl-transparent-header {
            background: #fff !important;
            box-shadow: 0 2px 20px rgba(43, 19, 67, 0.08) !important;
        }

        .vl-logo a span {
            color: #9b59b6 !important;
        }

        .vl-main-menu ul li > a,
        .vl-main-menu ul li.has-dropdown > a {
            color: #9b59b6 !important;
            font-weight: 600;
            position: relative;
        }
        .vl-main-menu ul li > a:hover,
        .vl-main-menu ul li > a.active,
        .vl-main-menu ul li.active > a {
            color: #7d3c98 !important;
        }
        .vl-main-menu ul li > a.active::after,
        .vl-main-menu ul li.active > a::after {
            content: '';
            display: block;
            width: 6px;
            height: 6px;
            background: #9b59b6;
            border-radius: 50%;
            margin: 6px auto 0;
        }
        .vl-main-menu ul li .sub-menu li a {
            color: #2B1343 !important;
        }
        .vl-main-menu ul li .sub-menu li a:hover,
        .vl-main-menu ul li .sub-menu li a.active {
            color: #9b59b6 !important;
        }

        .header-lang-select {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 14px;
            border-radius: 30px;
            background: #fff;
            color: #9b59b6;
            font-size: 14px;
            font-weight: 600;
            border: 1px solid #9b59b6;
            transition: all 0.3s ease;
        }
        .header-lang-select:hover, .header-lang-select:focus, .header-lang-select.show {
            background: #9b59b6;
            border-color: #9b59b6;
            color: #fff;
        }
        .header-lang-select::after {
            border-top-color: currentColor;
        }

        .dropdown-menu.language-menu {
            background: #fff !important;
            border: 1px solid #9b59b6 !important;
            border-radius: 12px !important;
            padding: 8px !important;
            min-width: 180px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        .dropdown-menu.language-menu .dropdown-item {
            color: #2B1343 !important;
            border-radius: 8px;
            transition: all 0.2s ease;
        }
        .dropdown-menu.language-menu .dropdown-item:hover,
        .dropdown-menu.language-menu .dropdown-item:focus {
            background: rgba(155, 89, 182, 0.12) !important;
            color: #9b59b6 !important;
        }
        .dropdown-menu.language-menu .dropdown-item.active {
            background: #9b59b6 !important;
            color: #fff !important;
        }

        .text-danger, .text-danger:hover, .text-danger:focus, a.text-danger {
            color: #9b59b6 !important;
        }
        .bg-danger, .btn-danger, .btn-danger:hover, .btn-danger:focus, .btn-danger:active {
            background-color: #9b59b6 !important;
            border-color: #9b59b6 !important;
            color: #fff !important;
        }

        .vl-btn1, .vl-btn1:hover, .vl-btn1:focus {
            background: #9b59b6 !important;
            border-color: #9b59b6 !important;
            color: #fff !important;
        }
        .vl-btn1 i {
            color: #fff !important;
        }

        .bar.red, .progress .bar {
            background: #9b59b6 !important;
        }

        .party-logo-img {
            height: 44px;
            width: auto;
            border-radius: 8px;
            object-fit: contain;
        }
    </style>
</head>
<body class="homepage3-body">

    <!--===== PRELOADER STARTS =======-->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon">
                <img src="{{ asset('images/logo.jpg') }}" alt="Prosperity Party" style="width: 44px; height: 44px; border-radius: 50%; object-fit: cover;">
            </div>
        </div>
    </div>
    <!--===== PRELOADER ENDS =======-->

    <!--===== PROGRESS STARTS =======-->
    <div class="paginacontainer">
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
            </svg>
        </div>
    </div>
    <!--===== PROGRESS ENDS =======-->

    @include('components.header')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    <!--===== JS SCRIPT LINK =======-->
    <script src="{{ asset('assets/js/plugins/jquery-3-7-1.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/fontawesome.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/aos.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/counter.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/slick-slider.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper-slider.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
