<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KhachHang;


class AccountController extends Controller
{
    public function index()
    {
        // Lấy toàn bộ tài khoản
        $accounts = KhachHang::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.accounts.index', compact('accounts'));
    }
}
