@extends('layouts.app')

@section('content')
    <x-page-hero
        title="{{ __('messages.pages.structure.title') }}"
        titleHighlight="{{ __('messages.pages.structure.titleHighlight') }}"
        description="{{ __('messages.pages.structure.description') }}"
    />

    <section class="civic-section">
        <div class="auto-container">
            <div class="sec-title text-center mb-5">
                <span class="civic-badge civic-badge-navy mb-2">Institutional Hierarchy</span>
                <h2 style="font-size: clamp(2rem, 3vw, 2.8rem); font-weight: 800; color: var(--afar-navy);">
                    Organizational Structure
                </h2>
                <div class="text" style="max-width: 720px; margin: 12px auto 0; font-size: 1rem; color: var(--afar-muted);">
                    Hierarchical operational framework connecting the executive cabinet in Semera with zone directorates and woreda public prosecution offices.
                </div>
            </div>

            <!-- Top Executive Branch -->
            <div class="row justify-content-center mb-4">
                <div class="col-lg-6 col-md-8">
                    <div class="civic-card text-center" style="border-top: 5px solid var(--afar-accent); padding: 32px 24px;">
                        <span class="civic-badge civic-badge-gold mb-2">Executive Apex</span>
                        <h4 style="font-weight: 800; color: var(--afar-navy); font-size: 1.35rem; margin-bottom: 6px;">
                            {{ __('messages.leaders.leader1Position') }}
                        </h4>
                        <div style="font-size: 1rem; font-weight: 700; color: var(--afar-accent-dark); margin-bottom: 12px;">
                            {{ __('messages.leaders.leader1Name') }}
                        </div>
                        <p style="font-size: 0.9rem; color: var(--afar-muted); line-height: 1.6; margin-bottom: 16px;">
                            Executive oversight over public prosecutions, legislative review, regional legal advisory, and strategic cabinet policy.
                        </p>
                        <a href="{{ route('departments.minister', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-one" style="padding: 7px 18px; font-size: 12px;">
                            <span class="txt">Bureau Head Office &rarr;</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Two Deputy Sectors -->
            <div class="row g-4 justify-content-center mb-5">
                <div class="col-lg-6 col-md-6 mb-3">
                    <div class="civic-card h-100" style="border-top: 4px solid var(--afar-navy); padding: 28px 24px;">
                        <span class="civic-badge civic-badge-navy mb-2">Legal Services Sector</span>
                        <h5 style="font-weight: 800; color: var(--afar-navy); font-size: 1.2rem; margin-bottom: 6px;">
                            {{ __('messages.leaders.leader2Position') }}
                        </h5>
                        <div style="font-size: 0.95rem; font-weight: 700; color: var(--afar-accent-dark); margin-bottom: 12px;">
                            {{ __('messages.leaders.leader2Name') }}
                        </div>
                        <p style="font-size: 0.88rem; color: var(--afar-muted); line-height: 1.6; margin-bottom: 16px;">
                            Supervising legislative drafting, legal research, customary Mad'aa reconciliation alignment, and regional civil representations.
                        </p>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; line-height: 1.9; color: var(--afar-ink);">
                            <li><i class="fa fa-chevron-right me-2" style="color: var(--afar-accent); font-size: 10px;"></i> Legislative Drafting Directorate</li>
                            <li><i class="fa fa-chevron-right me-2" style="color: var(--afar-accent); font-size: 10px;"></i> Civil Affairs & State Representation</li>
                            <li><i class="fa fa-chevron-right me-2" style="color: var(--afar-accent); font-size: 10px;"></i> Customary Justice & Legal Aid Desk</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-3">
                    <div class="civic-card h-100" style="border-top: 4px solid var(--afar-green); padding: 28px 24px;">
                        <span class="civic-badge civic-badge-green mb-2">Law Enforcement Sector</span>
                        <h5 style="font-weight: 800; color: var(--afar-navy); font-size: 1.2rem; margin-bottom: 6px;">
                            {{ __('messages.leaders.leader3Position') }}
                        </h5>
                        <div style="font-size: 0.95rem; font-weight: 700; color: var(--afar-accent-dark); margin-bottom: 12px;">
                            {{ __('messages.leaders.leader3Name') }}
                        </div>
                        <p style="font-size: 0.88rem; color: var(--afar-muted); line-height: 1.6; margin-bottom: 16px;">
                            Coordinating regional public prosecutions, criminal investigations, custodial rights monitoring, and zone justice offices.
                        </p>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; line-height: 1.9; color: var(--afar-ink);">
                            <li><i class="fa fa-chevron-right me-2" style="color: var(--afar-accent); font-size: 10px;"></i> Criminal Prosecution Directorate</li>
                            <li><i class="fa fa-chevron-right me-2" style="color: var(--afar-accent); font-size: 10px;"></i> Human Rights & Detention Inspection</li>
                            <li><i class="fa fa-chevron-right me-2" style="color: var(--afar-accent); font-size: 10px;"></i> Zone & Woreda Prosecution Branches</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Regional Woreda & Zone Hierarchy -->
            <div style="background: rgba(10,34,54,0.03); border: 1px solid var(--afar-border); border-radius: 20px; padding: 32px;">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-12 mb-3 mb-lg-0">
                        <h4 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 8px;">Sub-Regional & Local Branch Offices</h4>
                        <p style="color: var(--afar-muted); font-size: 0.95rem; line-height: 1.7; margin: 0;">
                            The Bureau operates across 5 administrative zones (Awsi Rasu, Kilbet Rasu, Gabi Rasu, Fanti Rasu, and Hari Rasu) and maintains active public prosecution desks across all 32+ regional woredas.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-12 text-lg-end">
                        <a href="{{ route('about.leadership', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-one">
                            <span class="txt">Meet the Directors &rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
