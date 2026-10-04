<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Models\Announcement;
use App\Models\News;
use Illuminate\Support\Facades\Route;

$locales = ['aa', 'am', 'en'];

Route::get('/', function () {
    return redirect('/en');
});

Route::get('/admin/login', [AuthController::class, 'loginForm'])->name('admin.login')->middleware('web');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.post')->middleware('web');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout')->middleware(['web', 'role:admin,editor,viewer']);

Route::prefix('admin')->name('admin.')->middleware(['web', 'role:admin,editor,viewer'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    $resources = [
        'news' => Admin\NewsController::class,
        'announcements' => Admin\AnnouncementController::class,
        'initiatives' => Admin\InitiativeController::class,
        'publications' => Admin\PublicationController::class,
        'videos' => Admin\VideoController::class,
        'vacancies' => Admin\VacancyController::class,
        'documents' => Admin\DocumentController::class,
        'pages' => Admin\PageController::class,
        'services' => Admin\ServiceController::class,
        'about' => Admin\AboutController::class,
        'settings' => Admin\SettingController::class,
    ];

    foreach ($resources as $uri => $controller) {
        Route::post("/$uri/bulk", [$controller, 'bulk'])->name("$uri.bulk")->middleware('role:admin,editor');
        Route::post("/$uri/{{$uri}}/toggle", [$controller, 'toggle'])->name("$uri.toggle")->middleware('role:admin,editor');
        Route::resource($uri, $controller)->names($uri)
            ->middlewareFor(['create', 'store', 'edit', 'update'], 'role:admin,editor')
            ->middlewareFor('destroy', 'role:admin');
    }

    Route::resource('users', Admin\UserController::class)->except('show')->names('users')->middleware('role:admin');
});

Route::prefix('{locale}')
    ->whereIn('locale', $locales)
    ->group(function () {
        Route::get('/', function () {
            $latestNews = News::published()
                ->where(fn ($q) => $q->whereNull('published_at')->orWhere('published_at', '<=', now()))
                ->orderByDesc('published_at')
                ->orderByDesc('id')
                ->take(4)
                ->get();

            $latestAnnouncements = Announcement::published()
                ->where(fn ($q) => $q->whereNull('published_at')->orWhere('published_at', '<=', now()))
                ->orderByDesc('published_at')
                ->orderByDesc('id')
                ->take(4)
                ->get();

            $homeNews = News::published()
                ->where(fn ($q) => $q->whereNull('published_at')->orWhere('published_at', '<=', now()))
                ->orderByDesc('published_at')
                ->orderByDesc('id')
                ->take(6)
                ->get();

            return view('home', compact('latestNews', 'latestAnnouncements', 'homeNews'));
        })->name('home');
        Route::get('/about/vision-mission', fn () => view('about.vision-mission'))->name('about.vision-mission');
        Route::get('/about/leadership', fn () => view('about.leadership'))->name('about.leadership');
        Route::get('/about/formation', fn () => view('about.formation'))->name('about.formation');
        Route::get('/about/structure', fn () => view('about.structure'))->name('about.structure');
        Route::get('/about/departments', fn () => view('about.departments'))->name('about.departments');
        Route::get('/about/logo-meaning', fn () => view('about.logo-meaning'))->name('about.logo-meaning');
        Route::get('/departments/minister', fn () => view('departments.minister'))->name('departments.minister');
        Route::get('/initiatives/transitional-justice', fn () => view('initiatives.transitional-justice'))->name('initiatives.transitional-justice');
        Route::get('/initiatives/legal-institutional-reform', fn () => view('initiatives.legal-institutional-reform'))->name('initiatives.legal-institutional-reform');
        Route::get('/initiatives/justice-sector-transformation', fn () => view('initiatives.justice-sector-transformation'))->name('initiatives.justice-sector-transformation');
        Route::get('/publications/strategy', fn () => view('publications.strategy'))->name('publications.strategy');
        Route::get('/briefing/news', function () {
            $news = \App\Models\News::published()
                ->where(fn ($q) => $q->whereNull('published_at')->orWhere('published_at', '<=', now()))
                ->orderByDesc('published_at')
                ->orderByDesc('id')
                ->paginate(9)
                ->withQueryString();

            return view('briefing.news', compact('news'));
        })->name('briefing.news');
        Route::get('/briefing/news/{id}', function (string $locale, int $id) {
            $article = \App\Models\News::published()->findOrFail($id);
            $related = \App\Models\News::published()
                ->where('id', '!=', $article->id)
                ->where(fn ($q) => $q->whereNull('published_at')->orWhere('published_at', '<=', now()))
                ->orderByDesc('published_at')
                ->take(3)
                ->get();

            return view('briefing.news-detail', compact('article', 'related'));
        })->name('briefing.news.show');
        Route::get('/briefing/articles', function () {
            $articles = \App\Models\Publication::published()
                ->where(fn ($q) => $q->whereNull('published_at')->orWhere('published_at', '<=', now()))
                ->orderByDesc('published_at')
                ->orderByDesc('id')
                ->paginate(10)
                ->withQueryString();

            return view('briefing.articles', compact('articles'));
        })->name('briefing.articles');
        Route::get('/briefing/articles/{id}', function (string $locale, int $id) {
            $article = \App\Models\Publication::published()->findOrFail($id);

            return view('briefing.article-detail', compact('article'));
        })->name('briefing.articles.show');
        Route::get('/briefing/events', fn () => view('briefing.events'))->name('briefing.events');
        Route::get('/briefing/press-release', fn () => view('briefing.press-release'))->name('briefing.press-release');
        Route::get('/resources/laws', fn () => view('resources.laws'))->name('resources.laws');
        Route::get('/resources/proclamations', function () {
            $proclamations = \App\Models\Document::where('status', 'published')
                ->where('category', 'proclamation')
                ->when(request('q'), fn ($q) => $q->where('title', 'like', '%' . request('q') . '%'))
                ->latest()
                ->paginate(12)
                ->withQueryString();

            return view('resources.proclamations', compact('proclamations'));
        })->name('resources.proclamations');
        Route::get('/resources/regulations', function () {
            $regulations = \App\Models\Document::where('status', 'published')
                ->where('category', 'regulation')
                ->when(request('q'), fn ($q) => $q->where('title', 'like', '%' . request('q') . '%'))
                ->latest()
                ->paginate(12)
                ->withQueryString();

            return view('resources.regulations', compact('regulations'));
        })->name('resources.regulations');
        Route::get('/resources/services', fn () => view('resources.services'))->name('resources.services');
        Route::get('/contact', fn () => view('contact'))->name('contact');
    });
