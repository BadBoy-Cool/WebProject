<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travio | Trang Chủ</title>

    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('frontend/img/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('frontend/img/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend/img/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend/img/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend/img/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('frontend/img/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('frontend/img/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('frontend/img/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/img/favicon/apple-icon-180x180.png') }}">

    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('frontend/img/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('frontend/img/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('frontend/img/favicon/manifest.json') }}">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('frontend/img/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    {{-- Fonts & CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap&subset=vietnamese" rel="stylesheet">



    {{-- Local CSS --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/index.css') }}">
    {{-- <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap&subset=vietnamese" rel="stylesheet">
    <!-- Google Fonts hỗ trợ tiếng Việt -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&subset=vietnamese" rel="stylesheet"> --}}

</head>
<body>

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
    							<a class="nav-link" href="{{ route('signup') }}"
								>Đăng ký</a>
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
           <!-- Destinations Area start -->
<section class="destinations-area bgc-black pt-100 pb-70 rel z-1">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-white text-center counter-text-wrap mb-70" data-aos="fade-up"
                    data-aos-duration="1500" data-aos-offset="50">
                    <h2 style="font-family: 'Playfair Display', serif; font-size: 36px; font-weight: 600; text-shadow: 1px 1px 4px rgba(0,0,0,0.3); text-transform: none;">Mở ra vẻ đẹp của từng điểm đến cùng Travela</h2>
                    <p  style="font-family: 'Poppins', sans-serif; font-size: 28px; color: #ffffff; font-weight: 600; text-align: center; line-height: 1.5;" >Một địa điểm với<span class="count-text plus" data-speed="3000" data-stop="24080" style="color: inherit; font-weight: 600;">0</span>trải nghiệm phổ biến mà bạn sẽ nhớ mãi.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div class="destination-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="image">
                        <div class="ratting"><i class="fas fa-star"></i>4.8</div>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{asset('backend/img/destinations/Paris.jpg')}}" alt="Destination">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Paris, Pháp</span>
                        <h5><a href="destination-details.html">Tháp Eiffel – Biểu tượng của Paris</a></h5>
                        <span class="time">3 ngày 2 đêm</span>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$59.00</span>/người</span>
                        <a href="#" class="read-more">Đặt ngay <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div class="destination-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="image">
                        <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{asset('backend/img/destinations/Venice.jpg')}}" alt="Destination">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Venice, Ý</span>
                        <h5><a href="destination-details.html">Venice – Thành phố tình yêu & kênh đào lãng mạn </a></h5>
                        <span class="time">4 ngày 3 đêm</span>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$63.00</span>/người</span>
                        <a href="#" class="read-more">Đặt ngay <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div class="destination-item" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="image">
                        <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{asset('backend/img/destinations/dao-jeju.jpg')}}" alt="Destination">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Đảo Jeju, Hàn Quốc</span>
                        <h5><a href="destination-details.html">Đảo Jeju - được ví như "Hawaii của Hàn Quốc"</a></h5>
                        <span class="time">5 ngày 4 đêm</span>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$42.00</span>/người</span>
                        <a href="#" class="read-more">Đặt ngay<i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div class="destination-item" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="image">
                        <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{asset('backend/img/destinations/laudaithuysi.jpg')}}" alt="Destination">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Lâu đài Chillon, Thụy Sĩ</span>
                        <h5><a href="destination-details.html">Lâu đài Chillon cổ tích, báu vật lịch sử của Thụy Sĩ </a></h5>
                        <span class="time">3 days 2 nights - Couple</span>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$52.00</span>/per person</span>
                        <a href="#" class="read-more">Book Now <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Destinations Area end -->

