@php
$currentLocale = app()->getLocale();
@endphp

<!--===== FOOTER AREA STARTS =======-->
<div class="vl-footer1-section-area">
  <img src="{{ asset('assets/img/elements/elements2.png') }}" alt="" class="elements2">
  <img src="{{ asset('assets/img/elements/elements3.png') }}" alt="" class="elements3">
  <div class="container">
    <div class="row">
      <div class="col-xl-4 col-md-6">
        <div class="footer-logo-area">
          <a href="{{ route('home', ['locale' => $currentLocale]) }}" class="d-flex align-items-center gap-2 mb-3">
              <img src="{{ asset('images/logo.jpg') }}" alt="Prosperity Party" style="width: 50px; height: 50px; border-radius: 8px; object-fit: cover;">
              <span class="text-white fw-bold fs-5">
                  {{ $currentLocale === 'aa' ? 'Leeda Partih Qafar' : ($currentLocale === 'am' ? 'የብልፅግና ፓርቲ አፋር' : 'Prosperity Party Afar') }}
              </span>
          </a>
          <div class="space16"></div>
          <p class="text-white-50">{{ __('messages.footer.about') }}</p>
          <div class="space24"></div>
          <ul class="social-links">
            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-telegram"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="col-xl-2 col-md-6 col-6">
        <div class="space30 d-lg-none d-block"></div>
        <div class="footer-widget-area foot-padding1">
          <h3>{{ __('messages.nav.about') }}</h3>
          <ul>
            <li><a href="{{ route('about.vision-mission', ['locale' => $currentLocale]) }}">{{ __('messages.nav.visionMission') }}</a></li>
            <li><a href="{{ route('about.leadership', ['locale' => $currentLocale]) }}">{{ __('messages.nav.leadership') }}</a></li>
            <li><a href="{{ route('about.formation', ['locale' => $currentLocale]) }}">{{ __('messages.nav.formation') }}</a></li>
            <li><a href="{{ route('about.structure', ['locale' => $currentLocale]) }}">{{ __('messages.nav.structure') }}</a></li>
            <li><a href="{{ route('about.logo-meaning', ['locale' => $currentLocale]) }}">{{ __('messages.nav.logoMeaning') }}</a></li>
          </ul>
        </div>
      </div>

      <div class="col-xl-2 col-md-6 col-6">
        <div class="space30 d-lg-none d-block"></div>
        <div class="footer-widget-area foot-padding2">
          <h3>{{ __('messages.nav.resources') }}</h3>
          <ul>
            <li><a href="{{ route('resources.manifesto', ['locale' => $currentLocale]) }}">{{ __('messages.nav.manifesto') }}</a></li>
            <li><a href="{{ route('resources.party-program', ['locale' => $currentLocale]) }}">{{ __('messages.nav.partyProgram') }}</a></li>
            <li><a href="{{ route('resources.rules-of-procedure', ['locale' => $currentLocale]) }}">{{ __('messages.nav.rulesOfProcedure') }}</a></li>
            <li><a href="{{ route('briefing.news', ['locale' => $currentLocale]) }}">{{ __('messages.nav.news') }}</a></li>
            <li><a href="{{ route('contact', ['locale' => $currentLocale]) }}">{{ __('messages.nav.contact') }}</a></li>
          </ul>
        </div>
      </div>

      <div class="col-xl-4 col-md-6">
        <div class="space30 d-lg-none d-block"></div>
        <div class="footer-widget-area">
          <h3>{{ __('messages.footer.contactInfo') }}</h3>
          <ul>
            <li>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" class="me-2">
                      <path d="M12 23L5.86473 15.5382C5.77948 15.4262 5.69511 15.3135 5.61164 15.2C4.56416 13.776 3.99805 12.0373 4.00001 10.25C4.00001 8.06196 4.84286 5.96354 6.34315 4.41637C7.84344 2.86919 9.87827 2 12 2C14.1217 2 16.1566 2.86919 17.6569 4.41637C19.1571 5.96354 20 8.06196 20 10.25C20.0017 12.0365 19.4359 13.7743 18.3891 15.1978L18.3884 15.2C18.3884 15.2 18.1702 15.4955 18.1375 15.5353L12 23ZM6.77309 14.2963C6.77309 14.2963 6.94255 14.5272 6.98109 14.5767L12 20.681L17.0255 14.5685C17.0575 14.5272 17.2276 14.2948 17.2284 14.294C18.0845 13.1309 18.5472 11.7103 18.5455 10.25C18.5455 8.45979 17.8558 6.7429 16.6283 5.47703C15.4008 4.21116 13.736 3.5 12 3.5C10.264 3.5 8.59918 4.21116 7.37167 5.47703C6.14416 6.7429 5.45455 8.45979 5.45455 10.25C5.45276 11.7112 5.91596 13.1327 6.77309 14.2963Z" fill="#5B5D61"/>
                    </svg>
                    {{ __('messages.contact.headOffice') }}
                </a>
            </li>
            <li>
                <a href="mailto:prosperityafarbranch@gmail.com">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" class="me-2">
                      <path d="M21.5 5H3.5C3.10218 5 2.72064 5.15804 2.43934 5.43934C2.15804 5.72064 2 6.10218 2 6.5V18.5C2 18.8978 2.15804 19.2794 2.43934 19.5607C2.72064 19.842 3.10218 20 3.5 20H21.5C21.8978 20 22.2794 19.842 22.5607 19.5607C22.842 19.2794 23 18.8978 23 18.5V6.5C23 6.10218 22.842 5.72064 22.5607 5.43934C22.2794 5.15804 21.8978 5 21.5 5ZM19.85 6.5L12.5 11.585L5.15 6.5H19.85ZM3.5 18.5V7.1825L12.0725 13.115C12.198 13.2021 12.3472 13.2488 12.5 13.2488C12.6528 13.2488 12.802 13.2021 12.9275 13.115L21.5 7.1825V18.5H3.5Z" fill="#5B5D61"/>
                    </svg>
                    prosperityafarbranch@gmail.com
                </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="space60"></div>
    <div class="col-xl-12">
      <div class="copyright-area">
        <a href="#">{{ str_replace('{year}', date('Y'), __('messages.footer.rights')) }}</a>
        <ul>
          <li><a href="{{ route('about.vision-mission', ['locale' => $currentLocale]) }}">{{ __('messages.nav.visionMission') }}</a><span> | </span></li>
          <li><a href="{{ route('contact', ['locale' => $currentLocale]) }}">{{ __('messages.nav.contact') }}</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!--===== FOOTER AREA ENDS =======-->
