<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductVariantController;

Route::prefix('auth') -> group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::put('forgot', [AuthController::class, 'forgot_password']);

    Route::middleware('auth:api')->group(function () {
        Route::post('logout', [AuthController::class, 'logout']);
        Route::get('me', [AuthController::class, 'get_me']);
        Route::post('refresh', [AuthController::class, 'refresh_token']);
        Route::put('change', [AuthController::class, 'change_password']);
    });
});

Route::prefix('')->group(function() {  
    // category
    Route::get('categories', [CategoryController::class, 'index']);
    Route::middleware('auth:api')->group(function () {
        Route::post('categories', [CategoryController::class, 'store']);
        Route::put('categories/{id}', [CategoryController::class, 'update']);
        Route::delete('categories/{id}', [CategoryController::class, 'destroy']);
    });
});

Route::prefix('')->group(function(){
        // product
        Route::get('products', [ProductController::class, 'index']);
        Route::middleware('auth:api')->group(function(){
            Route::post('products', [ProductController::class, 'store']);
            Route::put('products/{id}', [ProductController::class, 'update']);
            Route::delete('products/{id}', [ProductController::class, 'destroy']);
        });
});

Route::prefix('')->group(function(){
    // product variant
    Route::get('variants', [ProductVariantController::class, 'index']);
    Route::get('products/{product_id}/variants/{variant_id}/check_stock', [ProductVariantController::class, 'check_stock']);
    Route::middleware('auth:api')->group(function(){
        Route::post('variants', [ProductVariantController::class, 'store']);
        Route::put('variants/{id}', [ProductVariantController::class, 'update']);
        Route::delete('variants/{id}', [ProductVariantController::class, 'destroy']);
    });
});