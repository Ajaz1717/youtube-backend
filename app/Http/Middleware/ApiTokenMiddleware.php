<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ApiTokenMiddleware
{
    public function handle(Request $request, Closure $next)
    {
      
        $apiToken = env('API_SECRET_TOKEN');

        // Request header se token check kar rahe hain
        if ($request->header('Authorization') !== "Bearer $apiToken") {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
      //   if (!$token || $token !== 'Bearer ' . $apiToken) {
      //     return response()->json(['message' => 'Unauthorized'], 401);
      // }

        return $next($request);
    }
}
