@extends('layouts.app')

@section('content')
    <x-page-hero
        title="{{ __('messages.pages.visionMission.title') }}"
        titleHighlight="{{ __('messages.pages.visionMission.titleHighlight') }}"
        description="{{ __('messages.pages.visionMission.description') ?? 'The institutional compass, guiding principles, and public commitments of the Afar National Regional State Justice Bureau.' }}"
    />

    <section class="civic-section">
        <div class="auto-container">
            <!-- Vision & Mission Side-by-Side Cards -->
            <div class="row g-4 mb-5">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="civic-card h-100" style="border-top: 4px solid var(--afar-gold);">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div style="width: 52px; height: 52px; border-radius: 14px; background: rgba(201, 151, 56, 0.15); color: var(--afar-gold); display: flex; align-items: center; justify-content: center; font-size: 22px;">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div>
                                <span class="civic-badge civic-badge-gold" style="font-size: 10px;">Strategic Horizon</span>
                                <h3 style="font-weight: 800; color: var(--afar-navy); margin: 4px 0 0; font-size: 1.5rem;">
                                    {{ __('messages.pages.visionMission.vision') }}
                                </h3>
                            </div>
                        </div>
                        <p style="font-size: 1.05rem; line-height: 1.85; color: var(--afar-ink); margin-bottom: 0;">
                            {{ __('messages.pages.visionMission.visionText') }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="civic-card h-100" style="border-top: 4px solid var(--afar-green);">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div style="width: 52px; height: 52px; border-radius: 14px; background: rgba(11, 122, 90, 0.12); color: var(--afar-green); display: flex; align-items: center; justify-content: center; font-size: 22px;">
                                <i class="fa fa-compass"></i>
                            </div>
                            <div>
                                <span class="civic-badge civic-badge-green" style="font-size: 10px;">Mandate & Purpose</span>
                                <h3 style="font-weight: 800; color: var(--afar-navy); margin: 4px 0 0; font-size: 1.5rem;">
                                    {{ __('messages.pages.visionMission.mission') }}
                                </h3>
                            </div>
                        </div>
                        <p style="font-size: 1.05rem; line-height: 1.85; color: var(--afar-ink); margin-bottom: 0;">
                            {{ __('messages.pages.visionMission.missionText') }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Authentic 5 Core Values -->
            <div class="sec-title text-center mb-4">
                <span class="civic-badge civic-badge-navy mb-2">Institutional Ethics</span>
                <h2 style="font-size: clamp(1.8rem, 2.8vw, 2.5rem); font-weight: 800; color: var(--afar-navy);">
                    {{ __('messages.pages.visionMission.values') }}
                </h2>
                <div class="text" style="max-width: 680px; margin: 10px auto 0; font-size: 0.95rem; color: var(--afar-muted);">
                    Five foundational commitments that govern every prosecutor, legal officer, and administrative staff member of the Bureau.
                </div>
            </div>

            <div class="row g-3 justify-content-center">
                @php
                    $valuesList = [
                        [
                            'amharic' => 'በአገልጋይነት እንሰራለን!',
                            'title' => 'We Work as Servants',
                            'desc' => 'Approaching our public mandate with humility, dedicated civic service, and responsive assistance to every citizen.',
                            'icon' => 'fa-users',
                            'accent' => 'var(--afar-gold)',
                        ],
                        [
                            'amharic' => 'በቅንነት እንፈጽማለን!',
                            'title' => 'We Act Sincerity & Integrity',
                            'desc' => 'Upholding strict impartiality, ethical truthfulness, and transparency in all prosecutorial and legal actions.',
                            'icon' => 'fa-heart',
                            'accent' => 'var(--afar-navy)',
                        ],
                        [
                            'amharic' => 'ለልሕቀት እንተጋለን!',
                            'title' => 'We Strive for Excellence',
                            'desc' => 'Delivering rigorous legal research, high-quality legislative drafting, and professional prosecutorial competence.',
                            'icon' => 'fa-trophy',
                            'accent' => 'var(--afar-green)',
                        ],
                        [
                            'amharic' => 'ለለውጥ እንበረታለን!',
                            'title' => 'We Embrace Reform',
                            'desc' => 'Steering modernization, embracing digital justice infrastructure, and continuously reforming procedures.',
                            'icon' => 'fa-refresh',
                            'accent' => 'var(--afar-navy-2)',
                        ],
                        [
                            'amharic' => 'በሕብረት እንፈጥናለን!',
                            'title' => 'We Advance Together in Unity',
                            'desc' => 'Strengthening harmonious collaboration between statutory courts, regional police, and customary Mad\'aa arbiters.',
                            'icon' => 'fa-handshake-o',
                            'accent' => 'var(--afar-gold-dark)',
                        ],
                    ];
                @endphp

                @foreach ($valuesList as $val)
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="civic-card h-100" style="padding: 26px 22px; border-left: 4px solid {{ $val['accent'] }};">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div style="width: 42px; height: 42px; border-radius: 10px; background: rgba(10,34,54,0.06); color: {{ $val['accent'] }}; display: flex; align-items: center; justify-content: center; font-size: 18px;">
                                    <i class="fa {{ $val['icon'] }}"></i>
                                </div>
                                <div>
                                    <div style="font-size: 11px; font-weight: 800; color: {{ $val['accent'] }}; letter-spacing: 0.04em;">
                                        {{ $val['amharic'] }}
                                    </div>
                                    <h5 style="font-weight: 800; color: var(--afar-navy); font-size: 1.05rem; margin: 2px 0 0;">
                                        {{ $val['title'] }}
                                    </h5>
                                </div>
                            </div>
                            <p style="font-size: 0.88rem; line-height: 1.6; color: var(--afar-muted); margin-bottom: 0;">
                                {{ $val['desc'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Citizen Commitment Banner -->
            <div style="margin-top: 36px; background: linear-gradient(135deg, var(--afar-navy) 0%, var(--afar-navy-2) 100%); border-radius: 20px; padding: 36px; color: #ffffff; text-align: center; border: 1px solid rgba(201, 151, 56, 0.3);">
                <h4 style="color: #ffffff; font-weight: 800; font-size: 1.5rem; margin-bottom: 10px;">
                    Our Pledge to the People of Afar
                </h4>
                <p style="max-width: 780px; margin: 0 auto 20px; color: rgba(255,255,255,0.85); font-size: 0.98rem; line-height: 1.7;">
                    "Upholding the rule of law, defending constitutional rights, and guaranteeing that justice is never a privilege of the few, but the universal right of every pastoralist and citizen."
                </p>
                <a href="{{ route('about.leadership', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-one">
                    <span class="txt">Meet Bureau Leadership &rarr;</span>
                </a>
            </div>
        </div>
    </section>
@endsection
