@extends('layouts.app')

@section('content')
    <x-page-hero
        :title="__('messages.pages.leadership.title')"
        :titleHighlight="__('messages.pages.leadership.titleHighlight')"
        :description="__('messages.pages.leadership.description')"
    />

    <section class="civic-section">
        <div class="auto-container">
            <div class="sec-title text-center mb-5">
                <span class="civic-badge civic-badge-navy mb-2">
                    {{ __('messages.leaders.sectionTag') }}
                </span>
                <h2 style="font-size: clamp(2rem, 3vw, 2.8rem); font-weight: 800; color: var(--afar-navy);">
                    {{ __('messages.leaders.title') }} <span>{{ __('messages.leaders.titleHighlight') }}</span>
                </h2>
                <div class="text" style="max-width: 720px; margin: 12px auto 0; font-size: 1rem; color: var(--afar-muted);">
                    Appointed executive officers steering public prosecution, statutory codification, human rights protection, and judicial sector modernization across the Afar Region.
                </div>
            </div>

            <div class="row g-4 justify-content-center">
                @php
                    $leaders = [
                        [
                            'name' => 'messages.leaders.leader1Name',
                            'position' => 'messages.leaders.leader1Position',
                            'sector' => 'Executive Office',
                            'image' => asset('images/leaders/asker-mahammad.jpg'),
                            'link' => route('departments.minister', ['locale' => app()->getLocale()]),
                            'badge' => 'civic-badge-gold',
                            'badgeText' => 'Bureau Head',
                        ],
                        [
                            'name' => 'messages.leaders.leader2Name',
                            'position' => 'messages.leaders.leader2Position',
                            'sector' => 'Legal Services Sector',
                            'image' => asset('images/leaders/mahammad-ali-helem.jpg'),
                            'link' => route('contact', ['locale' => app()->getLocale()]),
                            'badge' => 'civic-badge-navy',
                            'badgeText' => 'Deputy Head',
                        ],
                        [
                            'name' => 'messages.leaders.leader3Name',
                            'position' => 'messages.leaders.leader3Position',
                            'sector' => 'Law Enforcement Sector',
                            'image' => asset('images/leaders/abdusalih-humo.jpg'),
                            'link' => route('contact', ['locale' => app()->getLocale()]),
                            'badge' => 'civic-badge-green',
                            'badgeText' => 'Deputy Head',
                        ],
                    ];
                @endphp

                @foreach ($leaders as $leader)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="civic-card h-100 d-flex flex-column text-center" style="padding: 30px 24px; border-radius: 22px;">
                            <div style="position: relative; margin: 0 auto 20px; width: 220px; height: 260px; overflow: hidden; border-radius: 18px; box-shadow: 0 12px 28px rgba(10,34,54,0.14); border: 3px solid #ffffff;">
                                <img src="{{ $leader['image'] }}" alt="{{ __($leader['name']) }}" style="width: 100%; height: 100%; object-fit: cover; object-position: center top;">
                            </div>
                            <span class="civic-badge {{ $leader['badge'] }} mb-2 mx-auto" style="font-size: 11px;">
                                {{ $leader['badgeText'] }}
                            </span>
                            <h4 style="font-weight: 800; color: var(--afar-navy); font-size: 1.25rem; margin-bottom: 6px;">
                                {{ __($leader['name']) }}
                            </h4>
                            <div style="color: var(--afar-gold-dark); font-weight: 700; font-size: 0.9rem; line-height: 1.4; margin-bottom: 12px;">
                                {{ __($leader['position']) }}
                            </div>
                            <p style="color: var(--afar-muted); font-size: 0.85rem; line-height: 1.6; margin-bottom: 20px; flex-grow: 1;">
                                {{ $leader['sector'] }} &bull; Afar National Regional State Justice Bureau, Semera Headquarters.
                            </p>
                            <div class="pt-3 border-top">
                                @if (isset($leader['link']) && $leader['link'] !== route('contact', ['locale' => app()->getLocale()]))
                                    <a href="{{ $leader['link'] }}" class="theme-btn btn-style-one" style="padding: 8px 20px; font-size: 12px; width: 100%; justify-content: center;">
                                        <span class="txt">View Executive Profile &rarr;</span>
                                    </a>
                                @else
                                    <a href="{{ $leader['link'] }}" class="theme-btn btn-style-two" style="padding: 8px 20px; font-size: 12px; width: 100%; justify-content: center;">
                                        <span class="txt">Contact Office &rarr;</span>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Leadership Mandate Box -->
            <div style="margin-top: 30px; background: #ffffff; border-radius: 20px; border: 1px solid var(--afar-border); padding: 36px; box-shadow: 0 12px 32px rgba(10,34,54,0.05);">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-12 mb-3 mb-lg-0">
                        <h4 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 10px;">Executive Cabinet Responsibilities</h4>
                        <p style="color: var(--afar-muted); font-size: 0.95rem; line-height: 1.7; margin: 0;">
                            The executive leadership functions in direct coordination with the Afar Regional State Administrative Council, the Federal Ministry of Justice, and customary clan councils (<em>Mad'aa</em>) to guarantee uniform enforcement and accessible justice across all woredas.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-12 text-lg-end">
                        <a href="{{ route('about.vision-mission', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-one">
                            <span class="txt">Vision & Values &rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
