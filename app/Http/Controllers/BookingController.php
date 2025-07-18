<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Tour;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    // Đặt tour
    public function store(Request $request, $id)
    {
        $tour = Tour::where('tour_ID', $id)->firstOrFail();

        $tongGia = ($tour->giaLon * $request->soNguoiLon) + ($tour->giaEmBe * $request->soEmBe);

        Booking::create([
            'tour_id' => $tour->tour_ID,
            'customer_name' => $request->input('customer_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'soNguoiLon' => $request->input('soNguoiLon'),
            'soEmBe' => $request->input('soEmBe'),
            'note' => $request->input('note'),
            'tongGia' => ($tour->giaLon * $request->input('soNguoiLon')) + ($tour->giaEmBe * $request->input('soEmBe')),
            'status' => 'pending',
            'thoiGianDat' => now(),
            'ngayLapPhieu' => now()
        ]);

            // Redirect sang trang chọn phương thức thanh toán
        return redirect()->route('book.tour.method', ['id' => $tour->tour_ID])
            ->with([
                'data' => $request->only(['customer_name','email','phone','soNguoiLon','soEmBe','note']),
                'tongGia' => $tongGia
            ]);
    }
    public function create($id)
    {
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Bạn cần đăng nhập để đặt tour');
        }
        $tour = Tour::findOrFail($id);
        return view('frontend.bookings.create', compact('tour'));
    }

    public function confirm(Request $request, $id)
    {
        $tour = Tour::findOrFail($id);

        $soNguoiLon = (int) $request->input('soNguoiLon');
        $soEmBe = (int) $request->input('soEmBe');
        $tongGia = ($tour->giaLon * $soNguoiLon) + ($tour->giaEmBe * $soEmBe);

        // Gom lại toàn bộ dữ liệu booking
        $data = [
            'customer_name' => $request->input('customer_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'soNguoiLon' => $soNguoiLon,
            'soEmBe' => $soEmBe,
            'note' => $request->input('note'),
        ];

        return view('frontend.bookings.payment', [
            'tour' => $tour,
            'tongGia' => $tongGia,
            'data' => $data // ✅ THÊM DÒNG NÀY
        ]);
    }

    public function pay(Request $request, $id)
    {


        // Lấy tour theo mã tour_ID
        $tour = Tour::where('tour_ID', $id)->firstOrFail();

        $soNguoiLon = (int) $request->input('soNguoiLon');
        $soEmBe = (int) $request->input('soEmBe');
        $tongGia = ($tour->giaLon * $soNguoiLon) + ($tour->giaEmBe * $soEmBe);

        // Lưu booking
        $booking = Booking::create([
            'tour_id' => $tour->tour_ID,
            'customer_name' => $request->input('customer_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'soNguoiLon' => $soNguoiLon,
            'soEmBe' => $soEmBe,
            'note' => $request->input('note'),
            'tongGia' => $tongGia,
            'payment_method' => $request->input('payment_method'),
            'status' => 'paid',
            'thoiGianDat' => now(),
            'ngayLapPhieu' => now(),
        ]);

        // Trả về hóa đơn
        return view('frontend.bookings.bill', [
            'tour' => $tour,
            'booking' => $booking
        ]);
    }

    public function selectMethod(Request $request, $id)
    {
        // Lấy tour theo mã T001
        $tour = Tour::where('tour_ID', $id)->firstOrFail();


        $data = session('data');
        $tongGia = session('tongGia');

        // Nếu không có dữ liệu => quay lại trang đặt tour
        if (!$data || !$tongGia) {
            return redirect()->route('book.tour.create', $tour->tour_ID)
                ->with('error', 'Vui lòng nhập thông tin đặt tour trước.');
        }

        return view('frontend.bookings.select_method', [
            'tour' => $tour,
            'tongGia' => $tongGia,
            'data' => $data
        ]);
    }
        public function index()
        {
            $bookings = Booking::where('email', Auth::user()->email)->get();
            return view('frontend.bookings.index', compact('bookings'));
        }
}
