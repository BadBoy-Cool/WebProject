<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Travio | Đăng nhập</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/img/favicon/favicon-32x32.png') }}">
    <link href="backend/css/bootstrap.min.css" rel="stylesheet">
    <link href="backend/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="backend/css/animate.css" rel="stylesheet">
    <link href="backend/css/style.css" rel="stylesheet">

     {{-- Local CSS --}}
    <link rel="stylesheet" href="{{ asset('backend/css/login.css') }}">
</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">
            <div class="slogan col-md-6">
                <h2 class="font-bolder">Belong anywhere</h2>

                <p> Dù có thích hay ghét thì cũng không thể phủ nhận rằng Travio đã làm thay đổi ngành công nghiệp này. Thị trường trực tuyến cho các trải nghiệm du lịch đã định vị mình là một trong những cách tốt nhất để sống như người dân địa phương khi bạn đi du lịch.</p>
                
                <p> Mỗi chuyến đi đều được xây dựng như một người kể chuyện, ghi lại những trải nghiệm thực tế và chạm đến cảm xúc bên trong bạn.</p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form class="m-t" role="form" action="index.blade.php">
                        <h2 class="text-center font-weight-bold text-primary">Đăng nhập</h2>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Username" required="">
                            <i class="fa fa-user icon-input"></i>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" required="">
                            <i class="fa fa-lock icon-input"></i>
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Đăng nhập</button>

                        <a href="#">
                            <small>Quên mật khẩu</small>
                        </a>

                        <p class="text-muted text-center">
                            <small>Chưa có tài khoản?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="{{ route('signup') }}">Tạo tài khoản ngay</a>
                    </form>
                    <p class="m-t">
                        <small>Travio – Turning every journey into a memory &copy; 2025</small>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright Travio VietNam
            </div>
            <div class="col-md-6 text-right">
               <small>© 2024-2025</small>
            </div>
        </div>
    </div>

</body>

</html>
