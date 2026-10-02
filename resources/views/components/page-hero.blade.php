@props([
    'title',
    'titleHighlight' => '',
    'description' => null,
])

@php
    $currentLocale = app()->getLocale() ?: 'aa';
@endphp

<!-- Civic Page Hero -->
<section class="page-title" style="background-image: url('{{ asset('counsel/images/background/1.jpg') }}');">
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-12">
                <span class="page-badge">
                    <i class="fa fa-balance-scale"></i> {{ __('messages.hero.badge') }}
                </span>
                <h1>
                    {{ $title }}
                    @if($titleHighlight)
                        <span>{{ $titleHighlight }}</span>
                    @endif
                </h1>

                @if ($description)
                    <p class="lead-desc">{{ $description }}</p>
                @endif

                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home', ['locale' => $currentLocale]) }}"><i class="fa fa-home"></i> {{ __('messages.nav.home') }}</a></li>
                    <li><span>{{ trim($title . ' ' . $titleHighlight) }}</span></li>
                </ul>
            </div>

            <div class="col-lg-4 d-none d-lg-flex justify-content-end align-items-center">
                <div class="hero-crest-emblem text-center" style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(201, 151, 56, 0.4); border-radius: 24px; padding: 22px 28px; backdrop-filter: blur(10px); box-shadow: 0 16px 36px rgba(0,0,0,0.25);">
                    <img src="{{ asset('logo.png') }}" alt="{{ __('messages.metadata.title') }}" style="max-height: 80px; width: auto; object-fit: contain; filter: drop-shadow(0 4px 12px rgba(0,0,0,0.3));">
                    <div style="margin-top: 10px; font-size: 11px; font-weight: 700; color: var(--afar-gold); letter-spacing: 0.12em; text-transform: uppercase;">
                        Semera Headquarters
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
