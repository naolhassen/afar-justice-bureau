@extends('layouts.app')

@section('content')
@php
$locale = app()->getLocale();
@endphp

<!--===== HERO AREA STARTS =======-->
<div class="hero3" style="background-image: url({{ asset('assets/img/all-images/bg/hero-bg2.png') }}); background-position: center bottom; background-repeat: no-repeat; background-size: cover;">
  <img src="{{ asset('assets/img/elements/elements16.png') }}" alt="" class="elements16 aniamtion-key-1">
  <img src="{{ asset('assets/img/elements/elements17.png') }}" alt="" class="elements17 aniamtion-key-1">
  <img src="{{ asset('assets/img/elements/elements18.png') }}" alt="" class="elements18">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xl-7">
        <div class="heading2">
          <h1 class="vl-section-title text-dark" data-aos="fade-left" data-aos-duration="1000">
              {{ __('messages.hero.title') }} <span style="color: #9b59b6;">{{ __('messages.hero.titleHighlight') }}</span>
          </h1>
          <div class="space16"></div>
          <p class="text-white-50" data-aos="fade-left" data-aos-duration="1000">
              {{ __('messages.hero.description') }}
          </p>
          <div class="space32"></div>
          <div class="btn-area1" data-aos="fade-left" data-aos-duration="1200">
            <a href="{{ route('briefing.news', ['locale' => $locale]) }}" class="vl-btn1">
                {{ __('messages.hero.cta') }} <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="{{ route('about.vision-mission', ['locale' => $locale]) }}" class="vl-btn2">
                {{ __('messages.hero.secondaryCta') }} <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-xl-5">
        <div class="hero-img" data-aos="zoom-in-up" data-aos-duration="1000">
          <img src="{{ asset('images/hero-img.png') }}" alt="Prosperity Afar" style="max-width: 100%; height: auto; border-radius: 20px;">
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== BRAND / PILLARS SLIDER AREA STARTS =======-->
<div class="others-slider-section">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="brand-slider-area">
          <div class="brand-img" style="display: inline-flex; align-items: center; gap: 10px;">
            <i class="fa-solid fa-star" style="font-size: 24px; color: #fff;"></i>
            <span style="font-family: 'Abyssinica SIL', 'Nyala', 'Ethiopia Jiret', 'Noto Sans Ethiopic', sans-serif; font-size: 20px; font-weight: 700; color: #fff; white-space: nowrap;">ኢትዮጵያ አሸንፋለች!</span>
          </div>
          <div class="brand-img" style="display: inline-flex; align-items: center; gap: 10px;">
            <i class="fa-solid fa-hand-fist" style="font-size: 24px; color: #fff;"></i>
            <span style="font-family: 'Trebuchet MS', 'Lucida Grande', 'Helvetica Neue', Arial, sans-serif; font-size: 20px; font-weight: 700; color: #fff; white-space: nowrap;">Itiyopiya Teyseh!</span>
          </div>
          <div class="brand-img" style="display: inline-flex; align-items: center; gap: 10px;">
            <i class="fa-solid fa-trophy" style="font-size: 24px; color: #fff;"></i>
            <span style="font-family: Georgia, 'Times New Roman', serif; font-size: 20px; font-weight: 700; color: #fff; white-space: nowrap;">Ethiopia Will Win!</span>
          </div>
          <div class="brand-img" style="display: inline-flex; align-items: center; gap: 10px;">
            <i class="fa-solid fa-star" style="font-size: 24px; color: #fff;"></i>
            <span style="font-family: 'Abyssinica SIL', 'Nyala', 'Ethiopia Jiret', 'Noto Sans Ethiopic', sans-serif; font-size: 20px; font-weight: 700; color: #fff; white-space: nowrap;">ኢትዮጵያ አሸንፋለች!</span>
          </div>
          <div class="brand-img" style="display: inline-flex; align-items: center; gap: 10px;">
            <i class="fa-solid fa-hand-fist" style="font-size: 24px; color: #fff;"></i>
            <span style="font-family: 'Trebuchet MS', 'Lucida Grande', 'Helvetica Neue', Arial, sans-serif; font-size: 20px; font-weight: 700; color: #fff; white-space: nowrap;">Itiyopiya Teyseh!</span>
          </div>
          <div class="brand-img" style="display: inline-flex; align-items: center; gap: 10px;">
            <i class="fa-solid fa-trophy" style="font-size: 24px; color: #fff;"></i>
            <span style="font-family: Georgia, 'Times New Roman', serif; font-size: 20px; font-weight: 700; color: #fff; white-space: nowrap;">Ethiopia Will Win!</span>
          </div>
          <div class="brand-img" style="display: inline-flex; align-items: center; gap: 10px;">
            <i class="fa-solid fa-star" style="font-size: 24px; color: #fff;"></i>
            <span style="font-family: 'Abyssinica SIL', 'Nyala', 'Ethiopia Jiret', 'Noto Sans Ethiopic', sans-serif; font-size: 20px; font-weight: 700; color: #fff; white-space: nowrap;">ኢትዮጵያ አሸንፋለች!</span>
          </div>
          <div class="brand-img" style="display: inline-flex; align-items: center; gap: 10px;">
            <i class="fa-solid fa-hand-fist" style="font-size: 24px; color: #fff;"></i>
            <span style="font-family: 'Trebuchet MS', 'Lucida Grande', 'Helvetica Neue', Arial, sans-serif; font-size: 20px; font-weight: 700; color: #fff; white-space: nowrap;">Itiyopiya Teyseh!</span>
          </div>
          <div class="brand-img" style="display: inline-flex; align-items: center; gap: 10px;">
            <i class="fa-solid fa-trophy" style="font-size: 24px; color: #fff;"></i>
            <span style="font-family: Georgia, 'Times New Roman', serif; font-size: 20px; font-weight: 700; color: #fff; white-space: nowrap;">Ethiopia Will Win!</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== BRAND / PILLARS SLIDER AREA ENDS =======-->

