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
Route::get('/tours', [TourController::class, 'index'])->name('tours.index');
Route::get('/autocomplete', [TourController::class, 'autocomplete']);


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

// Hiển thị form đặt tour (create booking)
Route::get('/book/tour/create/{id}', [BookingController::class, 'create'])->name('book.tour.create');

// Xử lý lưu booking (submit form đặt tour)
Route::post('/book/tour/store/{id}', [BookingController::class, 'store'])->name('book.tour.store');

// Hiển thị chọn phương thức thanh toán
Route::get('/book/tour/method/{id}', [BookingController::class, 'selectMethod'])->name('book.tour.method');

// Xử lý thanh toán
Route::post('/book/tour/pay/{id}', [BookingController::class, 'pay'])->name('book.tour.pay');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::prefix('tours')->name('admin.tours.')->group(function () {
        Route::get('/', [AdminTourController::class, 'index'])->name('index');
        Route::get('/create', [AdminTourController::class, 'create'])->name('create');
        Route::post('/', [AdminTourController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [AdminTourController::class, 'edit'])->name('edit');
        Route::put('/{id}', [AdminTourController::class, 'update'])->name('update');
        Route::delete('/{id}', [AdminTourController::class, 'destroy'])->name('destroy');
        Route::get('/{id}', [AdminTourController::class, 'show'])->name('show');
    });

    Route::get('/messages', [MessageController::class, 'index'])->name('admin.messages.index');
    Route::get('/messages/{id}', [MessageController::class, 'show'])->name('admin.messages.show');
    Route::delete('/messages/{id}', [MessageController::class, 'destroy'])->name('admin.messages.destroy');

    Route::get('/account', [AccountController::class, 'index'])
        ->name('admin.accounts.index');

    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
    Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::get('bookings', [BookingController::class, 'adminIndex'])->name('admin.bookings.index');
    Route::put('bookings/{id}/confirm', [BookingController::class, 'confirmBooking'])->name('admin.bookings.confirm');
    Route::delete('bookings/{id}', [BookingController::class, 'destroy'])->name('admin.bookings.destroy');


});
// Tour đã đặt của người dùng (giỏ hàng / lịch sử đặt)
Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index')->middleware('auth');
// Sửa đơn đặt tour
Route::get('/bookings/{id}/edit', [BookingController::class, 'edit'])->name('bookings.edit');
Route::put('/bookings/{id}', [BookingController::class, 'update'])->name('bookings.update');

// Xoá đơn đặt tour
Route::delete('/bookings/{id}', [BookingController::class, 'destroy'])->name('bookings.destroy');

