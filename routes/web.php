<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main-website.pages.homepage');
});

Route::get('/location', function () {
    return view('main-website.pages.location.location');
});

Route::get('/detail-location', function () {
    return view('main-website.pages.location.detail-location');
});
