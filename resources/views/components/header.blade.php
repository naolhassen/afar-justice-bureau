@php
    $locale = app()->getLocale() ?: 'aa';
    $locales = ['aa' => 'Qafaraf', 'am' => 'አማርኛ', 'en' => 'English'];
@endphp

<!-- Main Header-->
<header class="main-header header-style-one">
    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container clearfix">

            <div class="pull-left logo-box">
                <div class="logo">
                    <a href="{{ route('home', ['locale' => $locale]) }}" style="display: flex; align-items: center; text-decoration: none;">
                        <img src="{{ asset('logo.png') }}" alt="{{ __('messages.metadata.title') }}" class="party-logo-img">
                        <span class="d-none d-lg-inline-block" style="margin-left: 14px; text-align: left;">
                            <strong style="display: block; font-size: 15px; font-weight: 800; color: #00204c; line-height: 1.2;">
                                {{ __('messages.metadata.title') }}
                            </strong>
                            <small style="display: block; font-size: 12px; color: var(--justice-gold); font-weight: 600; line-height: 1.3;">
                                {{ __('messages.hero.badge') }}
                            </small>
                        </span>
                    </a>
                </div>
            </div>

            <div class="nav-outer clearfix">
                <!-- Mobile Navigation Toggler -->
                <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li class="{{ request()->routeIs('home') ? 'current' : '' }}">
                                <a href="{{ route('home', ['locale' => $locale]) }}">{{ __('messages.nav.home') }}</a>
                            </li>

                            <!-- About Dropdown -->
                            <li class="dropdown {{ request()->is("$locale/about/*") ? 'current' : '' }}">
                                <a href="#">{{ __('messages.nav.about') }}</a>
                                <ul>
                                    <li><a href="{{ route('about.vision-mission', ['locale' => $locale]) }}">{{ __('messages.nav.visionMission') }}</a></li>
                                    <li><a href="{{ route('about.leadership', ['locale' => $locale]) }}">{{ __('messages.nav.leadership') }}</a></li>
                                    <li><a href="{{ route('about.formation', ['locale' => $locale]) }}">{{ __('messages.nav.formation') }}</a></li>
                                    <li><a href="{{ route('about.structure', ['locale' => $locale]) }}">{{ __('messages.nav.structure') }}</a></li>
                                    <li><a href="{{ route('about.logo-meaning', ['locale' => $locale]) }}">{{ __('messages.nav.logoMeaning') }}</a></li>
                                </ul>
                            </li>

                            <!-- Departments / Leadership -->
                            <li class="dropdown {{ request()->is("$locale/departments/*") || request()->is("$locale/initiatives/*") ? 'current' : '' }}">
                                <a href="#">{{ __('messages.nav.initiatives') }}</a>
                                <ul>
                                    <li><a href="{{ route('departments.minister', ['locale' => $locale]) }}">{{ __('messages.nav.bureauHead') }}</a></li>
                                    <li><a href="{{ route('initiatives.justice-sector-transformation', ['locale' => $locale]) }}">{{ __('messages.nav.transformationRoadmap') }}</a></li>
                                    <li><a href="{{ route('initiatives.transitional-justice', ['locale' => $locale]) }}">{{ __('messages.nav.transitionalJustice') }}</a></li>
                                    <li><a href="{{ route('initiatives.legal-institutional-reform', ['locale' => $locale]) }}">{{ __('messages.nav.institutionalReform') }}</a></li>
                                </ul>
                            </li>

                            <!-- Laws & Resources -->
                            <li class="dropdown {{ request()->is("$locale/resources/*") || request()->is("$locale/publications/*") ? 'current' : '' }}">
                                <a href="#">{{ __('messages.nav.resources') }}</a>
                                <ul>
                                    <li><a href="{{ route('resources.laws', ['locale' => $locale]) }}">{{ __('messages.nav.laws') }}</a></li>
                                    <li><a href="{{ route('resources.services', ['locale' => $locale]) }}">{{ __('messages.nav.services') }}</a></li>
                                    <li><a href="{{ route('publications.strategy', ['locale' => $locale]) }}">{{ __('messages.nav.strategy') }}</a></li>
                                </ul>
                            </li>

                            <!-- Newsroom -->
                            <li class="dropdown {{ request()->is("$locale/briefing/*") ? 'current' : '' }}">
                                <a href="#">{{ __('messages.nav.briefing') }}</a>
                                <ul>
                                    <li><a href="{{ route('briefing.news', ['locale' => $locale]) }}">{{ __('messages.nav.news') }}</a></li>
                                    <li><a href="{{ route('briefing.articles', ['locale' => $locale]) }}">{{ __('messages.nav.articles') }}</a></li>
                                    <li><a href="{{ route('briefing.events', ['locale' => $locale]) }}">{{ __('messages.nav.events') }}</a></li>
                                    <li><a href="{{ route('briefing.press-release', ['locale' => $locale]) }}">{{ __('messages.nav.pressRelease') }}</a></li>
                                </ul>
                            </li>

                            <li class="{{ request()->routeIs('contact') ? 'current' : '' }}">
                                <a href="{{ route('contact', ['locale' => $locale]) }}">{{ __('messages.nav.contact') }}</a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <!-- Main Menu End-->
                <div class="outer-box clearfix">

                    <!-- Language Switcher -->
                    <div class="lang-switcher">
                        @foreach ($locales as $code => $label)
                            <a href="{{ url("/$code" . '/' . ltrim(str_replace("/$locale", '', request()->path()), '/')) }}"
                               class="{{ $locale === $code ? 'active-lang' : '' }}">
                                {{ strtoupper($code) }}
                            </a>
                        @endforeach
                    </div>

                    <!-- Btn Box -->
                    <div class="btn-box">
                        <a href="{{ route('contact', ['locale' => $locale]) }}" class="theme-btn btn-style-one">
                            <span class="txt">{{ __('messages.nav.contact') }}</span>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="{{ route('home', ['locale' => $locale]) }}" title="" style="display: flex; align-items: center; text-decoration: none;">
                    <img src="{{ asset('logo.png') }}" alt="" title="" class="party-logo-img">
                    <span class="d-none d-md-inline-block font-weight-bold" style="margin-left: 10px; font-size: 14px; color: #00204c;">
                        {{ __('messages.metadata.title') }}
                    </span>
                </a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->

                <!-- Main Menu End-->
                <div class="outer-box clearfix">

                    <!-- Language Switcher -->
                    <div class="lang-switcher">
                        @foreach ($locales as $code => $label)
                            <a href="{{ url("/$code" . '/' . ltrim(str_replace("/$locale", '', request()->path()), '/')) }}"
                               class="{{ $locale === $code ? 'active-lang' : '' }}">
                                {{ strtoupper($code) }}
                            </a>
                        @endforeach
                    </div>

                    <!-- Btn Box -->
                    <div class="btn-box">
                        <a href="{{ route('contact', ['locale' => $locale]) }}" class="theme-btn btn-style-two">
                            <span class="txt">{{ __('messages.nav.contact') }}</span>
                        </a>
                    </div>

                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                </div>

            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

        <nav class="menu-box">
            <div class="nav-logo">
                <a href="{{ route('home', ['locale' => $locale]) }}">
                    <img src="{{ asset('logo.png') }}" alt="" title="" class="party-logo-img">
                </a>
            </div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>
<!-- End Main Header -->
