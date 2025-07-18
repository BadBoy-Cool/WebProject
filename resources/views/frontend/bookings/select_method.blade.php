@extends('layouts.app')
@section('title', 'Chọn phương thức thanh toán')

@section('content')
<div class="container py-5">

    <!-- TIÊU ĐỀ -->
    <div class="text-center mb-5">
        <h2 class="fw-bold text-primary">
            <i class="fas fa-credit-card"></i> Thanh toán tour
        </h2>
        <p class="text-muted">Kiểm tra lại thông tin và chọn phương thức thanh toán</p>
    </div>

    <div class="row g-4 justify-content-center">

        <!-- THÔNG TIN TOUR -->
        <div class="col-lg-5">
            <div class="card shadow-sm border rounded-4">
                <div class="card-header bg-primary text-white text-center py-3 rounded-top-4">
                    <h5 class="mb-0"><i class="fas fa-map-marked-alt"></i> Thông tin tour</h5>
                </div>
                <div class="card-body p-4">
                    <h4 class="fw-bold text-dark">{{ $tour->tour_name }}</h4>
                    <p class="text-muted mb-3"><i class="fas fa-location-dot"></i> {{ $tour->diaDiem }}</p>

                    <div class="border rounded p-3 mb-3">
                        <div class="d-flex justify-content-between">
                            <span><i class="fas fa-users"></i> Người lớn</span>
                            <span class="fw-bold">{{ $data['soNguoiLon'] ?? 0 }}</span>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <span><i class="fas fa-child"></i> Trẻ em</span>
                            <span class="fw-bold">{{ $data['soEmBe'] ?? 0 }}</span>
                        </div>
                    </div>

                    <!-- TỔNG TIỀN -->
                    <div class="p-3 border rounded text-center bg-light">
                        <h6 class="text-muted mb-1">Tổng tiền</h6>
                        <h3 class="fw-bold text-danger mb-0">
                            <i class="fas fa-money-bill-wave"></i> {{ number_format($tongGia ?? 0) }} $
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- CHỌN PHƯƠNG THỨC THANH TOÁN -->
        <div class="col-lg-5">
            <div class="card shadow-sm border rounded-4">
                <div class="card-header bg-success text-white text-center py-3 rounded-top-4">
                    <h5 class="mb-0"><i class="fas fa-wallet"></i> Phương thức thanh toán</h5>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('book.tour.pay', ['id' => $tour->tour_ID]) }}" method="POST">
                        @csrf

                        <!-- DỮ LIỆU ẨN -->
                        <input type="hidden" name="customer_name" value="{{ $data['customer_name'] ?? '' }}">
                        <input type="hidden" name="email" value="{{ $data['email'] ?? '' }}">
                        <input type="hidden" name="phone" value="{{ $data['phone'] ?? '' }}">
                        <input type="hidden" name="soNguoiLon" value="{{ $data['soNguoiLon'] ?? '' }}">
                        <input type="hidden" name="soEmBe" value="{{ $data['soEmBe'] ?? '' }}">
                        <input type="hidden" name="note" value="{{ $data['note'] ?? '' }}">
                        <input type="hidden" name="tongGia" value="{{ $tongGia ?? '' }}">

                        <!-- RADIO CHỌN -->
                        <label class="fw-bold mb-2 d-block">Chọn hình thức thanh toán:</label>
                        <div class="list-group mb-4">
                            <label class="list-group-item d-flex align-items-center">
                                <input class="form-check-input me-2" type="radio" name="payment_method" value="momo" required>
                                <i class="fas fa-qrcode text-danger me-2"></i> Momo (Quét mã QR)
                            </label>
                            <label class="list-group-item d-flex align-items-center">
                                <input class="form-check-input me-2" type="radio" name="payment_method" value="bank" required>
                                <i class="fas fa-university text-primary me-2"></i> Chuyển khoản ngân hàng
                            </label>
                            <label class="list-group-item d-flex align-items-center">
                                <input class="form-check-input me-2" type="radio" name="payment_method" value="cod" required>
                                <i class="fas fa-hand-holding-usd text-success me-2"></i> Thanh toán khi đi tour (COD)
                            </label>
                        </div>

                        <!-- NÚT HÀNH ĐỘNG -->
                        <div class="d-grid gap-3">
                            <button type="submit" class="btn btn-success btn-lg rounded-pill">
                                <i class="fas fa-check-circle"></i> Xác nhận thanh toán
                            </button>
                            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary rounded-pill">
                                <i class="fas fa-arrow-left"></i> Quay lại
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
