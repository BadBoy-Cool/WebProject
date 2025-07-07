<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest as RequestsAuthRequest;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Models\Login;

Class AuthController extends Controller
{
    protected $login;

    public function __construct(Login $login)
    {
        $this->login = $login;
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

    $activation_token = Str::random(60);


    DB::table('KhachHang')->insert([
        'KH_name' => $request->KH_name,
        'username' => $request->username,
        'password' => Hash::make($request->password),
        'email' => $request->email,
        'sdt' => $request->sdt,
        'diachi' => $request->diachi,
        'KH_gioitinh' => $request->KH_gioitinh,
        'activation_token' => $activation_token,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    $this->sendActivationEmail($request -> email, $activation_token);

    return redirect()->route('auth.login')->with('success', 'Đăng ký thành công! Vui lòng kiểm tra email để kích hoạt tài khoản');
}

   public function sendActivationEmail($email, $token)
   {
      $activation_link = route('activate.account', ['token' => $token]);
      
      Mail::send('backend.email_activation',['link' => $activation_link], function ($message) use ($email) {
         $message->to($email);   
         $message->subject('Kích hoạt tài khoản của bạn');
      });
   }  
   
   public function activateAccount($token)
   {
      $kh = $this->login->getUsersByToken($token);

      if ($kh) {
         $this->login->activateUserAccount($token);
         return redirect()->route('auth.login')->with('message','Tài khoản của bạn đã được kích hoạt');
      }
   }
}