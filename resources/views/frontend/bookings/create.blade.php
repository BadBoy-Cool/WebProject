@extends('layouts.app')
@section('title', 'Đặt tour')

@section('content')
<div class="container py-5">
    <div class="row g-4">

        {{-- CỘT TRÁI: FORM ĐẶT TOUR --}}
        <div class="col-md-7">
            <div class="card shadow-lg border-0">
                <div class="card-body">
                    <h3 class="mb-4 text-primary">
                        <i class="fas fa-edit"></i> Thông tin đặt tour
                    </h3>

                    <form action="{{ route('book.tour.store', ['id' => $tour->tour_ID]) }}" method="POST">
                        @csrf
                        <input type="hidden" name="tour_id" value="{{ $tour->tour_ID }}">

                        {{-- Họ tên --}}
                        <div class="mb-3">
                            <label for="customer_name" class="form-label">
                                <i class="fas fa-user"></i> Họ tên
                            </label>
                            <input type="text" class="form-control" name="customer_name"
                                   value="{{ Auth::user()->KH_name }}" required>
                        </div>

                        {{-- Email --}}
                        <div class="mb-3">
                            <label for="email" class="form-label">
                                <i class="fas fa-envelope"></i> Email
                            </label>
                            <input type="email" class="form-control" name="email"
                                   value="{{ Auth::user()->email }}" required>
                        </div>

                        {{-- Số điện thoại --}}
                        <div class="mb-3">
                            <label for="phone" class="form-label">
                                <i class="fas fa-phone"></i> Số điện thoại
                            </label>
                            <input type="text" class="form-control" name="phone"
                                   value="{{ Auth::user()->sdt }}" required>
                        </div>

                        {{-- Số người lớn --}}
                        <div class="mb-3">
                            <label for="soNguoiLon" class="form-label">
                                <i class="fas fa-users"></i> Số người lớn
                            </label>
                            <div class="input-group">
                                <button type="button" class="btn btn-outline-secondary"
                                        onclick="changeValue('soNguoiLon', -1)">-</button>
                                <input type="number" class="form-control text-center"
                                       name="soNguoiLon" id="soNguoiLon" value="1" min="1" required>
                                <button type="button" class="btn btn-outline-secondary"
                                        onclick="changeValue('soNguoiLon', 1)">+</button>
                            </div>
                        </div>

                        {{-- Số trẻ em --}}
                        <div class="mb-3">
                            <label for="soEmBe" class="form-label">
                                <i class="fas fa-child"></i> Số trẻ em
                            </label>
                            <div class="input-group">
                                <button type="button" class="btn btn-outline-secondary"
                                        onclick="changeValue('soEmBe', -1)">-</button>
                                <input type="number" class="form-control text-center"
                                       name="soEmBe" id="soEmBe" value="0" min="0">
                                <button type="button" class="btn btn-outline-secondary"
                                        onclick="changeValue('soEmBe', 1)">+</button>
                            </div>
                        </div>

                        {{-- Ghi chú --}}
                        <div class="mb-3">
                            <label for="note" class="form-label">
                                <i class="fas fa-sticky-note"></i> Ghi chú
                            </label>
                            <textarea class="form-control" name="note" rows="3"
                                      placeholder="Nhập ghi chú của bạn (nếu có)..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-2">
                            <i class="fas fa-check-circle"></i> Xác nhận đặt tour
                        </button>
                    </form>
                </div>
            </div>
        </div>

        {{-- CỘT PHẢI: THÔNG TIN TOUR --}}
        <div class="col-md-5">
            <div class="card shadow-lg border-0">
                @php
                    // Map tên địa điểm với ảnh
                    $imageMap = [
                        'Tokyo' => 'backend/img/destinations/japan.png',
                        'Bangkok' => 'backend/img/destinations/Bangkok.png',
                        'Rome' => 'backend/img/destinations/Roma.png',
                        'Bali' => 'backend/img/destinations/bali.png',
                        'Barcelona' => 'backend/img/destinations/tbn.png',
                        'New York' => 'backend/img/destinations/newyork.png',
                        'Cairo' => 'backend/img/destinations/aicap.png',
                        'Morocco' => 'backend/img/destinations/samac.png',
                        'Vịnh Hạ Long' => 'backend/img/destinations/banner-halong-bay.jpg',
                    ];

                    // Ảnh mặc định
                    $tourImage = 'backend/img/destinations/default.png';

                    // Tự động chọn ảnh theo tên tour
                    foreach ($imageMap as $key => $img) {
                        if (str_contains(strtolower($tour->tour_name), strtolower($key))) {
                            $tourImage = $img;
                            break;
                        }
                    }
                @endphp

                {{-- Hiển thị ảnh tour --}}
                <img src="{{ asset($tourImage) }}" class="img-fluid card-img-top rounded" alt="{{ $tour->tour_name }}">

                <div class="card-body">
                    <h4 class="card-title text-primary">{{ $tour->tour_name }}</h4>
                    <p class="text-muted">
                        <i class="fas fa-map-marker-alt"></i> {{ $tour->diaDiem }}
                    </p>

                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item">
                            <strong>Giá người lớn:</strong>
                            <span class="text-danger">{{ number_format($tour->giaLon) }} $</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Giá trẻ em:</strong>
                            <span class="text-success">{{ number_format($tour->giaEmBe) }} $</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Thời gian:</strong> {{ $tour->songay  }}
                        </li>
                        <li class="list-group-item">
                            <strong>Số lượng khách:</strong> {{ $tour->soluong }}
                        </li>
                    </ul>

                    <p class="card-text">
                        {!! Str::limit($tour->moTa, 150) !!}
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>

{{-- JS tăng giảm số lượng --}}
<script>
    function changeValue(inputId, change) {
        const input = document.getElementById(inputId);
        let currentValue = parseInt(input.value) || 0;
        const newValue = currentValue + change;
        const minValue = parseInt(input.min) || 0;
        if (newValue >= minValue) {
            input.value = newValue;
        }
    }
</script>
@endsection

