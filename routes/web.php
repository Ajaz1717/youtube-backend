<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Api\VideoController;

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/videos', [AdminController::class, 'videos'])->name('admin.videos');
    Route::post('/videos/store', [AdminController::class, 'storeVideo'])->name('admin.videos.store');
});

Route::view('/', 'welcome');
Route::view('/signin', 'signup');
Route::post('login', [AdminController::class, 'login']);
Route::post('signin', [AdminController::class, 'signin']);
Route::get('/api/videos', [VideoController::class, 'getVideos']);
Route::get('/api/videos/{id}', [VideoController::class, 'getVideoById']);