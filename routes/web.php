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
Route::get('/dangnhap', [AuthController::class, 'login'])->name('dangnhap');
Route::view('/signup', 'backend.signup')->name('signup');
