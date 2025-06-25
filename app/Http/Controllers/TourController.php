<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index(Request $request)
    {
        $size = $request->query('size') ? $request->query('size') : 12;
    }
}
