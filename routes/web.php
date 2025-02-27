<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


// Page d'accueil - Liste des articles
Route::get('/dashboard', [PostController::class, 'index'])->name('dashboard');

// Routes des articles (PostController)
Route::middleware(['auth'])->group(function () {
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});

// Routes accessibles à tous (y compris les visiteurs)
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

// Authentification (Laravel Breeze ou Jetstream peut être utilisé)
require __DIR__.'/auth.php';
