<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\VideoController;

Route::get('/videos', [VideoController::class, 'getVideos']);
Route::get('/videos/{id}', [VideoController::class, 'getVideoById']);