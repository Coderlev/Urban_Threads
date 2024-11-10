<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Existing routes
Route::get('/shop', [ProductController::class, 'index'])->name('shop');
Route::get('/category/{id}', [ProductController::class, 'byCategory'])->name('category.products');
Route::get('/', function () {
    return view('welcome'); 
})->name('home');
Route::get('/search', [ProductController::class, 'search'])->name('search');

// About route
Route::get('/about', function () {
    return view('about');
})->name('about');
