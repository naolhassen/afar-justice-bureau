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
                <span class="civic-badge civic-badge-navy mb-2">{{ app()->getLocale() === 'am' ? 'ተቋማዊ መዋቅር' : 'Institutional Hierarchy' }}</span>
                <h2 style="font-size: clamp(2rem, 3vw, 2.8rem); font-weight: 800; color: var(--afar-navy);">
                    {{ app()->getLocale() === 'am' ? 'ድርጅታዊ መዋቅር' : 'Organizational Structure' }}
                </h2>
                <div class="text" style="max-width: 720px; margin: 12px auto 0; font-size: 1rem; color: var(--afar-muted);">
                    {{ app()->getLocale() === 'am'
                        ? 'የአፋር ክልል ፍትህ ቢሮ ድርጅታዊ መዋቅር — ከቢሮ ኃላፊ እስከ ዘርፍ ምክትል ቢሮ ኃላፊዎች እና ዳይሬክቶሬቶች'
                        : 'The organizational framework of the Afar Regional Justice Bureau — from the Bureau Head through sector deputy heads to directorates and offices.' }}
                </div>
            </div>

            <!-- ═══ TOP: Bureau Head ═══ -->
            <div class="row justify-content-center mb-4">
                <div class="col-lg-8 col-md-10">
                    <div class="civic-card" style="border-top: 5px solid var(--afar-accent); padding: 36px 28px;">
                        <div class="text-center mb-3">
                            <span class="civic-badge civic-badge-gold mb-2">{{ app()->getLocale() === 'am' ? 'ከፍተኛ አመራር' : 'Executive Apex' }}</span>
                            <h4 style="font-weight: 800; color: var(--afar-navy); font-size: 1.35rem; margin-bottom: 6px;">
                                {{ __('messages.leaders.leader1Position') }}
                            </h4>
                            <div style="font-size: 1rem; font-weight: 700; color: var(--afar-accent-dark); margin-bottom: 16px;">
                                {{ __('messages.leaders.leader1Name') }}
                            </div>
                        </div>
                        <p style="font-size: 0.9rem; color: var(--afar-muted); line-height: 1.7; margin-bottom: 20px;">
                            @if(app()->getLocale() === 'am')
                                ይህ ዘርፍ የሚመራው በፍትህ ቢሮ ኃላፊው ሲሆን — በአፋር ክልል ፍትህ ቢሮ ማቋቋሚያ አዋጅ ቁጥር 115/2011 አንቀጽ 8 ላይ የተሰጡት ተግባርና ኃላፊነቶች እንደተጠበቁ ሆነው መስሪያ ቤቱን አስመልክቶ ስትራቴጂካዊ እቅዶችንና ወቅታዊ ሪፖርቶችን ማዘጋጀት፣ መምራት፣ መደገፍ፣ አፈጻጸሙን መገምገም፤ በፍትሕ ሥርዓቱ ውስጥ ትብብርና ቅንጅታዊ አሠራር መፍጠር፤ የለውጥ ፕሮግራሞችን በበላይነት መምራት፤ ተጠያቂነትን የሚያሰፍን ሥርዓት መዘርጋት ያካትታል።
                            @else
                                The Head of the Justice Office is responsible for preparing, guiding, supporting, and reviewing the implementation of strategic plans and regular reports according to Proclamation No. 115/2011 Article 8. This includes planning and advising the judiciary to improve public trust, building cooperation between institutions, supervising reform programs, issuing and approving directives, establishing transparent financial management, and coordinating institutions that report to the Bureau.
                            @endif
                        </p>

                        <h6 style="font-weight: 700; color: var(--afar-navy); font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 12px;">
                            <i class="fa fa-sitemap me-2" style="color: var(--afar-accent);"></i>
                            {{ app()->getLocale() === 'am' ? 'ለፍትህ ቢሮ ኃላፊ ቀጥታ ተጠሪ የሆኑ ዳይሬክቶሬቶች/ ጽ/ቤቶች' : 'Directorates/Offices Reporting Directly to the Bureau Head' }}
                        </h6>
                        <div class="row">
                            <div class="col-md-6">
                                <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; line-height: 2.1; color: var(--afar-ink);">
                                    <li><i class="fa fa-chevron-right me-2" style="color: var(--afar-accent); font-size: 10px;"></i>
                                        {{ app()->getLocale() === 'am' ? 'የዐቃብያነ ህግ አስተዳደር ጉባኤ ጽ/ቤት' : "Office of the Prosecutor's Administration Conference" }}</li>
                                    <li><i class="fa fa-chevron-right me-2" style="color: var(--afar-accent); font-size: 10px;"></i>
                                        {{ app()->getLocale() === 'am' ? 'የህግ ኦዲት፣ የስነ-ምግባርና የዲስፕሊን ጉዳዮች መከታተያ ቡድን' : 'Legal Audit, Ethics, and Discipline Monitoring Team' }}</li>
                                    <li><i class="fa fa-chevron-right me-2" style="color: var(--afar-accent); font-size: 10px;"></i>
                                        {{ app()->getLocale() === 'am' ? 'የምህረትና ይቅርታ ቦርድ ጽ/ቤት' : 'Board of Mercy and Pardons Office' }}</li>
                                    <li><i class="fa fa-chevron-right me-2" style="color: var(--afar-accent); font-size: 10px;"></i>
                                        {{ app()->getLocale() === 'am' ? 'የውስጥ ኦዲትና ቁጥጥር ዳይሬክቶሬት' : 'Internal Audit and Control Directorate' }}</li>
                                    <li><i class="fa fa-chevron-right me-2" style="color: var(--afar-accent); font-size: 10px;"></i>
                                        {{ app()->getLocale() === 'am' ? 'የህዝብ ግንኙነት ጉዳዮች ዳይሬክቶሬት' : 'Public Relations Directorate' }}</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; line-height: 2.1; color: var(--afar-ink);">
                                    <li><i class="fa fa-chevron-right me-2" style="color: var(--afar-accent); font-size: 10px;"></i>
                                        {{ app()->getLocale() === 'am' ? 'የፋይናንስ ግዥና ንብረት አስተዳደር ዳይሮክቶሬት' : 'Financial Procurement and Asset Management Directorate' }}</li>
                                    <li><i class="fa fa-chevron-right me-2" style="color: var(--afar-accent); font-size: 10px;"></i>
                                        {{ app()->getLocale() === 'am' ? 'የአገልግሎት አሰጣጥ ቅሬታ ማስተናገጃ እና ፍትህ ስርአት ማሻሻያ ዳይሬክቶሬት' : 'Service Delivery, Grievance Handling, and Justice System Reform Directorate' }}</li>
                                    <li><i class="fa fa-chevron-right me-2" style="color: var(--afar-accent); font-size: 10px;"></i>
                                        {{ app()->getLocale() === 'am' ? 'የዕቅድ ዝግጅት ክትትል ግምገማ ዳይሬክቶሬት' : 'Planning, Follow-up, and Evaluation Directorate' }}</li>
                                    <li><i class="fa fa-chevron-right me-2" style="color: var(--afar-accent); font-size: 10px;"></i>
                                        {{ app()->getLocale() === 'am' ? 'የኢንፎርሜሽን ኮምንኬሽን ቴክኖሎጂ ዳይሬክቶሬት' : 'Information and Communication Technology Directorate' }}</li>
                                    <li><i class="fa fa-chevron-right me-2" style="color: var(--afar-accent); font-size: 10px;"></i>
                                        {{ app()->getLocale() === 'am' ? 'የሰው ሃብት አስተዳደር ዳይሬክቶሬት' : 'Human Resources Management Directorate' }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ═══ Two Deputy Sectors ═══ -->
            <div class="row g-4 justify-content-center mb-5">
                <!-- Law Enforcement Sector -->
                <div class="col-lg-6 col-md-6 mb-3">
                    <div class="civic-card h-100" style="border-top: 4px solid var(--afar-green); padding: 28px 24px;">
                        <span class="civic-badge civic-badge-green mb-2">{{ app()->getLocale() === 'am' ? 'የህግ ማስፈጸም ዘርፍ' : 'Law Enforcement Sector' }}</span>
                        <h5 style="font-weight: 800; color: var(--afar-navy); font-size: 1.2rem; margin-bottom: 6px;">
                            {{ __('messages.leaders.leader3Position') }}
                        </h5>
                        <div style="font-size: 0.95rem; font-weight: 700; color: var(--afar-accent-dark); margin-bottom: 12px;">
                            {{ __('messages.leaders.leader3Name') }}
                        </div>
                        <p style="font-size: 0.88rem; color: var(--afar-muted); line-height: 1.6; margin-bottom: 16px;">
                            {{ app()->getLocale() === 'am'
                                ? 'ለዘርፉ ተጠሪ የሆኑ አጠቃላይ አደረጃጀቶችን በበላይነት ይመራል።'
                                : 'Manages and oversees all organizational units reporting to the Law Enforcement Sector.' }}
                        </p>

                        <h6 style="font-weight: 700; color: var(--afar-navy); font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 10px;">
                            {{ app()->getLocale() === 'am' ? 'ቀጥታ ተጠሪ ዳይሬክቶሬቶች' : 'Reporting Directorates' }}
                        </h6>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; line-height: 2.1; color: var(--afar-ink);">
                            <li><i class="fa fa-chevron-right me-2" style="color: var(--afar-green); font-size: 10px;"></i>
                                {{ app()->getLocale() === 'am' ? 'የወንጀል ዳይሬክቶሬት' : 'Criminal Directorate' }}</li>
                            <li><i class="fa fa-chevron-right me-2" style="color: var(--afar-green); font-size: 10px;"></i>
                                {{ app()->getLocale() === 'am' ? 'የሙስናና ኢኮኖሚ ነክ ወንጀል ጉዳዮች ዳይሬክቶሬት' : 'Directorate of Corruption and Economic Crime Affairs' }}</li>
                            <li><i class="fa fa-chevron-right me-2" style="color: var(--afar-green); font-size: 10px;"></i>
                                {{ app()->getLocale() === 'am' ? 'የልዩ ልዩ ወንጀል ጉዳዮች ዳይሬክቶሬት' : 'Directorate of Miscellaneous Criminal Cases' }}</li>
                            <li><i class="fa fa-chevron-right me-2" style="color: var(--afar-green); font-size: 10px;"></i>
                                {{ app()->getLocale() === 'am' ? 'የፍትሐብሔር ጉዳዮች ዳይሬክቶሬት' : 'Civil Affairs Directorate' }}</li>
                        </ul>
                    </div>
                </div>

                <!-- Legal Services Sector -->
                <div class="col-lg-6 col-md-6 mb-3">
                    <div class="civic-card h-100" style="border-top: 4px solid var(--afar-navy); padding: 28px 24px;">
                        <span class="civic-badge civic-badge-navy mb-2">{{ app()->getLocale() === 'am' ? 'የህግ አገልግሎት ዘርፍ' : 'Legal Services Sector' }}</span>
                        <h5 style="font-weight: 800; color: var(--afar-navy); font-size: 1.2rem; margin-bottom: 6px;">
                            {{ __('messages.leaders.leader2Position') }}
                        </h5>
                        <div style="font-size: 0.95rem; font-weight: 700; color: var(--afar-accent-dark); margin-bottom: 12px;">
                            {{ __('messages.leaders.leader2Name') }}
                        </div>
                        <p style="font-size: 0.88rem; color: var(--afar-muted); line-height: 1.6; margin-bottom: 16px;">
                            {{ app()->getLocale() === 'am'
                                ? 'ለዘርፉ ተጠሪ የሆኑ አጠቃላይ አደረጃጀቶችን በበላይነት ይመራል።'
                                : 'Manages and oversees all organizational units reporting to the Legal Services Sector.' }}
                        </p>

                        <h6 style="font-weight: 700; color: var(--afar-navy); font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 10px;">
                            {{ app()->getLocale() === 'am' ? 'ቀጥታ ተጠሪ ዳይሬክቶሬቶች' : 'Reporting Directorates' }}
                        </h6>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; line-height: 2.1; color: var(--afar-ink);">
                            <li><i class="fa fa-chevron-right me-2" style="color: var(--afar-navy); font-size: 10px;"></i>
                                {{ app()->getLocale() === 'am' ? 'የህግ ጥናት፣ማርቀቅና ማስረጽ ዳይሬክቶሬት' : 'Directorate of Legal Studies, Drafting, and Codification' }}</li>
                            <li><i class="fa fa-chevron-right me-2" style="color: var(--afar-navy); font-size: 10px;"></i>
                                {{ app()->getLocale() === 'am' ? 'የሰብዓዊ መብት ጉዳዮችና የማህበረሰብ ግንዛቤ ማስጨበጫ ዳይሬክቶሬት' : 'Directorate of Human Rights Affairs and Community Awareness' }}</li>
                            <li><i class="fa fa-chevron-right me-2" style="color: var(--afar-navy); font-size: 10px;"></i>
                                {{ app()->getLocale() === 'am' ? 'የሰነዶች፣ ጠበቆች ማህበራትና የበጎ አድራጎት ድርጅቶች ጉዳይ ዳይሬክቶሬት' : 'Directorate of Documents, Bar Associations, and Charities Affairs' }}</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Regional Woreda & Zone Hierarchy -->
            <div style="background: rgba(10,34,54,0.03); border: 1px solid var(--afar-border); border-radius: 20px; padding: 32px;">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-12 mb-3 mb-lg-0">
                        <h4 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 8px;">
                            {{ app()->getLocale() === 'am' ? 'የዞንና የወረዳ ቅርንጫፍ ጽ/ቤቶች' : 'Sub-Regional & Local Branch Offices' }}
                        </h4>
                        <p style="color: var(--afar-muted); font-size: 0.95rem; line-height: 1.7; margin: 0;">
                            {{ app()->getLocale() === 'am'
                                ? 'ቢሮው በ5 አስተዳደር ዞኖች (አውሲ ራሱ፣ ቅልበት ራሱ፣ ጋቢ ራሱ፣ ፋንቲ ራሱ፣ እና ሃሪ ራሱ) እና ከ32 በላይ የወረዳ ፍትህ ጽ/ቤቶች ያለው ነው።'
                                : 'The Bureau operates across 5 administrative zones (Awsi Rasu, Kilbet Rasu, Gabi Rasu, Fanti Rasu, and Hari Rasu) and maintains active public prosecution desks across all 32+ regional woredas.' }}
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-12 text-lg-end">
                        <a href="{{ route('about.departments', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-one">
                            <span class="txt">{{ app()->getLocale() === 'am' ? 'ዳይሬክቶሬቶችን ይመልከቱ' : 'View Directorates' }} &rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
