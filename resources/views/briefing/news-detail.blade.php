@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url('{{ $article->image ? asset('storage/' . $article->image) : asset('counsel/images/background/1.jpg') }}');">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <span class="page-badge">
                        <i class="fa fa-newspaper-o"></i> {{ __('messages.news.sectionTag') }}
                    </span>
                    <h1>{{ $article->title }}</h1>
                    <div style="display: flex; align-items: center; gap: 16px; margin-top: 12px; font-size: 13px; color: rgba(255,255,255,0.8);">
                        <span><i class="fa fa-calendar me-1"></i> {{ ($article->published_at ?? $article->created_at)->format('F d, Y') }}</span>
                        @if($article->author)
                            <span><i class="fa fa-user me-1"></i> {{ $article->author->name }}</span>
                        @endif
                    </div>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}"><i class="fa fa-home"></i> {{ __('messages.nav.home') }}</a></li>
                        <li><a href="{{ route('briefing.news', ['locale' => app()->getLocale()]) }}">{{ __('messages.nav.news') }}</a></li>
                        <li><span>{{ Str::limit($article->title, 40) }}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Article Content -->
    <section class="civic-section">
        <div class="auto-container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <!-- Featured Image -->
                    @if($article->image)
                        <div style="border-radius: 16px; overflow: hidden; margin-bottom: 32px; box-shadow: 0 8px 32px rgba(15,41,66,0.10);">
                            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}"
                                 style="width: 100%; height: auto; display: block;">
                        </div>
                    @endif

                    <!-- Article Body -->
                    <article style="font-size: 1.05rem; line-height: 1.85; color: var(--afar-ink);">
                        @if($article->excerpt && $article->excerpt !== $article->body)
                            <p style="font-size: 1.15rem; font-weight: 600; color: var(--afar-navy); line-height: 1.7; margin-bottom: 24px; padding-bottom: 20px; border-bottom: 2px solid var(--afar-border);">
                                {{ strip_tags($article->excerpt) }}
                            </p>
                        @endif

                        <div class="article-content">
                            {!! $article->body !!}
                        </div>
                    </article>

                    <!-- Share / Back -->
                    <div style="margin-top: 40px; padding-top: 24px; border-top: 1px solid var(--afar-border); display: flex; justify-content: space-between; align-items: center;">
                        <a href="{{ route('briefing.news', ['locale' => app()->getLocale()]) }}" style="color: var(--afar-navy); font-weight: 700; font-size: 14px; text-decoration: none;">
                            <i class="fa fa-arrow-left me-2"></i> {{ app()->getLocale() === 'am' ? 'ወደ ዜናዎች ተመለስ' : 'Back to News' }}
                        </a>
                        <div style="display: flex; gap: 10px;">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank" rel="noopener"
                               style="width: 36px; height: 36px; border-radius: 50%; background: var(--afar-navy); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 14px; text-decoration: none;">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($article->title) }}" target="_blank" rel="noopener"
                               style="width: 36px; height: 36px; border-radius: 50%; background: var(--afar-navy); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 14px; text-decoration: none;">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related News -->
    @if($related->count() > 0)
    <section class="civic-section" style="background: rgba(10,34,54,0.02);">
        <div class="auto-container">
            <div class="sec-title text-center mb-4">
                <h3 style="font-weight: 800; color: var(--afar-navy);">
                    {{ app()->getLocale() === 'am' ? 'ተዛማጅ ዜናዎች' : 'Related News' }}
                </h3>
            </div>
            <div class="row g-4">
                @foreach($related as $index => $relItem)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="civic-card h-100 d-flex flex-column" style="padding: 0; overflow: hidden;">
                            <a href="{{ route('briefing.news.show', ['locale' => app()->getLocale(), 'slug' => $relItem->slug]) }}" style="display: block; height: 180px; width: 100%; overflow: hidden;">
                                <img src="{{ $relItem->image ? asset('storage/' . $relItem->image) : asset('images/news/news-' . (($index % 4) + 1) . '.jpg') }}"
                                     alt="{{ $relItem->title }}"
                                     style="width: 100%; height: 100%; object-fit: cover;">
                            </a>
                            <div style="padding: 20px 18px; flex-grow: 1; display: flex; flex-direction: column;">
                                <div style="font-size: 12px; color: var(--afar-muted); font-weight: 600; margin-bottom: 8px;">
                                    <i class="fa fa-calendar me-1" style="color: var(--afar-accent);"></i>
                                    {{ ($relItem->published_at ?? $relItem->created_at)->format('M d, Y') }}
                                </div>
                                <h5 style="font-weight: 800; color: var(--afar-navy); font-size: 1rem; line-height: 1.35; margin-bottom: 10px; flex-grow: 1;">
                                    <a href="{{ route('briefing.news.show', ['locale' => app()->getLocale(), 'slug' => $relItem->slug]) }}" style="color: inherit; text-decoration: none;">
                                        {{ Str::limit($relItem->title, 65) }}
                                    </a>
                                </h5>
                                <a href="{{ route('briefing.news.show', ['locale' => app()->getLocale(), 'slug' => $relItem->slug]) }}" style="color: var(--afar-accent); font-weight: 700; font-size: 12px; text-decoration: none;">
                                    {{ __('messages.news.readMore') }} <i class="fa fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
@endsection
