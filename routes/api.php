<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\VideoController;
use App\Http\Middleware\ApiTokenMiddleware;

Route::middleware([ApiTokenMiddleware::class])->group(function () {
    Route::get('/videos', [VideoController::class, 'getVideos']);
    Route::get('/videos/{id}', [VideoController::class, 'getVideoById']);
});
Route::get('/test-api', function () {
  return response()->json(['message' => 'API is working']);
});