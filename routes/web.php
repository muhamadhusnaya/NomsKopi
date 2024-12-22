<?php

use Illuminate\Support\Facades\Route;

// Dashboard Routes
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/promo', function () {
    return view('promo');
})->name('promo');

Route::get('/orders', function () {
    return view('orders');
})->name('orders');

Route::get('/transactions', function () {
    return view('transactions');
})->name('transactions');

Route::get('/roles', function () {
    return view('roles');
})->name('roles');

Route::get('/settings', function () {
    return view('settings');
})->name('settings');

Route::get('/help-center', function () {
    return view('help-center');
})->name('help-center');

