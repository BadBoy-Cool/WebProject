@extends('layouts.app')
@section('title', 'Travio | Tour')
@section('content')

    <body>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!-- Header -->
        <header class="border-bottom sticky-top bg-white">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid container-lg">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('frontend/img/logo/logo.png') }}" alt="Travio" class="header-logo" />
                        <span class="fw-bold fs-4" style="font-family: 'Playfair Display', serif;">Travio</span>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Links trái: Giới thiệu, Tour, Liên hệ -->
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/gioithieu') }}">Giới thiệu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/tour') }}">Tour</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/lienhe') }}">Liên hệ</a>
                            </li>
                        </ul>

                        <!-- Menu mobile: hiện khi thu nhỏ -->
                        <ul class="navbar-nav d-lg-none">
                            <!--Mục YÊU THÍCH TRÊN HEADER -->
                            <li class="nav-item position-relative">
                                <a class="nav-link d-flex align-items-center gap-1" data-bs-toggle="offcanvas"
                                    href="#offcanvasExample" aria-controls="offcanvasExample">
                                    <i class="fa fa-heart text-danger"></i>
                                    <span class="favorite-count"
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                                        style="display: none;">0</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('auth.login') }}">Đăng nhập</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('signup') }}">Đăng ký</a>
                            </li>
                        </ul>

                        <!-- Menu desktop: chỉ hiện khi đủ lớn -->
                        <div id="button-group" class="d-none d-lg-flex align-items-center gap-3">
                            <!-- Yêu thích - trái tim -->
                            <div class="position-relative">
                                <button class="btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                                    aria-controls="offcanvasExample">
                                    <i class="fas fa-heart text-danger fs-5"></i>
                                </button>
                                <span
                                    class="favorite-count badge bg-danger rounded-pill position-absolute top-0 start-100 translate-middle"
                                    style="display: none;">0</span>
                            </div>

                            <!-- Đăng nhập -->
                            <a type="button" class="btn" href="{{ route('auth.login') }}" id="sign-in-btn"> Đăng nhập
                            </a>

                            <!-- Đăng ký -->
                            <a type="button" class="btn" href="{{ route('signup') }}" id="sign-up-btn"> Đăng ký </a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Main -->
        <main>

            <!-- Tour Grid Area start -->
            <section class="tour-grid-page py-100 rel z-1">
                <div class="container">
                    <div class="row">
                        <!-- Sidebar bên trái -->
                        <div class="col-lg-3 col-md-6 col-sm-10 rmb-75">
                            <div class="shop-sidebar">
                                <div class="widget widget-activity" data-aos="fade-up" data-aos-duration="1500"
                                    data-aos-offset="50">
                                    <h6 class="widget-title">Các hoạt động</h6>
                                    <form method="GET" action="{{ route('tour') }}">
                                        <ul class="radio-filter">
                                            <li>
                                                <input class="form-check-input" type="radio" name="location"
                                                    id="activity1" value="den-asakusa-tokyo-nhat-ban"
                                                    onchange="this.form.submit()"
                                                    {{ request('location') == 'den-asakusa-tokyo-nhat-ban' ? 'checked' : '' }}>
                                                <label for="activity1">Đền Asakusa, Tokyo<span>18</span></label>
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="radio" name="location"
                                                    id="activity2" value="rome-y" onchange="this.form.submit()"
                                                    {{ request('location') == 'rome-y' ? 'checked' : '' }}>
                                                <label for="activity2">Rome, Ý<span>29</span></label>
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="radio" name="location"
                                                    id="activity3" value="tamnougalt-morocco" onchange="this.form.submit()"
                                                    {{ request('location') == 'tamnougalt-morocco' ? 'checked' : '' }}>
                                                <label for="activity3">Tamnougalt, Morocco<span>23</span></label>
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="radio" name="location"
                                                    id="activity4" value="bali-indonesia" onchange="this.form.submit()"
                                                    {{ request('location') == 'bali-indonesia' ? 'checked' : '' }}>
                                                <label for="activity4"> Bali, Indonesia<span>25</span></label>
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="radio" name="location"
                                                    id="activity5" value="vinh-ha-long-vietnam""
                                                    onchange="this.form.submit()"
                                                    {{ request('location') == 'vinh-ha-long-vietnam"' ? 'checked' : '' }}>
                                                <label for="activity5">Vịnh Hạ Long, Việt Nam<span>30</span></label>
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="radio" name="location"
                                                    id="activity6" value="bangkok-thai-lan" onchange="this.form.submit()"
                                                    {{ request('location') == 'bangkok-thai-lan' ? 'checked' : '' }}>
                                                <label for="activity6">Bangkok, Thái Lan<span>28</span></label>
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="radio" name="location"
                                                    id="activity7" value="new-york-my" onchange="this.form.submit()"
                                                    {{ request('location') == 'new-york-my' ? 'checked' : '' }}>
                                                <label for="activity7">New York, Mỹ<span>22</span></label>
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="radio" name="location"
                                                    id="activity8" value="barcelona-tay-ban-nha"
                                                    onchange="this.form.submit()"
                                                    {{ request('location') == 'barcelona-tay-ban-nha' ? 'checked' : '' }}>
                                                <label for="activity8"> Barcelona, Tây Ban Nha<span>15</span></label>
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="radio" name="location"
                                                    id="activity9" value="cairo-ai-cap" onchange="this.form.submit()"
                                                    {{ request('location') == 'cairo-ai-cap' ? 'checked' : '' }}>
                                                <label for="activity9">Cairo, Ai Cập<span>17</span></label>
                                            </li>
                                        </ul>
                                    </form>
                                </div>

                                <div class="widget widget-reviews" data-aos="fade-up" data-aos-duration="1500"
                                    data-aos-offset="50">
                                    <h6 class="widget-title">Theo đánh giá</h6>
                                    <ul class="radio-filter">
                                        <li>
                                            <input class="form-check-input" type="radio" checked name="ByReviews"
                                                id="review1">
                                            <label for="review1">
                                                <span class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </label>
                                        </li>
                                        <li>
                                            <input class="form-check-input" type="radio" name="ByReviews"
                                                id="review2">
                                            <label for="review2">
                                                <span class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-alt white"></i>
                                                </span>
                                            </label>
                                        </li>
                                        <li>
                                            <input class="form-check-input" type="radio" name="ByReviews"
                                                id="review3">
                                            <label for="review3">
                                                <span class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star white"></i>
                                                    <i class="fa fa-star-half-alt white"></i>
                                                </span>
                                            </label>
                                        </li>
                                        <li>
                                            <input class="form-check-input" type="radio" name="ByReviews"
                                                id="review4">
                                            <label for="review4">
                                                <span class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star white"></i>
                                                    <i class="fa fa-star white"></i>
                                                    <i class="fa fa-star-half-alt white"></i>
                                                </span>
                                            </label>
                                        </li>
                                        <li>
                                            <input class="form-check-input" type="radio" name="ByReviews"
                                                id="review5">
                                            <label for="review5">
                                                <span class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star white"></i>
                                                    <i class="fa fa-star white"></i>
                                                    <i class="fa fa-star white"></i>
                                                    <i class="fa fa-star-half-alt white"></i>
                                                </span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>

                                {{-- <div class="widget widget-languages" data-aos="fade-up" data-aos-duration="1500"
                                    data-aos-offset="50">
                                    <h6 class="widget-title">Các Nước</h6>
                                    <ul class="radio-filter">
                                        <li>
                                            <input class="form-check-input" type="radio" checked name="ByLanguages"
                                                id="language1">
                                            <label for="language1">Anh Mỹ</label>
                                        </li>
                                        <li>
                                            <input class="form-check-input" type="radio" name="ByLanguages"
                                                id="language2">
                                            <label for="language2">Anh</label>
                                        </li>
                                        <li>
                                            <input class="form-check-input" type="radio" name="ByLanguages"
                                                id="language3">
                                            <label for="language3">Đức</label>
                                        </li>
                                        <li>
                                            <input class="form-check-input" type="radio" name="ByLanguages"
                                                id="language4">
                                            <label for="language4">Nhật Bản</label>
                                        </li>
                                        <li>
                                            <input class="form-check-input" type="radio" name="ByLanguages"
                                                id="language5">
                                            <label for="language5">Việt Nam</label>
                                        </li>
                                        <li>
                                            <input class="form-check-input" type="radio" name="ByLanguages"
                                                id="language6">
                                            <label for="language6">Pháp</label>
                                        </li>
                                    </ul>
                                </div> --}}

                                <div class="widget widget-duration" data-aos="fade-up" data-aos-duration="1500"
                                    data-aos-offset="50">
                                    <h6 class="widget-title">Thời gian</h6>
                                    <ul class="radio-filter">
                                        <li>
                                            <input class="form-check-input" type="radio" checked name="Duration"
                                                id="duration1">
                                            <label for="duration1">1 - 2 ngày</label>
                                        </li>
                                        <li>
                                            <input class="form-check-input" type="radio" name="Duration"
                                                id="duration2">
                                            <label for="duration2">2 - 4 ngày</label>
                                        </li>
                                        <li>
                                            <input class="form-check-input" type="radio" name="Duration"
                                                id="duration3">
                                            <label for="duration3">4 - 8 ngày</label>
                                        </li>
                                        <li>
                                            <input class="form-check-input" type="radio" name="Duration"
                                                id="duration4">
                                            <label for="duration4">hơn 8 ngày</label>
                                        </li>
                                        <li>
                                            <input class="form-check-input" type="radio" name="Duration"
                                                id="duration5">
                                            <label for="duration5">Nhiều ngày</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="shop-shorter rel z-3 mb-20">
                                {{-- <ul class="grid-list mb-15 me-2">
                                <li><a href="#"><i class="fal fa-border-all"></i></a></li>
                                <li><a href="#"><i class="far fa-list"></i></a></li>
                            </ul> --}}
                                {{-- <select>
                                    <option value="default" selected="">Sắp xếp theo</option>
                                    <option value="new">Mới nhất</option>
                                    <option value="old">Cũ nhất</option>
                                    <option value="hight-to-low">Từ cao đến thấp</option>
                                    <option value="low-to-high">Từ thấp đến cao</option>
                                </select> --}}
                                <form id="sortForm" method="GET"
                                    class="d-flex justify-content-end align-items-center">
                                    {{-- Giữ lại các filter hiện có --}}
                                    <input type="hidden" name="min_price" value="{{ request('min_price') }}">
                                    <input type="hidden" name="max_price" value="{{ request('max_price') }}">
                                    <input type="hidden" name="Duration" value="{{ request('Duration') }}">
                                    <input type="hidden" name="ByActivities" value="{{ request('ByActivities') }}">
                                    <input type="hidden" name="ByReviews" value="{{ request('ByReviews') }}">

                                    <label for="sort" class="me-2">Sắp xếp:</label>
                                    <select name="sort" id="sort"
                                        onchange="document.getElementById('sortForm').submit()"
                                        class="form-select w-auto">
                                        <option value="">-- Sắp xếp theo --</option>
                                        <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Mới
                                            nhất</option>
                                        <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Cũ nhất
                                        </option>
                                        <option value="price_desc"
                                            {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Giá cao đến thấp
                                        </option>
                                        <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>
                                            Giá thấp đến cao</option>
                                    </select>
                                </form>

                            </div>

                            <div class="tour-grid-wrap">
                                <div class="row">

                                    @foreach ($tours as $tour)
                                        <div class="col-xl-4 col-md-6">
                                            <div class="destination-item tour-grid style-three bgc-lighter">
                                                <div class="image">
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
                                                        foreach ($imageMap as $location => $img) {
                                                            if (stripos($tour->tour_name, $location) !== false) {
                                                                $tourImage = $img;
                                                                break;
                                                            }
                                                        }
                                                    @endphp
                                                    <img src="{{ asset($tourImage) }}" alt="{{ $tour->tour_name }}">
                                                </div>
                                                <div class="content">
                                                    <span class="location">
                                                        <i class="fas fa-map-marker-alt"></i> {{ $tour->tour_name }}
                                                    </span>

                                                    {{-- Hiện tiêu đề mô tả --}}
                                                    <h6 style="font-weight: bold; font-size: 16px;">
                                                        <a href="{{ route('tour.detail', ['slug' => $tour->slug]) }}"
                                                            style="text-decoration: none; color: #333;">
                                                            {{ $tour->title }}
                                                        </a>
                                                    </h6>


                                                    {{-- Hiện thời gian và số khách --}}
                                                    <ul class="blog-meta">
                                                        <li><i class="far fa-clock"></i> {{ $tour->songay }}</li>
                                                        <li><i class="far fa-user"></i> {{ $tour->soluong }}/khách</li>
                                                    </ul>

                                                    {{-- Giá cả --}}
                                                    <div class="destination-footer mt-2">
                                                        <span class="price">
                                                            <span>${{ number_format($tour->giaLon) }}</span>/người lớn
                                                            <br>
                                                            <span>${{ number_format($tour->giaEmBe) }}</span>/trẻ em
                                                        </span>

                                                        {{-- Link chi tiết --}}
                                                        <a href="{{ route('tour.detail', ['slug' => $tour->slug]) }}"
                                                            class="theme-btn style-two style-three">
                                                            <i class="fa fa-heart text-danger fs-5"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!-- <ul class="pagination justify-content-center pt-15 flex-wrap" data-aos="fade-up"
                                                data-aos-duration="1500" data-aos-offset="50">
                                                <li class="page-item disabled">
                                                    <span class="page-link"><i class="far fa-chevron-left"></i></span>
                                                </li> -->
                                    {{-- <li class="page-item active">
                                            <span class="page-link">
                                                1
                                                <span class="sr-only">(current)</span>
                                            </span>
                                        </li> --}}
                                    {{-- <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i
                                                    class="far fa-chevron-right"></i></a>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </div>
            </section>
            <!-- Tour Grid Area end -->
        </main>

        <!-- Footer -->
        <footer class="bg-black py-4">
            <div class="container-fluid container-lg text-white font-weight-light">
                <div class="row align-items-center">
                    <div class="col-6 col-lg-6 d-flex flex-column gap-2">
                        <address class="m-0">
                            3/2, Xuân Khánh, Ninh Kiều, Cần Thơ
                        </address>
                        <a href="mailto:travio@gmail.com" class="link-light link-underline-opacity-0">Email:
                            Travio@gmail.com</a>
                        <a href="tel:+84123456789" class="link-light link-underline-opacity-0">Điện thoại: 0123456789</a>
                    </div>
                    <div class="col-3 d-none d-lg-flex flex-column gap-2">
                        <a href="{{ url('/gioithieu') }}" class="link-underline-opacity-0 link-light">Giới thiệu</a>
                        <a href="{{ route('tour') }}" class="link-underline-opacity-0 link-light">Tour</a>
                        <a data-bs-toggle="offcanvas" href="#offcanvasExample" aria-controls="offcanvasExample"
                            class="link-underline-opacity-0 link-light">Yêu thích</a>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column align-items-end">
                        <p>&copy; 2025 Travio</p>
                        <div>
                            <a href="#" class="link-light link-underline-opacity-0"><svg
                                    class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="link-light link-underline-opacity-0"><svg
                                    class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="link-light link-underline-opacity-0"><svg
                                    class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z" />
                                </svg>
                            </a>
                            <a href="#" class="link-light link-underline-opacity-0"><svg
                                    class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z"
                                        clip-rule="evenodd" />
                                    <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
                                </svg>
                            </a>
                            <a href="#" class="link-light link-underline-opacity-0"><svg
                                    class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

       <!-- OFFCANVAS YÊU THÍCH -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel" style="width: 700px; max-width: 90vw;">
            <div class="offcanvas-header border-bottom">
                <h3 class="offcanvas-title" id="offcanvasExampleLabel">
                    Danh sách Yêu thích
                </h3>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div id="shopping-cart" class="offcanvas-body">
                <p class="text-muted">Đang tải...</p>
            </div>
        </div>

         <!-- SCRIPT Xử LÝ YÊU THÍCH -->
        <script>
        let favorites = JSON.parse(localStorage.getItem('favorites')) || [];

        function saveFavorites() {
            localStorage.setItem('favorites', JSON.stringify(favorites));
        }

        function updateFavoriteCount() {
            const badges = document.querySelectorAll('.favorite-count');
            badges.forEach(badge => {
                badge.textContent = favorites.length;
                badge.style.display = favorites.length > 0 ? 'inline-block' : 'none';
            });
        }

        function updateFavoriteList() {
            const cartContainer = document.getElementById('shopping-cart');
            if (!cartContainer) return;

            if (favorites.length === 0) {
                cartContainer.innerHTML = '<p class="text-muted">Chưa có tour nào được yêu thích.</p>';
                return;
            }

            cartContainer.innerHTML = '';
            favorites.forEach((tour, index) => {
                const slug = tour.slug || '#';
                const div = document.createElement('div');
                div.className = 'd-flex align-items-center gap-3 mb-3 border-bottom pb-3';
                div.innerHTML = `
                    <img src="${tour.img}" alt="${tour.title}" width="80" height="80" style="object-fit: cover; border-radius: 8px;">
                    <div class="flex-grow-1">
                        <p class="mb-1 fw-bold fs-7">
                            <a href="/tour-detail/${slug}" class="text-decoration-none text-dark">
                                ${tour.title}
                            </a>
                        </p>
                        <p class="text-muted mb-1 fs-6">${tour.location}</p>
                        <p class="text-muted mb-0 fs-6"><i class="far fa-clock"></i> ${tour.duration}</p>
                    </div>
                    <button class="btn btn-sm btn-outline-danger remove-favorite fs-6 px-2 py-1" data-index="${index}">
                        Xóa
                    </button>
                `;
                cartContainer.appendChild(div);
            });

            document.querySelectorAll('.remove-favorite').forEach(btn => {
                btn.addEventListener('click', e => {
                    const index = parseInt(e.target.getAttribute('data-index'));
                    favorites.splice(index, 1);
                    saveFavorites();
                    updateFavoriteCount();
                    updateFavoriteList();
                });
            });
        }

        function addToFavorites(btn) {
            const tourCard = btn.closest('.destination-item');
            if (!tourCard) return;

            const img = tourCard.querySelector('img')?.getAttribute('src') || '';
            const title = tourCard.querySelector('h6 a')?.innerText || '';
            const location = tourCard.querySelector('.location')?.innerText || '';
            const duration = tourCard.querySelector('.blog-meta li')?.innerText || '';
            const slug = tourCard.getAttribute('data-slug') || '';

            if (!img || !title || !slug) return;

            const newTour = { img, title, location, duration, slug };

            const isExist = favorites.some(t => t.title === newTour.title);
            if (!isExist) {
                favorites.push(newTour);
                saveFavorites();
                updateFavoriteCount();
                updateFavoriteList();
                alert('Đã thêm vào danh sách yêu thích!');
            } else {
                alert('Tour này đã có trong danh sách yêu thích!');
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            updateFavoriteCount();
            updateFavoriteList();

            document.querySelectorAll('.heart').forEach(btn => {
                btn.addEventListener('click', e => {
                    e.preventDefault();
                    addToFavorites(btn);
                });
            });

            const offcanvas = document.getElementById('offcanvasExample');
            if (offcanvas) {
                offcanvas.addEventListener('show.bs.offcanvas', () => {
                    favorites = JSON.parse(localStorage.getItem('favorites')) || [];
                    updateFavoriteList();
                    updateFavoriteCount();
                });
            }
        });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </body>
@endsection
<script>
    $(function() {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 1000,
            values: [100, 750],
            slide: function(event, ui) {
                $("#price-range").text("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });

        // Hiển thị mặc định khi trang load
        $("#price-range").text(
            "$" + $("#slider-range").slider("values", 0) +
            " - $" + $("#slider-range").slider("values", 1)
        );
    });
</script>
