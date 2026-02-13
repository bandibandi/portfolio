<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;



Route::get('/', function () {
    return response()
        ->view('pages.home')
        ->header('Cache-Control', 'public, s-maxage=3600, max-age=0');
})
->name('home')
->withoutMiddleware([
    StartSession::class,
    ShareErrorsFromSession::class,
    VerifyCsrfToken::class,
    EncryptCookies::class,
    AddQueuedCookiesToResponse::class,
]);

Route::get('/contact-fragment', function () {
    return response(view('partials.contact-form-fragment')->render())
        ->header('X-CSRF-TOKEN', csrf_token());
});
