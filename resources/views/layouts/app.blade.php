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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    {{-- Local CSS --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/index.css') }}">
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

								id="sign-up-btn">
								Đăng ký
							</a>
						</div>
					</div>
				</div>
			</nav>
		</header>

