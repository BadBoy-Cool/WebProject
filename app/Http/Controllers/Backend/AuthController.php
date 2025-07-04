<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest as RequestsAuthRequest;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

Class AuthController extends Controller
{
   public function __construct()
   {
        
   }

   public function index(){
      return view('backend.login');
   }
   
   public function signup(){
      return view('backend.signup');
   }

   public function login(AuthRequest $request){
      $credentials = [
         'email' => $request->input('email'),
         'password' => $request->input('password')
      ];
      if (Auth::attempt($credentials)) {      
         return redirect()->route('index')->with('success', 'Đăng nhập thành công');
        }
      return redirect()->route('auth.login')->with('error','Email hoặc Mật khẩu không chính xác');
   }
   
   public function logout(Request $request){
      Auth::logout();
      $request->session()->invalidate();
      $request->session()->regenerateToken();
      return redirect()->route('auth.login');
   }

   public function handleSignup(Request $request)
{
    $request->validate([
        'KH_name' => 'required|string|max:255',
        'username' => 'required|string|max:50|unique:KhachHang,username',
        'email' => 'required|email|unique:KhachHang,email',
        'sdt' => 'required|digits_between:9,12|unique:KhachHang,sdt',
        'password' => 'required|confirmed|min:6',
        'diachi' => 'required|string|max:255',
        'KH_gioitinh' => 'nullable|in:0,1',
    ]);

    DB::table('KhachHang')->insert([
        'KH_name' => $request->KH_name,
        'username' => $request->username,
        'password' => Hash::make($request->password),
        'email' => $request->email,
        'sdt' => $request->sdt,
        'diachi' => $request->diachi,
        'KH_gioitinh' => $request->KH_gioitinh,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return redirect()->route('auth.login')->with('success', 'Đăng ký thành công!');
}

}