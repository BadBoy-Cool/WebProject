@extends('layouts.app')
@section('title', 'Travio | Chi tiết Tours')
@section('content')
<style>
.tour-title-bg {
    color: #fff;
    font-weight: bold;
    padding: 10px 20px;
    background: rgba(0,0,0,0.4); /* nền mờ */
    display: inline-block;
    border-radius: 8px;
}
</style>

    {{-- Banner ảnh lớn --}}
    <section class="tour-banner" style="position: relative; height: 400px; overflow: hidden;">
        @php
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
            $tourImage = 'backend/img/destinations/default.png';
            foreach ($imageMap as $key => $img) {
                if (str_contains(strtolower($tourDetail->tour_name), strtolower($key))) {
                    $tourImage = $img;
                    break;
                }
            }
        @endphp

        <img src="{{ asset($tourImage) }}" alt="{{ $tourDetail->tour_name }}"
            style="width: 100%; height: 100%; object-fit: cover;">
        <div class="position-absolute top-50 start-50 translate-middle" style="color: #495057">
            <h1 class="display-4 fw-bold">{{ $tourDetail->tour_name }}</h1>
        </div>
    </section>

    {{-- Breadcrumb --}}
    <section class="bg-light py-3">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('tour') }}">Tour</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="font-size: 13px; color: #6c757d;">
                        {{ $tourDetail->title }}
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Tour Detail Content -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="rounded overflow-hidden shadow-sm">
                        @php
                            $imageMap = [
                                'Tokyo' => 'backend/img/destinations/japan.png',
                                'Bangkok' => 'backend/img/destinations/Bangkok.png',
                                'Rome' => 'backend/img/destinations/Roma.png',
                                'Bali' => 'backend/img/destinations/bali.png',
                                'Barcelona' => 'backend/img/destinations/tbn.png',
                                'New York' => 'backend/img/destinations/newyork.png',
                                'Cairo' => 'backend/img/destinations/aicap.png',
                                'Morocco' => 'backend/img/destinations/samac.png',
                                'Vịnh Hạ Long' => 'backend/img/destinations/halong.jpg',
                            ];
                            $tourImage = 'backend/img/destinations/default.png';
                            foreach ($imageMap as $key => $img) {
                                if (str_contains(strtolower($tourDetail->tour_name), strtolower($key))) {
                                    $tourImage = $img;
                                    break;
                                }
                            }
                        @endphp
                        <img src="{{ asset($tourImage) }}" class="img-fluid w-100" alt="{{ $tourDetail->tour_name }}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold fs-4" style="font-family: 'Poppins', sans-serif;">
                        {{ $tourDetail->title }}
                    </h2>
                    <p class="text-muted mb-3"><i class="fas fa-map-marker-alt me-2"></i>{{ $tourDetail->tour_name }}</p>
                    <ul class="list-unstyled">
                        <li><strong>Thời gian:</strong> {{ $tourDetail->songay }}</li>
                        <li><strong>Số lượng khách:</strong> {{ $tourDetail->soluong }}</li>
                        <li><strong>Giá người lớn:</strong> ${{ number_format($tourDetail->giaLon) }}</li>
                        <li><strong>Giá trẻ em:</strong> ${{ number_format($tourDetail->giaEmBe) }}</li>
                    </ul>
                    <div class="d-flex align-items-center mt-3">
                        <div class="me-3">
                            <span class="text-warning">
                                @for ($i = 0; $i < 5; $i++)
                                    @if ($avgStar && $i < $avgStar)
                                        <i class="fa fa-star"></i>
                                    @else
                                        <i class="far fa-star"></i>
                                    @endif
                                @endfor
                            </span>
                            <span class="ms-2">({{ $avgStar }}/5)</span>
                        </div>
                        <a href="{{ route('book.tour.create', ['id' => $tourDetail->tour_ID]) }}"
                            class="btn btn-primary rounded-pill px-4" style="margin-right: 1cm;">Đặt ngay</a>

                        <!-- Thêm vào mục yêu thích -->
                        <button class="btn btn-sm border-0 bg-transparent p-0 heart-detail-hover"
                            onclick='addDetailTourToFavorites({
                            img: @json(asset($tourImage)),
                            title: @json($tourDetail->title),
                            location: @json($tourDetail->tour_name),
                            duration: @json($tourDetail->songay),
                            slug: @json($tourDetail->slug)
                        })'
                            title="Thêm vào yêu thích">

                            <i class="fa fa-heart text-danger fs-2"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Lịch trình chi tiết -->
            @if ($tourDetail->chuongTrinh && $tourDetail->chuongTrinh->count())
                <div class="mt-5">
                    <h4 class="mb-3">Lịch trình chi tiết</h4>
                    <ul class="list-group">
                        @foreach ($tourDetail->chuongTrinh as $ct)
                            <li class="list-group-item">
                                <strong>Ngày khởi hành:</strong> {{ $ct->ngayKhoiHanh }}
                                <br>
                                <strong>Số khách tối đa:</strong> {{ $ct->khachToiDa }} người
                                @if ($ct->luuY)
                                    <br><strong>Lưu ý:</strong> {{ $ct->luuY }}
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </section>

    @if (request('location'))
        <h3 class="mb-4">Các tour tại: <span class="text-primary">{{ request('location') }}</span></h3>
    @endif

    <script>
        function addDetailTourToFavorites(tourData) {
            let favorites = JSON.parse(localStorage.getItem('favorites')) || [];

            const isExist = favorites.some(t => t.title === tourData.title);
            if (!isExist) {
                favorites.push(tourData);
                localStorage.setItem('favorites', JSON.stringify(favorites));

                // Cập nhật giao diện header và danh sách
                if (typeof updateFavoriteCount === 'function') updateFavoriteCount();
                if (typeof updateFavoriteList === 'function') updateFavoriteList();

        if (typeof updateFavoriteCount === 'function') updateFavoriteCount();
        if (typeof updateFavoriteList === 'function') updateFavoriteList();

        alert('Đã thêm vào danh sách yêu thích!');
    } else {
        alert('Tour này đã có trong danh sách yêu thích!');
    }
}
</script>


@endsection
