@php
    $locale = app()->getLocale() ?: 'aa';
@endphp

<!-- Main Footer -->
<footer class="main-footer">
    <div class="auto-container">
        <!-- Widgets Section -->
        <div class="widgets-section">
            <!-- Scroll To Top -->
            <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
            <div class="row clearfix">

                <!-- Big Column -->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo mb-3">
                                    <a href="{{ route('home', ['locale' => $locale]) }}" style="display: flex; align-items: center;">
                                        <img src="{{ asset('logo.png') }}" alt="{{ __('messages.metadata.title') }}" class="party-logo-img" style="background: #fff; padding: 3px; border-radius: 6px;">
                                        <span style="color: #fff; font-weight: 700; font-size: 14px; margin-left: 10px; line-height: 1.2;">
                                            {{ __('messages.metadata.title') }}
                                        </span>
                                    </a>
                                </div>
                                <div class="text">{{ __('messages.footer.description') }}</div>
                                <!-- Social Nav -->
                                <ul class="social-icon-one">
                                    <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                    <li><a href="#"><span class="fa fa-youtube-play"></span></a></li>
                                </ul>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h5>{{ __('messages.footer.quickLinks') }}</h5>
                                <ul class="footer-list">
                                    <li><a href="{{ route('home', ['locale' => $locale]) }}">{{ __('messages.nav.home') }}</a></li>
                                    <li><a href="{{ route('about.vision-mission', ['locale' => $locale]) }}">{{ __('messages.nav.visionMission') }}</a></li>
                                    <li><a href="{{ route('about.leadership', ['locale' => $locale]) }}">{{ __('messages.nav.leadership') }}</a></li>
                                    <li><a href="{{ route('departments.minister', ['locale' => $locale]) }}">{{ __('messages.nav.bureauHead') }}</a></li>
                                    <li><a href="{{ route('briefing.news', ['locale' => $locale]) }}">{{ __('messages.nav.news') }}</a></li>
                                    <li><a href="{{ route('contact', ['locale' => $locale]) }}">{{ __('messages.nav.contact') }}</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Big Column -->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget contact-widget">
                                <h5>{{ __('messages.footer.contactInfo') }}</h5>
                                <ul>
                                    <li>
                                        <span class="icon flaticon-call-1"></span>
                                        <a href="tel:+251336660123">{{ __('messages.contact.phoneValue') }}</a>
                                    </li>
                                    <li>
                                        <span class="icon flaticon-email-2"></span>
                                        <a href="mailto:{{ __('messages.contact.emailValue') }}">{{ __('messages.contact.emailValue') }}</a>
                                    </li>
                                    <li>
                                        <span class="icon flaticon-maps-and-flags"></span>
                                        {{ __('messages.footer.addressValue') }}
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget newsletter-widget">
                                <h5>{{ __('messages.nav.resources') }}</h5>
                                <ul class="footer-list">
                                    <li><a href="{{ route('resources.laws', ['locale' => $locale]) }}">{{ __('messages.nav.laws') }}</a></li>
                                    <li><a href="{{ route('resources.services', ['locale' => $locale]) }}">{{ __('messages.nav.services') }}</a></li>
                                    <li><a href="{{ route('initiatives.justice-sector-transformation', ['locale' => $locale]) }}">{{ __('messages.nav.transformationRoadmap') }}</a></li>
                                    <li><a href="{{ route('initiatives.transitional-justice', ['locale' => $locale]) }}">{{ __('messages.nav.transitionalJustice') }}</a></li>
                                    <li><a href="{{ route('publications.strategy', ['locale' => $locale]) }}">{{ __('messages.nav.strategy') }}</a></li>
                                    <li><a href="https://justice.gov.et" target="_blank" rel="noopener">Federal Ministry of Justice <i class="fa fa-external-link small"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="copyright">{{ str_replace('{year}', date('Y'), __('messages.footer.rights')) }}</div>
        </div>
    </div>
</footer>
