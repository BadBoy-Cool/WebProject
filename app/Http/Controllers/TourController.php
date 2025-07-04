<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;

class TourController extends Controller
{
    public function index(Request $request)
    {
        $query = Tour::query();

        // Lọc theo địa điểm (activity/location)
        if ($request->filled('location')) {
            $query->where('slug', $request->location);
        }

        // Lọc theo khoảng giá
        if ($request->filled('min_price')) {
            $query->where('giaLon', '>=', $request->min_price);
        }

        if ($request->filled('max_price')) {
            $query->where('giaLon', '<=', $request->max_price);
        }

        // Lọc theo thời gian (ví dụ: 1-2, 2-4 ngày)
        if ($request->filled('duration')) {
            $range = explode('-', $request->duration);
            if (count($range) === 2) {
                $minDay = (int) $range[0];
                $maxDay = (int) $range[1];
                $query->whereBetween('songay', [$minDay, $maxDay]);
            }
        }

        // Sắp xếp
        switch ($request->sort) {
            case 'newest':
                $query->orderBy('created_at', 'desc');
                break;
            case 'oldest':
                $query->orderBy('created_at', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('giaLon', 'desc');
                break;
            case 'price_asc':
                $query->orderBy('giaLon', 'asc');
                break;
            default:
                $query->orderBy('created_at', 'desc'); // mặc định là mới nhất
        }

        // Phân trang có giữ query string
        $tours = $query->with('chuongTrinh')->paginate(8)->appends($request->all());

        return view('frontend.tour', compact('tours'));
    }




    public function detail($slug)
    {
        $tourDetail = Tour::with('chuongTrinh')->where('slug', $slug)->first();

        if (!$tourDetail) {
            abort(404);
        }

        $tourRecommendations = Tour::where('slug', '!=', $slug)->take(3)->get();

        $title = 'Chi tiết tour';
        $avgStar = 4;
        $checkDisplay = 'd-block';



        return view('frontend.tour-detail', compact(
            'tourDetail',
            'tourRecommendations',
            'title',
            'avgStar',
            'checkDisplay'
        ));
    }

        public function home()
    {
        $tours = Tour::latest()->take(6)->get(); // hoặc ->all() nếu muốn lấy hết
        return view('frontend.index', compact('tours'));
    }

}
