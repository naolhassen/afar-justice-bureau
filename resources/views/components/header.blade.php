@php
    $locale = app()->getLocale() ?: 'aa';
    $locales = ['aa' => 'Qafaraf', 'am' => 'አማርኛ', 'en' => 'English'];

    // Build correct locale-switched URLs using named routes
    function switchLocaleUrl(string $targetLocale): string {
        try {
            $route = \Illuminate\Support\Facades\Route::currentRouteName();
            $params = \Illuminate\Support\Facades\Route::current()?->parameters() ?? [];
            $params['locale'] = $targetLocale;
            return route($route, $params);
        } catch (\Throwable $e) {
            return url('/' . $targetLocale);
        }
    }
@endphp

<!-- ========== SITE HEADER ========== -->
<header id="site-header" class="site-header">

    <!-- Main nav bar -->
    <div class="header-main">
        <div class="auto-container clearfix header-main-inner">

            <!-- Logo -->
            <a href="{{ route('home', ['locale' => $locale]) }}" class="site-logo">
                <img src="{{ asset('logo.png') }}" alt="{{ __('messages.metadata.title') }}" class="site-logo-img">
                <div class="site-logo-text">
                    <strong>{{ __('messages.metadata.title') }}</strong>
                    <span>{{ __('messages.nav.languageName') }} · Semera</span>
                </div>
            </a>

            <!-- Nav + controls -->
            <div class="header-nav-wrap">

                <!-- Desktop navigation -->
                <nav class="site-nav" id="site-nav" aria-label="Main navigation">
                    <ul class="nav-list">
                        <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                            <a href="{{ route('home', ['locale' => $locale]) }}">{{ __('messages.nav.home') }}</a>
                        </li>

                        <li class="has-dropdown {{ request()->is("$locale/about/*") ? 'active' : '' }}">
                            <a href="#" class="nav-parent">{{ __('messages.nav.about') }}<i class="fa fa-angle-down nav-arrow"></i></a>
                            <ul class="nav-dropdown">
                                <li><a href="{{ route('about.vision-mission', ['locale' => $locale]) }}">{{ __('messages.nav.visionMission') }}</a></li>
                                <li><a href="{{ route('about.departments', ['locale' => $locale]) }}">{{ __('messages.nav.departments') }}</a></li>
                                <li><a href="{{ route('about.formation', ['locale' => $locale]) }}">{{ __('messages.nav.formation') }}</a></li>
                                <li><a href="{{ route('about.structure', ['locale' => $locale]) }}">{{ __('messages.nav.structure') }}</a></li>
                                <li><a href="{{ route('about.logo-meaning', ['locale' => $locale]) }}">{{ __('messages.nav.logoMeaning') }}</a></li>
                            </ul>
                        </li>

                        <li class="{{ request()->is("$locale/initiatives/*") ? 'active' : '' }}">
                            <a href="{{ route('initiatives.justice-sector-transformation', ['locale' => $locale]) }}">{{ __('messages.nav.initiatives') }}</a>
                        </li>

                        <li class="has-dropdown {{ request()->is("$locale/resources/*") ? 'active' : '' }}">
                            <a href="#" class="nav-parent">{{ __('messages.nav.resources') }}<i class="fa fa-angle-down nav-arrow"></i></a>
                            <ul class="nav-dropdown">
                                <li><a href="{{ route('resources.laws', ['locale' => $locale]) }}">{{ __('messages.nav.laws') }}</a></li>
                                <li><a href="{{ route('resources.proclamations', ['locale' => $locale]) }}">{{ __('messages.nav.proclamations') }}</a></li>
                                <li><a href="{{ route('resources.regulations', ['locale' => $locale]) }}">{{ __('messages.nav.regulations') }}</a></li>
                            </ul>
                        </li>

                        <li class="has-dropdown {{ request()->is("$locale/briefing/*") ? 'active' : '' }}">
                            <a href="#" class="nav-parent">{{ __('messages.nav.briefing') }}<i class="fa fa-angle-down nav-arrow"></i></a>
                            <ul class="nav-dropdown">
                                <li><a href="{{ route('briefing.news', ['locale' => $locale]) }}">{{ __('messages.nav.news') }}</a></li>
                                <li><a href="{{ route('briefing.articles', ['locale' => $locale]) }}">{{ __('messages.nav.articles') }}</a></li>
                                <li><a href="{{ route('briefing.press-release', ['locale' => $locale]) }}">{{ __('messages.nav.pressRelease') }}</a></li>
                            </ul>
                        </li>

                        <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                            <a href="{{ route('contact', ['locale' => $locale]) }}">{{ __('messages.nav.contact') }}</a>
                        </li>
                    </ul>
                </nav>

                <!-- Language switcher dropdown -->
                <div class="lang-switcher">
                    <button class="lang-current" onclick="document.getElementById('lang-menu').classList.toggle('show')">
                        <i class="fa fa-globe"></i>
                        <span>{{ strtoupper($locale) }}</span>
                        <i class="fa fa-chevron-down"></i>
                    </button>
                    <div class="lang-menu" id="lang-menu">
                        @foreach ($locales as $code => $label)
                            <a href="{{ switchLocaleUrl($code) }}" class="lang-option {{ $locale === $code ? 'active' : '' }}">
                                {{ strtoupper($code) }} - {{ $label }}
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- Mobile toggle -->
                <button class="mobile-toggle" id="mobile-toggle" aria-label="Open menu" aria-expanded="false" aria-controls="site-nav">
                    <span></span><span></span><span></span>
                </button>

            </div><!-- /.header-nav-wrap -->
        </div>
    </div><!-- /.header-main -->

    <!-- Mobile overlay -->
    <div class="mobile-overlay" id="mobile-overlay" aria-hidden="true"></div>

    <!-- Mobile drawer -->
    <div class="mobile-drawer" id="mobile-drawer" aria-hidden="true">
        <div class="mobile-drawer-head">
            <a href="{{ route('home', ['locale' => $locale]) }}" class="site-logo">
                <img src="{{ asset('logo.png') }}" alt="{{ __('messages.metadata.title') }}" class="site-logo-img">
            </a>
            <button class="mobile-close" id="mobile-close" aria-label="Close menu">✕</button>
        </div>
        <div class="mobile-drawer-lang">
            @foreach ($locales as $code => $label)
                <a href="{{ switchLocaleUrl($code) }}" class="lang-tab {{ $locale === $code ? 'lang-tab--active' : '' }}">{{ strtoupper($code) }} <span style="font-size:10px;opacity:.7">{{ $label }}</span></a>
            @endforeach
        </div>
        <nav class="mobile-nav">
            <ul class="mobile-nav-list">
                <li><a href="{{ route('home', ['locale' => $locale]) }}">{{ __('messages.nav.home') }}</a></li>
                <li class="mobile-has-sub">
                    <button class="mobile-sub-toggle">{{ __('messages.nav.about') }} <i class="fa fa-angle-down"></i></button>
                    <ul class="mobile-sub">
                        <li><a href="{{ route('about.vision-mission', ['locale' => $locale]) }}">{{ __('messages.nav.visionMission') }}</a></li>
                        <li><a href="{{ route('about.departments', ['locale' => $locale]) }}">{{ __('messages.nav.departments') }}</a></li>
                        <li><a href="{{ route('about.formation', ['locale' => $locale]) }}">{{ __('messages.nav.formation') }}</a></li>
                        <li><a href="{{ route('about.structure', ['locale' => $locale]) }}">{{ __('messages.nav.structure') }}</a></li>
                        <li><a href="{{ route('about.logo-meaning', ['locale' => $locale]) }}">{{ __('messages.nav.logoMeaning') }}</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('initiatives.justice-sector-transformation', ['locale' => $locale]) }}">{{ __('messages.nav.initiatives') }}</a></li>
                <li class="mobile-has-sub">
                    <button class="mobile-sub-toggle">{{ __('messages.nav.resources') }} <i class="fa fa-angle-down"></i></button>
                    <ul class="mobile-sub">
                        <li><a href="{{ route('resources.laws', ['locale' => $locale]) }}">{{ __('messages.nav.laws') }}</a></li>
                        <li><a href="{{ route('resources.proclamations', ['locale' => $locale]) }}">{{ __('messages.nav.proclamations') }}</a></li>
                        <li><a href="{{ route('resources.regulations', ['locale' => $locale]) }}">{{ __('messages.nav.regulations') }}</a></li>
                    </ul>
                </li>
                <li class="mobile-has-sub">
                    <button class="mobile-sub-toggle">{{ __('messages.nav.briefing') }} <i class="fa fa-angle-down"></i></button>
                    <ul class="mobile-sub">
                        <li><a href="{{ route('briefing.news', ['locale' => $locale]) }}">{{ __('messages.nav.news') }}</a></li>
                        <li><a href="{{ route('briefing.articles', ['locale' => $locale]) }}">{{ __('messages.nav.articles') }}</a></li>
                        <li><a href="{{ route('briefing.press-release', ['locale' => $locale]) }}">{{ __('messages.nav.pressRelease') }}</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('contact', ['locale' => $locale]) }}">{{ __('messages.nav.contact') }}</a></li>
            </ul>
        </nav>
    </div>

</header>
<!-- ========== END SITE HEADER ==========

<script>
(function () {
    var toggle = document.getElementById('mobile-toggle');
    var close  = document.getElementById('mobile-close');
    var overlay = document.getElementById('mobile-overlay');
    var drawer  = document.getElementById('mobile-drawer');
    var header  = document.getElementById('site-header');

    function openDrawer() {
        drawer.classList.add('open');
        overlay.classList.add('open');
        toggle.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
    }
    function closeDrawer() {
        drawer.classList.remove('open');
        overlay.classList.remove('open');
        toggle.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
    }

    if (toggle) toggle.addEventListener('click', openDrawer);
    if (close)  close.addEventListener('click', closeDrawer);
    if (overlay) overlay.addEventListener('click', closeDrawer);

    // Mobile sub-menus
    document.querySelectorAll('.mobile-sub-toggle').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var li = this.parentElement;
            li.classList.toggle('open');
        });
    });

    // Sticky header on scroll
    window.addEventListener('scroll', function() {
        if (window.scrollY > 60) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }, { passive: true });

    // Desktop dropdowns - CSS-based hover with click fallback
    document.querySelectorAll('.has-dropdown').forEach(function(item) {
        var dropdown = item.querySelector('.nav-dropdown');
        var link = item.querySelector('.nav-parent');
        
        // Click support for touch devices and desktop
        link.addEventListener('click', function(e) {
            e.preventDefault();
            var isOpen = item.classList.contains('open');
            
            // Close all other dropdowns
            document.querySelectorAll('.has-dropdown.open').forEach(function(other) {
                if (other !== item) {
                    other.classList.remove('open');
                }
            });
            
            // Toggle current dropdown
            item.classList.toggle('open', !isOpen);
        });
    });
    
    // Close dropdowns when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.has-dropdown')) {
            document.querySelectorAll('.has-dropdown.open').forEach(function(item) {
                item.classList.remove('open');
            });
        }
    });

    // Close language menu when clicking outside
    document.addEventListener('click', function(e) {
        var langMenu = document.getElementById('lang-menu');
        var langSwitcher = document.querySelector('.lang-switcher');
        if (langMenu && langSwitcher && !langSwitcher.contains(e.target)) {
            langMenu.classList.remove('show');
        }
    });
})();
</script>