<!--===== ABOUT AREA STARTS =======-->
<div class="about3 sp1">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xl-6">
            <div class="about-images-area">
                <img src="{{ asset('assets/img/elements/elements15.png') }}" alt="" class="elements10 aniamtion-key-2">
                <div class="img1 text-end" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('images/gallery/gallery-01.jpg') }}" alt="Gallery">
                </div>
                <div class="experiance-box">
                  <h3><span class="counter">100</span>+</h3>
                  <div class="space8"></div>
                  <p>{{ $locale === 'aa' ? 'Rakaakayak Buxaaxih Oyti' : ($locale === 'am' ? 'የወረዳ እና ቀበሌ መዋቅሮች' : 'Woredas & Kebeles') }}</p>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
          <div class="heading2">
            <h2 class="vl-section-title" data-aos="fade-left" data-aos-duration="1000">
                {{ __('messages.about.title') }} <span style="color: #9b59b6;">{{ __('messages.about.titleHighlight') }}</span>
            </h2>
            <div class="space16"></div>
            <p data-aos="fade-left" data-aos-duration="1100">
                {{ __('messages.about.description') }}
            </p>
            <div class="space12"></div>
            <div class="progress-bar-container">
                <div class="progress-item" data-aos="fade-left" data-aos-duration="1000">
                  <div class="label">
                    <span>{{ __('messages.services.economicDev') }}</span>
                    <span>95%</span>
                  </div>
                  <div class="progress">
                    <div class="bar red" style="width: 95%;"></div>
                  </div>
                </div>

                <div class="progress-item" data-aos="fade-left" data-aos-duration="1100">
                  <div class="label">
                    <span>{{ __('messages.services.peaceBuilding') }}</span>
                    <span>90%</span>
                  </div>
                  <div class="progress">
                    <div class="bar red" style="width: 90%;"></div>
                  </div>
                </div>

                <div class="progress-item" data-aos="fade-left" data-aos-duration="1200">
                  <div class="label">
                    <span>{{ __('messages.services.goodGovernance') }}</span>
                    <span>88%</span>
                  </div>
                  <div class="progress">
                    <div class="bar red" style="width: 88%;"></div>
                  </div>
                </div>
              </div>
            <div class="space38"></div>
            <div class="btn-area1" data-aos="fade-left" data-aos-duration="1300">
              <a href="{{ route('about.vision-mission', ['locale' => $locale]) }}" class="vl-btn1">
                  {{ __('messages.nav.visionMission') }} <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
<!--===== ABOUT AREA ENDS =======-->

