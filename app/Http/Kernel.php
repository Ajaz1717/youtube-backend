<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middlewareAliases = [
        'api.token' => \App\Http\Middleware\ApiTokenMiddleware::class,
    ];
}