<?php

use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('landing.index');
});

Route::get('/login', function () {
    return view('auth.index');
});

Route::get('/dashboard', function () {
    return view('service.dashboard');
})->name('dashboard');