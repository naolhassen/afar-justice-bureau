@extends('layouts.app')

@section('content')
    <x-page-hero
        title="{{ __('messages.nav.departments') }}"
        titleHighlight="& Directorates"
        description="Specialized directorates within the Afar National Regional State Justice Bureau, each mandated to deliver specific justice services across the region."
    />

    <section class="civic-section">
        <div class="auto-container">
            <div class="sec-title text-center mb-5">
                <span class="civic-badge civic-badge-navy mb-2">Bureau Structure</span>
                <h2 style="font-size: clamp(2rem, 3vw, 2.8rem); font-weight: 800; color: var(--afar-navy);">
                    {{ __('messages.nav.departments') }}
                </h2>
                <div class="text" style="max-width: 720px; margin: 12px auto 0; font-size: 1rem; color: var(--afar-muted);">
                    The Bureau is organized into 10 specialized directorates to ensure effective justice delivery across the Afar region.
                </div>
            </div>

            <div class="row g-4">
                @php
                    $departments = [
                        [
                            'icon' => 'fa-gavel',
                            'name_en' => 'Office of the Prosecutors\' Administration Conference',
                            'name_am' => 'የዐቃብያነ ህግ አስተዳደር ጉባኤ ጽ/ቤት',
                            'desc' => 'Get the conference office\'s plan and budget ready and send it over to the Justice Office, follow up to get it approved, put it into action once approved, keep an eye on the performance report, and forward it to the relevant department.',
                            'color' => 'var(--afar-accent)',
                        ],
                        [
                            'icon' => 'fa-hand-holding-heart',
                            'name_en' => 'Office of the Board of Mercy and Pardons',
                            'name_am' => 'የምህረትና ይቅርታ ቦርድ ጽ/ቤት',
                            'desc' => 'Put together a plan for the Office, check the performance report regularly, send it to the right department, handle complaints, make sure responses are given, monitor how things are going, and manage annual leave for the professionals and staff under the Office.',
                            'color' => 'var(--afar-navy)',
                        ],
                        [
                            'icon' => 'fa-people-arrows',
                            'name_en' => 'Office of Migration Cooperation Coalition',
                            'name_am' => 'የፍልሰት ትብብር ጥምረት ጽ/ቤት',
                            'desc' => 'Come up with a plan for the Regional Anti-Trafficking Crime Prevention Task Force in collaboration with the members of the Sub-Working Groups and share the plan with each agency that will implement it.',
                            'color' => 'var(--afar-green)',
                        ],
                        [
                            'icon' => 'fa-scale-balanced',
                            'name_en' => 'Criminal Directorate',
                            'name_am' => 'የወንጀል ዳይሬክቶሬት',
                            'desc' => 'Helping out, coordinating, directing, making plans, keeping track of performance reports, and sending them to the right department for the specified criminal cases.',
                            'color' => 'var(--afar-accent)',
                        ],
                        [
                            'icon' => 'fa-landmark',
                            'name_en' => 'Directorate of Corruption and Economic Crimes',
                            'name_am' => 'የሙስናና ኢኮኖሚ ነክ ወንጀል ጉዳዮች ዳይሬክቶሬት',
                            'desc' => 'Helping out, coordinating, directing, making plans, checking performance reports, and sending them to the proper justice departments.',
                            'color' => 'var(--afar-navy)',
                        ],
                        [
                            'icon' => 'fa-shield-halved',
                            'name_en' => 'Directorate of Miscellaneous Criminal Cases',
                            'name_am' => 'የልዩ ልዩ ወንጀል ጉዳዮች ዳይሬክቶሬት',
                            'desc' => 'Making sure that when there\'s enough suspicion about crimes under this Directorate\'s authority, or when someone suggests so, the right investigation is carried out and backed up with enough evidence.',
                            'color' => 'var(--afar-green)',
                        ],
                        [
                            'icon' => 'fa-file-contract',
                            'name_en' => 'Directorate of Civil Affairs',
                            'name_am' => 'የፍትሐብሔር ጉዳዮች ዳይሬክቶሬት',
                            'desc' => 'They support, coordinate, guide, plan, review performance reports, and send them to the relevant departments.',
                            'color' => 'var(--afar-accent)',
                        ],
                        [
                            'icon' => 'fa-book-open',
                            'name_en' => 'Directorate of Legal Studies, Drafting and Dissemination',
                            'name_am' => 'የህግ ጥናት፣ማርቀቅና ማስረጽ ዳይሬክቶሬት',
                            'desc' => 'They make plans, review performance reports on time, and submit them to the relevant department; they also work on improving the knowledge, skills, and attitudes of their staff and make sure results are achieved.',
                            'color' => 'var(--afar-navy)',
                        ],
                        [
                            'icon' => 'fa-users',
                            'name_en' => 'Directorate of Human Rights Affairs and Community Awareness',
                            'name_am' => 'የሰብዓዊ መብት ጉዳዮችና የማህበረሰብ ግንዛቤ ማስጨበጫ ዳይሬክቶሬት',
                            'desc' => 'They support, coordinate, guide, plan, review performance reports, and send them to the relevant department.',
                            'color' => 'var(--afar-green)',
                        ],
                        [
                            'icon' => 'fa-folder-open',
                            'name_en' => 'Directorate of Documents, Bar Associations and Charities Affairs',
                            'name_am' => 'የሰነዶች፣ ጠበቆች ማህበራትና የበጎ አድራጎት ድርጅቶች ጉዳይ ዳይሬክቶሬት',
                            'desc' => 'They support, coordinate, guide, plan, carry out tasks, review performance reports on time, and submit them to the relevant department.',
                            'color' => 'var(--afar-accent)',
                        ],
                    ];
                @endphp

                @foreach($departments as $index => $dept)
                    <div class="col-lg-6 col-md-6 mb-3">
                        <div class="civic-card h-100 d-flex" style="border-left: 5px solid {{ $dept['color'] }}; padding: 28px 24px;">
                            <div class="flex-shrink-0 me-3">
                                <div style="width: 52px; height: 52px; background: {{ $dept['color'] }}12; border-radius: 14px; display: flex; align-items: center; justify-content: center;">
                                    <span style="font-size: 1.1rem; font-weight: 800; color: {{ $dept['color'] }};">{{ $index + 1 }}</span>
                                </div>
                            </div>
                            <div>
                                <h5 style="font-weight: 800; color: var(--afar-navy); font-size: 1.1rem; margin-bottom: 4px; line-height: 1.35;">
                                    {{ $dept['name_en'] }}
                                </h5>
                                <div style="font-size: 0.85rem; color: var(--afar-accent-dark); font-weight: 600; margin-bottom: 10px; line-height: 1.4;">
                                    {{ $dept['name_am'] }}
                                </div>
                                <p style="color: var(--afar-muted); font-size: 0.9rem; line-height: 1.65; margin: 0;">
                                    {{ $dept['desc'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Zonal & Woreda Offices -->
            <div style="background: rgba(10,34,54,0.03); border: 1px solid var(--afar-border); border-radius: 20px; padding: 28px; margin-top: 40px;">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-12 mb-3 mb-lg-0">
                        <h5 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 6px;">Zone & Woreda Offices</h5>
                        <p style="color: var(--afar-muted); font-size: 0.92rem; margin: 0;">
                            The Bureau operates through zone directorates and woreda-level prosecution offices across all administrative units of the Afar National Regional State, ensuring local access to justice services.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-12 text-lg-end">
                        <a href="{{ route('about.structure', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-one">
                            <span class="txt">View Full Structure <i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
