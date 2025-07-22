@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Chỉnh sửa tour đã đặt</h2>

    <form method="POST" action="{{ route('bookings.update', $booking->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Tên tour:</label>
            <input type="text" class="form-control" value="{{ $booking->tour->tour_name }}" disabled>
        </div>

        <div class="mb-3">
            <label class="form-label">Số người lớn:</label>
            <input type="number" name="soNguoiLon" class="form-control" value="{{ $booking->soNguoiLon }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Số em bé:</label>
            <input type="number" name="soEmBe" class="form-control" value="{{ $booking->soEmBe }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Ngày đi:</label>
            <input type="date" name="thoiGianDat" class="form-control" value="{{ $booking->thoiGianDat }}">
        </div>

        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
    </form>
</div>
@endsection
