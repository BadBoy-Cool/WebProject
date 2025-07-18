@extends('layouts.app')
@section('title', 'Travio | Liên hệ')
@section('content')
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

                            <!-- Đăng nhập -->
                            <a type="button" class="btn" href="{{ route('auth.login') }}" id="sign-in-btn"> Đăng nhập </a>

                            <!-- Đăng ký -->
                            <a type="button" class="btn" href="{{ route('signup') }}" id="sign-up-btn"> Đăng ký </a>
                        </div>
                    </div>
				</div>
			</nav>
		</header>

		<!-- Main -->
		<main>

<!-- Contact Info Area start -->
{{-- <section class="contact-info-area pt-100 rel z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="contact-info-content mb-30 rmb-55" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="section-title mb-30">
                        <h2 style="font-family: 'Segoe UI', sans-serif; font-size: 32px; color: #333; text-align: left;
                                font-weight: bold; letter-spacing: 2px; text-transform: uppercase;  text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.15); margin: 20px 0; padding-left: 30px;">Hãy trò chuyện với các chuyên gia hướng dẫn du lịch của chúng tôi</h2>
                    </div>
                    <p style="font-family: 'Segoe UI', sans-serif; font-size: 18px; color: #444; line-height: 1.6; text-align: justify;font-weight: normal; letter-spacing: 0.5px; margin: 20px 0; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1); padding: 10px 15px; background-color: #f9f9f9; border-radius: 5px;">Đội ngũ hỗ trợ tận tâm của chúng tôi luôn sẵn sàng giúp đỡ bạn với bất kỳ câu hỏi hay vấn đề nào, cung cấp các giải pháp nhanh chóng và cá nhân hóa để đáp ứng nhu cầu của bạn.</p>
                    <div class="features-team-box mt-40">
                        <h6 style="font-family: 'Arial', sans-serif; font-size: 22px; font-weight: 600; color: #333333; text-align: center; letter-spacing: 1px; line-height: 1.5; margin-top: 20px; margin-bottom: 20px;">Hơn 85+ thành viên trong đội ngũ chuyên gia</h6>
                        <div class="feature-authors">
                            <img src="{{asset('backend/img/features/feature-author1.jpg')}}" alt="Author">
                            <img src="{{asset('backend/img/features/feature-author2.jpg')}}" alt="Author">
                            <img src="{{asset('backend/img/features/feature-author3.jpg')}}" alt="Author">
                            <img src="{{asset('backend/img/features/feature-author4.jpg')}}" alt="Author">
                            <img src="{{asset('backend/img/features/feature-author5.jpg')}}" alt="Author">
                            <img src="{{asset('backend/img/features/feature-author6.jpg')}}" alt="Author">
                            <img src="{{asset('backend/img/features/feature-author7.jpg')}}" alt="Author">
                            <span>+</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-info-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50"
                            data-aos-delay="50">
                            <div class="icon"><i class="fas fa-envelope"></i></div>
                            <div class="content">
                                <h5  style="font-family: 'Arial', sans-serif; font-size: 22px; font-weight: bold; color: #333333; text-align: center; line-height: 1.6; margin-top: 20px; margin-bottom: 20px; letter-spacing: 1px;">Cần sự giúp đỡ & hỗ trợ</h5>
                                <div class="text"><i class="far fa-envelope"></i> <a
                                        href="mailto:support@gmail.com">duyenb2203435@student.ctu.edu.vn</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50"
                            data-aos-delay="100">
                            <div class="icon"><i class="fas fa-phone"></i></div>
                            <div class="content">
                                <h5 style="font-family: 'Arial', sans-serif; font-size: 22px; font-weight: bold; color: #333333; text-align: center; line-height: 1.6; margin-top: 20px; margin-bottom: 20px; letter-spacing: 1px;">Cần gấp bất kỳ điều gì</h5>
                                <div class="text"><i class="far fa-phone"></i> <a href="callto:+0001234588">+000 (123)
                                        45 88</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50"
                            data-aos-delay="50">
                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="content">
                                <h5 style="font-family: 'Arial', sans-serif; font-size: 22px; font-weight: bold; color: #333333; text-align: center; line-height: 1.6; margin-top: 20px; margin-bottom: 20px; letter-spacing: 1px;">Chi nhánh Việt Nam</h5>
                                <div class="text"><i class="fal fa-map-marker-alt"></i> Số 55, đường 10, thành phố Hồ Chí Minh</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50"
                            data-aos-delay="100">
                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="content">
                                <h5 style="font-family: 'Arial', sans-serif; font-size: 22px; font-weight: bold; color: #333333; text-align: center; line-height: 1.6; margin-top: 20px; margin-bottom: 20px; letter-spacing: 1px;">Địa chỉ văn phòng chính</h5>
                                <div class="text"><i class="fal fa-map-marker-alt"></i>Số nhà 55 trên Đường 10, Vietnam</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section class="contact-info-area pt-100 rel z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="contact-info-content mb-30 rmb-55">
                    <div class="section-title mb-30">
                        <h2>Hãy trò chuyện với các chuyên gia hướng dẫn du lịch của chúng tôi</h2>
                    </div>
                    <p>Đội ngũ hỗ trợ tận tâm của chúng tôi luôn sẵn sàng giúp đỡ bạn với bất kỳ câu hỏi hay vấn đề nào, cung cấp các giải pháp nhanh chóng và cá nhân hóa để đáp ứng nhu cầu của bạn.</p>
                    <div class="features-team-box mt-40">
                        <h6>Hơn 85+ thành viên trong đội ngũ chuyên gia</h6>
                        <div class="feature-authors">
                            <img src="{{asset('backend/img/features/feature-author1.jpg')}}" alt="Author">
                            <img src="{{asset('backend/img/features/feature-author2.jpg')}}" alt="Author">
                            <img src="{{asset('backend/img/features/feature-author3.jpg')}}" alt="Author">
                            <img src="{{asset('backend/img/features/feature-author4.jpg')}}" alt="Author">
                            <img src="{{asset('backend/img/features/feature-author5.jpg')}}" alt="Author">
                            <img src="{{asset('backend/img/features/feature-author6.jpg')}}" alt="Author">
                            <img src="{{asset('backend/img/features/feature-author7.jpg')}}" alt="Author">
                            <span>+</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-info-item">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <div class="content">
                                <h5>Cần sự giúp đỡ & hỗ trợ</h5>
                                <div class="text"><a href="mailto:support@gmail.com">duyenb2203435@student.ctu.edu.vn</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info-item">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <div class="content">
                                <h5>Cần gấp bất kỳ điều gì</h5>
                                <div class="text"><a href="callto:+0001234588">+000 (123) 45 88</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info-item">
                            <div class="icon"><i class="fa fa-map-marker"></i></div>
                            <div class="content">
                                <h5>Chi nhánh Việt Nam</h5>
                                <div class="text">Số 55, đường 10, thành phố Hồ Chí Minh</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info-item">
                            <div class="icon"><i class="fa fa-map-marker"></i></div>
                            <div class="content">
                                <h5>Địa chỉ văn phòng chính</h5>
                                <div class="text">Số nhà 55 trên Đường 10, Vietnam</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Info Area end -->


<!-- Contact Form Area start -->
<section class="contact-form-area py-70 rel z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="comment-form bgc-lighter z-1 rel mb-30 rmb-55">
                    <form id="contactForm" class="contactForm" name="contactForm"
                        action="{{ route('contact.submit') }}" method="post">
                        @csrf
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="section-title">
                            <h2>Liên hệ</h2>
                        </div>
                        <p>Địa chỉ email của bạn sẽ không được công bố, các trường bắt buộc được đánh dấu bằng dấu *</p>
                        <div class="row mt-35">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Họ và tên</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Randy J. Thomas" value="" required
                                        data-error="Please enter your Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone_number">Số điện thoại</label>
                                    <input type="text" id="phone_number" name="phone_number" class="form-control"
                                        placeholder="Phone" value="" required
                                        data-error="Please enter your Phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Địa chỉ email</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="enter email" value="" required
                                        data-error="Please enter your Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="message">Tin nhắn của bạn</label>
                                    <textarea name="message" id="message" class="form-control" rows="5" placeholder="Message" required
                                        data-error="Please enter your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <ul class="radio-filter mb-25">
                                        <li>
                                            <input class="form-check-input" type="radio" name="terms-condition"
                                                id="terms-condition">
                                            <label for="terms-condition">Lưu tên, email và trang web của tôi trên trình duyệt này để lần sau tôi bình luận.</label>
                                        </li>
                                    </ul>
                                    <button type="submit" class="theme-btn style-two">
                                        <span data-hover="Send Comments">Gửi bình luận</span>
                                    </button>
                                    <div id="msgSubmit" class="hidden"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-images-part" data-aos="fade-right" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="row">
                        <div class="col-12">
                            <img src="{{asset('backend/img/contact/contact1.jpg')}}" alt="Contact">
                        </div>
                        <div class="col-6">
                            <img src="{{asset('backend/img/contact/contact2.jpg')}}" alt="Contact">
                        </div>
                        <div class="col-6">
                            <img src="{{asset('backend/img/contact/contact3.jpg')}}" alt="Contact">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form Area end -->
        </main>

        <!-- Contact Map Start -->
<div class="contact-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.84151844204!2d105.76804037461582!3d10.02993369007697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0895a51d60719%3A0x9d76b0035f6d53d0!2zxJDhuqFpIGjhu41jIEPhuqduIFRoxqE!5e0!3m2!1svi!2s!4v1746272365839!5m2!1svi!2s"
        style="border:0; width: 100%;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- Contact Map End -->

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
		<!--OFFCANVAS YÊU THÍCH -->
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

        <!-- CRIPT Xử LÝ YÊU THÍCH -->
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
@endsection
