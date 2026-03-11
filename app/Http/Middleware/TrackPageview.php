<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Pirsch\Http\Middleware\TrackPageview as Middleware;

class TrackPageview extends Middleware
{
    protected array $except = [
        'admin/*',
    ];

    public function handle(Request $request, Closure $next, string ...$excepts): mixed
    {
        Log::info('Pirsch middleware handle()', [
            'url' => $request->fullUrl(),
            'ip' => $request->ip(),
            'cf_ip' => $request->header('CF-Connecting-IP'),
            'x_forwarded' => $request->header('X-Forwarded-For'),
            'token_set' => ! empty(config('pirsch.token')),
        ]);

        app()->terminating(function () use ($request) {
            Log::info('Pirsch terminating callback fired', [
                'url' => $request->fullUrl(),
            ]);
        });

        return parent::handle($request, $next, ...$excepts);
    }
}
