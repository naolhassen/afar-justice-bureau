@extends('layouts.app')

@section('content')

    <!-- ====== HERO SECTION – Cinematic Full-Viewport ====== -->
    <section class="hero-cinematic" id="hero" aria-label="Hero banner">

        <!-- Slide track -->
        <div class="hero-slides" id="heroSlides">

            @if($latestNews->count() > 0)
                @foreach($latestNews as $index => $news)
                    <div class="hero-slide {{ $index === 0 ? 'active' : '' }}" style="--hero-bg: url('{{ $news->image ? (Str::startsWith($news->image, 'uploads/') ? asset('storage/' . $news->image) : asset($news->image)) : asset('images/gallery/gallery-11.jpg') }}')">
                        <div class="hero-slide-inner auto-container">
                            <div class="hero-pillar" aria-hidden="true"><div class="hero-pillar-center"></div></div>
                            <div class="hero-content">
                                <div class="hero-tag">
                                    <span class="hero-eyebrow">{{ __('messages.news.sectionTag') }}</span>
                                    <span class="hero-date"><i class="fa fa-calendar"></i> {{ ($news->published_at ?? $news->created_at)->format('M d, Y') }}</span>
                                </div>
                                <h1 class="hero-headline">
                                    {{ Str::limit($news->title, 80) }}
                                </h1>
                                <p class="hero-sub">{{ Str::limit(strip_tags($news->excerpt ?? $news->body), 160) }}</p>
                                <div class="hero-actions">
                                    <a href="{{ route('briefing.news.show', ['locale' => app()->getLocale(), 'id' => $news->id]) }}" class="hero-btn hero-btn--primary">
                                        {{ __('messages.news.readMore') }} <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <!-- Fallback slide if no news -->
                <div class="hero-slide active" style="--hero-bg: url('{{ asset('images/gallery/gallery-11.jpg') }}')">
                    <div class="hero-slide-inner auto-container">
                        <div class="hero-pillar" aria-hidden="true"><div class="hero-pillar-center"></div></div>
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
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div><!-- /.hero-slides -->

        <!-- Slide controls -->
        <div class="hero-controls" aria-label="Slide controls">
            <button class="hero-ctrl" id="heroPrev" aria-label="Previous slide"><i class="fa fa-chevron-left"></i></button>
            <div class="hero-dots" id="heroDots" role="tablist">
                @if($latestNews->count() > 0)
                    @foreach($latestNews as $index => $news)
                        <button class="hero-dot {{ $index === 0 ? 'active' : '' }}" aria-selected="{{ $index === 0 ? 'true' : 'false' }}" data-slide="{{ $index }}"></button>
                    @endforeach
                @else
                    <button class="hero-dot active" aria-selected="true" data-slide="0"></button>
                @endif
            </div>
            <button class="hero-ctrl" id="heroNext" aria-label="Next slide"><i class="fa fa-chevron-right"></i></button>
        </div>

        <!-- Strategic Initiatives strip -->
        @php
            $heroInitiatives = [
                ['route' => 'initiatives.justice-sector-transformation', 'title_en' => 'Justice Sector Transformation', 'title_am' => 'የፍትህ ዘርፍ ትራንስፎርሜሽን'],
                ['route' => 'initiatives.transitional-justice', 'title_en' => 'Transitional Justice', 'title_am' => 'ትንሳሕተኛ ፍትህ'],
                ['route' => 'initiatives.legal-institutional-reform', 'title_en' => 'Legal & Institutional Reform', 'title_am' => 'የሕግና የተቋማዊ ማሻሻያ'],
                ['route' => 'publications.strategy', 'title_en' => '5-Year Strategic Plan', 'title_am' => 'የ5 ዓመት ስትራቴጂክ ዕቅድ'],
            ];
        @endphp
        <div class="hero-stats">
            @foreach($heroInitiatives as $index => $init)
                <a href="{{ route($init['route'], ['locale' => app()->getLocale()]) }}" class="hero-stat" style="text-decoration: none;">
                    <strong><i class="fa fa-angle-right"></i></strong>
                    <span>{{ app()->getLocale() === 'am' ? $init['title_am'] : $init['title_en'] }}</span>
                </a>
                @if($index < count($heroInitiatives) - 1)
                    <div class="hero-stat-sep" aria-hidden="true"></div>
                @endif
            @endforeach
        </div>

    </section>
    <!-- ====== END HERO SECTION ====== -->

    <!-- Bureau Head Message Section -->
    <section class="bureau-message-section">
        <div class="auto-container">
            <div class="inner-box">
                <div class="message-photo">
                    <img src="{{ asset('images/leaders/asker-mahammad.jpg') }}" alt="{{ __('messages.leaders.leader1Name') }}">
                </div>
                <div class="message-text">
                    <div class="message-header">
                        <span class="message-badge">{{ __('messages.leaders.title') }}</span>
                        <h2>{{ __('messages.leaders.leader1Name') }}</h2>
                        <div class="message-position">{{ __('messages.leaders.leader1Position') }}</div>
                    </div>
                    <div class="message-body">
                        <p>{{ __('messages.about.description') }}</p>
                    </div>
                    <div class="message-footer">
                        <a href="{{ route('departments.minister', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-one">
                            <span class="txt">{{ __('messages.about.learnMore') }} <i class="arrow flaticon-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Bureau Head Message Section -->

    @push('scripts')
    <script>
    (function(){
        var hero   = document.getElementById('hero');
        var slides = hero.querySelectorAll('.hero-slide');
        var dots   = hero.querySelectorAll('.hero-dot');
        var total  = slides.length;
        if (!total) return;

        var cur     = 0;
        var timer   = null;
        var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        function goTo(n) {
            slides[cur].classList.remove('active');
            dots[cur].classList.remove('active');
            dots[cur].setAttribute('aria-selected', 'false');
            cur = ((n % total) + total) % total;
            slides[cur].classList.add('active');
            dots[cur].classList.add('active');
            dots[cur].setAttribute('aria-selected', 'true');
        }

        function play() { if (total > 1 && !reduced) timer = setInterval(function(){ goTo(cur + 1); }, 6000); }
        function stop() { clearInterval(timer); timer = null; }
        function reset() { stop(); play(); }

        if (total <= 1) {
            hero.querySelector('.hero-controls').style.display = 'none';
        } else {
            document.getElementById('heroNext').addEventListener('click', function(){ goTo(cur + 1); reset(); });
            document.getElementById('heroPrev').addEventListener('click', function(){ goTo(cur - 1); reset(); });
            dots.forEach(function(d){ d.addEventListener('click', function(){ goTo(+d.dataset.slide); reset(); }); });

            hero.addEventListener('mouseenter', stop);
            hero.addEventListener('mouseleave', play);

            var x0 = null;
            hero.addEventListener('touchstart', function(e){ x0 = e.touches[0].clientX; }, {passive: true});
            hero.addEventListener('touchend', function(e){
                if (x0 === null) return;
                var dx = e.changedTouches[0].clientX - x0;
                if (Math.abs(dx) > 40) { goTo(cur + (dx < 0 ? 1 : -1)); reset(); }
                x0 = null;
            }, {passive: true});
        }

        play();
    })();
    </script>
    @endpush

    <!-- News Section (DB-driven, 6 items) -->
    @if($homeNews->count() > 0)
    <section class="news-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>{{ __('messages.news.title') }} {{ __('messages.news.titleHighlight') }}</h2>
            </div>
            <div class="row clearfix">

                @foreach($homeNews as $index => $newsItem)
                    @php $newsUrl = route('briefing.news.show', ['locale' => app()->getLocale(), 'id' => $newsItem->id]); @endphp
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow {{ $index % 3 === 0 ? 'fadeInLeft' : ($index % 3 === 1 ? 'fadeInUp' : 'fadeInRight') }}" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="{{ $newsUrl }}">
                                    <img src="{{ $newsItem->image ? (Str::startsWith($newsItem->image, 'uploads/') ? asset('storage/' . $newsItem->image) : asset($newsItem->image)) : asset('images/news/news-' . (($index % 3) + 1) . '.jpg') }}" alt="{{ $newsItem->title }}">
                                </a>
                            </div>
                            <div class="lower-content">
                                <ul class="post-meta">
                                    <li><span class="icon flaticon-calendar-1"></span> {{ ($newsItem->published_at ?? $newsItem->created_at)->format('M d, Y') }}</li>
                                </ul>
                                <h4><a href="{{ $newsUrl }}">{{ Str::limit($newsItem->title, 70) }}</a></h4>
                                <div class="text">{{ Str::limit(strip_tags($newsItem->excerpt ?? $newsItem->body), 120) }}</div>
                                <a href="{{ $newsUrl }}" class="read-more">{{ __('messages.news.readMore') }} <span class="arrow flaticon-right"></span></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    @endif
    <!-- End News Section -->

    <!-- Welcome Section -->
    <section class="welcome-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image" data-tilt data-tilt-max="3">
                            <img src="{{ asset('images/gallery/bureau-welcome.jpg') }}" alt="{{ __('messages.about.title') }}">
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

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Welcome Section -->

    <!-- Strategic Initiatives Section -->
    <section class="counter-section">
        <div class="image-layer" style="background-image: url({{ asset('images/gallery/counter-bg.jpg') }})"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title light centered">
                <h2>{{ app()->getLocale() === 'am' ? 'ስትራቴጂካዊ ተግባራት' : 'Strategic Initiatives' }}</h2>
                <div class="text">{{ app()->getLocale() === 'am' ? 'የአፋር ክልል ፍትህ ቢሮ በርካታ ስትራቴጂካዊ ተግባራትን በመተባበር እየተግባራዊ ያደርጋል።' : 'The Afar Regional Justice Bureau is advancing coordinated strategic initiatives across the justice sector.' }}</div>
            </div>

            <div class="fact-counter">
                <div class="row clearfix justify-content-center">

                    @php
                        $initiatives = [
                            ['route' => 'initiatives.justice-sector-transformation', 'icon' => 'flaticon-briefcase', 'title_en' => 'Justice Sector Transformation', 'title_am' => 'የፍትህ ዘርፍ ትራንስፎርሜሽን'],
                            ['route' => 'initiatives.transitional-justice', 'icon' => 'flaticon-balance', 'title_en' => 'Transitional Justice', 'title_am' => 'ትንሳሕተኛ ፍትህ'],
                            ['route' => 'initiatives.legal-institutional-reform', 'icon' => 'flaticon-law', 'title_en' => 'Legal & Institutional Reform', 'title_am' => 'የሕግና የተቋማዊ ማሻሻያ'],
                            ['route' => 'publications.strategy', 'icon' => 'flaticon-file', 'title_en' => '5-Year Strategic Plan', 'title_am' => 'የ5 ዓመት ስትራቴጂክ ዕቅድ'],
                        ];
                    @endphp

                    @foreach($initiatives as $index => $init)
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <a href="{{ route($init['route'], ['locale' => app()->getLocale()]) }}" class="inner wow {{ $index % 4 === 0 ? 'fadeInLeft' : ($index % 4 === 3 ? 'fadeInRight' : 'fadeInUp') }}" data-wow-delay="0ms" data-wow-duration="1500ms" style="display: block; text-decoration: none;">
                                <div class="content" style="position: relative;">
                                    @if($index === 0)
                                        <span style="position: absolute; top: -12px; right: 10px; background: var(--afar-red); color: #fff; font-size: 10px; font-weight: 700; text-transform: uppercase; padding: 4px 10px; border-radius: 20px;">{{ app()->getLocale() === 'am' ? 'ንቁ' : 'Active' }}</span>
                                    @endif
                                    <div class="icon {{ $init['icon'] }}"></div>
                                    <h6 class="counter-title" style="font-size: 0.95rem; margin-top: 12px; line-height: 1.45;">
                                        {{ app()->getLocale() === 'am' ? $init['title_am'] : $init['title_en'] }}
                                    </h6>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </section>
    <!-- End Strategic Initiatives Section -->

    <!-- Departments Section -->
    <section class="practice-section" style="background-image: url({{ asset('counsel/images/background/pattern-2.png') }})">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>{{ app()->getLocale() === 'am' ? 'ዳይሬክቶሬቶች' : 'Departments' }}</h2>
            </div>
            <div class="inner-container">
                <div class="clearfix">

                    @php
                        $homeDepartments = [
                            ['icon' => 'flaticon-file', 'title_en' => "Office of the Prosecutor's Administration Conference", 'title_am' => 'የዐቃብያነ ህግ አስተዳደር ጉባኤ ጽ/ቤት', 'desc' => 'Coordinates prosecutorial administration, conference planning, and internal governance.'],
                            ['icon' => 'flaticon-balance', 'title_en' => 'Legal Audit, Ethics, and Discipline Monitoring Team', 'title_am' => 'የህግ ኦዲት፣ የስነ-ምግባርና የዲስፕሊን ጉዳዮች መከታተያ ቡድን', 'desc' => 'Oversees legal audit functions and monitors professional conduct and discipline.'],
                            ['icon' => 'flaticon-handcuffs-1', 'title_en' => 'Board of Mercy and Pardons Office', 'title_am' => 'የምህረትና ይቅርታ ቦርድ ጽ/ቤት', 'desc' => 'Handles mercy and pardon matters, reviews petitions, and recommends decisions.'],
                            ['icon' => 'flaticon-save-money', 'title_en' => 'Internal Audit and Control Directorate', 'title_am' => 'የውስጥ ኦዲትና ቁጥጥር ዳይሬክቶሬት', 'desc' => 'Conducts internal audits and ensures financial and operational controls.'],
                            ['icon' => 'flaticon-marketing', 'title_en' => 'Public Relations Directorate', 'title_am' => 'የህዝብ ግንኙነት ጉዳዮች ዳይሬክቶሬት', 'desc' => 'Manages public communications, media relations, and civic engagement.'],
                            ['icon' => 'flaticon-briefcase', 'title_en' => 'Financial Procurement and Asset Management Directorate', 'title_am' => 'የፋይናንስ ግዥና ንብረት አስተዳደር ዳይሮክቶሬት', 'desc' => 'Manages procurement, finance, and bureau assets.'],
                        ];
                    @endphp

                    @foreach($homeDepartments as $dept)
                        <div class="practice-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon {{ $dept['icon'] }}"></div>
                                <h5>
                                    <a href="{{ route('about.departments', ['locale' => app()->getLocale()]) }}">
                                        {{ app()->getLocale() === 'am' ? $dept['title_am'] : $dept['title_en'] }}
                                    </a>
                                </h5>
                                <div class="text">{{ $dept['desc'] }}</div>
                                <a class="arrow flaticon-right-arrow-3" href="{{ route('about.departments', ['locale' => app()->getLocale()]) }}"></a>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="text-center mt-4">
                    <a href="{{ route('about.departments', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-one">
                        <span class="txt">{{ app()->getLocale() === 'am' ? 'ሁሉንም ዳይሬክቶሬቶች ይመልከቱ' : 'View All Departments' }} <i class="arrow flaticon-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Departments Section -->

    <!-- Announcements Section -->
    @if($latestAnnouncements->count() > 0)
    <section class="services-section announcements-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>{{ __('messages.announcements.title') }} {{ __('messages.announcements.titleHighlight') }}</h2>
            </div>
            <div class="inner-container">
                <div class="row clearfix">

                    @foreach($latestAnnouncements as $index => $announcement)
                        <div class="services-block col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-box wow {{ $index % 2 === 0 ? 'fadeInLeft' : 'fadeInRight' }}" data-wow-delay="{{ ($index % 2) * 150 }}ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon flaticon-marketing"></div>
                                    <h4><a href="{{ route('briefing.press-release', ['locale' => app()->getLocale()]) }}">{{ Str::limit($announcement->title, 60) }}</a></h4>
                                    <div class="announcement-date"><i class="fa fa-calendar"></i> {{ ($announcement->published_at ?? $announcement->created_at)->format('M d, Y') }}</div>
                                    <div class="text">{{ Str::limit(strip_tags($announcement->excerpt ?? $announcement->body), 110) }}</div>
                                </div>
                                <a href="{{ route('briefing.press-release', ['locale' => app()->getLocale()]) }}" class="arrow flaticon-right"></a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- End Announcements Section -->

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

@endsection
