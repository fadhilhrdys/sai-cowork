<?php

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