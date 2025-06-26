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
			<section class="mb-5">
				<div class="bg-image p-5 text-white"
					style="background-image: url('{{ asset('backend/img/trangchutk.jpg') }}');
						width: 100%;
						min-height: 250px;
						background-size: cover;
						background-position: center;
						border-radius: 0.5rem;">
					<div class="container">
						<!-- Tiêu đề Du lịch -->
						<!-- Dòng chữ "du lịch năm châu" -->
						<h4 class="fw-semibold fst-italic text-center" style="
							color: #ff4d6d;
							font-size: 2.5rem;
							text-shadow: 1px 1px 3px rgba(255,255,255,0.6); transform: rotate(-5deg);">
							du lịch năm châu
						</h4>

						<!-- Dòng chữ "GIÁ CẢ CHẲNG LO ÂU" -->
						<h2 class="fw-bold text-uppercase text-center" style="
							font-size: 3.5rem;
							background: linear-gradient(to right, #0044ff, #00cfff);
							-webkit-background-clip: text;
							-webkit-text-fill-color: transparent;
							text-shadow: 2px 2px 0 #fff, 4px 4px 10px rgba(0,0,0,0.2);
							transform: rotate(-5deg); margin-bottom: 1cm;">

							GIÁ CẢ CHẲNG LO ÂU
						</h2>

						<!-- Dòng 1: Dropdown chọn điểm đến -->
						<div class="row mb-3">
							<div class="col-md-4 ">
								<div class="input-group">
									<span class="input-group-text bg-white">
										<i class="fa fa-map-marker text-primary"></i>
									</span>
									<select class="form-select">
										<option selected>Chọn một điểm đến</option>
										<option value="halong">Vịnh Hạ Long</option>
										<option value="sapa">Sapa</option>
										<option value="phuquoc">Phú Quốc</option>
									</select>
								</div>
							</div>
						</div>

						<!-- Dòng 2: Ô tìm kiếm nằm thấp hơn và về bên phải -->
						<div class="row justify-content-end" style="margin-bottom: 1cm;">
							<div class="col-md-5">
								<div class="input-group">
									<span class="input-group-text bg-white">
										<i class="fa fa-search text-primary"></i>
									</span>
									<input type="text" class="form-control" placeholder="Tìm kiếm địa điểm hoặc hoạt động">
									<button class="btn btn-primary" type="submit">Tìm</button>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

			<!-- Featured tours -->
			<section class="featured-tours p-2 bg-white">
				<div class="container">
					<h2 class="text-center mb-4">Tour nổi bật</h2>

					<!-- Sửa khoảng cách giữa các tour -->
					<div class="row gx-4" style="row-gap: 2cm;">

						<!-- Tour 1 -->
						<div class="col-md-4">
							<div class="card h-100 shadow-sm">
								<img src="{{ asset('backend/img/halongbay.jpg') }}" class="card-img-top" alt="Hạ Long">
								<div class="card-body">
									<h5 class="card-title">Du lịch Hạ Long 3N2Đ</h5>
									<p class="card-text">Khám phá vịnh Hạ Long - kỳ quan thiên nhiên thế giới với nhiều hoạt động hấp dẫn.</p>
									<a href="#" class="btn btn-outline-primary">Xem chi tiết</a>
								</div>
							</div>
						</div>

						<!-- Tour 2 -->
						<div class="col-md-4">
							<div class="card h-100 shadow-sm">
								<img src="{{ asset('backend/img/dalat.jpg') }}" class="card-img-top" alt="Đà Lạt">
								<div class="card-body">
									<h5 class="card-title">Khám phá Đà Lạt mộng mơ</h5>
									<p class="card-text">Trải nghiệm khí hậu se lạnh, cảnh sắc thiên nhiên và văn hóa đặc sắc của Đà Lạt.</p>
									<a href="#" class="btn btn-outline-primary">Xem chi tiết</a>
								</div>
							</div>
						</div>

						<!-- Tour 3 -->
						<div class="col-md-4">
							<div class="card h-100 shadow-sm">
								<img src="{{ asset('backend/img/phuquoc.jpg') }}" class="card-img-top" alt="Phú Quốc">
								<div class="card-body">
									<h5 class="card-title">Phú Quốc - Thiên đường nghỉ dưỡng</h5>
									<p class="card-text">Tận hưởng kỳ nghỉ tuyệt vời tại các resort cao cấp và bãi biển tuyệt đẹp.</p>
									<a href="#" class="btn btn-outline-primary">Xem chi tiết</a>
								</div>
							</div>
						</div>

						<!-- Tour 4: Bangkok -->
						<div class="col-md-4">
							<div class="card h-100 shadow-sm">
								<img src="{{ asset('backend/img/bangkok.jpg') }}" class="card-img-top" alt="Bangkok">
								<div class="card-body">
									<h5 class="card-title">Bangkok - Thái Lan</h5>
									<p class="card-text">Khám phá thành phố sôi động Bangkok với những ngôi chùa vàng, ẩm thực đường phố hấp dẫn và trung tâm mua sắm hiện đại.</p>
									<a href="#" class="btn btn-outline-primary">Xem chi tiết</a>
								</div>
							</div>
						</div>

						<!-- Tour 5: New York -->
						<div class="col-md-4">
							<div class="card h-100 shadow-sm">
								<img src="{{ asset('backend/img/newyork.jpg') }}" class="card-img-top" alt="New York">
								<div class="card-body">
									<h5 class="card-title">New York - Mỹ</h5>
									<p class="card-text">Trải nghiệm thành phố không ngủ với những địa danh nổi tiếng như Tượng Nữ thần Tự do, Times Square và Central Park.</p>
									<a href="#" class="btn btn-outline-primary">Xem chi tiết</a>
								</div>
							</div>
						</div>

						<!-- Tour 6: Osaka -->
						<div class="col-md-4">
							<div class="card h-100 shadow-sm">
								<img src="{{ asset('backend/img/osaka.jpg') }}" class="card-img-top" alt="Osaka">
								<div class="card-body">
									<h5 class="card-title">Osaka - Nhật Bản</h5>
									<p class="card-text">Thành phố của ẩm thực và văn hóa hiện đại, nổi bật với lâu đài Osaka, phố đi bộ Dotonbori và món takoyaki trứ danh.</p>
									<a href="#" class="btn btn-outline-primary">Xem chi tiết</a>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

			<!-- Why choose Travio -->
			<section class="why-choose-us py-5 bg-light">
				<div class="container">
					<h2 class="text-center mb-4">Vì sao chọn Travio?</h2>
					<div class="row text-center">
						<div class="col-md-4 mb-4">
							<div class="p-4 border rounded h-100">
								<i class="fa fa-map fa-2x mb-3 text-primary"></i>
								<h5>Hành trình đa dạng</h5>
								<p>Hơn 100+ tour trong và ngoài nước cho bạn lựa chọn.</p>
							</div>
						</div>
						<div class="col-md-4 mb-4">
							<div class="p-4 border rounded h-100">
								<i class="fa fa-star fa-2x mb-3 text-primary"></i>
								<h5>Dịch vụ chất lượng</h5>
								<p>Đội ngũ tư vấn và hướng dẫn viên chuyên nghiệp, tận tâm.</p>
							</div>
						</div>
						<div class="col-md-4 mb-4">
							<div class="p-4 border rounded h-100">
								<i class="fa fa-shield fa-2x mb-3 text-primary"></i>
								<h5>An toàn & Tin cậy</h5>
								<p>Bảo hiểm du lịch và hỗ trợ 24/7 trong suốt hành trình.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
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
							href="{{ url('/gioithieu') }}"
							class="link-underline-opacity-0 link-light"
							>Giới thiệu</a
						>
						<a
							href="{{ url('/tour') }}"
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
