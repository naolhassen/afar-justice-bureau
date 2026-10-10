@extends('layouts.app')

@section('content')
    <x-page-hero
        title="{{ __('messages.pages.visionMission.title') }}"
        titleHighlight="{{ __('messages.pages.visionMission.titleHighlight') }}"
        description="{{ __('messages.pages.visionMission.description') ?? 'The institutional compass, guiding principles, and public commitments of the Afar National Regional State Justice Bureau.' }}"
    />

    <section class="civic-section">
        <div class="auto-container">
            <!-- Vision and Mission Side-by-Side Cards -->
            <div class="row g-4 mb-5">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="civic-card h-100" style="border-top: 4px solid var(--afar-accent);">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div style="width: 52px; height: 52px; border-radius: 14px; background: rgba(201, 151, 56, 0.15); color: var(--afar-accent); display: flex; align-items: center; justify-content: center; font-size: 22px;">
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
                                <span class="civic-badge civic-badge-green" style="font-size: 10px;">Mandate and Purpose</span>
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
                            'title' => 'We Work as Servants!',
                            'desc' => 'Approaching our public mandate with humility, dedicated civic service, and responsive assistance to every citizen.',
                            'icon' => 'fa-users',
                            'accent' => 'var(--afar-accent)',
                        ],
                        [
                            'amharic' => 'በቅንነት እንፈጽማለን!',
                            'title' => 'We Do Things Sincerely!',
                            'desc' => 'Upholding strict impartiality, ethical truthfulness, and transparency in all prosecutorial and legal actions.',
                            'icon' => 'fa-heart',
                            'accent' => 'var(--afar-navy)',
                        ],
                        [
                            'amharic' => 'ለልሕቀት እንተጋለን!',
                            'title' => 'We Get to the Bottom of Things!',
                            'desc' => 'Delivering rigorous legal research, high-quality legislative drafting, and professional prosecutorial competence.',
                            'icon' => 'fa-trophy',
                            'accent' => 'var(--afar-green)',
                        ],
                        [
                            'amharic' => 'ለለውጥ እንበረታለን!',
                            'title' => 'We\'re Committed to Change!',
                            'desc' => 'Steering modernization, embracing digital justice infrastructure, and continuously reforming procedures.',
                            'icon' => 'fa-refresh',
                            'accent' => 'var(--afar-navy-2)',
                        ],
                        [
                            'amharic' => 'በሕብረት እንፈጥናለን!',
                            'title' => 'Let\'s Move Forward Together!',
                            'desc' => 'Strengthening harmonious collaboration between statutory courts, regional police, and customary Mad\'aa arbiters.',
                            'icon' => 'fa-handshake-o',
                            'accent' => 'var(--afar-accent-dark)',
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

            <!-- Powers and Responsibilities -->
            <div class="sec-title text-center mb-4" style="margin-top: 48px;">
                <span class="civic-badge civic-badge-gold mb-2">Legal Mandate</span>
                <h2 style="font-size: clamp(1.8rem, 2.8vw, 2.5rem); font-weight: 800; color: var(--afar-navy);">
                    Powers and Responsibilities
                </h2>
                <div class="text" style="max-width: 680px; margin: 10px auto 0; font-size: 0.95rem; color: var(--afar-muted);">
                    The statutory powers and responsibilities vested in the Afar National Regional State Justice Bureau.
                </div>
            </div>

            <div class="row g-4">
                @php
                    $powers = [
                        [
                            'title_en' => 'Regarding Studying and Training in Law',
                            'title_am' => 'የሕግ ጥናትና ሥልጠናን በተመለከተ',
                            'desc' => 'They do research on how well things work, set up and manage a system for collecting criminal justice data, and provide training and education to help prosecutors improve their mindset, knowledge, and skills.',
                            'icon' => 'fa-graduation-cap',
                            'color' => 'var(--afar-accent)',
                        ],
                        [
                            'title_en' => 'Regarding Drafting and Organizing Laws',
                            'title_am' => 'የሕግ ማርቀቅ እና ማጠቃለል ሥራን በተመለከተ',
                            'desc' => 'They handle drafting laws issued by the regional government, prepare draft laws when asked by regional government offices, make sure drafts from government bodies follow the Constitution and both federal and state laws, review legal changes, and compile and summarize laws.',
                            'icon' => 'fa-file-signature',
                            'color' => 'var(--afar-navy)',
                        ],
                        [
                            'title_en' => 'Regarding the Criminal Case',
                            'title_am' => 'የወንጀል ጉዳይን በተመለከተ',
                            'desc' => 'Putting criminal justice policies into action; starting, overseeing, and coordinating criminal investigations; prosecuting criminal cases under state jurisdiction; handling delegated federal cases; recovering related assets; and carrying out court decisions and orders.',
                            'icon' => 'fa-gavel',
                            'color' => 'var(--afar-green)',
                        ],
                        [
                            'title_en' => 'Enforcement of Federal and State Laws',
                            'title_am' => 'የፌዴራልና የክልሉ ሕጎች ተፈጻሚነትን በተመለከተ',
                            'desc' => 'Making sure federal and regional laws are applied consistently, that regional government offices follow the law, and providing legal training to officials, candidates, employees, and private sector participants when needed.',
                            'icon' => 'fa-shield-halved',
                            'color' => 'var(--afar-accent)',
                        ],
                        [
                            'title_en' => 'Regarding Human Rights',
                            'title_am' => 'ሰብዓዊ መብትን በተመለከተ',
                            'desc' => 'Creating human rights education and awareness programs, providing independent legal aid, implementing a national human rights action plan, visiting police stations and prisons to ensure legal treatment, and enforcing international human rights treaties.',
                            'icon' => 'fa-hand-holding-heart',
                            'color' => 'var(--afar-navy)',
                        ],
                        [
                            'title_en' => 'Registration of Lawyers and Associations',
                            'title_am' => 'የክልሉ ሰነዶች ማረጋገጥ ጠበቆችና ማህበራት ምዝገባና ክትትል በተመለከተ',
                            'desc' => 'Authorized to verify documents, handle registration, licensing, supervision, and management of advocacy services, and oversee associations.',
                            'icon' => 'fa-id-card',
                            'color' => 'var(--afar-green)',
                        ],
                        [
                            'title_en' => 'Coordination of Accountable Institutions',
                            'title_am' => 'ተጠሪ ተቋማትን ማስተባበር በተመለከተ',
                            'desc' => 'Coordinates correctional and rehabilitation works, and manages the registration of vital events.',
                            'icon' => 'fa-sitemap',
                            'color' => 'var(--afar-navy)',
                        ],
                    ];
                @endphp

                @foreach($powers as $power)
                    <div class="col-lg-6 col-md-6 mb-3">
                        <div class="civic-card h-100" style="border-top: 3px solid {{ $power['color'] }}; padding: 24px;">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div style="width: 44px; height: 44px; border-radius: 12px; background: {{ $power['color'] }}12; color: {{ $power['color'] }}; display: flex; align-items: center; justify-content: center; font-size: 18px;">
                                    <i class="fa-solid {{ $power['icon'] }}"></i>
                                </div>
                                <div>
                                    <h5 style="font-weight: 800; color: var(--afar-navy); font-size: 1.05rem; margin: 0; line-height: 1.3;">
                                        {{ $power['title_en'] }}
                                    </h5>
                                    <div style="font-size: 0.8rem; color: var(--afar-accent-dark); font-weight: 600; margin-top: 2px;">
                                        {{ $power['title_am'] }}
                                    </div>
                                </div>
                            </div>
                            <p style="font-size: 0.9rem; line-height: 1.65; color: var(--afar-muted); margin: 0;">
                                {{ $power['desc'] }}
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
