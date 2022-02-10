<?php

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
});
Route::get('/landingpage2', function () {
    return view('landing-page.landing2');
});
Route::get('/about', function () {
    return view('landing-page.about');
});
Route::get('/articles', function () {
    return view('landing-page.articles');
});
Route::get('/singlearticle', function () {
    return view('landing-page.single-article');
});
Route::get('/events', function () {
    return view('landing-page.event');
});
Route::get('/eventdetail', function () {
    return view('landing-page.event-details');
});
Route::get('/register', function () {
    return view('landing-page.register');
});


// route: admin
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('/faq', function () {
    return view('admin.faq');
})->name('faq');
Route::get('/faq-new', function () {
    return view('admin.faq-new');
})->name('faq-new');
Route::get('/faq-update', function () {
    return view('admin.faq-update');
})->name('faq-update');
Route::get('/faq-view', function () {
    return view('admin.faq-view');
})->name('faq-view');

Route::get('/career-fair', function () {
    return view('admin.career-fair');
})->name('career');
Route::get('/career-fair-new', function () {
    return view('admin.career-fair-new');
})->name('career-fair-new');
Route::get('/career-fair-update', function () {
    return view('admin.career-fair-update');
})->name('career-fair-update');
Route::get('/career-fair-view', function () {
    return view('admin.career-fair-view');
})->name('career-fair-view');

Route::get('/logo', function () {
    return view('admin.logo');
})->name('logo');
Route::get('/logo-new', function () {
    return view('admin.logo-new');
})->name('logo-new');
Route::get('/logo-update', function () {
    return view('admin.logo-update');
})->name('logo-update');
Route::get('/logo-view', function () {
    return view('admin.logo-view');
})->name('logo-view');

Route::get('/article', function () {
    return view('admin.article');
})->name('article');
Route::get('/article-new', function () {
    return view('admin.article-new');
})->name('article-new');
Route::get('/article-update', function () {
    return view('admin.article-update');
})->name('article-update');
Route::get('/article-view', function () {
    return view('admin.article-view');
})->name('article-view');

Route::get('/partner', function () {
    return view('admin.partner');
})->name('partner');
Route::get('/partner-new', function () {
    return view('admin.partner-new');
})->name('partner-new');
Route::get('/partner-update', function () {
    return view('admin.partner-update');
})->name('partner-update');
Route::get('/partner-view', function () {
    return view('admin.partner-view');
})->name('partner-view');

Route::get('/event', function () {
    return view('admin.event');
})->name('event');
Route::get('/event-new', function () {
    return view('admin.event-new');
})->name('event-new');
Route::get('/event-update', function () {
    return view('admin.event-update');
})->name('event-update');
Route::get('/event-view', function () {
    return view('admin.event-view');
})->name('event-view');

Route::get('/login', function () {
    return view('admin.login');
})->name('login');

Route::get('/test', function () {
    return view('admin.test');
})->name('test');
// end route: admin
