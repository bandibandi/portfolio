<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()
        ->view('pages.home')
        ->header('Cache-Control', 'public, s-maxage=3600, max-age=0');
})->name('home')->withoutMiddleware([...]);

Route::get('/contact-fragment', function () {
    return view('partials.contact-form-fragment');
});
