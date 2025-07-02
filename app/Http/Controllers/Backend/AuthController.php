<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest as RequestsAuthRequest;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

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
}