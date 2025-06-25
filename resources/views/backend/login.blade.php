<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Travio | Login</title>

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

                <p>
                    Love it or hate it, there’s no denying that Travio has disrupted the industry. The online marketplace for travel experiences has positioned itself as one of the best ways to live like a local when you travel.
                </p>

                <p>
                    Each journey is crafted as a storyteller, embracing real human experiences and touching the emotions within you.
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form class="m-t" role="form" action="index.blade.php">
                        <h2 class="text-center font-weight-bold text-primary">Login</h2>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Username" required="">
                            <i class="fa fa-user icon-input"></i>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" required="">
                            <i class="fa fa-lock icon-input"></i>
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                        <a href="#">
                            <small>Forgot password?</small>
                        </a>

                        <p class="text-muted text-center">
                            <small>Do not have an account?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="{{ route('signup') }}">Create an account</a>
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
