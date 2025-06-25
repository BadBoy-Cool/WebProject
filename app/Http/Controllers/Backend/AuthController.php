<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

Class AuthController extends Controller
{
    public function __construct()
    {
        
    }

    public function login(){
       return view('backend.login');
    }
     public function signup(){
       return view('backend.signup');
    }
}