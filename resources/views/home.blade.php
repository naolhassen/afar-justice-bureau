@extends('layouts.app')

@section('content')

    <!-- ====== HERO SECTION – Cinematic Full-Viewport ====== -->
    <section class="hero-cinematic" id="hero" aria-label="Hero banner">

        <!-- Slide track -->
        <div class="hero-slides" id="heroSlides">

            <!-- Slide 1 -->
            <div class="hero-slide active" style="--hero-bg: url('{{ asset('images/gallery/gallery-11.jpg') }}')">
                <div class="hero-slide-inner auto-container">
                    <div class="hero-pillar" aria-hidden="true"></div>
                    <div class="hero-content">
                        <span class="hero-eyebrow">{{ __('messages.hero.badge') }}</span>
                        <h1 class="hero-headline">
                            {{ __('messages.hero.title') }}<br>
                            <em>{{ __('messages.hero.titleHighlight') }}</em>
                        </h1>
                        <p class="hero-sub">{{ __('messages.hero.description') }}</p>
                        <div class="hero-actions">
                            <a href="{{ route('resources.services', ['locale' => app()->getLocale()]) }}" class="hero-btn hero-btn--primary">
                                {{ __('messages.hero.cta') }} <i class="fa fa-arrow-right"></i>
                            </a>
                            <a href="{{ route('about.vision-mission', ['locale' => app()->getLocale()]) }}" class="hero-btn hero-btn--ghost">
                                {{ __('messages.hero.secondaryCta') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="hero-slide" style="--hero-bg: url('{{ asset('images/gallery/gallery-19.jpg') }}')">
                <div class="hero-slide-inner auto-container">
                    <div class="hero-pillar" aria-hidden="true"></div>
                    <div class="hero-content">
                        <span class="hero-eyebrow">{{ __('messages.about.sectionTag') }}</span>
                        <h1 class="hero-headline">
                            {{ __('messages.about.title') }}<br>
                            <em>{{ __('messages.about.titleHighlight') }}</em>
                        </h1>
                        <p class="hero-sub">{{ __('messages.about.description') }}</p>
                        <div class="hero-actions">
                            <a href="{{ route('about.vision-mission', ['locale' => app()->getLocale()]) }}" class="hero-btn hero-btn--primary">
                                {{ __('messages.about.learnMore') }} <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="hero-slide" style="--hero-bg: url('{{ asset('images/gallery/gallery-25.jpg') }}')">
                <div class="hero-slide-inner auto-container">
                    <div class="hero-pillar" aria-hidden="true"></div>
                    <div class="hero-content">
                        <span class="hero-eyebrow">{{ __('messages.news.sectionTag') }}</span>
                        <h1 class="hero-headline">
                            {{ __('messages.news.title') }}<br>
                            <em>{{ __('messages.news.titleHighlight') }}</em>
                        </h1>
                        <p class="hero-sub">{{ __('messages.cta.description') }}</p>
                        <div class="hero-actions">
                            <a href="{{ route('briefing.news', ['locale' => app()->getLocale()]) }}" class="hero-btn hero-btn--primary">
                                {{ __('messages.news.viewAll') }} <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.hero-slides -->

        <!-- Slide controls -->
        <div class="hero-controls" aria-label="Slide controls">
            <button class="hero-ctrl" id="heroPrev" aria-label="Previous slide"><i class="fa fa-chevron-left"></i></button>
            <div class="hero-dots" id="heroDots" role="tablist">
                <button class="hero-dot active" aria-selected="true" data-slide="0"></button>
                <button class="hero-dot" aria-selected="false" data-slide="1"></button>
                <button class="hero-dot" aria-selected="false" data-slide="2"></button>
            </div>
            <button class="hero-ctrl" id="heroNext" aria-label="Next slide"><i class="fa fa-chevron-right"></i></button>
        </div>

        <!-- Stat strip -->
        <div class="hero-stats">
            <div class="hero-stat">
                <strong>30+</strong>
                <span>{{ __('messages.about.stats.yearsLabel') }}</span>
            </div>
            <div class="hero-stat-sep" aria-hidden="true"></div>
            <div class="hero-stat">
                <strong>250+</strong>
                <span>{{ __('messages.about.stats.membersLabel') }}</span>
            </div>
            <div class="hero-stat-sep" aria-hidden="true"></div>
            <div class="hero-stat">
                <strong>6</strong>
                <span>{{ __('messages.about.stats.officesLabel') }}</span>
            </div>
            <div class="hero-stat-sep" aria-hidden="true"></div>
            <div class="hero-stat">
                <strong>{{ __('messages.services.sectionTag') }}</strong>
                <span>{{ __('messages.hero.badge') }}</span>
            </div>
        </div>

    </section>
    <!-- ====== END HERO SECTION ====== -->

    @push('scripts')
    <script>
    (function(){
        var slides = document.querySelectorAll('.hero-slide');
        var dots   = document.querySelectorAll('.hero-dot');
        var cur    = 0;
        var total  = slides.length;
        var timer;

        function goTo(n) {
            slides[cur].classList.remove('active');
            dots[cur].classList.remove('active');
            dots[cur].setAttribute('aria-selected','false');
            cur = (n + total) % total;
            slides[cur].classList.add('active');
            dots[cur].classList.add('active');
            dots[cur].setAttribute('aria-selected','true');
        }

        function autoplay() { timer = setInterval(function(){ goTo(cur+1); }, 5500); }
        function resetAuto() { clearInterval(timer); autoplay(); }

        document.getElementById('heroNext').addEventListener('click', function(){ goTo(cur+1); resetAuto(); });
        document.getElementById('heroPrev').addEventListener('click', function(){ goTo(cur-1); resetAuto(); });
        dots.forEach(function(d){ d.addEventListener('click', function(){ goTo(+this.dataset.slide); resetAuto(); }); });

        autoplay();
    })();
    </script>
    @endpush

    <!-- Services Section -->
    <section class="services-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Services Block -->
                    <div class="services-block col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-file"></div>
                                <h4><a href="{{ route('initiatives.transitional-justice', ['locale' => app()->getLocale()]) }}">{{ __('messages.services.politicalEducation') }}</a></h4>
                                <div class="text">{{ __('messages.services.politicalEducationDesc') }}</div>
                            </div>
                            <a href="{{ route('initiatives.transitional-justice', ['locale' => app()->getLocale()]) }}" class="arrow flaticon-right"></a>
                        </div>
                    </div>

                    <!-- Services Block -->
                    <div class="services-block col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-file-1"></div>
                                <h4><a href="{{ route('initiatives.legal-institutional-reform', ['locale' => app()->getLocale()]) }}">{{ __('messages.services.youthEngagement') }}</a></h4>
                                <div class="text">{{ __('messages.services.youthEngagementDesc') }}</div>
                            </div>
                            <a href="{{ route('initiatives.legal-institutional-reform', ['locale' => app()->getLocale()]) }}" class="arrow flaticon-right"></a>
                        </div>
                    </div>

                    <!-- Services Block -->
                    <div class="services-block col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-umbrella-1"></div>
                                <h4><a href="{{ route('initiatives.justice-sector-transformation', ['locale' => app()->getLocale()]) }}">{{ __('messages.services.communityDev') }}</a></h4>
                                <div class="text">{{ __('messages.services.communityDevDesc') }}</div>
                            </div>
                            <a href="{{ route('initiatives.justice-sector-transformation', ['locale' => app()->getLocale()]) }}" class="arrow flaticon-right"></a>
                        </div>
                    </div>

                    <!-- Services Block -->
                    <div class="services-block col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="150ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-group"></div>
                                <h4><a href="{{ route('resources.services', ['locale' => app()->getLocale()]) }}">{{ __('messages.services.womenEmpowerment') }}</a></h4>
                                <div class="text">{{ __('messages.services.womenEmpowermentDesc') }}</div>
                            </div>
                            <a href="{{ route('resources.services', ['locale' => app()->getLocale()]) }}" class="arrow flaticon-right"></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- Welcome Section -->
    <section class="welcome-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image" data-tilt data-tilt-max="3">
                            <img src="{{ asset('images/gallery/gallery-07.jpg') }}" alt="{{ __('messages.about.title') }}">
                        </div>
                        <div class="experience">
                            <div class="inner">
                                <span class="count">{{ __('messages.about.stats.years') }}</span>
                                {{ __('messages.about.stats.yearsLabel') }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <h2>{{ __('messages.about.title') }} <br> {{ __('messages.about.titleHighlight') }}</h2>
                        </div>
                        <div class="text">{{ __('messages.about.description') }}</div>
                        <ul class="list-style-one">
                            <li>{{ __('messages.services.goodGovernance') }}</li>
                            <li>{{ __('messages.services.peaceBuilding') }}</li>
                            <li>{{ __('messages.services.communityDev') }}</li>
                            <li>{{ __('messages.services.womenEmpowerment') }}</li>
                        </ul>
                        <div class="btns-box">
                            <a href="{{ route('about.vision-mission', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-two">
                                <span class="txt">{{ __('messages.about.learnMore') }} <i class="arrow flaticon-right"></i></span>
                            </a>
                            <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-three">
                                <span class="txt">{{ __('messages.nav.contact') }} <i class="arrow flaticon-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Welcome Section -->

    <!-- Counter Section -->
    <section class="counter-section">
        <div class="image-layer" style="background-image: url({{ asset('images/gallery/gallery-08.jpg') }})"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title light centered">
                <h2>{{ __('messages.about.title') }} {{ __('messages.about.titleHighlight') }}</h2>
                <div class="text">{{ __('messages.about.description') }}</div>
            </div>

            <div class="fact-counter">
                <div class="row clearfix">

                    <!-- Column -->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-briefcase"></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2500" data-stop="250">0</span><sup>+</sup>
                                </div>
                                <h6 class="counter-title">{{ __('messages.about.stats.membersLabel') }}</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-balance"></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="5">0</span><sup>+</sup>
                                </div>
                                <h6 class="counter-title">{{ __('messages.about.stats.officesLabel') }}</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-marketing"></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="6">0</span><sup>+</sup>
                                </div>
                                <h6 class="counter-title">{{ __('messages.services.sectionTag') }}</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-trophy-2"></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="5">0</span>
                                </div>
                                <h6 class="counter-title">{{ __('messages.about.stats.yearsLabel') }}</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Counter Section -->

    <!-- Practice Section -->
    <section class="practice-section" style="background-image: url({{ asset('counsel/images/background/pattern-2.png') }})">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>{{ __('messages.services.title') }} {{ __('messages.services.titleHighlight') }}</h2>
            </div>
            <div class="inner-container">
                <div class="clearfix">

                    <!-- Practice Block -->
                    <div class="practice-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon flaticon-file"></div>
                            <h5><a href="{{ route('initiatives.transitional-justice', ['locale' => app()->getLocale()]) }}">{{ __('messages.services.politicalEducation') }}</a></h5>
                            <div class="text">{{ Str::limit(__('messages.services.politicalEducationDesc'), 85) }}</div>
                            <a class="arrow flaticon-right-arrow-3" href="{{ route('initiatives.transitional-justice', ['locale' => app()->getLocale()]) }}"></a>
                        </div>
                    </div>

                    <!-- Practice Block -->
                    <div class="practice-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon flaticon-briefcase"></div>
                            <h5><a href="{{ route('initiatives.legal-institutional-reform', ['locale' => app()->getLocale()]) }}">{{ __('messages.services.youthEngagement') }}</a></h5>
                            <div class="text">{{ Str::limit(__('messages.services.youthEngagementDesc'), 85) }}</div>
                            <a class="arrow flaticon-right-arrow-3" href="{{ route('initiatives.legal-institutional-reform', ['locale' => app()->getLocale()]) }}"></a>
                        </div>
                    </div>

                    <!-- Practice Block -->
                    <div class="practice-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon flaticon-handcuffs-1"></div>
                            <h5><a href="{{ route('initiatives.justice-sector-transformation', ['locale' => app()->getLocale()]) }}">{{ __('messages.services.communityDev') }}</a></h5>
                            <div class="text">{{ Str::limit(__('messages.services.communityDevDesc'), 85) }}</div>
                            <a class="arrow flaticon-right-arrow-3" href="{{ route('initiatives.justice-sector-transformation', ['locale' => app()->getLocale()]) }}"></a>
                        </div>
                    </div>

                    <!-- Practice Block -->
                    <div class="practice-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon flaticon-save-money"></div>
                            <h5><a href="{{ route('resources.services', ['locale' => app()->getLocale()]) }}">{{ __('messages.services.womenEmpowerment') }}</a></h5>
                            <div class="text">{{ Str::limit(__('messages.services.womenEmpowermentDesc'), 85) }}</div>
                            <a class="arrow flaticon-right-arrow-3" href="{{ route('resources.services', ['locale' => app()->getLocale()]) }}"></a>
                        </div>
                    </div>

                    <!-- Practice Block -->
                    <div class="practice-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon flaticon-injury"></div>
                            <h5><a href="{{ route('resources.laws', ['locale' => app()->getLocale()]) }}">{{ __('messages.services.goodGovernance') }}</a></h5>
                            <div class="text">{{ Str::limit(__('messages.services.goodGovernanceDesc'), 85) }}</div>
                            <a class="arrow flaticon-right-arrow-3" href="{{ route('resources.laws', ['locale' => app()->getLocale()]) }}"></a>
                        </div>
                    </div>

                    <!-- Practice Block -->
                    <div class="practice-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon flaticon-law"></div>
                            <h5><a href="{{ route('publications.strategy', ['locale' => app()->getLocale()]) }}">{{ __('messages.services.peaceBuilding') }}</a></h5>
                            <div class="text">{{ Str::limit(__('messages.services.peaceBuildingDesc'), 85) }}</div>
                            <a class="arrow flaticon-right-arrow-3" href="{{ route('publications.strategy', ['locale' => app()->getLocale()]) }}"></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Practice Section -->

    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>{{ __('messages.leaders.title') }} {{ __('messages.leaders.titleHighlight') }}</h2>
            </div>
            <div class="inner-container">
                <div class="row clearfix">

                    <div class="team-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="{{ route('departments.minister', ['locale' => app()->getLocale()]) }}">
                                    <img src="{{ asset('images/leaders/asker-mahammad.jpg') }}" alt="{{ __('messages.leaders.leader1Name') }}">
                                </a>
                            </div>
                            <div class="lower-content">
                                <h4><a href="{{ route('departments.minister', ['locale' => app()->getLocale()]) }}">{{ __('messages.leaders.leader1Name') }}</a></h4>
                                <div class="designation">{{ __('messages.leaders.leader1Position') }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="{{ route('about.leadership', ['locale' => app()->getLocale()]) }}">
                                    <img src="{{ asset('images/leaders/mahammad-ali-helem.jpg') }}" alt="{{ __('messages.leaders.leader2Name') }}">
                                </a>
                            </div>
                            <div class="lower-content">
                                <h4><a href="{{ route('about.leadership', ['locale' => app()->getLocale()]) }}">{{ __('messages.leaders.leader2Name') }}</a></h4>
                                <div class="designation">{{ __('messages.leaders.leader2Position') }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="{{ route('about.leadership', ['locale' => app()->getLocale()]) }}">
                                    <img src="{{ asset('images/leaders/abdusalih-humo.jpg') }}" alt="{{ __('messages.leaders.leader3Name') }}">
                                </a>
                            </div>
                            <div class="lower-content">
                                <h4><a href="{{ route('about.leadership', ['locale' => app()->getLocale()]) }}">{{ __('messages.leaders.leader3Name') }}</a></h4>
                                <div class="designation">{{ __('messages.leaders.leader3Position') }}</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Team Section -->

    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>{{ __('messages.news.title') }} {{ __('messages.news.titleHighlight') }}</h2>
            </div>
            <div class="row clearfix">

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="{{ route('briefing.news', ['locale' => app()->getLocale()]) }}">
                                <img src="{{ asset('images/news/news-1.jpg') }}" alt="{{ __('messages.news.item1Title') }}">
                            </a>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><span class="icon flaticon-calendar-1"></span> {{ now()->format('M d, Y') }}</li>
                            </ul>
                            <h4><a href="{{ route('briefing.news', ['locale' => app()->getLocale()]) }}">{{ __('messages.news.item1Title') }}</a></h4>
                            <div class="text">{{ Str::limit(__('messages.news.item1Desc'), 120) }}</div>
                            <a href="{{ route('briefing.news', ['locale' => app()->getLocale()]) }}" class="read-more">{{ __('messages.news.readMore') }} <span class="arrow flaticon-right"></span></a>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="{{ route('briefing.news', ['locale' => app()->getLocale()]) }}">
                                <img src="{{ asset('images/news/news-2.jpg') }}" alt="{{ __('messages.news.item2Title') }}">
                            </a>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><span class="icon flaticon-calendar-1"></span> {{ now()->subDays(3)->format('M d, Y') }}</li>
                            </ul>
                            <h4><a href="{{ route('briefing.news', ['locale' => app()->getLocale()]) }}">{{ __('messages.news.item2Title') }}</a></h4>
                            <div class="text">{{ Str::limit(__('messages.news.item2Desc'), 120) }}</div>
                            <a href="{{ route('briefing.news', ['locale' => app()->getLocale()]) }}" class="read-more">{{ __('messages.news.readMore') }} <span class="arrow flaticon-right"></span></a>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="{{ route('briefing.news', ['locale' => app()->getLocale()]) }}">
                                <img src="{{ asset('images/news/news-3.jpg') }}" alt="{{ __('messages.news.item3Title') }}">
                            </a>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><span class="icon flaticon-calendar-1"></span> {{ now()->subDays(7)->format('M d, Y') }}</li>
                            </ul>
                            <h4><a href="{{ route('briefing.news', ['locale' => app()->getLocale()]) }}">{{ __('messages.news.item3Title') }}</a></h4>
                            <div class="text">{{ Str::limit(__('messages.news.item3Desc'), 120) }}</div>
                            <a href="{{ route('briefing.news', ['locale' => app()->getLocale()]) }}" class="read-more">{{ __('messages.news.readMore') }} <span class="arrow flaticon-right"></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End News Section -->

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="image">
                    <img src="{{ asset('images/gallery/gallery-09.jpg') }}" alt="{{ __('messages.cta.title') }}">
                </div>
                <div class="content">
                    <h2>{{ __('messages.cta.title') }} <br> {{ __('messages.cta.titleHighlight') }}</h2>
                    <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-two">
                        <span class="txt">{{ __('messages.cta.button') }} <i class="arrow flaticon-right"></i></span>
                    </a>
                </div>
                <div class="hammer-image">
                    <img src="{{ asset('counsel/images/resource/hammer.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End CTA Section -->

@endsection
