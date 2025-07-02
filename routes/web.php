<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;

// Trang chủ
Route::get('/', function () {
    return view('frontend.index');
})->name('index');

// Các trang khác
Route::view('/gioithieu', 'frontend.gioithieu');
Route::view('/tour', 'frontend.tour');
Route::view('/lienhe', 'frontend.lienhe');

// Auth
Route::post('/login', [AuthController::class, 'login'])->name('auth.login.submit');
Route::get('/login', [AuthController::class, 'index'])->name('auth.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::view('/signup', 'backend.signup')->name('signup');
