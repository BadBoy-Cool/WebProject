@extends('layouts.app')
@section('title', 'Travio | Giới thiệu')
@section('content')
	<body>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                           <!-- Mục YÊU THÍCH TRÊN HEADER -->
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
                                <span class="favorite-count badge bg-danger rounded-pill position-absolute top-0 start-100 translate-middle" style="display: none;">0</span>
                            </div>

@guest
                                <!-- Đăng nhập -->
                                <a type="button" class="btn" href="{{ route('auth.login') }}" id="sign-in-btn"> Đăng nhập
                                </a>

                                <!-- Đăng ký -->
                                <a type="button" class="btn" href="{{ route('signup') }}" id="sign-up-btn"> Đăng ký </a>
                            @endguest

                            @auth
                                <!-- Avatar khi đã đăng nhập -->
                                <div class="dropdown">
                                    <a class="btn dropdown-toggle d-flex align-items-center gap-2" href="#" role="button"
                                        id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('frontend/img/logo/user.png') }}" alt="avatar"
                                            style="width: 32px; height: 32px; border-radius: 50%;">
                                        <span>{{ Auth::user()->KH_name ?? (Auth::user()->username ?? Auth::user()->email) }}</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                                        @if (Auth::user()->is_admin === 1)
                                            <li>
                                                <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                                    Trang quản trị
                                                </a>
                                            </li>
                                        @endif
                                        <li><a class="dropdown-item" href="{{ route('auth.logout') }}">Đăng xuất</a></li>
                                    </ul>
                                </div>
                            @endauth
                        </div>
                    </div>
				</div>
			</nav>
		</header>

		<!-- Main -->
		<main class="container my-5">
			<h1 class="text-center mb-4 fs-1">Chào mừng đến với Travio</h1>
			<!-- Phần giới thiệu tóm tắt-->
			<section class="mb-5">
				<div class="row justify-content-center align-items-center g-4">
					<div class="col-lg-5 text-center">
						<img src="{{ asset('backend/img/gioithieutk.jpg') }}"
							class="img-fluid rounded-4 shadow"
							style="max-width: 100%; width: 500px; height: auto;"
							alt="Giới thiệu Travio">
					</div>
					<div class="col-lg-7">
						<div class="fs-5">
							<p><strong>Travio</strong> là nền tảng du lịch trực tuyến chuyên nghiệp, giúp hàng nghìn du khách khám phá vẻ đẹp Việt Nam và thế giới mỗi năm. Chúng tôi cung cấp các tour du lịch đa dạng, từ nghỉ dưỡng biển, du lịch sinh thái, cho đến hành trình khám phá văn hóa, lịch sử và ẩm thực đặc sắc.</p>
							<p>Không chỉ là nhà cung cấp dịch vụ, Travio còn là người đồng hành tận tâm trong từng chuyến đi. Chúng tôi tin rằng mỗi hành trình đều mang lại giá trị, kết nối và cảm hứng sống mới.</p>
						</div>
					</div>
				</div>
			</section>

			<section class="container my-5">
				<h2 class="text-center mb-5 fs-2" style="margin-top: 1cm;">Hành trình phát triển Travio</h2>

				<!-- Mốc 2022 -->
				<div class="row align-items-center mb-5" style="margin-top: 1cm;">
					<div class="col-md-5 text-center">
						<img src="{{ asset('backend/img/hanhtrinh2022.jpg') }}"
							alt="2022 milestone"
							class="img-fluid rounded shadow-sm"
							style="max-width: 100%; height: auto;">
					</div>
					<div class="col-md-7">
						<h4 class="text-info fs-3" style="margin-bottom: 0.5cm;">2022: 100.000 khách hàng hài lòng</h4>
						<p class="fs-5">Travio cán mốc 100.000 khách hàng với hàng loạt tour chất lượng và dịch vụ chuyên nghiệp – đánh dấu một bước ngoặt lớn trong hành trình phát triển.</p>
					</div>
				</div>

				<!-- Mốc 2024 -->
				<div class="row align-items-center mb-5 flex-md-row-reverse ">
					<div class="col-md-5 text-center">
						<img src="{{ asset('backend/img/hanhtrinh2024.jpg') }}"
							alt="2024 milestone"
							class="img-fluid rounded shadow-sm"
							style="width: 100%; max-width: 800px; height: 80%;">
					</div>
					<div class="col-md-7">
						<h4 class="text-info fs-3" style="margin-bottom: 0.5cm;">2024: Mở rộng tour quốc tế</h4>
						<p class="fs-5">Travio vươn tầm quốc tế với hệ thống tour Nhật, Hàn, châu Âu, mang lại trải nghiệm du lịch đẳng cấp cho khách Việt yêu thích khám phá thế giới.</p>
					</div>
				</div>

				<!-- Mốc 2025 -->
				<div class="row align-items-center mb-5">
					<div class="col-md-5 text-center">
						<img src="{{ asset('backend/img/hanhtrinh2025.jpg') }}"
							alt="2025 milestone"
							class="img-fluid rounded shadow-sm"
							style="max-width: 100%; height: auto;">
					</div>
					<div class="col-md-7">
						<h4 class="text-info fs-3">2025: Chuyển đổi số toàn diện</h4>
						<p class="fs-5">Travio ứng dụng công nghệ AI, chatbot, và hệ thống đặt tour thông minh giúp cá nhân hóa hành trình và nâng tầm trải nghiệm khách hàng.</p>
					</div>
				</div>
			</section>



			<section class="mb-5">
				<h2 class="text-center mb-4 fs-2" style="margin-top: 1cm;">TRẢI NGHIỆM DU LỊCH</h2>
				<div class="container">
					<div class="row row-cols-1 row-cols-md-2 g-4">

						<!-- Bài 1 -->
						<div class="d-flex">
							<img src="{{ asset('backend/img/chiangmai.jpg') }}" class="me-3 rounded shadow-sm"
								style="width: 180px; height: 120px; object-fit: cover;" alt="Chiang Mai">
							<div>
								<h6 class="fw-semibold text-primary">Kinh nghiệm du lịch Chiang Mai – Thái Lan tự túc 2024</h6>
								<p class="mb-1">Chiang Mai được mệnh danh là bông hồng của miền Bắc Thái Lan bởi cảnh sắc thiên nhiên tươi đẹp và bầu không khí mát mẻ quanh năm.</p>
								<div class="text-end">
									<a href="#" class="text-decoration-none text-muted">Xem chi tiết</a>
								</div>

							</div>
						</div>

						<!-- Bài 2 -->
						<div class="d-flex">
							<img src="{{ asset('backend/img/condao.jpg') }}" class="me-3 rounded shadow-sm"
								style="width: 180px; height: 120px; object-fit: cover;" alt="Côn Đảo">
							<div>
								<h6 class="fw-semibold text-primary">Kinh nghiệm du lịch Côn Đảo tự túc mới nhất 2024</h6>
								<p class="mb-1">Côn Đảo là hòn đảo có cảnh quan tươi đẹp, hoang sơ và vẫn giữ được nét bình yên không xô bồ như Phú Quốc.</p>
								<div class="text-end">
									<a href="#" class="text-decoration-none text-muted">Xem chi tiết</a>
								</div>

							</div>
						</div>

						<!-- Bài 3 -->
						<div class="d-flex">
							<img src="{{ asset('backend/img/quanlan.jpg') }}" class="me-3 rounded shadow-sm"
								style="width: 180px; height: 120px; object-fit: cover;" alt="Quan Lạn">
							<div>
								<h6 class="fw-semibold text-primary">Kinh nghiệm du lịch Quan Lạn Quảng Ninh chi tiết 2024</h6>
								<p class="mb-1">Quan Lạn nổi lên như một “hiện tượng” du lịch biển với vẻ đẹp hoang sơ, nước trong xanh và bãi cát trắng mịn.</p>
								<div class="text-end">
									<a href="#" class="text-decoration-none text-muted">Xem chi tiết</a>
								</div>

							</div>
						</div>

						<!-- Bài 4 -->
						<div class="d-flex">
							<img src="{{ asset('backend/img/taybac.jpg') }}" class="me-3 rounded shadow-sm"
								style="width: 180px; height: 120px; object-fit: cover;" alt="Tây Bắc">
							<div>
								<h6 class="fw-semibold text-primary">Kinh nghiệm du lịch Tây Bắc mới nhất [từ A đến Z]</h6>
								<p class="mb-1">Cập nhật đầy đủ kinh nghiệm du lịch Tây Bắc: địa điểm hấp dẫn, ẩm thực đa dạng và văn hóa bản địa đặc sắc.</p>
								<div class="text-end">
									<a href="#" class="text-decoration-none text-muted">Xem chi tiết</a>
								</div>

							</div>
						</div>
			</section>


			<section class="my-5" >
				<h2 class="text-center mb-4 fs-2" style="margin-top: 1cm;">Khám phá tour cùng Travio</h2>
				<div class="row justify-content-center">
					<div class="col-md-10 text-center">
						<video controls class="w-100 rounded shadow">
							<source src="{{ asset('frontend/videocuoi.mp4') }}" type="video/mp4">
							Trình duyệt của bạn không hỗ trợ video.
						</video>
					</div>
				</div>
			</section>

			<section class="mb-5">
				<h2 class="text-center mb-4 fs-2" style="margin-top: 1cm;">Cam kết của Travio</h2>
				<ul class="list-group list-group-flush fs-5">
					<li class="list-group-item">✅ Dịch vụ chất lượng cao, rõ ràng và minh bạch.</li>
					<li class="list-group-item">✅ Hoàn tiền nếu không đúng cam kết.</li>
					<li class="list-group-item">✅ Hỗ trợ 24/7 qua hotline, email, và mạng xã hội.</li>
					<li class="list-group-item">✅ Hợp tác cùng các nhà cung cấp uy tín trong và ngoài nước.</li>
				</ul>
			</section>

			<div class="text-center mt-4">
				<a href="{{ url('/tour') }}" class="btn btn-primary btn-lg">Khám phá các tour hiện có</a>
			</div>
		</main>

		<!-- Shopping cart -->
		<!-- OFFCANVAS YÊU THÍCH -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
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

        cartContainer.innerHTML = '';
        if (favorites.length === 0) {
            cartContainer.innerHTML = '<p class="text-muted">Chưa có tour nào được yêu thích.</p>';
            return;
        }

        
       favorites.forEach((tour, index) => {
        const div = document.createElement('div');
        div.className = 'd-flex align-items-center gap-2 mb-2 border-bottom pb-2';
        div.innerHTML = `
        <img src="${tour.img}" alt="${tour.title}" width="45" height="45" style="object-fit: cover; border-radius: 6px;">
        <div class="flex-grow-1">
            <p class="mb-0 fw-semibold" style="font-size: 0.85rem;">${tour.title}</p>
            <small class="text-muted" style="font-size: 0.7rem;">${tour.location} - ${tour.duration}</small>
        </div>
        <button class="btn btn-sm btn-outline-danger remove-favorite" data-index="${index}" style="font-size: 0.65rem; padding: 2px 6px;">Xóa</button>
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

        const img = tourCard.querySelector('img')?.getAttribute('src');
        const title = tourCard.querySelector('h6 a')?.innerText;
        const location = tourCard.querySelector('.location')?.innerText || '';
        const duration = tourCard.querySelector('.blog-meta li:nth-child(1)')?.innerText || '';

        if (!img || !title) return;

        const newTour = { img, title, location, duration };
        const isExist = favorites.some(t => t.title === newTour.title);

        if (!isExist) {
            favorites.push(newTour);
            saveFavorites();
            updateFavoriteCount();
            updateFavoriteList();
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

		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
			crossorigin="anonymous"></script>
		<script src="../js/shopping-cart.js"></script>
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
							>Yêu thích</a
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
