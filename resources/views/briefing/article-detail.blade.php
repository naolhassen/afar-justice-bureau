@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url('{{ $article->image ? (Str::startsWith($article->image, 'uploads/') ? asset('storage/' . $article->image) : asset($article->image)) : asset('counsel/images/background/1.jpg') }}');">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <span class="page-badge">
                        <i class="fa fa-book-open"></i> {{ app()->getLocale() === 'am' ? 'መጣጥፍ' : 'Article' }}
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
                        <li><a href="{{ route('briefing.articles', ['locale' => app()->getLocale()]) }}">{{ __('messages.nav.articles') }}</a></li>
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
                            <img src="{{ Str::startsWith($article->image, 'uploads/') ? asset('storage/' . $article->image) : asset($article->image) }}" alt="{{ $article->title }}"
                                 style="width: 100%; height: auto; display: block;">
                        </div>
                    @endif

                    <!-- File Download -->
                    @if($article->file_path)
                        <div style="background: rgba(10,34,54,0.03); border: 1px solid var(--afar-border); border-radius: 12px; padding: 20px; margin-bottom: 32px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px;">
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <i class="fa fa-file-pdf-o fa-2x" style="color: var(--afar-red);"></i>
                                <div>
                                    <div style="font-weight: 700; color: var(--afar-navy);">{{ app()->getLocale() === 'am' ? 'ተደጋጋሚ ሰነድ' : 'Attached Document' }}</div>
                                    <div style="font-size: 0.85rem; color: var(--afar-muted);">{{ basename($article->file_path) }}</div>
                                </div>
                            </div>
                            <a href="{{ asset('storage/' . $article->file_path) }}" target="_blank" class="theme-btn btn-style-one" style="padding: 8px 18px; font-size: 12px;">
                                <span class="txt"><i class="fa fa-download me-1"></i> {{ app()->getLocale() === 'am' ? 'አውርድ' : 'Download' }}</span>
                            </a>
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
                        <a href="{{ route('briefing.articles', ['locale' => app()->getLocale()]) }}" style="color: var(--afar-navy); font-weight: 700; font-size: 14px; text-decoration: none;">
                            <i class="fa fa-arrow-left me-2"></i> {{ app()->getLocale() === 'am' ? 'ወደ ጽሑፎች ተመለስ' : 'Back to Articles' }}
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
@endsection
