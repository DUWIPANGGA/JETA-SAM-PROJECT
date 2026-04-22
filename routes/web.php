<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/reset-password', function () {
    return view('auth.reset-password');
});

Route::get('/tracking', function ()  {
    return view('tracking');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/request', function () {
    return view('request');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});
