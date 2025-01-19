<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\DashboardCmsController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\PlaceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main-website.pages.homepage');
});

Route::get('/location', function () {
    return view('main-website.pages.location.location');
});

Route::get('/location/detail-location', function () {
    return view('main-website.pages.location.detail-location');
});

Route::get('/blog', function () {
    return view('main-website.pages.blog.blog');
});

Route::get('/blog/detail-blog', function () {
    return view('main-website.pages.blog.detail-blog');
});

Route::get('/gallery', function () {
    return view('main-website.pages.gallery');
});

Route::get('/login', function () {
    return view('main-website.pages.auth.login');
});

Route::get('/forgot-password', function () {
    return view('main-website.pages.auth.forgot-password');
});

Route::get('/sign-up', function () {
    return view('main-website.pages.auth.sign-up');
});

// cms area
Route::middleware('guest:admin')->prefix('cms')->group(function() { // add "guest:admin for restrict after logged in
    Route::get('/login', [AdminAuthController::class, 'login'])->name('admin_login');
    Route::post('/login', [AdminAuthController::class, 'authenticate'])->name('admin_authenticate');

    Route::get('/register', [AdminAuthController::class, 'register'])->name('admin_register');
    Route::post('/register', [AdminAuthController::class, 'store'])->name('admin_register_store');
});

Route::middleware('admin')->prefix('cms')->group(function() {
    Route::get('/dashboard', [DashboardCmsController::class, 'show']);
    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('admin_logout');

    // media route
    Route::resource('media', MediaController::class);

    // article route
    Route::resource('article', ArticleController::class);

    // city route
    Route::resource('city', CityController::class);

    // place route
    Route::resource('place', PlaceController::class);
});