<!--===== SERVICE / PILLARS AREA STARTS =======-->
<div class="service3 sp1">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 m-auto">
                <div class="heading2 text-center space-margin60">
                  <h2 class="vl-section-title" data-aos="zoom-in-up" data-aos-duration="1000">
                      {{ __('messages.services.title') }} <span style="color: #9b59b6;">{{ __('messages.services.titleHighlight') }}</span>
                  </h2>
                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-xl-12">
            <div class="service3-slider-widget" data-aos="zoom-in-up" data-aos-duration="1000">
              
              <div class="service3-slider-box">
                <div class="img1">
                  <img src="{{ asset('images/gallery/gallery-03.jpg') }}" alt="Gallery">
                </div>
                <div class="content-area">
                  <div class="icons">
                    <img src="{{ asset('assets/img/icons/s3-icons1.svg') }}" alt="">
                  </div>
                  <div class="space24"></div>
                  <a href="{{ route('resources.manifesto', ['locale' => $locale]) }}" class="title">{{ __('messages.services.economicDev') }}</a>
                  <div class="space12"></div>
                  <p>{{ __('messages.services.economicDevDesc') }}</p>
                  <div class="space24"></div>
                  <a href="{{ route('resources.manifesto', ['locale' => $locale]) }}" class="readmore">{{ __('messages.nav.manifesto') }} <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>

              <div class="service3-slider-box">
                <div class="img1">
                  <img src="{{ asset('images/gallery/gallery-04.jpg') }}" alt="Gallery">
                </div>
                <div class="content-area">
                  <div class="icons">
                    <img src="{{ asset('assets/img/icons/s3-icons2.svg') }}" alt="">
                  </div>
                  <div class="space24"></div>
                  <a href="{{ route('resources.party-program', ['locale' => $locale]) }}" class="title">{{ __('messages.services.socialInclusion') }}</a>
                  <div class="space12"></div>
                  <p>{{ __('messages.services.socialInclusionDesc') }}</p>
                  <div class="space24"></div>
                  <a href="{{ route('resources.party-program', ['locale' => $locale]) }}" class="readmore">{{ __('messages.nav.partyProgram') }} <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>

              <div class="service3-slider-box">
                <div class="img1">
                  <img src="{{ asset('images/gallery/gallery-05.jpg') }}" alt="Gallery">
                </div>
                <div class="content-area">
                  <div class="icons">
                    <img src="{{ asset('assets/img/icons/s3-icons3.svg') }}" alt="">
                  </div>
                  <div class="space24"></div>
                  <a href="{{ route('about.structure', ['locale' => $locale]) }}" class="title">{{ __('messages.services.goodGovernance') }}</a>
                  <div class="space12"></div>
                  <p>{{ __('messages.services.goodGovernanceDesc') }}</p>
                  <div class="space24"></div>
                  <a href="{{ route('about.structure', ['locale' => $locale]) }}" class="readmore">{{ __('messages.nav.structure') }} <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>

              <div class="service3-slider-box">
                <div class="img1">
                  <img src="{{ asset('images/gallery/gallery-03.jpg') }}" alt="Gallery">
                </div>
                <div class="content-area">
                  <div class="icons">
                    <img src="{{ asset('assets/img/icons/s3-icons1.svg') }}" alt="">
                  </div>
                  <div class="space24"></div>
                  <a href="{{ route('about.vision-mission', ['locale' => $locale]) }}" class="title">{{ __('messages.services.peaceBuilding') }}</a>
                  <div class="space12"></div>
                  <p>{{ __('messages.services.peaceBuildingDesc') }}</p>
                  <div class="space24"></div>
                  <a href="{{ route('about.vision-mission', ['locale' => $locale]) }}" class="readmore">{{ __('messages.nav.visionMission') }} <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>

            </div>
          </div>
        </div>
    </div>
</div>
<!--===== SERVICE / PILLARS AREA ENDS =======-->

