<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('pages.home'))->name('home');

Route::get('/contact-fragment', function () {
    return view('partials.contact-form-fragment');
});
