@extends('layouts.app')
@section('title', 'Travio | Trang chủ')
@section('content')

	<body>
		<!-- Header -->
		<header class="border-bottom sticky-top bg-white">
			<nav class="navbar navbar-expand-lg">
				<div class="container-fluid container-lg">
					<a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('frontend/img/logo/logo.png') }}"
                             alt="Travio"
                             class="header-logo" />
                        <span class="fw-bold fs-4" style="font-family: 'Playfair Display', serif;">Travio</span>
                    </a>

					<button
						class="navbar-toggler"
						type="button"
						data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent"
						aria-expanded="false"
						aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div
						class="collapse navbar-collapse"
						id="navbarSupportedContent">
						<ul class="navbar-nav me-auto">
							<li class="nav-item">
								<a class="nav-link" href="{{ url('/gioithieu') }}"
									>Giới thiệu</a
								>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ url('/tour') }}"
									>Tour</a
								>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ url('/lienhe') }}"
									>Liên hệ</a
								>
							</li>
						</ul>
						<ul class="navbar-nav me-auto mb-2 mb-lg-0 d-lg-none">
							<li class="nav-item">
								<a
									class="nav-link"
									data-bs-toggle="offcanvas"
									href="#offcanvasExample"
									aria-controls="offcanvasExample"
									>Giỏ hàng
								</a>
							</li>
							<li class="nav-item">
    							<a class="nav-link" href="{{ route('dangnhap') }}"
								>Đăng nhập</a>
							</li>
							<li class="nav-item">
								<a class="nav-link"
									>Đăng ký</a
								>
							</li>
						</ul>
						<div id="button-group" class="d-none d-lg-flex">
							<div class="position-relative">
								<button
									class="btn"
									data-bs-toggle="offcanvas"
									href="#offcanvasExample"
									role="button"
									aria-controls="offcanvasExample">
									<svg
										class="w-6 h-6 text-gray-800 dark:text-white"
										aria-hidden="true"
										xmlns="http://www.w3.org/2000/svg"
										width="24"
										height="24"
										fill="none"
										viewBox="0 0 24 24">
										<path
											stroke="currentColor"
											stroke-linecap="round"
											stroke-linejoin="round"
											stroke-width="2"
											d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312" />
									</svg>
								</button>
								<span id="cart-quantity">0</span>
							</div>
							<a
								type="button"
								class="btn"
								href="{{ route('dangnhap') }}"
								id="sign-in-btn">
								Đăng nhập
							</a>
							<a
								type="button"
								class="btn"
                                href="{{ route('signup') }}"
								id="sign-up-btn">
								Đăng ký
							</a>
						</div>
					</div>
				</div>
			</nav>
		</header>

		<!-- Main -->
		<main>

<<<<<<< HEAD
        <!-- Tour Grid Area start -->       
            <section class="tour-grid-page py-20 rel z-1">
=======
        <!-- Tour Grid Area start -->
            <section class="tour-grid-page py-100 rel z-1">
