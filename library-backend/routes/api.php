<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::prefix('books')->group(function () {
    Route::get('/', [BookController::class, 'index']); 
    Route::post('/', [BookController::class, 'store']); 
    Route::get('/search', [BookController::class, 'search']);
    Route::get('/{id}', [BookController::class, 'show']); 
    Route::put('/{id}', [BookController::class, 'update']); 
    Route::delete('/{id}', [BookController::class, 'destroy']); 
    Route::get('/view/{id}', [BookController::class, 'exibir']); 
});