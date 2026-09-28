<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CrudController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

$locales = ['aa', 'am', 'en'];
$adminModules = 'news|announcement|vacancy|document|page|service|about|setting';

Route::get('/', function () {
    return redirect('/aa');
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
        Route::get('/', fn () => view('home'))->name('home');
        Route::get('/about/vision-mission', fn () => view('about.vision-mission'))->name('about.vision-mission');
        Route::get('/about/leadership', fn () => view('about.leadership'))->name('about.leadership');
        Route::get('/about/formation', fn () => view('about.formation'))->name('about.formation');
        Route::get('/about/structure', fn () => view('about.structure'))->name('about.structure');
        Route::get('/about/logo-meaning', fn () => view('about.logo-meaning'))->name('about.logo-meaning');
        Route::get('/briefing/news', fn () => view('briefing.news'))->name('briefing.news');
        Route::get('/briefing/articles', fn () => view('briefing.articles'))->name('briefing.articles');
        Route::get('/briefing/events', fn () => view('briefing.events'))->name('briefing.events');
        Route::get('/briefing/press-release', fn () => view('briefing.press-release'))->name('briefing.press-release');
        Route::get('/resources/manifesto', fn () => view('resources.manifesto'))->name('resources.manifesto');
        Route::get('/resources/party-program', fn () => view('resources.party-program'))->name('resources.party-program');
        Route::get('/resources/rules-of-procedure', fn () => view('resources.rules-of-procedure'))->name('resources.rules-of-procedure');
        Route::get('/contact', fn () => view('contact'))->name('contact');
    });
