<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('landing.index');
});

Route::get('/login', function () {
    return view('auth.index');
});

Route::get('/dashboard', function () {
    return view('service.dashboard');
})->name('dashboard');

Route::resource('/dashboard/product', ProductController::class);
Route::resource('/dashboard/user', UserController::class);
Route::resource('/dashboard/transaction', TransactionController::class);