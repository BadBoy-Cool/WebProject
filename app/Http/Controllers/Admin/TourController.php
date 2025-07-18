<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
      // Trang danh sách
  // Danh sách tour
    public function index()
    {
        $tours = Tour::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.tours.index', compact('tours'));
    }

    // Chi tiết tour
    public function show($id)
    {
        $tour = Tour::findOrFail($id);
        return view('admin.tours.show', compact('tour'));
    }

    // Xóa tour
    public function destroy($id)
    {
        $tour = Tour::findOrFail($id);
        $tour->delete();

        return redirect()->route('admin.tours.index')->with('success', 'Đã xóa tour thành công!');
    }
}
