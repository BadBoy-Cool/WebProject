<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travio | Đăng ký </title>
    <link rel="stylesheet" href="{{ asset('backend/css/signup.css') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/img/favicon/favicon-32x32.png') }}">
</head>
<body>
  <div class="container">
    <!-- Title section -->
    <div class="title">Đăng ký</div>
    <div class="content">
      <!-- Registration form -->
    <form action="{{ route('auth.signup.submit') }}" method="POST">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    @csrf
    <div class="user-details">
        <div class="input-box">
            <span class="details">Họ và tên</span>
            <input type="text" name="KH_name" placeholder="Nhập họ và tên" required>
        </div>
        <div class="input-box">
            <span class="details">Tên đăng nhập</span>
            <input type="text" name="username" placeholder="Nhập tên đăng nhập" required>
        </div>
        <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Nhập email" required>
        </div>
        <div class="input-box">
            <span class="details">Số điện thoại liên hệ</span>
            <input type="text" name="sdt" placeholder="Nhập số điện thoại liên hệ" required>
        </div>
        <div class="input-box">
            <span class="details">Mật khẩu</span>
            <input type="password" name="password" placeholder="Nhập mật khẩu" required>
        </div>
        <div class="input-box">
            <span class="details">Xác nhận mật khẩu</span>
            <input type="password" name="password_confirmation" placeholder="Xác nhận mật khẩu" required>
        </div>
        <div class="input-box">
            <span class="details">Địa chỉ</span>
            <input class="address" type="text" name="diachi" placeholder="Nhập địa chỉ của bạn" required>
        </div>
        <div class="gender-details input-box">
            <input type="radio" name="KH_gioitinh" id="dot-1" value="1">
            <input type="radio" name="KH_gioitinh" id="dot-2" value="0">
            <span class="details">Giới tính</span>
            <div class="category">
                <label for="dot-1">
                    <span class="dot one"></span>
                    <span class="gender">Nam</span>
                </label>
                <label for="dot-2">
                    <span class="dot two"></span>
                    <span class="gender">Nữ</span>
                </label>
            </div>
        </div>
    </div>

    <div class="button">
        <input type="submit" value="Đăng ký">
    </div>
    </form>

    </div>
  </div>
</body>
</html>