<!-- Popular Destinations Area start -->
<section class="popular-destinations-area rel z-1">
    <div class="container-fluid">
        <div class="popular-destinations-wrap br-20 bgc-lighter pt-100 pb-70">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-center counter-text-wrap mb-70" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2 style="font-size: 28px; color: #2c3e50; font-weight: 700;" >Khám phá các điểm đến phổ biến</h2>
                        <p>Một trang web với <span class="count-text plus" data-speed="3000" data-stop="240800">0</span> trải nghiệm phổ biến nhất</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-md-6">
                        <div class="destination-item style-two" data-aos="flip-up" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="image">
                                <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                <img src="{{asset('backend/img/destinations/cungdienthai.jpg')}}" alt="Destination">
                            </div>
                            <div class="content">
                                <h6><a href="destination-details.html">Thailand Bangkok</a></h6>
                                <span class="time">Hơn 500 tours & 830 hoạt động</span>
                                <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="100"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                <img src="{{asset('backend/img/destinations/Parga.jpg')}}" alt="Destination">
                            </div>
                            <div class="content">
                                <h6><a href="destination-details.html">Parga, Hy Lạp</a></h6>
                                <span class="time">Hơn 800 tours & 500 hoạt động</span>
                                <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="200"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                <img src="{{asset('backend/img/destinations/Hoian.png')}}" alt="Destination">
                            </div>
                            <div class="content">
                                <h6><a href="destination-details.html">Hội An, Việt Nam</a></h6>
                                <span class="time">Hơn 300 tours & 250 hoạt động</span>
                                <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="destination-item style-two" data-aos="flip-up" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="image">
                                <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                <img src="{{asset('backend/img/destinations/vuonquocgia.jpg')}}" alt="Destination">
                            </div>
                            <div class="content">
                                <h6><a href="destination-details.html">Vườn quốc gia Banff, Canada</a></h6>
                                <span class="time">Hơn 650 tours & 340 hoạt động</span>
                                <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="100"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                <img src="{{asset('backend/img/destinations/destination5.jpg')}}" alt="Destination">
                            </div>
                            <div class="content">
                                <h6><a href="destination-details.html">Dubai united states</a></h6>
                                <span class="time">Hơn 990 tours & 1000 hoạt động</span>
                                <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="200"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                <img src="{{asset('backend/img/destinations/Roma.jpg')}}" alt="Destination">
                            </div>
                            <div class="content">
                                <h6><a href="destination-details.html">Thành phố Vatican, Roma</a></h6>
                                <span class="time">Hơn 1200 tours & 300 hoạt động</span>
                                <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Popular Destinations Area end -->

<!-- Features Area start -->
<section class="features-area pt-100 pb-45 rel z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="features-content-part mb-55" data-aos="fade-left" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="section-title mb-60">
                        <h2>Khám Phá Sự Khác Biệt Trong Mỗi Hành Trình Du Lịch Cùng Chúng Tôi</h2>
                    </div>
                    <div class="features-customer-box">
                        <div class="image">
                            <img src="{{asset('backend/img/features/features-box.jpg')}}" alt="Features">
                        </div>
                        <div class="content">
                            <div class="feature-authors mb-15">
                                <img src="{{asset('backend/img/features/feature-author1.jpg')}}" alt="Author">
                                <img src="{{asset('backend/img/features/feature-author2.jpg')}}" alt="Author">
                                <img src="{{asset('backend/img/features/feature-author3.jpg')}}" alt="Author">
                                <span>4k+</span>
                            </div>
                            <h6>Hơn 800K+ khách hàng hài lòng</h6>
                            <div class="divider style-two counter-text-wrap my-25"><span><span class="count-text plus"
                                        data-speed="3000" data-stop="20">0</span> Năm</span></div>
                            <p> Chúng tôi tự hào tạo ra những hành trình được cá nhân hóa theo sở thích riêng của bạn.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                <div class="row pb-25">
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="icon"><i class="flaticon-tent"></i></div>
                            <div class="content">
                                <h5 style="font-family: 'Montserrat', sans-serif; font-size: 22px; color: #2c3e50; font-weight: 600; margin-bottom: 10px;"><a href= "tour-details.html" style="text-decoration: none; color: #2c3e50;">Cắm trại bằng lều</a></h5>
                                <p  style="font-family: 'Open Sans', sans-serif; font-size: 16px; color: #7f8c8d; line-height: 1.6;">Một cách tuyệt vời để trải nghiệm vẻ đẹp của thiên nhiên.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="icon"><i class="flaticon-tent"></i></div>
                            <div class="content">
                                <h5 style="font-family: 'Montserrat', sans-serif; font-size: 22px; color: #2c3e50; font-weight: 600; margin-bottom: 10px;"><a href="tour-details.html" style="text-decoration: none; color: #2c3e50;">Kayaking</a></h5>
                                <p style="font-family: 'Open Sans', sans-serif; font-size: 16px; color: #7f8c8d; line-height: 1.6;"> Một môn thể thao ngoài trời đầy kích thích giúp bạn kết nối với thiên nhiên.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-item mt-20">
                            <div class="icon"><i class="flaticon-tent"></i></div>
                            <div class="content">
                                <h5 style="font-family: 'Montserrat', sans-serif; font-size: 22px; color: #2c3e50; font-weight: 600; margin-bottom: 10px;"><a href="tour-details.html" style="text-decoration: none; color: #2c3e50;">Đạp xe địa hình</a></h5>
                                <p style="font-family: 'Open Sans', sans-serif; font-size: 16px; color: #7f8c8d; line-height: 1.6;">Một cuộc phiêu lưu đầy phấn khích thử thách giới hạn thể chất của bạn.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="icon"><i class="flaticon-tent"></i></div>
                            <div class="content">
                                <h5 style="font-family: 'Montserrat', sans-serif; font-size: 22px; color: #2c3e50; font-weight: 600; margin-bottom: 10px;"><a href="tour-details.html" style="text-decoration: none; color: #2c3e50;">Câu cá & Chèo thuyền</a></h5>
                                <p style="font-family: 'Open Sans', sans-serif; font-size: 16px; color: #7f8c8d; line-height: 1.6;"> Cách hoàn hảo để thư giãn và hòa mình vào thiên nhiên.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features Area end -->

