@php
$currentLocale = app()->getLocale();
$locales = [
    'aa' => ['label' => 'Qafaraf', 'short' => 'AA'],
    'am' => ['label' => 'አማርኛ', 'short' => 'AM'],
    'en' => ['label' => 'English', 'short' => 'EN'],
];

$path = request()->path();
$pathWithoutLocale = ltrim(preg_replace('#^'.$currentLocale.'(/|$)#', '', $path), '/');
$currentRoute = request()->route() ? request()->route()->getName() : '';

$aboutLinks = [
    ['route' => 'about.vision-mission', 'label' => __('messages.nav.visionMission')],
    ['route' => 'about.leadership', 'label' => __('messages.nav.leadership')],
    ['route' => 'about.formation', 'label' => __('messages.nav.formation')],
    ['route' => 'about.structure', 'label' => __('messages.nav.structure')],
    ['route' => 'about.logo-meaning', 'label' => __('messages.nav.logoMeaning')],
];

$briefingLinks = [
    ['route' => 'briefing.news', 'label' => __('messages.nav.news')],
    ['route' => 'briefing.articles', 'label' => __('messages.nav.articles')],
    ['route' => 'briefing.events', 'label' => __('messages.nav.events')],
    ['route' => 'briefing.press-release', 'label' => __('messages.nav.pressRelease')],
];

$resourceLinks = [
    ['route' => 'resources.manifesto', 'label' => __('messages.nav.manifesto')],
    ['route' => 'resources.party-program', 'label' => __('messages.nav.partyProgram')],
    ['route' => 'resources.rules-of-procedure', 'label' => __('messages.nav.rulesOfProcedure')],
];
@endphp

<!--=====HEADER START=======-->
<header class="homepage3-body">
  <div id="vl-header-sticky" class="vl-header-area vl-transparent-header">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-xl-3 col-md-6 col-7">
                  <div class="vl-logo">
                      <a href="{{ route('home', ['locale' => $currentLocale]) }}" class="d-flex align-items-center gap-1" style="white-space: nowrap;">
                          <img src="{{ asset('images/logo.jpg') }}" alt="Prosperity Party" class="party-logo-img">
                          <span class="fw-bold d-none d-sm-inline" style="font-size: 13px; letter-spacing: 0.3px; color: #9b59b6; white-space: nowrap;">
                              {{ $currentLocale === 'aa' ? 'Leeda Partih Qafar' : ($currentLocale === 'am' ? 'የብልፅግና ፓርቲ አፋር' : 'Afar Prosperity Party') }}
                          </span>
                      </a>
                  </div>
              </div>
              <div class="col-xl-6 d-none d-xl-block">
                  <div class="vl-main-menu text-center">
                      <nav class="vl-mobile-menu-active">
                          <ul>
                              <li class="{{ $currentRoute === 'home' ? 'active' : '' }}">
                                  <a class="{{ $currentRoute === 'home' ? 'active' : '' }}" href="{{ route('home', ['locale' => $currentLocale]) }}">{{ __('messages.nav.home') }}</a>
                              </li>
                              <li class="has-dropdown {{ str_starts_with($currentRoute, 'about.') ? 'active' : '' }}">
                                  <a class="{{ str_starts_with($currentRoute, 'about.') ? 'active' : '' }}" href="#">{{ __('messages.nav.about') }} <span><i class="fa-solid fa-angle-down d-xl-inline d-none"></i></span></a>
                                  <ul class="sub-menu">
                                      @foreach ($aboutLinks as $link)
                                          <li><a href="{{ route($link['route'], ['locale' => $currentLocale]) }}">{{ $link['label'] }}</a></li>
                                      @endforeach
                                  </ul>
                              </li>
                              <li class="has-dropdown">
                                  <a class="{{ str_starts_with($currentRoute, 'briefing.') ? 'active' : '' }}" href="#">{{ __('messages.nav.briefing') }} <span><i class="fa-solid fa-angle-down d-xl-inline d-none"></i></span></a>
                                  <ul class="sub-menu">
                                      @foreach ($briefingLinks as $link)
                                          <li><a href="{{ route($link['route'], ['locale' => $currentLocale]) }}">{{ $link['label'] }}</a></li>
                                      @endforeach
                                  </ul>
                              </li>
                              <li class="has-dropdown">
                                  <a class="{{ str_starts_with($currentRoute, 'resources.') ? 'active' : '' }}" href="#">{{ __('messages.nav.resources') }} <span><i class="fa-solid fa-angle-down d-xl-inline d-none"></i></span></a>
                                  <ul class="sub-menu">
                                      @foreach ($resourceLinks as $link)
                                          <li><a href="{{ route($link['route'], ['locale' => $currentLocale]) }}">{{ $link['label'] }}</a></li>
                                      @endforeach
                                  </ul>
                              </li>
                              <li class="{{ $currentRoute === 'contact' ? 'active' : '' }}">
                                  <a class="{{ $currentRoute === 'contact' ? 'active' : '' }}" href="{{ route('contact', ['locale' => $currentLocale]) }}">{{ __('messages.nav.contact') }}</a>
                              </li>
                          </ul>
                      </nav>
                  </div>
              </div>
              <div class="col-xl-3 col-md-6 col-5">
                <div class="vl-hero-btn text-end">
                  <div class="sidebar_btn-area d-flex align-items-center justify-content-end gap-2">
                      <!-- Language Switcher Dropdown -->
                      <div class="dropdown d-inline-block">
                          <button class="header-lang-select dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="fa-solid fa-globe"></i>
                              <span>{{ $locales[$currentLocale]['label'] }}</span>
                          </button>
                          <ul class="dropdown-menu language-menu dropdown-menu-end shadow-lg">
                              @foreach ($locales as $code => $data)
                                  <li>
                                      <a class="dropdown-item py-2 px-3 d-flex align-items-center justify-content-between {{ $currentLocale === $code ? 'active' : '' }}" href="{{ url($code . ($pathWithoutLocale ? '/' . $pathWithoutLocale : '')) }}">
                                          <span>{{ $data['label'] }}</span>
                                          <small class="opacity-50 text-uppercase">{{ $data['short'] }}</small>
                                      </a>
                                  </li>
                              @endforeach
                          </ul>
                      </div>

                      <div class="search-icon header__search header-search-btn d-none d-sm-block">
                          <a href="#" style="color: #9b59b6; font-size: 22px;"><i class="fa-solid fa-magnifying-glass"></i></a>
                      </div>

                      <div class="vl-header-action-item d-block d-xl-none">
                          <button type="button" class="vl-offcanvas-toggle btn p-1" style="color: #9b59b6;">
                            <i class="fa-solid fa-bars-staggered fa-xl"></i>
                          </button>
                      </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
  </div>
