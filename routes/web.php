<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


Route::get('/', [Controllers\BaseController::class, 'getIndex'])->name('getindex');
Route::get('/blog-details/{id}', [Controllers\BaseController::class, 'showBlogDetails'])->name('blog-details');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/{url}', [Controllers\BaseController::class, 'getUrl']);


