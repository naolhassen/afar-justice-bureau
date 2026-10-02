@php
    $locale = app()->getLocale() ?: 'aa';
@endphp

<!-- Main Footer -->
<footer class="main-footer" style="background: linear-gradient(180deg, #0a2236 0%, #061623 100%); color: rgba(255,255,255,0.85); border-top: 3px solid var(--afar-accent); position: relative; padding-top: 60px;">
    <div class="auto-container">
        <!-- Widgets Section -->
        <div class="widgets-section" style="padding-bottom: 40px;">
            <div class="row clearfix">

                <!-- Col 1: Bureau Identity & Mission -->
                <div class="footer-column col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="footer-widget logo-widget">
                        <div class="logo mb-3">
                            <a href="{{ route('home', ['locale' => $locale]) }}" style="display: flex; align-items: center; text-decoration: none; gap: 14px;">
                                <div style="background: #ffffff; padding: 6px; border-radius: 12px; box-shadow: 0 4px 14px rgba(0,0,0,0.3); display: inline-flex;">
                                    <img src="{{ asset('logo.png') }}" alt="{{ __('messages.metadata.title') }}" style="height: 54px; width: auto; object-fit: contain;">
                                </div>
                                <div>
                                    <span style="display: block; color: #ffffff; font-weight: 800; font-size: 15px; line-height: 1.25; letter-spacing: -0.01em;">
                                        {{ __('messages.metadata.title') }}
                                    </span>
                                    <span style="display: block; color: var(--afar-accent); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; margin-top: 2px;">
                                        Semera Headquarters &bull; Afar Region
                                    </span>
                                </div>
                            </a>
                        </div>
                        <p style="font-size: 0.9rem; line-height: 1.7; color: rgba(255,255,255,0.72); margin-bottom: 20px;">
                            {{ __('messages.footer.description') }}
                        </p>
                        <!-- Social Links -->
                        <ul class="social-icon-one" style="display: flex; gap: 10px; padding: 0; list-style: none;">
                            <li><a href="https://facebook.com" target="_blank" rel="noopener" aria-label="Facebook" style="display: flex; align-items: center; justify-content: center; width: 38px; height: 38px; border-radius: 50%; background: rgba(255,255,255,0.08); color: #fff; border: 1px solid rgba(255,255,255,0.12);"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com" target="_blank" rel="noopener" aria-label="Twitter" style="display: flex; align-items: center; justify-content: center; width: 38px; height: 38px; border-radius: 50%; background: rgba(255,255,255,0.08); color: #fff; border: 1px solid rgba(255,255,255,0.12);"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://t.me" target="_blank" rel="noopener" aria-label="Telegram" style="display: flex; align-items: center; justify-content: center; width: 38px; height: 38px; border-radius: 50%; background: rgba(255,255,255,0.08); color: #fff; border: 1px solid rgba(255,255,255,0.12);"><i class="fa fa-paper-plane"></i></a></li>
                            <li><a href="https://linkedin.com" target="_blank" rel="noopener" aria-label="LinkedIn" style="display: flex; align-items: center; justify-content: center; width: 38px; height: 38px; border-radius: 50%; background: rgba(255,255,255,0.08); color: #fff; border: 1px solid rgba(255,255,255,0.12);"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Col 2: Institutional Portals -->
                <div class="footer-column col-lg-2 col-md-6 col-sm-12 mb-4">
                    <div class="footer-widget links-widget">
                        <h5 style="color: #ffffff; font-weight: 800; font-size: 1rem; margin-bottom: 18px; position: relative; padding-bottom: 8px;">
                            {{ __('messages.nav.about') }}
                            <span style="position: absolute; bottom: 0; left: 0; width: 28px; height: 2px; background: var(--afar-accent);"></span>
                        </h5>
                        <ul class="footer-list" style="list-style: none; padding: 0; margin: 0; line-height: 2.1; font-size: 13.5px;">
                            <li><a href="{{ route('home', ['locale' => $locale]) }}">{{ __('messages.nav.home') }}</a></li>
                            <li><a href="{{ route('about.vision-mission', ['locale' => $locale]) }}">{{ __('messages.nav.visionMission') }}</a></li>
                            <li><a href="{{ route('about.leadership', ['locale' => $locale]) }}">{{ __('messages.nav.leadership') }}</a></li>
                            <li><a href="{{ route('departments.minister', ['locale' => $locale]) }}">{{ __('messages.nav.bureauHead') }}</a></li>
                            <li><a href="{{ route('about.structure', ['locale' => $locale]) }}">{{ __('messages.nav.structure') }}</a></li>
                            <li><a href="{{ route('about.formation', ['locale' => $locale]) }}">{{ __('messages.nav.formation') }}</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Col 3: Initiatives & Public Resources -->
                <div class="footer-column col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="footer-widget links-widget">
                        <h5 style="color: #ffffff; font-weight: 800; font-size: 1rem; margin-bottom: 18px; position: relative; padding-bottom: 8px;">
                            {{ __('messages.nav.resources') }} & Reforms
                            <span style="position: absolute; bottom: 0; left: 0; width: 28px; height: 2px; background: var(--afar-accent);"></span>
                        </h5>
                        <ul class="footer-list" style="list-style: none; padding: 0; margin: 0; line-height: 2.1; font-size: 13.5px;">
                            <li><a href="{{ route('initiatives.justice-sector-transformation', ['locale' => $locale]) }}">{{ __('messages.nav.transformationRoadmap') }}</a></li>
                            <li><a href="{{ route('initiatives.transitional-justice', ['locale' => $locale]) }}">{{ __('messages.nav.transitionalJustice') }}</a></li>
                            <li><a href="{{ route('initiatives.legal-institutional-reform', ['locale' => $locale]) }}">{{ __('messages.nav.institutionalReform') }}</a></li>
                            <li><a href="{{ route('resources.laws', ['locale' => $locale]) }}">{{ __('messages.nav.laws') }} & Directives</a></li>
                            <li><a href="{{ route('resources.services', ['locale' => $locale]) }}">{{ __('messages.nav.services') }}</a></li>
                            <li><a href="https://justice.gov.et" target="_blank" rel="noopener" style="color: var(--afar-accent-soft);">Federal Ministry of Justice <i class="fa fa-external-link" style="font-size: 11px;"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Col 4: Official Contact Information -->
                <div class="footer-column col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="footer-widget contact-widget">
                        <h5 style="color: #ffffff; font-weight: 800; font-size: 1rem; margin-bottom: 18px; position: relative; padding-bottom: 8px;">
                            {{ __('messages.footer.contactInfo') }}
                            <span style="position: absolute; bottom: 0; left: 0; width: 28px; height: 2px; background: var(--afar-accent);"></span>
                        </h5>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: 13.5px; line-height: 1.8;">
                            <li style="display: flex; gap: 12px; margin-bottom: 14px; align-items: flex-start;">
                                <span class="fa fa-map-marker" style="color: var(--afar-accent); font-size: 18px; margin-top: 3px;"></span>
                                <span>{{ __('messages.footer.addressValue') }}</span>
                            </li>
                            <li style="display: flex; gap: 12px; margin-bottom: 14px; align-items: center;">
                                <span class="fa fa-phone" style="color: var(--afar-accent); font-size: 16px;"></span>
                                <a href="tel:+251336660123" style="color: rgba(255,255,255,0.85); font-weight: 700;">{{ __('messages.contact.phoneValue') }}</a>
                            </li>
                            <li style="display: flex; gap: 12px; margin-bottom: 14px; align-items: center;">
                                <span class="fa fa-envelope-o" style="color: var(--afar-accent); font-size: 16px;"></span>
                                <a href="mailto:{{ __('messages.contact.emailValue') }}" style="color: rgba(255,255,255,0.85);">{{ __('messages.contact.emailValue') }}</a>
                            </li>
                            <li style="display: flex; gap: 12px; align-items: center;">
                                <span class="fa fa-clock-o" style="color: var(--afar-accent); font-size: 16px;"></span>
                                <span>Mon &ndash; Fri: 8:30 AM &ndash; 5:30 PM</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Sub Footer Bottom -->
    <div class="footer-bottom" style="background: #040e17; border-top: 1px solid rgba(255,255,255,0.06); padding: 18px 0;">
        <div class="auto-container">
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                <div class="copyright" style="font-size: 12.5px; color: rgba(255,255,255,0.65);">
                    {{ str_replace('{year}', date('Y'), __('messages.footer.rights')) }}
                </div>
                <div style="font-size: 12px; color: rgba(255,255,255,0.5);">
                    Semera &bull; Afar National Regional State &bull; Ethiopia
                </div>
            </div>
        </div>
    </div>
</footer>