<!-- Testimonials Area start -->
<section class="testimonials-area rel z-1">
    <div class="container">
        <div class="testimonials-wrap bgc-lighter">
            <div class="row">
                <div class="col-lg-5 rel" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <div class="testimonial-image"
                        style="background-image: url({{asset('clients/assets/images/testimonials/chi1.png')}});"></div>
                </div>
                <div class="col-lg-7">
                    <div class="testimonial-right-content" data-aos="fade-left" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="section-title mb-55">
                            <h2  style="font-family: 'Segoe UI', sans-serif; font-size: 32px; color: #333; text-align: center; margin: 20px 0;"><span style="display: inline-block; background-color: #FFD700; padding: 10px 20px; border-radius: 6px;font-weight: bold; font-size: 32px; line-height: 1; text-align: center;">5280</span> khách hàng toàn cầu chia sẻ trải nghiệm về dịch vụ của chúng tôi</h2>
                        </div>
                        <div class="testimonials-active">
                            <div class="testimonial-item">
                                <div class="testi-header">
                                    <div class="quote"><i class="flaticon-double-quotes"></i></div>
                                    <h4  style="font-family: 'Segoe UI', sans-serif; font-size: 22px; color: #333; text-align: center; margin: 20px 0;
                                    font-weight: bold; text-transform: uppercase; letter-spacing: 1px;
                                    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); transition: color 0.3s;">Dịch vụ chất lượng</h4>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="text" style="font-family: 'Segoe UI', sans-serif; font-size: 18px; color: #555; text-align: center;line-height: 1.6; font-style: italic; padding: 20px; border-left: 4px solid #007bff; margin: 20px auto; max-width: 80%;">"Chuyến đi của chúng tôi thật sự hoàn hảo, cảm ơn công ty du lịch này! Họ đã lo mọi chi tiết, từ chỗ ở cho đến việc gợi ý những trải nghiệm tuyệt vời"</div>
                                <div class="author">
                                    <div class="image"><img src="{{asset('backend/img/testimonials/myduyen.jpg')}}" style="width: 40px; height: 40px; object-fit: cover; border-radius: 50%;"
                                            alt="Author"></div>
                                    <div class="content">
                                        <h5 style="font-family: 'Segoe UI', sans-serif; font-size: 24px; color: #333; text-align: center;
                                        font-weight: bold; text-transform: uppercase; letter-spacing: 1px; margin: 10px 0;
                                        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1); transition: color 0.3s;">Mỹ Duyên</h5>
                                        <span  style="font-family: 'Segoe UI', sans-serif; font-size: 18px; color: #333; text-align: center;
                                        font-weight: normal; text-transform: capitalize; letter-spacing: 0.5px; text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
                                        transition: color 0.3s;">Mỹ Mỹ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testi-header">
                                    <div class="quote"><i class="flaticon-double-quotes"></i></div>
                                    <h4 style="font-family: 'Segoe UI', sans-serif; font-size: 22px; color: #333; text-align: center; margin: 20px 0;
                                    font-weight: bold; text-transform: uppercase; letter-spacing: 1px;
                                    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); transition: color 0.3s;">Dịch vụ chất lượng</h4>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="text" style="font-family: 'Segoe UI', sans-serif; font-size: 18px; color: #555; text-align: center; line-height: 1.6; font-style: italic; padding: 20px; border-left: 4px solid #007bff; margin: 20px auto; max-width: 80%;">"Chúng tôi đã có một hành trình khó quên, nhờ sự chăm chút đến từng chi tiết của công ty du lịch, từ đặt khách sạn đến các hoạt động độc đáo họ gợi ý"</div>
                                <div class="author">
                                    <div class="image"><img src="{{asset('backend/img/testimonials/ok.jpg')}}"
                                            alt="Author"></div>
                                    <div class="content">
                                        <h5 style="font-family: 'Segoe UI', sans-serif; font-size: 24px; color: #333; text-align: center;
                                        font-weight: bold; text-transform: uppercase; letter-spacing: 1px; margin: 10px 0;
                                        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1); transition: color 0.3s;">Mỹ Linh</h5>
                                        <span style="font-family: 'Segoe UI', sans-serif; font-size: 18px; color: #333; text-align: center;
                                        font-weight: normal; text-transform: capitalize; letter-spacing: 0.5px; text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
                                        transition: color 0.3s;">Linh Linh</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials Area end -->

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
</html>
