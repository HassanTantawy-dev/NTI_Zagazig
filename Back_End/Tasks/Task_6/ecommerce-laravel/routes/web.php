<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

// ===== Product Routes =====
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/expensive', [ProductController::class, 'expensive']);

// ===== Customer Routes =====
Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/customers/cairo', [CustomerController::class, 'cairo']);
