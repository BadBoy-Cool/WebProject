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
      <form action="#">
        <div class="user-details">
          <!-- Input for Full Name -->
          <div class="input-box">
            <span class="details">Họ và tên</span>
            <input type="text" placeholder="Nhập họ và tên" required>
          </div>
          <!-- Input for Username -->
          <div class="input-box">
            <span class="details">Tên đăng nhập</span>
            <input type="text" placeholder="Nhập tên đăng nhập" required>
          </div>
          <!-- Input for Email -->
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Nhập email" required>
          </div>
          <!-- Input for Phone Number -->
          <div class="input-box">
            <span class="details">Số điện thoại liên hệ</span>
            <input type="text" placeholder="Nhập số điện thoại liên hệ" required>
          </div>
          <!-- Input for Password -->
          <div class="input-box">
            <span class="details">Mật khẩu</span>
            <input type="text" placeholder="Nhập mật khẩu" required>
          </div>
          <!-- Input for Confirm Password -->
          <div class="input-box">
            <span class="details">Xác nhận mật khẩu</span>
            <input type="text" placeholder="Xác nhận mật khẩu" required>
          </div>
           {{-- Input for Address --}}
          <div class="input-box">
            <span class="details">Địa chỉ</span>
            <input class="address" type="text" placeholder="Nhập địa chỉ của bạn" required>
          </div>
          {{-- Select Gender --}}
          <div class="gender-details input-box">
          <!-- Radio buttons for gender selection -->
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <span class="details">Giới tính</span>
          <div class="category">
            <!-- Label for Male -->
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">Nam</span>
            </label>
            <!-- Label for Female -->
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">Nữ</span>
            </label>          
          </div>
        </div>
        </div>
       
        <!-- Submit button -->
        <div class="button">
          <input type="submit" value="Đăng ký">
        </div>
      </form>
    </div>
  </div>
</body>
</html>