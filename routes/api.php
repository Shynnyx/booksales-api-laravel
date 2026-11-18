<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

// Authentication
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});

// Public Routes
Route::apiResource('genres', GenreController::class)
    ->only(['index', 'show']);

Route::apiResource('authors', AuthorController::class)
    ->only(['index', 'show']);

Route::get('/books', [BookController::class, 'index']);

// Admin Only Routes
Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::apiResource('genres', GenreController::class)
        ->only(['store', 'update', 'destroy']);

    Route::apiResource('authors', AuthorController::class)
        ->only(['store', 'update', 'destroy']);
});