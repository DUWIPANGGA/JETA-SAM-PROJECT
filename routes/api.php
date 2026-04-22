<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;

Route::prefix('auth') -> group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('forgot', [AuthController::class, 'forgot_password']);

    Route::middleware('auth:api')->group(function () {
        Route::post('logout', [AuthController::class, 'logout']);
        Route::get('me', [AuthController::class, 'get_me']);
        Route::post('refresh', [AuthController::class, 'refresh_token']);
        Route::post('change', [AuthController::class, 'change_password']);

        // category
        Route::get('categories', [CategoryController::class, 'index']);
        Route::post('categories', [CategoryController::class, 'store']);
        Route::delete('categories/{id}', [CategoryController::class, 'destroy']);
    });
});
