<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Booking;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Đếm số lượng tour
        $tourCount = Tour::count();

        // Đếm số lượng booking
        $bookingCount = Booking::count();

        // Lấy danh sách tour mới nhất
        $latestTours = Tour::orderBy('created_at', 'desc')->take(100)->get();
        $latestBookings = Booking::with('tour')->orderBy('created_at', 'desc')->take(100)->get();
        return view('admin.dashboard', compact(
            'tourCount',
            'bookingCount',
            'latestTours',
            'latestBookings'
        ));
    }
}
