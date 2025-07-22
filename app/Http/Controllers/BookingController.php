<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Tour;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    // Trang tạo đặt tour
    public function create($id)
    {
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Bạn cần đăng nhập để đặt tour');
        }
        $tour = Tour::findOrFail($id);
        return view('frontend.bookings.create', compact('tour'));
    }

    // Xử lý lưu booking ban đầu với status = pending
    public function store(Request $request, $id)
    {
        $tour = Tour::where('tour_ID', $id)->firstOrFail();

        $tongGia = ($tour->giaLon * $request->soNguoiLon) + ($tour->giaEmBe * $request->soEmBe);

        $booking = Booking::create([
            'tour_id' => $tour->tour_ID,
            'customer_name' => $request->input('customer_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'soNguoiLon' => $request->input('soNguoiLon'),
            'soEmBe' => $request->input('soEmBe'),
            'note' => $request->input('note'),
            'tongGia' => $tongGia,
            'status' => 'pending',
            'thoiGianDat' => now(),
            'ngayLapPhieu' => now()
        ]);

        // Lưu booking_id vào session để dùng cho bước thanh toán
        session([
            'booking_id' => $booking->id,
            'tongGia' => $tongGia,
            'booking_data' => $request->only(['customer_name','email','phone','soNguoiLon','soEmBe','note'])
        ]);

        // Redirect sang trang chọn phương thức thanh toán
        return redirect()->route('book.tour.method', ['id' => $tour->tour_ID]);
    }

    // Trang chọn phương thức thanh toán
    public function selectMethod(Request $request, $id)
    {
        $tour = Tour::where('tour_ID', $id)->firstOrFail();

        $booking_id = session('booking_id');
        $tongGia = session('tongGia');
        $data = session('booking_data');

        if (!$booking_id || !$tongGia || !$data) {
            return redirect()->route('book.tour.create', $tour->tour_ID)
                ->with('error', 'Vui lòng nhập thông tin đặt tour trước.');
        }

        return view('frontend.bookings.select_method', [
            'tour' => $tour,
            'tongGia' => $tongGia,
            'data' => $data
        ]);
    }

    // Xử lý thanh toán: cập nhật booking thành paid
    public function pay(Request $request, $id)
    {
        $tour = Tour::where('tour_ID', $id)->firstOrFail();

        $booking_id = session('booking_id');
        if (!$booking_id) {
            return redirect()->route('book.tour.create', $tour->tour_ID)
                ->with('error', 'Vui lòng đặt tour trước khi thanh toán.');
        }

        $booking = Booking::findOrFail($booking_id);

        // Cập nhật thông tin thanh toán và trạng thái
        $paymentMethod = $request->input('payment_method');

        if ($paymentMethod === 'cod') {
            // Thanh toán khi đi tour, trạng thái vẫn pending
            $booking->status = 'pending';
        } else {
            // Các phương thức thanh toán online: đánh dấu là đã thanh toán
            $booking->status = 'paid';
        }

        $booking->payment_method = $paymentMethod;
        $booking->save();

        // Xóa session vì booking đã hoàn tất
        session()->forget(['booking_id', 'tongGia', 'booking_data']);

        return view('frontend.bookings.bill', [
            'tour' => $tour,
            'booking' => $booking
        ]);
    }

    //Danh sách booking của user
    public function index()
    {
        $bookings = Booking::where('email', Auth::user()->email)->get();
        return view('frontend.bookings.index', compact('bookings'));
    }

      public function adminIndex() {
        $bookings = Booking::with('tour')->paginate(10); // Lấy kèm thông tin tour
        return view('admin.bookings.index', compact('bookings'));
    }

    public function confirmBooking($id)
    {
        $booking = Booking::findOrFail($id);
        if ($booking->payment_method == 'cod' && $booking->status == 'pending') {
            $booking->status = 'paid';
            $booking->save();
            return redirect()->back()->with('success', 'Xác nhận thanh toán thành công.');
        }
        return redirect()->back()->with('error', 'Không thể xác nhận thanh toán.');
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return redirect()->back()->with('success', 'Hủy booking thành công.');
    }

}
