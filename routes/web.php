<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main-website.pages.homepage');
});

Route::get('/location', function () {
    return view('main-website.pages.location');
});
