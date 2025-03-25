<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{

    protected $middleware = [
        \App\Http\Middleware\TrustProxies::class, // ✅ TrustProxies Middleware Added
        // \Illuminate\Http\Middleware\HandleCors::class,
    ];

    protected $middlewareAliases = [
        'api.token' => \App\Http\Middleware\ApiTokenMiddleware::class,
        // 'trust.proxies' => \App\Http\Middleware\TrustProxies::class
    ];
}