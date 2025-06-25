<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [AuthController::class, 'login']);

// Trang chủ
Route::get('/', function () {
    return view('frontend.index');
})->name('index'); //  Thêm tên route 'index'

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/gioithieu', function () {
    return view('frontend.gioithieu');
});

Route::get('/tour', function () {
    return view('frontend.tour');
});

Route::get('/lienhe', function () {
    return view('frontend.lienhe');
});

Route::get('/dangnhap', [AuthController::class, 'login'])->name('dangnhap');
