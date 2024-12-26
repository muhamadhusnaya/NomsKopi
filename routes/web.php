<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

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

//Route::post('/create-invoice', [App\Http\Controllers\OrderController::class,'createInvoice'])->name('createInvoice');
Route::middleware('api')->post('/create-invoice', [App\Http\Controllers\OrderController::class, 'createInvoice']);

// Route::get('/', function () {
//     return view('welcome');
// });
