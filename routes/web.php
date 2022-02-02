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
Route::get('/article', function () {
    return view('landing-page.single-article');
});
Route::get('/event', function () {
    return view('landing-page.event');
});
