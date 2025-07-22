<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
    // Tạo tour
    public function create()
    {
        return view('admin.tours.create');
    }
    // Lưu tour mới
public function store(Request $request)
{
    $data = $request->validate([
        'tour_ID' => 'required|unique:tours,tour_ID',
        'tour_name' => 'required|string|max:255',
        'title' => 'nullable|string|max:255',
        'songay' => 'nullable|string|max:255',
        'soluong' => 'nullable|integer',
        'giaLon' => 'nullable|numeric',
        'giaEmBe' => 'nullable|numeric',
        'image' => 'nullable|string|max:255',
    ]);

    $data['slug'] = Str::slug($data['tour_name']);
    Tour::create($data);

    return redirect()->route('admin.tours.index')->with('success', 'Đã thêm tour thành công!');
}

// Hiển thị form sửa
public function edit($id)
{
    $tour = Tour::findOrFail($id);
    return view('admin.tours.edit', compact('tour'));
}

// Cập nhật tour
public function update(Request $request, $id)
{
    $tour = Tour::findOrFail($id);

    $data = $request->validate([
        'tour_name' => 'required|string|max:255',
        'title' => 'nullable|string|max:255',
        'songay' => 'nullable|string|max:255',
        'soluong' => 'nullable|integer',
        'giaLon' => 'nullable|numeric',
        'giaEmBe' => 'nullable|numeric',
        'image' => 'nullable|string|max:255',
    ]);

    $data['slug'] = Str::slug($data['tour_name']);
    $tour->update($data);

    return redirect()->route('admin.tours.index')->with('success', 'Đã cập nhật tour thành công!');
}

    // Xóa tour
    public function destroy($id)
    {
        $tour = Tour::findOrFail($id);
        $tour->delete();

        return redirect()->route('admin.tours.index')->with('success', 'Đã xóa tour thành công!');
    }
}