>>>>>>> 55c9e8b38433839a30ffc5b9605c046a0139a6e7
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-10 rmb-75">
                        <div class="shop-sidebar">
                            <div class="widget widget-filter" data-aos="fade-up" data-aos-delay="50"
                                data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="widget-title">Lọc theo giá</h6>
                               <div class="price-filter-wrap">
                                <div id="slider-range"></div>
                                <div class="price">
                                    Giá <span id="price-range"></span>
                                </div>
                            </div>
                            </div>

                            <div class="widget widget-activity" data-aos="fade-up" data-aos-duration="1500"
                                data-aos-offset="50">
                                <h6 class="widget-title">Các hoạt động</h6>
                                <ul class="radio-filter">
                                    <li>
                                        <input class="form-check-input" type="radio" checked name="ByActivities"
                                            id="activity1">
                                        <label for="activity1">Đền Asakusa, Tokyo, Nhật Bản<span>18</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities"
                                            id="activity2">
                                        <label for="activity2"> Rome, Ý <span>29</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities"
                                            id="activity3">
                                        <label for="activity3">Tamnougalt, Morocco<span>23</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities"
                                            id="activity4">
                                        <label for="activity4"> Bali, Indonesia<span>25</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities"
                                            id="activity5">
                                        <label for="activity5">Vịnh Hạ Long, Việt Nam<span>30</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities"
                                            id="activity6">
                                        <label for="activity6">Bangkok, Thái Lan<span>28</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities"
                                            id="activity6">
                                        <label for="activity6">Machu Picchu, Peru<span>16</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities"
                                            id="activity6">
                                        <label for="activity6">New York, Mỹ<span>22</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities"
                                            id="activity6">
                                        <label for="activity6">Rio de Janeiro, Brazil<span>25</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities"
                                            id="activity6">
                                        <label for="activity6"> Barcelona, Tây Ban Nha<span>15</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities"
                                            id="activity6">
                                        <label for="activity6">Cairo, Ai Cập<span>17</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities"
                                            id="activity6">
                                        <label for="activity6">Cape Town, Nam Phi<span>12</span></label>
                                    </li>
                                </ul>
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

                            <div class="widget widget-languages" data-aos="fade-up" data-aos-duration="1500"
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
                            </div>

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
                            <select>
                                <option value="default" selected="">Sắp xếp theo</option>
                                <option value="new">Mới nhất</option>
                                <option value="old">Cũ nhất</option>
                                <option value="hight-to-low">Từ cao đến thấp</option>
                                <option value="low-to-high">Từ thấp đến cao</option>
                            </select>
                        </div>

                        <div class="tour-grid-wrap">
                            <div class="row">
                                <div class="col-xl-4 col-md-6" id="halong">
                                    <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                        data-aos-duration="1500" data-aos-offset="50">
                                        <div class="image">
                                            <span class="badge bgc-pink">Nổi bật</span>
                                            <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                            <img src="{{asset('backend/img/destinations/vhl2.png')}}" alt="Tour List">
                                        </div>
                                        <div class="content">
                                            <div class="destination-header">
                                                <span class="location"><i class="fal fa-map-marker-alt"></i>Vịnh Hạ Long, Việt Nam</span>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <h6 style="font-family: 'Arial', sans-serif; font-size: 18px; font-weight: bold; color: #333; line-height: 1.5;"><a href="tour-details.html"  style="text-decoration: none; color: inherit;">Vịnh Hạ Long là kỳ quan thiên nhiên nổi bật của Quảng Ninh, nằm ở phía bắc Việt Nam.</a></h6>
                                            <ul class="blog-meta">
                                                <li><i class="far fa-clock"></i> 3 ngày 2 đêm</li>
                                                <li><i class="far fa-user"></i> 5-8 khách</li>
                                            </ul>
                                            <div class="destination-footer">
                                                <span class="price"><span>$58.00</span>/người</span>
                                                <a href="tour-details.html" class="theme-btn style-two style-three">
                                                    <i class="fal fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6" id="Tokyo">
                                    <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                        data-aos-duration="1500" data-aos-delay="50" data-aos-offset="50">
                                        <div class="image">
                                            <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                            <img src="{{ asset('backend/img/destinations/japan.png') }}"
                                                alt="Tour List">
                                        </div>
                                        <div class="content">
                                            <div class="destination-header">
                                                <span class="location"><i class="fal fa-map-marker-alt"></i>Đền Asakusa, Tokyo, Nhật Bản</span>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <h6 style="font-family: 'Arial', sans-serif; font-size: 18px; font-weight: bold; color: #333; line-height: 1.5;"><a href="tour-details.html" style="text-decoration: none; color: inherit;">Senso-ji là ngôi đền cổ nhất Tokyo, nổi tiếng với kiến trúc truyền thống.</a></h6>
                                            <ul class="blog-meta">
                                                <li><i class="far fa-clock"></i> 3 ngày 2 đêm</li>
                                                <li><i class="far fa-user"></i> 6-7 khách</li>
                                            </ul>
                                            <div class="destination-footer">
                                                <span class="price"><span>$59.00</span>/người</span>
                                                <a href="tour-details.html" class="theme-btn style-two style-three">
                                                    <i class="fal fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                        data-aos-duration="1500" data-aos-delay="100" data-aos-offset="50">
                                        <div class="image">
                                            <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                            <img src="{{ asset('backend/img/destinations/samac.png') }}"
                                                alt="Tour List">
                                        </div>
                                        <div class="content">
                                            <div class="destination-header">
                                                <span class="location"><i class="fal fa-map-marker-alt"></i>Tamnougalt, Morocco</span>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <h6 style="font-family: 'Arial', sans-serif; font-size: 18px; font-weight: bold; color: #333; line-height: 1.5;"><a href="tour-details.html"  style="text-decoration: none; color: inherit;">Một ốc đảo cổ kính nằm bên dòng sông Draa, nổi bật với pháo đài cổ kasbah và nét văn hóa Berber.</a></h6>
                                            <ul class="blog-meta">
                                                <li><i class="far fa-clock"></i> 3 ngày 2 đêm</li>
                                                <li><i class="far fa-user"></i> 5-8 khách</li>
                                            </ul>
                                            <div class="destination-footer">
                                                <span class="price"><span>$58.00</span>/người</span>
                                                <a href="tour-details.html" class="theme-btn style-two style-three">
                                                    <i class="fal fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6" id="bangkok">
                                    <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                        data-aos-duration="1500" data-aos-offset="50">
                                        <div class="image">
                                            <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                            <img src="{{ asset('backend/img/destinations/Bangkok.png') }}"
                                                alt="Tour List">
                                        </div>
                                        <div class="content">
                                            <div class="destination-header">
                                                <span class="location"><i class="fal fa-map-marker-alt"></i>Bangkok, Thái Lan</span>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <h6 style="font-family: 'Arial', sans-serif; font-size: 18px; font-weight: bold; color: #333; line-height: 1.5;"><a href="tour-details.html" style="text-decoration: none; color: inherit;"> Thành phố sôi động kết hợp giữa truyền thống và hiện đại.</a></h6>
                                            <ul class="blog-meta">
                                                <li><i class="far fa-clock"></i> 2 ngày 1 đêm</li>
                                                <li><i class="far fa-user"></i> 4-6 khách</li>
                                            </ul>
                                            <div class="destination-footer">
                                                <span class="price"><span>$50.00</span>/người</span>
                                                <a href="tour-details.html" class="theme-btn style-two style-three">
                                                    <i class="fal fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                        data-aos-duration="1500" data-aos-delay="50" data-aos-offset="50">
                                        <div class="image">
                                            <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                            <img src="{{asset('backend/img/destinations/Roma.png')}}" alt="Tour List">
                                        </div>
                                        <div class="content">
                                            <div class="destination-header">
                                                <span class="location"><i class="fal fa-map-marker-alt"></i> Rome, Ý</span>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <h6 style="font-family: 'Arial', sans-serif; font-size: 18px; font-weight: bold; color: #333; line-height: 1.5;"><a href="tour-details.html" style="text-decoration: none; color: inherit;"> Thủ đô lịch sử lừng danh với những công trình cổ đại như Đấu trường La Mã, Đền Pantheon...</a></h6>
                                            <ul class="blog-meta">
                                                <li><i class="far fa-clock"></i> 4 ngày 3 đêm</li>
                                                <li><i class="far fa-user"></i> 6-8 khách</li>
                                            </ul>
                                            <div class="destination-footer">
                                                <span class="price"><span>$80.00</span>/người</span>
                                                <a href="tour-details.html" class="theme-btn style-two style-three">
                                                    <i class="fal fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6" id="bali">
                                    <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                        data-aos-duration="1500" data-aos-delay="100" data-aos-offset="50">
                                        <div class="image">
                                            <span class="badge">giảm 10%</span>
                                            <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                            <img src="{{ asset('backend/img/destinations/bali.png') }}"
                                                alt="Tour List">
                                        </div>
                                        <div class="content">
                                            <div class="destination-header">
                                                <span class="location"><i class="fal fa-map-marker-alt"></i> Bali, Indonesia</span>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <h6 style="font-family: 'Arial', sans-serif; font-size: 18px; font-weight: bold; color: #333; line-height: 1.5;"><a href="tour-details.html" style="text-decoration: none; color: inherit;">Thiên đường nhiệt đới nổi tiếng với những bãi biển tuyệt đẹp, thu hút du khách khắp thế giới.</a></h6>
                                            <ul class="blog-meta">
                                                <li><i class="far fa-clock"></i> 2 ngày 1 đêm</li>
                                                <li><i class="far fa-user"></i> 3-4 khách</li>
                                            </ul>
                                            <div class="destination-footer">
                                                <span class="price"><span>$45.00</span>/người</span>
                                                <a href="tour-details.html" class="theme-btn style-two style-three">
                                                    <i class="fal fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6" id="barcelona">
                                    <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                        data-aos-duration="1500" data-aos-offset="50">
                                        <div class="image">
                                            <span class="badge">giảm 10%</span>
                                            <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                            <img src="{{ asset('backend/img/destinations/tbn.png') }}"
                                                alt="Tour List">
                                        </div>
                                        <div class="content">
                                            <div class="destination-header">
                                                <span class="location"><i class="fal fa-map-marker-alt"></i> Barcelona, Tây Ban Nha</span>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <h6 style="font-family: 'Arial', sans-serif; font-size: 18px; font-weight: bold; color: #333; line-height: 1.5;"><a href="tour-details.html" style="text-decoration: none; color: inherit;">Thành phố nổi tiếng với kiến trúc độc đáo của Gaudí, bãi biển xinh đẹp và văn hóa sống động.</a></h6>
                                            <ul class="blog-meta">
                                                <li><i class="far fa-clock"></i>5 ngày 4 đêm</li>
                                                <li><i class="far fa-user"></i> 8-10 khách</li>
                                            </ul>
                                            <div class="destination-footer">
                                                <span class="price"><span>$90.00</span>/người</span>
                                                <a href="tour-details.html" class="theme-btn style-two style-three">
                                                    <i class="fal fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-xl-4 col-md-6" id="newyork">
                                    <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                        data-aos-duration="1500" data-aos-delay="50" data-aos-offset="50">
                                        <div class="image">
                                            <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                            <img src="{{ asset('backend/img/destinations/newyork.png') }}"
                                                alt="Tour List">
                                        </div>
                                        <div class="content">
                                            <div class="destination-header">
                                                <span class="location"><i class="fal fa-map-marker-alt"></i> New York, Mỹ</span>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <h6 style="font-family: 'Arial', sans-serif; font-size: 18px; font-weight: bold; color: #333; line-height: 1.5;"><a href="tour-details.html" style="text-decoration: none; color: inherit;"> Thành phố sôi động với biểu tượng như tượng Nữ thần Tự do, Central Park và Times Square.</a></h6>
                                            <ul class="blog-meta">
                                                <li><i class="far fa-clock"></i> 3 ngày 2 đêm</li>
                                                <li><i class="far fa-user"></i> 4-6 khách</li>
                                            </ul>
                                            <div class="destination-footer">
                                                <span class="price"><span>$68.00</span>/người</span>
                                                <a href="tour-details.html" class="theme-btn style-two style-three">
                                                    <i class="fal fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                        data-aos-duration="1500" data-aos-delay="100" data-aos-offset="50">
                                        <div class="image">
                                            <span class="badge bgc-pink">Nổi bật</span>
                                            <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                            <img src="{{ asset('backend/img/destinations/aicap.png') }}"
                                                alt="Tour List">
                                        </div>
                                        <div class="content">
                                            <div class="destination-header">
                                                <span class="location"><i class="fal fa-map-marker-alt"></i>Cairo, Ai Cập</span>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <h6 style="font-family: 'Arial', sans-serif; font-size: 18px; font-weight: bold; color: #333; line-height: 1.5;"><a href="tour-details.html" style="text-decoration: none; color: inherit;"> Thành phố lịch sử nổi tiếng với những kim tự tháp cổ đại và bảo tàng Ai Cập.</a></h6>
                                            <ul class="blog-meta">
                                                <li><i class="far fa-clock"></i>7 ngày 6 đêm</li>
                                                <li><i class="far fa-user"></i> 15-20 khách</li>
                                            </ul>
                                            <div class="destination-footer">
                                                <span class="price"><span>$101.00</span>/người</span>
                                                <a href="tour-details.html" class="theme-btn style-two style-three">
                                                    <i class="fal fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                    <!-- <ul class="pagination justify-content-center pt-15 flex-wrap" data-aos="fade-up"
                                        data-aos-duration="1500" data-aos-offset="50">
                                        <li class="page-item disabled">
                                            <span class="page-link"><i class="far fa-chevron-left"></i></span>
                                        </li>
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
                                    </ul> -->
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
			<div
				class="container-fluid container-lg text-white font-weight-light">
				<div class="row align-items-center">
					<div class="col-6 col-lg-6 d-flex flex-column gap-2">
						<address class="m-0">
							3/2, Xuân Khánh, Ninh Kiều, Cần Thơ
						</address>
						<a
							href="mailto:travio@gmail.com"
							class="link-light link-underline-opacity-0"
							>Email: Travio@gmail.com</a
						>
						<a
							href="tel:+84123456789"
							class="link-light link-underline-opacity-0"
							>Điện thoại: 0123456789</a
						>
					</div>
					<div class="col-3 d-none d-lg-flex flex-column gap-2">
						<a
							href="./gioithieu.html"
							class="link-underline-opacity-0 link-light"
							>Giới thiệu</a
						>
						<a
							href="./sanpham.html"
							class="link-underline-opacity-0 link-light"
							>Tour</a
						>
						<a
							data-bs-toggle="offcanvas"
							href="#offcanvasExample"
							aria-controls="offcanvasExample"
							class="link-underline-opacity-0 link-light"
							>Giỏ hàng</a
						>
					</div>
					<div
						class="col-6 col-lg-3 d-flex flex-column align-items-end">
						<p>&copy; 2025 Travio</p>
						<div>
							<a
								href="#"
								class="link-light link-underline-opacity-0"
								><svg
									class="w-6 h-6 text-gray-800 dark:text-white"
									aria-hidden="true"
									xmlns="http://www.w3.org/2000/svg"
									width="24"
									height="24"
									fill="currentColor"
									viewBox="0 0 24 24">
									<path
										fill-rule="evenodd"
										d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
										clip-rule="evenodd" />
								</svg>
							</a>
							<a
								href="#"
								class="link-light link-underline-opacity-0"
								><svg
									class="w-6 h-6 text-gray-800 dark:text-white"
									aria-hidden="true"
									xmlns="http://www.w3.org/2000/svg"
									width="24"
									height="24"
									fill="none"
									viewBox="0 0 24 24">
									<path
										fill="currentColor"
										fill-rule="evenodd"
										d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
										clip-rule="evenodd" />
								</svg>
							</a>
							<a
								href="#"
								class="link-light link-underline-opacity-0"
								><svg
									class="w-6 h-6 text-gray-800 dark:text-white"
									aria-hidden="true"
									xmlns="http://www.w3.org/2000/svg"
									width="24"
									height="24"
									fill="currentColor"
									viewBox="0 0 24 24">
									<path
										d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z" />
								</svg>
							</a>
							<a
								href="#"
								class="link-light link-underline-opacity-0"
								><svg
									class="w-6 h-6 text-gray-800 dark:text-white"
									aria-hidden="true"
									xmlns="http://www.w3.org/2000/svg"
									width="24"
									height="24"
									fill="currentColor"
									viewBox="0 0 24 24">
									<path
										fill-rule="evenodd"
										d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z"
										clip-rule="evenodd" />
									<path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
								</svg>
							</a>
							<a
								href="#"
								class="link-light link-underline-opacity-0"
								><svg
									class="w-6 h-6 text-gray-800 dark:text-white"
									aria-hidden="true"
									xmlns="http://www.w3.org/2000/svg"
									width="24"
									height="24"
									fill="currentColor"
									viewBox="0 0 24 24">
									<path
										fill-rule="evenodd"
										d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
										clip-rule="evenodd" />
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<!-- Shopping cart -->
		<div
			class="offcanvas offcanvas-end"
			tabindex="-1"
			id="offcanvasExample"
			aria-labelledby="offcanvasExampleLabel">
			<div class="offcanvas-header border-bottom">
				<h3 class="offcanvas-title" id="offcanvasExampleLabel">
					Giỏ hàng
				</h3>
				<button
					type="button"
					class="btn-close"
					data-bs-dismiss="offcanvas"
					aria-label="Close"></button>
			</div>
			<div id="shopping-cart" class="offcanvas-body"></div>
			<div
				id="total-cost-block"
				class="d-flex container justify-content-between align-items-center py-3 border-top bg-white">
				<span id="total-cost" class="fw-bold"></span>
				<button class="btn btn-dark">Thanh toán</button>
			</div>
		</div>

		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
			crossorigin="anonymous"></script>
		<script src="../js/shopping-cart.js"></script>
	</body>
@endsection
<script>

    $(function () {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 1000,
            values: [100, 750],
            slide: function (event, ui) {
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
