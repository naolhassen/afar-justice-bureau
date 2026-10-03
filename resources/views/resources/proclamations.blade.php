@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url('{{ asset('counsel/images/background/1.jpg') }}');">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <span class="page-badge">
                        <i class="fa fa-gavel"></i> Legal Repository &bull; {{ $proclamations->total() }} Documents
                    </span>
                    <h1>{{ __('messages.nav.proclamations') }} <span>&amp; Regulations</span></h1>
                    <p class="lead-desc">
                        Official proclamations enacted by the Afar National Regional State Council — searchable and downloadable certified PDFs.
                    </p>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}"><i class="fa fa-home"></i> {{ __('messages.nav.home') }}</a></li>
                        <li><a href="#">{{ __('messages.nav.resources') }}</a></li>
                        <li><span>{{ __('messages.nav.proclamations') }}</span></li>
                    </ul>
                </div>
                <div class="col-lg-4 d-none d-lg-flex justify-content-end">
                    <div style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(200,16,46,0.4); border-radius: 20px; padding: 20px 24px; backdrop-filter: blur(8px); text-align: center;">
                        <span style="display: block; font-size: 11px; font-weight: 700; color: var(--afar-accent-light); letter-spacing: 0.14em; text-transform: uppercase;">
                            Statute Book
                        </span>
                        <div style="font-family: 'Playfair Display', serif; font-size: 1.6rem; font-weight: 700; color: #fff; margin: 4px 0;">
                            Regional Proclamations
                        </div>
                        <span style="font-size: 12px; color: rgba(255,255,255,0.75);">Certified Regional Gazette</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Proclamations List -->
    <section class="civic-section">
        <div class="auto-container">
            <div class="sec-title text-center mb-4">
                <span class="civic-badge civic-badge-navy mb-2">Legal Instruments</span>
                <h2 style="font-size: clamp(2rem, 3vw, 2.8rem); font-weight: 800; color: var(--afar-navy);">
                    Enacted Proclamations
                </h2>
            </div>

            <!-- Search -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7">
                    <form method="GET" action="{{ route('resources.proclamations', ['locale' => app()->getLocale()]) }}">
                        <div class="input-group" style="border-radius: 50px; overflow: hidden; border: 1px solid var(--afar-border); box-shadow: 0 4px 18px rgba(15,41,66,0.06);">
                            <input type="text" name="q" value="{{ request('q') }}" class="form-control border-0 px-4 py-3"
                                   placeholder="Search proclamations by title or number…">
                            <button class="theme-btn btn-style-two border-0 px-4" type="submit"><span class="txt"><i class="fa fa-search"></i> Search</span></button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row clearfix g-4">
                @forelse($proclamations as $doc)
                    @php
                        $num = preg_match('/proclamation-(\d+)/', $doc->slug ?? '', $m) ? $m[1] : null;
                        $accent = ['var(--afar-navy)', 'var(--afar-accent)', 'var(--afar-green)'][$loop->index % 3];
                    @endphp
                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="civic-card h-100 d-flex flex-column" style="border-left: 5px solid {{ $accent }};">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="civic-badge civic-badge-navy">{{ $num ? "Proclamation No. $num" : 'Proclamation' }}</span>
                                <span style="font-size: 12px; color: var(--afar-muted); font-weight: 600;">
                                    <i class="fa fa-calendar me-1"></i> {{ $doc->created_at?->format('Y') ?? '' }}
                                </span>
                            </div>
                            <h4 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 12px; font-size: 1.18rem; line-height: 1.45;">
                                {{ $doc->title }}
                            </h4>
                            @if($doc->description)
                                <p style="color: var(--afar-muted); font-size: 0.92rem; line-height: 1.7; flex-grow: 1;">
                                    {{ Str::limit($doc->description, 160) }}
                                </p>
                            @else
                                <div class="flex-grow-1"></div>
                            @endif
                            <div class="d-flex justify-content-between align-items-center pt-3 border-top mt-3">
                                <span class="text-muted small"><i class="fa fa-file-pdf-o text-danger me-1"></i> PDF{{ $doc->file_size ? ' · ' . $doc->file_size : '' }}</span>
                                @if($doc->file_path)
                                    <a href="{{ asset('storage/' . $doc->file_path) }}" target="_blank" class="theme-btn btn-style-two" style="padding: 6px 18px; font-size: 12px;">
                                        <span class="txt"><i class="fa fa-download me-1"></i> Download PDF</span>
                                    </a>
                                @else
                                    <span class="text-muted small">File pending</span>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <i class="fa fa-folder-open fa-3x mb-3" style="color: #c3d6e5;"></i>
                        <p class="text-muted">No proclamations found{{ request('q') ? ' for "' . e(request('q')) . '"' : '' }}.</p>
                    </div>
                @endforelse
            </div>

            @if($proclamations->hasPages())
                <div class="d-flex justify-content-center mt-4">
                    {{ $proclamations->links() }}
                </div>
            @endif
        </div>
    </section>
@endsection
