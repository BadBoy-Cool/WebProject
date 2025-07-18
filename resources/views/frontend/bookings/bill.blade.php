@extends('layouts.app')
@section('title', 'Hóa đơn')

@section('content')
<div class="container py-5" style="max-width: 800px;">

    <!-- KHUNG HÓA ĐƠN -->
    <div class="p-4 border rounded shadow-sm bg-white">

        <!-- TIÊU ĐỀ HÓA ĐƠN -->
        <div class="text-center mb-4">
            <h2 class="fw-bold mb-1">HÓA ĐƠN THANH TOÁN</h2>
            <small class="text-muted">travio</small>
            <hr>
        </div>

        <!-- THÔNG TIN TOUR -->
        <div class="mb-4">
            <h4 class="fw-bold mb-2">{{ $tour->tour_name }}</h4>
            <p class="text-muted mb-0">Ngày đặt: {{ $booking->created_at->format('d/m/Y') }}</p>
        </div>

        <!-- THÔNG TIN KHÁCH HÀNG -->
        <table class="table table-sm table-borderless mb-4">
            <tbody>
                <tr>
                    <th style="width: 200px;">Họ tên:</th>
                    <td>{{ $booking->customer_name }}</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>{{ $booking->email }}</td>
                </tr>
                <tr>
                    <th>Điện thoại:</th>
                    <td>{{ $booking->phone }}</td>
                </tr>
                <tr>
                    <th>Số người lớn:</th>
                    <td>{{ $booking->soNguoiLon }}</td>
                </tr>
                <tr>
                    <th>Số trẻ em:</th>
                    <td>{{ $booking->soEmBe }}</td>
                </tr>
                <tr>
                    <th>Ghi chú:</th>
                    <td>{{ $booking->note ?? 'Không có' }}</td>
                </tr>
            </tbody>
        </table>


        <!-- TỔNG TIỀN -->
        <div class="mb-4 p-3 border rounded">
            <h5 class="mb-1">Tổng tiền:</h5>
            <h3 class="fw-bold text-danger mb-0">{{ number_format($booking->tongGia) }} $</h3>
        </div>


        <!-- PHƯƠNG THỨC THANH TOÁN -->
        <div class="mb-4">
            <h6 class="fw-bold">Phương thức thanh toán:</h6>
            <p class="mb-0">{{ strtoupper($booking->payment_method) }}</p>
        </div>

        <!-- QR HOẶC HƯỚNG DẪN -->
        <div class="text-center my-4">
            @if ($booking->payment_method === 'momo')
                <p>Vui lòng quét mã QR Momo để thanh toán</p>
                <img src="{{ asset('backend/img/about/momoQR.png') }}" alt="Momo QR" width="160" class="border p-2 rounded">
            @elseif ($booking->payment_method === 'bank')
                <p>Vui lòng chuyển khoản theo thông tin sau:</p>
                <p>Ngân hàng: <strong>Vietcombank</strong></p>
                <p>Số tài khoản: <strong>0123456789</strong></p>
                <p>Chủ tài khoản: <strong>travio</strong></p>
                <img src="{{ asset('backend/img/about/CKNH.png') }}" alt="Bank QR" width="160" class="border p-2 rounded">
            @else
                <p>Bạn sẽ thanh toán 50% trực tiếp tại quầy.</p>
            @endif
        </div>

        <!-- CHỮ KÝ -->
        <div class="row mt-5">
            <div class="col text-start">
                <p><strong>Khách hàng</strong></p>
                <p class="text-muted">(Ký và ghi rõ họ tên)</p>
            </div>
            <div class="col text-end">
                <p><strong>Đại diện công ty</strong></p>
                <p class="text-muted">travio</p>
            </div>
        </div>

        <hr class="my-4">

        <!-- NÚT HÀNH ĐỘNG -->
        <div class="text-center">
            <button onclick="window.print()" class="btn btn-outline-secondary">
                🖨 In hóa đơn
            </button>
            <a href="{{ url('/') }}" class="btn btn-primary">Về trang chủ</a>
        </div>

    </div>
</div>
@endsection
