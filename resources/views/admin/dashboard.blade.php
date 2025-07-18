<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travio | Quản trị</title>

    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('frontend/img/logo/logo.png') }}">

</head>

<body>
<div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    @auth
                    <div class="dropdown profile-element">
                        <span>
                            <img alt="image" class="img-circle" src="{{ asset('frontend/img/logo/user.png') }}" style="width: 48px; height: 48px;" />
                        </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear">
                                <span class="block m-t-xs">
                                    <strong class="font-bold">{{ Auth::user()->KH_name ?? Auth::user()->username }}</strong>
                                </span>
                                <span class="text-muted text-xs block">Admin <b class="caret"></b></span>
                            </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="{{ route('auth.logout') }}">Đăng xuất</a></li>
                        </ul>
                    </div>
                    @endauth
                    <div class="logo-element">Travio</div>
                </li>

                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="fa fa-th-large"></i> <span class="nav-label">Bảng điều khiển</span>
                    </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Quản lý người dùng</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-map-marker"></i> <span class="nav-label">Quản lý tour</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-comments"></i> <span class="nav-label">Đánh giá</span></a>
                </li>
            </ul>
        </div>
    </nav>

    {{-- Nội dung chính --}}
    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary" href="#"><i class="fa fa-bars"></i></a>
                </div>
            </nav>
        </div>

        <div class="wrapper wrapper-content">
            <h2>Chào mừng đến trang quản trị Travio!</h2>
            {{-- Nội dung khác --}}
        </div>

        <div class="footer">
            <div class="pull-right">
                Dung lượng <strong>10GB</strong> / 250GB.
            </div>
            <div>
                <strong>Copyright</strong> Travio &copy; {{ date('Y') }}
            </div>
        </div>
    </div>

</div>

{{-- Scripts --}}
<script src="{{ asset('backend/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('backend/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('backend/js/inspinia.js') }}"></script>
<script src="{{ asset('backend/js/plugins/pace/pace.min.js') }}"></script>
</body>
</html>
