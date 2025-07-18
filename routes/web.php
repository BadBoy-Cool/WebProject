<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;

// Trang chủ
Route::get('/', [TourController::class, 'home'])->name('index');

// Các trang khác
Route::view('/gioithieu', 'frontend.gioithieu');
Route::get('/tour', [TourController::class, 'index'])->name('tour');
Route::view('/lienhe', 'frontend.lienhe');
// Trang liên hệ GET & POST
Route::get('/lienhe', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/lienhe', [ContactController::class, 'submitForm'])->name('contact.submit');
// Auth
// Đăng nhập
Route::post('/login', [AuthController::class, 'login'])->name('auth.login.submit');
Route::get('/login', [AuthController::class, 'index'])->name('auth.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

// Đăng ký
Route::view('/signup', 'backend.signup')->name('signup');
Route::post('/signup', [AuthController::class, 'handleSignup'])->name('auth.signup.submit');
Route::get('activate-account/{token}', [AuthController::class, 'activateAccount'])->name('activate.account');

// Route::get('/tour-detail', [TourController::class, 'detail']);
// Route đúng:
Route::get('/tour-detail/{slug}', [TourController::class, 'detail'])->name('tour.detail');
Route::post('/tour-review', [ReviewController::class, 'store'])->name('tour.review.store');

Route::get('/book-tour/{id}/create', [BookingController::class, 'create'])->name('book.tour.formdat');
Route::post('/book-tour/{id}', [BookingController::class, 'store'])->name('book.tour.store');
Route::post('/book-tour/{id}/confirm', [BookingController::class, 'confirm'])->name('book.tour.confirm');
// Sau khi chọn hình thức thanh toán → hiển thị hóa đơn
Route::post('/book-tour/{id}/pay', [BookingController::class, 'pay'])->name('book.tour.pay');
Route::get('/book-tour/{id}/method', [BookingController::class, 'selectMethod'])->name('book.tour.method');
// Form tạo booking (cho phù hợp với Blade)
Route::get('/book-tour/{id}/create', [BookingController::class, 'create'])->name('book.tour.create');
