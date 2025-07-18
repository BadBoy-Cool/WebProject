@extends('admin.layout')
@section('title', 'Chi tiết Tour')

@section('content')
    <h2>Chi tiết Tour</h2>

    <div class="card p-4">
        <p><strong>Mã Tour:</strong> {{ $tour->tour_ID }}</p>
        <p><strong>Tên Tour:</strong> {{ $tour->tour_name }}</p>
        <p><strong>Thời gian:</strong> {{ $tour->songay }}</p>
        <p><strong>Số lượng khách:</strong> {{ $tour->soluong }}</p>
        <p><strong>Giá người lớn:</strong> {{ number_format($tour->giaLon) }} VNĐ</p>
        <p><strong>Giá trẻ em:</strong> {{ number_format($tour->giaEmBe) }} VNĐ</p>

        @if ($tour->title)
            <hr>
            <p><strong>Tiêu đề:</strong> {{ $tour->title }}</p>
        @endif

        @if ($tour->slug)
            <p><strong>Slug:</strong> {{ $tour->slug }}</p>
        @endif
    </div>

    <a href="{{ route('admin.tours.index') }}" class="btn btn-secondary mt-3">⬅ Quay lại danh sách</a>
@endsection
