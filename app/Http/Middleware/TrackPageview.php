<?php

namespace App\Http\Middleware;

use Pirsch\Http\Middleware\TrackPageview as Middleware;

class TrackPageview extends Middleware
{
    protected array $except = [
        'admin/*',
    ];
}
