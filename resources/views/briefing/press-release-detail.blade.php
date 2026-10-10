@extends('layouts.app')

@section('content')
    @php
        $locale = app()->getLocale() ?: 'aa';
        $date = ($release->published_at ?? $release->created_at)->format('F d, Y');
    @endphp

    <x-page-hero
        title="{{ $release->title }}"
        titleHighlight=""
        description=""
    />

    <section class="civic-section">
        <div class="auto-container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="civic-card" style="border-top: 4px solid var(--afar-accent);">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-4">
                            <span style="font-size: 12px; color: var(--afar-muted); font-weight: 600;">
                                <i class="fa fa-calendar" style="color: var(--afar-accent);"></i> {{ $date }}
                            </span>
                            @if($release->category)
                                <span style="background: rgba(10,34,54,0.06); color: var(--afar-navy); padding: 4px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 700;">
                                    <i class="fa fa-tag" style="color: var(--afar-accent); margin-right: 4px;"></i> {{ $release->category }}
                                </span>
                            @endif
                        </div>

                        <div class="press-body" style="font-size: 1rem; line-height: 1.8; color: var(--afar-ink);">
                            {!! $release->body !!}
                        </div>

                        <div class="mt-4 pt-4" style="border-top: 1px solid var(--afar-border);">
                            <a href="{{ route('briefing.press-release', ['locale' => $locale]) }}" class="theme-btn btn-style-one">
                                <span class="txt"><i class="fa fa-arrow-left" style="margin-right: 6px;"></i> Back to Press Releases</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
