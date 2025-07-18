<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\TourController as AdminTourController;
use App\Http\Controllers\CartController;

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

// Admin
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

// Hiển thị form đặt tour (create booking)
Route::get('/book/tour/create/{id}', [BookingController::class, 'create'])->name('book.tour.create');

// Xử lý lưu booking (submit form đặt tour)
Route::post('/book/tour/store/{id}', [BookingController::class, 'store'])->name('book.tour.store');

// Hiển thị chọn phương thức thanh toán
Route::get('/book/tour/method/{id}', [BookingController::class, 'selectMethod'])->name('book.tour.method');

// Xử lý thanh toán
Route::post('/book/tour/pay/{id}', [BookingController::class, 'pay'])->name('book.tour.pay');

Route::prefix('admin')->group(function () {

    // ✅ Dùng controller admin riêng
    Route::get('/tours', [AdminTourController::class, 'index'])->name('admin.tours.index');
    Route::get('/tours/{id}', [AdminTourController::class, 'show'])->name('admin.tours.show');
    Route::delete('/tours/{id}', [AdminTourController::class, 'destroy'])->name('admin.tours.destroy');


    Route::get('/messages', [MessageController::class, 'index'])->name('admin.messages.index');
    Route::get('/messages/{id}', [MessageController::class, 'show'])->name('admin.messages.show');
    Route::delete('/messages/{id}', [MessageController::class, 'destroy'])->name('admin.messages.destroy');

    Route::get('/account', [AccountController::class, 'index'])
        ->name('admin.accounts.index');

    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
    Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');


});
// Tour đã đặt của người dùng (giỏ hàng / lịch sử đặt)
Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index')->middleware('auth');