<!--===== CHOOSE AREA STARTS =======-->
<div class="choose3 sp1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="choose-heading heading2">
                  <h2 class="vl-section-title" data-aos="fade-left" data-aos-duration="1000">
                      {{ __('messages.pages.visionMission.visionTitle') }}
                  </h2>
                  <div class="space16"></div>
                  <p data-aos="fade-left" data-aos-duration="1000">
                      {{ __('messages.pages.visionMission.visionText') }}
                  </p>
                  <div class="row">
                    <div class="col-xl-6 col-md-6">
                      <div class="choose-boxarea" data-aos="fade-left" data-aos-duration="1100">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/ch-icons3.svg') }}" alt="">
                        </div>
                        <div class="space16"></div>
                        <div class="content-area">
                            <a href="{{ route('about.vision-mission', ['locale' => $locale]) }}">{{ __('messages.services.peaceBuilding') }}</a>
                            <div class="space16"></div>
                            <p>{{ __('messages.services.peaceBuildingDesc') }}</p>
                        </div>
                      </div>
                    </div>
                  
                    <div class="col-xl-6 col-md-6">
                      <div class="choose-boxarea" data-aos="fade-left" data-aos-duration="1200">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/ch-icons4.svg') }}" alt="">
                        </div>
                        <div class="space16"></div>
                        <div class="content-area">
                            <a href="{{ route('about.vision-mission', ['locale' => $locale]) }}">{{ __('messages.services.goodGovernance') }}</a>
                            <div class="space16"></div>
                            <p>{{ __('messages.services.goodGovernanceDesc') }}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="space38"></div>
                  <div class="btn-area1">
                      <a href="{{ route('about.formation', ['locale' => $locale]) }}" class="vl-btn1">
                          {{ __('messages.nav.formation') }} <i class="fa-solid fa-arrow-right"></i>
                      </a>
                  </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="choose-images-area">
                    <img src="{{ asset('assets/img/elements/elements15.png') }}" alt="" class="elements10 aniamtion-key-2">
                    <div class="img1" data-aos="fade-right" data-aos-duration="1000">
                        <img src="{{ asset('images/gallery/gallery-06.jpg') }}" alt="Gallery">
                    </div>
                    <div class="img2 text-end" data-aos="fade-left" data-aos-duration="1000">
                        <img src="{{ asset('images/gallery/gallery-07.jpg') }}" alt="Gallery">
                    </div>
                    <div class="experiance-box">
                      <h3><span class="counter">500</span>k+</h3>
                      <div class="space8"></div>
                      <p>{{ $locale === 'aa' ? 'Xisbaqoh Cindam' : ($locale === 'am' ? 'አባላትና ደጋፊዎች' : 'Members & Supporters') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== CHOOSE AREA ENDS =======-->

<!--===== TEAM / LEADERSHIP AREA STARTS =======-->
<div class="team3 sp2">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 m-auto">
                <div class="heading2 text-center space-margin60">
                    <h2 class="vl-section-title" data-aos="zoom-in" data-aos-duration="1000">
                        {{ __('messages.leaders.title') }} <span style="color: #9b59b6;">{{ __('messages.leaders.titleHighlight') }}</span>
                    </h2>
                </div> 
            </div>
        </div>

        <div class="row">
            @php
            $leaders = [
                [
                    'name' => 'messages.leaders.leader1Name',
                    'pos' => 'messages.leaders.leader1Position',
                    'img' => '/images/leaders/mohammed-hussen-alisa.jpg',
                    'delay' => '900',
                    'offset' => '100'
                ],
                [
                    'name' => 'messages.leaders.leader2Name',
                    'pos' => 'messages.leaders.leader2Position',
                    'img' => '/images/leaders/weleo-aytile-hussen.jpg',
                    'delay' => '900',
                    'offset' => '120'
                ],
                [
                    'name' => 'messages.leaders.leader3Name',
                    'pos' => 'messages.leaders.leader3Position',
                    'img' => '/images/leaders/mohammed-aden-mohammed.jpg',
                    'delay' => '900',
                    'offset' => '140'
                ],
            ];
            @endphp

            @foreach ($leaders as $l)
                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-duration="{{ $l['delay'] }}" data-aos-offset="{{ $l['offset'] }}">
                    <div class="team3-widget-boxarea">
                        <div class="team-images">
                            <div class="img1" style="height: 320px; overflow: hidden; border-radius: 16px;">
                                <img src="{{ $l['img'] }}" alt="{{ __($l['name']) }}" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </div>
                        <div class="text-share-area">
                            <div class="text">
                                <a href="{{ route('about.leadership', ['locale' => $locale]) }}">{{ __($l['name']) }}</a>
                                <div class="space14"></div>
                                <p style="color: #9b59b6; font-weight: 500;">{{ __($l['pos']) }}</p>
                            </div>
                            <div class="share">
                                <a href="mailto:prosperityafarbranch@gmail.com"><i class="fa-solid fa-envelope"></i></a>
                            </div>
                        </div>
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-telegram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!--===== TEAM / LEADERSHIP AREA END =======-->

<!--===== BLOG / NEWS AREA STARTS =======-->
<div class="vl-blog-3-area sp2">
  <div class="container">
     <div class="row">
        <div class="col-xl-6 m-auto">
           <div class="heading2 text-center space-margin60">
            <h2 class="vl-section-title" data-aos="zoom-in-up" data-aos-duration="1000">
                {{ __('messages.news.title') }} <span style="color: #9b59b6;">{{ __('messages.news.titleHighlight') }}</span>
            </h2>
          </div>
        </div>
     </div>
     <div class="row">
      <div class="col-xl-6 col-md-6" data-aos="fade-left" data-aos-duration="900">
        <div class="vl-blog-1-item">
           <div class="vl-blog-1-thumb image-anime">
              <img src="{{ asset('images/gallery/gallery-08.jpg') }}" alt="Gallery">
           </div>
           <div class="vl-blog-1-content">
            <div class="vl-blog-meta">
               <ul>
                <li>
                  <a href="#">
                      <i class="fa-solid fa-calendar-days me-1"></i>
                      {{ __('messages.news.item1Date') }}
                  </a>
                </li>
                <li>
                  <a href="#">
                      <i class="fa-solid fa-tag me-1"></i>
                      {{ __('messages.news.item1Category') }}
                  </a>
                </li>
               </ul>
            </div>
            <div class="space16"></div>
            <h4 class="vl-blog-1-title">
                <a href="{{ route('briefing.news', ['locale' => $locale]) }}">{{ __('messages.news.item1Title') }}</a>
            </h4>
            <div class="space12"></div>
            <p>{{ __('messages.news.item1Excerpt') }}</p>
            <div class="space24"></div>
            <div class="vl-blog-1-icon">
              <a href="{{ route('briefing.news', ['locale' => $locale]) }}" class="readmore">
                  {{ __('messages.news.readMore') }} <i class="fa-solid fa-arrow-right"></i>
              </a>
           </div>
         </div>
        </div>
     </div>

     <div class="col-xl-6 col-md-6" data-aos="fade-left" data-aos-duration="1000">
        <div class="vl-blog-1-item">
           <div class="vl-blog-1-thumb image-anime">
              <img src="{{ asset('images/gallery/gallery-09.jpg') }}" alt="Gallery">
           </div>
           <div class="vl-blog-1-content">
            <div class="vl-blog-meta">
              <ul>
                <li>
                  <a href="#">
                      <i class="fa-solid fa-calendar-days me-1"></i>
                      {{ __('messages.news.item2Date') }}
                  </a>
                </li>
                <li>
                  <a href="#">
                      <i class="fa-solid fa-tag me-1"></i>
                      {{ __('messages.news.item2Category') }}
                  </a>
                </li>
              </ul>
            </div>
            <div class="space16"></div>
            <h4 class="vl-blog-1-title">
                <a href="{{ route('briefing.news', ['locale' => $locale]) }}">{{ __('messages.news.item2Title') }}</a>
            </h4>
            <div class="space12"></div>
            <p>{{ __('messages.news.item2Excerpt') }}</p>
            <div class="space24"></div>
            <div class="vl-blog-1-icon">
              <a href="{{ route('briefing.news', ['locale' => $locale]) }}" class="readmore">
                  {{ __('messages.news.readMore') }} <i class="fa-solid fa-arrow-right"></i>
              </a>
           </div>
         </div>
        </div>
     </div>
     </div>
  </div>
</div>
<!--===== BLOG / NEWS AREA ENDS =======-->

<!--===== CTA AREA STARTS =======-->
<div class="cta1-aection-area">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="cta-bg-area">
          <img src="{{ asset('assets/img/elements/elements4.png') }}" alt="" class="elements4">
          <div class="row align-items-center">
            <div class="col-xl-7">
              <div class="cta-heading">
                <h2 data-aos="zoom-in" data-aos-duration="800">
                    {{ __('messages.cta.title') }} <span style="color: #9b59b6;">{{ __('messages.cta.titleHighlight') }}</span>
                </h2>
                <div class="space16"></div>
                <p data-aos="zoom-in" data-aos-duration="900">
                    {{ __('messages.cta.description') }}
                </p>
                <div class="space32"></div>
                <div class="form-area" data-aos="zoom-in" data-aos-duration="1100">
                  <form action="mailto:prosperityafarbranch@gmail.com" method="GET">
                    <input type="email" placeholder="{{ __('messages.footer.email') }}..." required>
                    <button class="vl-btn1" type="submit">{{ __('messages.cta.button') }} <i class="fa-solid fa-arrow-right"></i></button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-xl-5" data-aos="zoom-in" data-aos-duration="1000">
              <div class="cta-images-area text-end d-none d-xl-block">
                <img src="{{ asset('images/gallery/gallery-10.jpg') }}" alt="Prosperity Afar">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== CTA AREA ENDS =======-->

@endsection
