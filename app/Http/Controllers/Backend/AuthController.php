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
         'KH_name' => 'required',
         'username' => 'required|unique:KhachHang,username',
         'email' => 'required|email|unique:KhachHang,email',
         'password' => 'required|confirmed|min:6',
         'sdt' => 'required',
         'diachi' => 'required',
         'KH_gioitinh' => 'required',
      ]);

      DB::table('KhachHang')->insert([
         'KH_name' => $request->KH_name,
         'username' => $request->username,
         'email' => $request->email,
         'password' => Hash::make($request->password),
         'sdt' => $request->sdt,
         'diachi' => $request->diachi,
         'KH_gioitinh' => $request->KH_gioitinh,
         'created_at' => now(),
         'updated_at' => now(),
      ]);

      return redirect()->route('auth.login')->with('success', 'Đăng ký thành công, hãy đăng nhập!');
   }

}