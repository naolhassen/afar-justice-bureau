<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <title>{{ __('messages.metadata.title') }}</title>
    <meta name="description" content="{{ __('messages.metadata.description') }}">

    <!-- Stylesheets -->
    <link href="{{ asset('counsel/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('counsel/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('counsel/css/responsive.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Bellefair&family=Open+Sans:wght@300;400;700;800&family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('logo.png') }}" type="image/png">
    <link rel="icon" href="{{ asset('logo.png') }}" type="image/png">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <style>
        /* Afar Justice Bureau color overrides */
        :root {
            --justice-primary: #9b59b6;
            --justice-primary-dark: #7d3c98;
            --justice-primary-light: #c19cd9;
            --justice-gold: #c8a951;
        }

        /* Override the template's gold/dark color scheme with Afar Justice purple */
        .theme-btn.btn-style-one .txt {
            background: var(--justice-primary);
        }
        .theme-btn.btn-style-one .txt:hover {
            background: var(--justice-primary-dark);
        }
        .sec-title h2::before,
        .sec-title h2::after {
            background: var(--justice-primary) !important;
        }
        .services-block .inner-box:hover {
            border-color: var(--justice-primary) !important;
        }
        .services-block .inner-box .content .icon {
            color: var(--justice-primary);
        }
        .practice-block .inner-box:hover {
            background: var(--justice-primary);
        }
        a:hover, a:focus {
            color: var(--justice-primary);
        }
        .main-header .navigation > li:hover > a,
        .main-header .navigation > li.current > a {
            color: var(--justice-primary) !important;
        }
        .main-footer {
            background: #1a0a2e;
        }
        .footer-bottom {
            background: #140822;
        }
        .theme-btn.btn-style-two .txt {
            color: var(--justice-primary);
            border-color: var(--justice-primary);
        }
        .theme-btn.btn-style-two .txt:hover {
            background: var(--justice-primary);
            color: #fff;
        }
        .counter-section .image-layer {
            background-color: var(--justice-primary-dark);
        }

        /* Language switcher styling */
        .lang-switcher {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-left: 15px;
        }
        .lang-switcher a {
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            color: #555;
            transition: all 0.3s;
        }
        .lang-switcher a:hover,
        .lang-switcher a.active-lang {
            background: var(--justice-primary);
            color: #fff;
        }

        .party-logo-img {
            height: 50px;
            width: auto;
            border-radius: 8px;
            object-fit: contain;
        }
    </style>
    @stack('styles')
</head>

<body class="hidden-bar-wrapper">

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        @include('components.header')

        <main>
            @yield('content')
        </main>

        @include('components.footer')

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

    <script src="{{ asset('counsel/js/jquery.js') }}"></script>
    <script src="{{ asset('counsel/js/popper.min.js') }}"></script>
    <script src="{{ asset('counsel/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('counsel/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('counsel/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('counsel/js/appear.js') }}"></script>
    <script src="{{ asset('counsel/js/parallax.min.js') }}"></script>
    <script src="{{ asset('counsel/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('counsel/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('counsel/js/owl.js') }}"></script>
    <script src="{{ asset('counsel/js/wow.js') }}"></script>
    <script src="{{ asset('counsel/js/nav-tool.js') }}"></script>
    <script src="{{ asset('counsel/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('counsel/js/script.js') }}"></script>
    @stack('scripts')
</body>

</html>