</header>
<!--=====HEADER END =======-->

<!--===== MOBILE HEADER STARTS =======-->
<div class="homepage3-body">
  <div class="vl-offcanvas">
    <div class="vl-offcanvas-wrapper">
        <div class="vl-offcanvas-header d-flex justify-content-between align-items-center mb-40">
            <div class="vl-offcanvas-logo">
                <a href="{{ route('home', ['locale' => $currentLocale]) }}" class="d-flex align-items-center gap-1" style="white-space: nowrap;">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Prosperity Party" style="width: 40px; height: 40px; border-radius: 8px;">
                    <span class="fw-bold" style="font-size: 13px; color: #9b59b6; white-space: nowrap;">
                        {{ $currentLocale === 'aa' ? 'Leeda Parti' : ($currentLocale === 'am' ? 'ብልፅግና ፓርቲ' : 'Prosperity Party') }}
                    </span>
                </a>
            </div>
            <div class="vl-offcanvas-close">
               <button class="vl-offcanvas-close-toggle"><i class="fa-solid fa-xmark"></i></button>
            </div>
        </div>

        <!-- Mobile Language Selector -->
        <div class="mb-4">
            <label class="text-white-50 small mb-2 d-block">{{ __('messages.nav.language') }}</label>
            <div class="d-flex gap-2">
                @foreach ($locales as $code => $data)
                    <a href="{{ url($code . ($pathWithoutLocale ? '/' . $pathWithoutLocale : '')) }}" class="btn btn-sm {{ $currentLocale === $code ? 'btn-danger' : 'btn-outline-light' }} flex-fill py-2">
                        {{ $data['label'] }}
                    </a>
                @endforeach
            </div>
        </div>

        <div class="vl-offcanvas-menu d-xl-none mb-40">
            <nav>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('home', ['locale' => $currentLocale]) }}" class="text-white fw-semibold d-block py-2">{{ __('messages.nav.home') }}</a></li>
                    
                    <li class="mb-2">
                        <a class="text-white fw-semibold d-flex justify-content-between align-items-center py-2" data-bs-toggle="collapse" href="#aboutMobileMenu" role="button" aria-expanded="false">
                            <span>{{ __('messages.nav.about') }}</span>
                            <i class="fa-solid fa-chevron-down small"></i>
                        </a>
                        <div class="collapse ps-3" id="aboutMobileMenu">
                            <ul class="list-unstyled pt-2">
                                @foreach ($aboutLinks as $link)
                                    <li class="mb-2"><a href="{{ route($link['route'], ['locale' => $currentLocale]) }}" class="text-white-50 d-block py-1">{{ $link['label'] }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </li>

                    <li class="mb-2">
                        <a class="text-white fw-semibold d-flex justify-content-between align-items-center py-2" data-bs-toggle="collapse" href="#briefingMobileMenu" role="button" aria-expanded="false">
                            <span>{{ __('messages.nav.briefing') }}</span>
                            <i class="fa-solid fa-chevron-down small"></i>
                        </a>
                        <div class="collapse ps-3" id="briefingMobileMenu">
                            <ul class="list-unstyled pt-2">
                                @foreach ($briefingLinks as $link)
                                    <li class="mb-2"><a href="{{ route($link['route'], ['locale' => $currentLocale]) }}" class="text-white-50 d-block py-1">{{ $link['label'] }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </li>

                    <li class="mb-2">
                        <a class="text-white fw-semibold d-flex justify-content-between align-items-center py-2" data-bs-toggle="collapse" href="#resourcesMobileMenu" role="button" aria-expanded="false">
                            <span>{{ __('messages.nav.resources') }}</span>
                            <i class="fa-solid fa-chevron-down small"></i>
                        </a>
                        <div class="collapse ps-3" id="resourcesMobileMenu">
                            <ul class="list-unstyled pt-2">
                                @foreach ($resourceLinks as $link)
                                    <li class="mb-2"><a href="{{ route($link['route'], ['locale' => $currentLocale]) }}" class="text-white-50 d-block py-1">{{ $link['label'] }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </li>

                    <li class="mb-2"><a href="{{ route('contact', ['locale' => $currentLocale]) }}" class="text-white fw-semibold d-block py-2">{{ __('messages.nav.contact') }}</a></li>
                </ul>
            </nav>
        </div>

        <div class="space20"></div>
        <div class="vl-offcanvas-info">
            <h3 class="vl-offcanvas-sm-title">{{ __('messages.footer.contactInfo') }}</h3>
            <div class="space20"></div>
            <span><a href="mailto:prosperityafarbranch@gmail.com"> <i class="fa-regular fa-envelope"></i> prosperityafarbranch@gmail.com</a></span>
            <span><a href="#"><i class="fa-solid fa-location-dot"></i> {{ __('messages.contact.headOffice') }}</a></span>
        </div>
        <div class="space20"></div>
        <div class="vl-offcanvas-social">
            <h3 class="vl-offcanvas-sm-title">{{ __('messages.metadata.title') }}</h3>
            <div class="space20"></div>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-telegram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
         </div>
    </div>
</div>
<div class="vl-offcanvas-overlay"></div>
</div>
<!--===== MOBILE HEADER ENDS =======-->

<!--===== SIDEBAR SEARCH STARTS=======-->
<div class="header-search-form-wrapper">
  <div class="tx-search-close tx-close"><i class="fa-solid fa-xmark"></i></div>
  <div class="header-search-container">
      <form role="search" class="search-form" action="{{ route('briefing.news', ['locale' => $currentLocale]) }}">
      <input type="search" class="search-field" placeholder="Search news & updates..." value="" name="s">
      <button type="submit" class="search-submit"><img src="{{ asset('assets/img/icons/search1.svg') }}" alt=""></button>
      </form>
  </div>
</div>
<div class="body-overlay"></div>
<!--===== SIDEBAR SEARCH ENDS =======-->
