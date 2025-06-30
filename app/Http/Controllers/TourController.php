<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;

class TourController extends Controller
{
    public function index(Request $request)
    {
        $query = Tour::query();
        $size = $request->query('size', 12);
        $tours = Tour::with('chuongTrinh')->get();

        // Lọc theo khoảng giá
    if ($request->filled('min_price')) {
        $query->where('giaLon', '>=', $request->min_price);
    }

    if ($request->filled('max_price')) {
        $query->where('giaLon', '<=', $request->max_price);
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
    }

    $tours = $query->paginate(8);

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

}
