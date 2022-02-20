<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CareerfairController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PartnerController;
use App\Models\Event;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/landingpage', function () {
    return view('landing-page.landing');
})->name('user-landing');
Route::get('/about', function () {
    return view('landing-page.about');
})->name('user-about');
Route::get('/partners', function () {
    return view('landing-page.partners');
})->name('user-partners');
Route::get('/singlearticle', function () {
    return view('landing-page.single-partner');
})->name('user-singlepartner');
Route::get('/events', function () {
    return view('landing-page.event');
})->name('user-events');
Route::get('/eventdetail', function () {
    return view('landing-page.event-details');
})->name('user-eventdetail');
Route::get('/gallery', function () {
    return view('landing-page.gallery');
})->name('user-gallery');


// route: admin
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

// route: admin/rundown
// Route::get('/rundown', [RundownController::class, 'index'])->name('rundown');
// Route::post('/rundown', [Rundown::class, 'store'])->name('rundown-store');
// Route::get('/rundown-new', [Rundown::class, 'create'])->name('rundown-new');
// Route::get('/rundown-view/{rundown}', [Rundown::class, 'show'])->name('rundown-view');
// Route::get('/rundown-update/{rundown}/edit', [Rundown::class, 'edit'])->name('rundown-edit');
// Route::post('/rundown-update/{rundown}', [Rundown::class, 'update'])->name('rundown-update');
// Route::delete('/rundown/delete', [Rundown::class, 'destroy'])->name('rundown-delete');

// route: admin/faq
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::post('/faq', [FaqController::class, 'store'])->name('faq-store');
Route::get('/faq-new', [FaqController::class, 'create'])->name('faq-new');
Route::get('/faq-view/{faq}', [FaqController::class, 'show'])->name('faq-view');
Route::get('/faq-update/{faq}/edit', [FaqController::class, 'edit'])->name('faq-edit');
Route::post('/faq-update/{faq}', [FaqController::class, 'update'])->name('faq-update');
Route::delete('/faq/delete', [FaqController::class, 'destroy'])->name('faq-delete');

// route: admin/careerfair
Route::get('/career-fair', [CareerfairController::class, 'index'])->name('career');
Route::get('/career-fair-new', [CareerfairController::class, 'create'])->name('career-fair-new');
Route::get('/career-fair-view/{career-fair}', [CareerfairController::class, 'show'])->name('career-fair-view');
Route::post('/career-fair', [CareerfairController::class, 'store'])->name('career-fair-store');
Route::get('/career-fair-update/{career-fair}/edit', [CareerfairController::class, 'edit'])->name('career-fair-edit');
Route::post('/career-fair-update/{career-fair}', [CareerfairController::class, 'update'])->name('career-fair-update');
Route::delete('/career-fair/delete', [CareerfairController::class, 'destroy'])->name('career-fair-delete');

// route: admin/logo
// Route::get('/logo', [LogoController::class, 'index'])->name('logo');
// Route::post('/logo', [LogoController::class, 'store'])->name('logo-store');
// Route::get('/logo-new', [LogoController::class, 'create'])->name('logo-new');
// Route::get('/logo-view/{logo}', [LogoController::class, 'show'])->name('logo-view');
// Route::get('/logo-update/{logo}/edit', [LogoController::class, 'edit'])->name('logo-edit');
// Route::post('/logo-update/{logo}', [LogoController::class, 'update'])->name('logo-update');
// Route::delete('/logo/delete', [LogoController::class, 'destroy'])->name('logo-delete');

// route: admin/article
Route::get('/article', [ArticleController::class, 'index'])->name('article');
Route::post('/article', [ArticleController::class, 'store'])->name('article-store');
Route::get('/article-new', [ArticleController::class, 'create'])->name('article-new');
Route::get('/article-view/{article}', [ArticleController::class, 'show'])->name('article-view');
Route::get('/article-update/{article}/edit', [ArticleController::class, 'edit'])->name('article-edit');
Route::post('/article-update/{article}', [ArticleController::class, 'update'])->name('article-update');
Route::delete('/article/delete', [ArticleController::class, 'destroy'])->name('article-delete');

// route: admin/partner
Route::get('/partner', [PartnerController::class, 'index'])->name('partner');
Route::post('/partner', [PartnerController::class, 'store'])->name('partner-store');
Route::get('/partner-new', [PartnerController::class, 'create'])->name('partner-new');
Route::get('/partner-view/{partner}', [PartnerController::class, 'show'])->name('partner-view');
Route::get('/partner-update/{partner}/edit', [PartnerController::class, 'edit'])->name('partner-edit');
Route::post('/partner-update/{partner}', [PartnerController::class, 'update'])->name('partner-update');
Route::delete('/partner/delete', [PartnerController::class, 'destroy'])->name('partner-delete');

// route: admin/event
Route::get('/event', [EventController::class, 'index'])->name('event');
Route::post('/event', [EventController::class, 'store'])->name('event-store');
Route::get('/event-new', [EventController::class, 'create'])->name('event-new');
Route::get('/event-view/{event}', [EventController::class, 'show'])->name('event-view');
Route::get('/event-update/{event}/edit', [EventController::class, 'edit'])->name('event-edit');
Route::post('/event-update/{event}', [EventController::class, 'update'])->name('event-update');
Route::delete('/event/delete', [EventController::class, 'destroy'])->name('event-delete');

Route::get('/login', function () {
    return view('admin.login');
})->name('login');
Route::get('/register', function () {
    return view('landing-page.register');
})->name('register');

Route::get('/test', function () {
    return view('admin.test');
})->name('test');
// end route: admin
