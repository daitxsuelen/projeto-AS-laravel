<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('categoria', [CategoriaController::class, 'index']);
    Route::get('categoria/create', [CategoriaController::class, 'create']);
    Route::post('categoria', [CategoriaController::class, 'store']);
    Route::get('categoria/{id}/edit', [CategoriaController::class, 'edit']);
    Route::put('categoria/{id}', [CategoriaController::class, 'update']);
    Route::delete('categoria/{id}', [CategoriaController::class, 'destroy']);


    Route::get('product', [ProductController::class, 'index']);
    Route::get('product/create', [ProductController::class, 'create']);
    Route::post('product', [ProductController::class, 'store']);
    Route::get('product/{id}/edit', [ProductController::class, 'edit']);
    Route::put('product/{id}', [ProductController::class, 'update']);
    Route::delete('product/{id}', [ProductController::class, 'destroy']);
    });

require __DIR__.'/auth.php';
