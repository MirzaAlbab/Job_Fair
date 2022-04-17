<?php

use App\Models\Event;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\RundownController;
use App\Http\Controllers\CareerfairController;
use function PHPUnit\Framework\throwException;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landingpage', [FrontController::class, 'index'])->name('user-landing');
Route::get('/about', [FrontController::class, 'about'])->name('user-about');
Route::get('/partners', [FrontController::class, 'partner'])->name('user-partners');
Route::get('/singlepartner/{id}', [FrontController::class, 'singlepartner'])->name('user-singlepartner');
Route::get('/events', [FrontController::class, 'events'])->name('user-events');
Route::get('/events-detail/{id}', [FrontController::class, 'eventdetail'])->name('user-event-detail');
Route::get('/galleryy', [FrontController::class, 'gallery'])->name('user-gallery');
// Route::get('/register', [FrontController::class, 'register'])->name('register');


Route::middleware(['auth'])->group(function () {
    // route: admin
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    
    // route: admin/rundown
    Route::get('/rundown', [RundownController::class, 'index'])->name('rundown');
    Route::post('/rundown', [RundownController::class, 'store'])->name('rundown-store');
    Route::get('/rundown-new', [RundownController::class, 'create'])->name('rundown-new');
    Route::get('/rundown-view/{rundown}', [RundownController::class, 'show'])->name('rundown-view');
    Route::get('/rundown-update/{rundown}/edit', [RundownController::class, 'edit'])->name('rundown-edit');
    Route::post('/rundown-update/{rundown}', [RundownController::class, 'update'])->name('rundown-update');
    Route::delete('/rundown/delete', [RundownController::class, 'destroy'])->name('rundown-delete');
    
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
    Route::post('/career-fair', [CareerfairController::class, 'store'])->name('career-fair-store');
    Route::get('/career-fair-view/{id}', [CareerfairController::class, 'show'])->name('career-fair-view');
    Route::get('/career-fair-update/{id}/edit', [CareerfairController::class, 'edit'])->name('career-fair-edit');
    Route::post('/career-fair-update/{id}', [CareerfairController::class, 'update'])->name('career-fair-update');
    Route::delete('/career-fair/delete', [CareerfairController::class, 'destroy'])->name('career-fair-delete');
    
    // route: admin/partner
    Route::get('/partner', [PartnerController::class, 'index'])->name('partner');
    Route::get('/partner/getPartners/', [PartnerController::class, "getPartners"])->name('partner.getPartners');
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
    
    // route: admin/gallery
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
    Route::post('/gallery', [GalleryController::class, 'store'])->name('gallery-store');
    Route::get('/gallery-new', [GalleryController::class, 'create'])->name('gallery-new');
    Route::get('/gallery-view/{gallery}', [GalleryController::class, 'show'])->name('gallery-view');
    Route::get('/gallery-update/{gallery}/edit', [GalleryController::class, 'edit'])->name('gallery-edit');
    Route::post('/gallery-update/{gallery}', [GalleryController::class, 'update'])->name('gallery-update');
    Route::delete('/gallery/delete', [GalleryController::class, 'destroy'])->name('gallery-delete');
    
    // route: admin/user
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::post('/user', [UserController::class, 'store'])->name('user-store');
    Route::get('/user-new', [UserController::class, 'create'])->name('user-new');
    Route::get('/user-view/{user}', [UserController::class, 'show'])->name('user-view');
    Route::get('/user-update/{user}/edit', [UserController::class, 'edit'])->name('user-edit');
    Route::post('/user-update/{user}', [UserController::class, 'update'])->name('user-update');
    Route::delete('/user/delete', [UserController::class, 'destroy'])->name('user-delete');
});


// Route::get('/login', function () {
//     return view('admin.login');
// })->name('login');


Route::get('/test', function () {
    return view('admin.test');
})->name('test');
Route::get('/error', function () {
    throw new Exception('User not found by ID ');
});
// end route: admin
