<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tour;
use Illuminate\Support\Str;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::all();
        return view('backend.tours.index', compact('tours'));
    }

    public function create()
    {
        return view('backend.tours.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tour_name' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:255',
            'songay' => 'required|string',
            'soluong' => 'required|integer|min:1',
            'giaLon' => 'required|numeric|min:0',
            'giaEmBe' => 'required|numeric|min:0'
        ]);

        // Tự động tạo mã tour_ID
        $lastTour = Tour::orderBy('tour_ID', 'desc')->first();
        $lastIdNumber = $lastTour ? (int)substr($lastTour->tour_ID, 1) : 0;
        $newId = 'T' . str_pad($lastIdNumber + 1, 3, '0', STR_PAD_LEFT);

        $tour = new Tour();
        $tour->tour_ID = $newId;
        $tour->tour_name = $request->tour_name;
        $tour->title = $request->title;
        $tour->image = $request->image;
        $tour->slug = Str::slug($request->tour_name);
        $tour->songay = $request->songay;
        $tour->soluong = $request->soluong;
        $tour->giaLon = $request->giaLon;
        $tour->giaEmBe = $request->giaEmBe;
        $tour->save();

        return redirect()->route('admin.tours.index')->with('success', 'Thêm tour thành công');
    }

    public function edit($id)
    {
        $tour = Tour::findOrFail($id);
        return view('backend.tours.edit', compact('tour'));
    }

    public function update(Request $request, $id)
    {
        $tour = Tour::findOrFail($id);

        $request->validate([
            'tour_name' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:255',
            'songay' => 'required|string',
            'soluong' => 'required|integer|min:1',
            'giaLon' => 'required|numeric|min:0',
            'giaEmBe' => 'required|numeric|min:0'
        ]);

        $tour->tour_name = $request->tour_name;
        $tour->title = $request->title;
        $tour->image = $request->image;
        $tour->slug = Str::slug($request->tour_name);
        $tour->songay = $request->songay;
        $tour->soluong = $request->soluong;
        $tour->giaLon = $request->giaLon;
        $tour->giaEmBe = $request->giaEmBe;
        $tour->save();

        return redirect()->route('admin.tours.index')->with('success', 'Cập nhật tour thành công');
    }

    public function destroy($id)
    {
        $tour = Tour::findOrFail($id);
        $tour->delete();
        return redirect()->route('admin.tours.index')->with('success', 'Xóa tour thành công');
    }

    public function show($id)
    {
        $tour = Tour::findOrFail($id);
        return view('backend.tours.show', compact('tour'));
    }
}
