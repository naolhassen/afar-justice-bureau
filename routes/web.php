<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CrudController;
use App\Http\Controllers\Admin\DashboardController;
use App\Models\Announcement;
use App\Models\News;
use Illuminate\Support\Facades\Route;

$locales = ['aa', 'am', 'en'];
$adminModules = 'news|announcement|vacancy|document|page|service|about|setting|initiative|publication|video';

Route::get('/', function () {
    return redirect('/en');
});

Route::get('/admin/login', [AuthController::class, 'loginForm'])->name('admin.login')->middleware('web');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.post')->middleware('web');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout')->middleware(['web', 'role:admin,editor,viewer']);

Route::prefix('admin')->name('admin.')->middleware(['web', 'role:admin,editor,viewer'])->group(function () use ($adminModules) {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/{module}', [CrudController::class, 'index'])->name('crud.index')->where('module', $adminModules);
    Route::get('/{module}/create', [CrudController::class, 'create'])->name('crud.create')->where('module', $adminModules);
    Route::post('/{module}', [CrudController::class, 'store'])->name('crud.store')->where('module', $adminModules);
    Route::get('/{module}/{id}', [CrudController::class, 'show'])->name('crud.show')->where('module', $adminModules);
    Route::get('/{module}/{id}/edit', [CrudController::class, 'edit'])->name('crud.edit')->where('module', $adminModules);
    Route::put('/{module}/{id}', [CrudController::class, 'update'])->name('crud.update')->where('module', $adminModules);
    Route::delete('/{module}/{id}', [CrudController::class, 'destroy'])->name('crud.destroy')->where('module', $adminModules);
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

            return view('home', compact('latestNews', 'latestAnnouncements'));
        })->name('home');
        Route::get('/about/vision-mission', fn () => view('about.vision-mission'))->name('about.vision-mission');
        Route::get('/about/leadership', fn () => view('about.leadership'))->name('about.leadership');
        Route::get('/about/formation', fn () => view('about.formation'))->name('about.formation');
        Route::get('/about/structure', fn () => view('about.structure'))->name('about.structure');
        Route::get('/about/logo-meaning', fn () => view('about.logo-meaning'))->name('about.logo-meaning');
        Route::get('/departments/minister', fn () => view('departments.minister'))->name('departments.minister');
        Route::get('/initiatives/transitional-justice', fn () => view('initiatives.transitional-justice'))->name('initiatives.transitional-justice');
        Route::get('/initiatives/legal-institutional-reform', fn () => view('initiatives.legal-institutional-reform'))->name('initiatives.legal-institutional-reform');
        Route::get('/initiatives/justice-sector-transformation', fn () => view('initiatives.justice-sector-transformation'))->name('initiatives.justice-sector-transformation');
        Route::get('/publications/strategy', fn () => view('publications.strategy'))->name('publications.strategy');
        Route::get('/briefing/news', fn () => view('briefing.news'))->name('briefing.news');
        Route::get('/briefing/articles', fn () => view('briefing.articles'))->name('briefing.articles');
        Route::get('/briefing/events', fn () => view('briefing.events'))->name('briefing.events');
        Route::get('/briefing/press-release', fn () => view('briefing.press-release'))->name('briefing.press-release');
        Route::get('/resources/laws', fn () => view('resources.laws'))->name('resources.laws');
        Route::get('/resources/services', fn () => view('resources.services'))->name('resources.services');
        Route::get('/contact', fn () => view('contact'))->name('contact');
    });
