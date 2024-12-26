<?php

use Illuminate\Support\Facades\Route;

// Dashboard Routes
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');
