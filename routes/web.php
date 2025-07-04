<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\ReviewController;

// Trang chủ
Route::get('/', [TourController::class, 'home'])->name('index');

// Các trang khác
Route::view('/gioithieu', 'frontend.gioithieu');
Route::get('/tour', [TourController::class, 'index'])->name('tour');
Route::view('/lienhe', 'frontend.lienhe');

// Auth
// Đăng nhập
Route::post('/login', [AuthController::class, 'login'])->name('auth.login.submit');
Route::get('/login', [AuthController::class, 'index'])->name('auth.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

// Đăng ký
Route::view('/signup', 'backend.signup')->name('signup');
Route::post('/signup', [AuthController::class, 'signup'])->name('auth.signup.submit');


// Route::get('/tour-detail', [TourController::class, 'detail']);
// Route đúng:
Route::get('/tour-detail/{slug}', [TourController::class, 'detail'])->name('tour.detail');
Route::post('/tour-review', [ReviewController::class, 'store'])->name('tour.review.store');
