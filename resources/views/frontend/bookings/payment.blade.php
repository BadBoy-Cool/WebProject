@extends('layouts.app')
@section('title', 'Xác nhận thanh toán')

@section('content')
<div class="container py-5">
    <h3 class="mb-4">Xác nhận thanh toán</h3>

    <div class="mb-3">
        <strong>Tour:</strong> {{ $tour->tour_name }}
    </div>

    <div class="mb-3">
        <strong>Họ tên:</strong> {{ $data['customer_name'] }}
    </div>

    <div class="mb-3">
        <strong>Email:</strong> {{ $data['email'] }}
    </div>

    <div class="mb-3">
        <strong>Số điện thoại:</strong> {{ $data['phone'] }}
    </div>

    <div class="mb-3">
        <strong>Số người lớn:</strong> {{ $data['soNguoiLon'] }} ({{ number_format($tour->giaLon) }} đ/người)
    </div>

    <div class="mb-3">
        <strong>Số trẻ em:</strong> {{ $data['soEmBe'] }} ({{ number_format($tour->giaEmBe) }} đ/trẻ)
    </div>

    <div class="mb-3">
        <strong>Ghi chú:</strong> {{ $data['note'] ?? 'Không có' }}
    </div>

    <div class="mb-4">
        <strong class="text-danger">Tổng tiền:</strong> <span class="fw-bold text-danger">{{ number_format($tongGia) }} đ</span>
    </div>

    <form action="{{ route('book.tour.method', ['id' => $tour->tour_ID]) }}" method="POST">
        @csrf

        {{-- Gửi dữ liệu booking ẩn --}}
        @foreach($data as $key => $value)
            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
        @endforeach
        <input type="hidden" name="tongGia" value="{{ $tongGia }}">


        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">Thanh toán</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </form>
</div>
@endsection
