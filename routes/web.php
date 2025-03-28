<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/videos', [AdminController::class, 'videos'])->name('videos');
    Route::post('/videos/store', [AdminController::class, 'storeVideo'])->name('videos.store');
    Route::delete('/videos/{id}', [AdminController::class, 'deleteVideo'])->name('videos.delete');
    Route::get('/videos/{id}/edit', [AdminController::class, 'editVideo'])->name('videos.edit');
    Route::put('/videos/{id}', [AdminController::class, 'updateVideo'])->name('videos.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
