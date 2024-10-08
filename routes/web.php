<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
});

Route::get('/login', function () {
    return view('admin.auth.login');
});
Route::get('/register', function () {
    return view('admin.auth.register');
});

Route::get('/reset-password', function () {
    return view('admin.auth.reset-password');
});

Route::get('/forget-password', function () {
    return view('admin.auth.forget-password');
});

