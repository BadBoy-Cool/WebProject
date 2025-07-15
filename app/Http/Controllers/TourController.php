<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;

class TourController extends Controller
{
    public function index(Request $request)
    {
        $query = Tour::query();

        // Map slug location => tên thật trong DB
        $locationMap = [
            'bali' => 'Bali',
            'bangkok' => 'Bangkok',
            'newyork' => 'New York',
            'tokyo' => 'Tokyo',
            'rome' => 'Rome',
            'barcelona' => 'Barcelona',
            'cairo' => 'Cairo',
            'morocco' => 'Morocco',
            'vinh-ha-long' => 'Vịnh Hạ Long',
        ];

        // Lọc theo location
        if ($request->filled('location')) {
            $locationSlug = strtolower($request->location);
            $mappedName = $locationMap[$locationSlug] ?? $request->location;
            $query->whereRaw('LOWER(tour_name) LIKE ?', ['%' . strtolower($mappedName) . '%']);
        }

        // Lọc theo search keyword
        if ($request->filled('search')) {
            $keyword = strtolower($request->search);
            $query->whereRaw('LOWER(tour_name) LIKE ?', ['%' . $keyword . '%']);
        }

        // Lọc theo min price
        if ($request->filled('min_price')) {
            $query->where('giaLon', '>=', $request->min_price);
        }

        // Lọc theo max price
        if ($request->filled('max_price')) {
            $query->where('giaLon', '<=', $request->max_price);
        }

        // Lọc theo duration (số ngày)
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
                $query->orderBy('created_at', 'desc');
        }

        // Lấy dữ liệu + paginate
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
        $tours = Tour::latest()->take(6)->get();
        return view('frontend.index', compact('tours'));
    }
}
