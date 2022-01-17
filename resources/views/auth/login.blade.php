<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/feathericon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/morris/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
</head>

<body>
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left"> <img class="img-fluid"
                            src="{{ asset('admin/assets/img/logo4.png') }}" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Login</h1>
                            <p class="account-subtitle">Web Pengelolaan Data Siswa</p>
                            <form action="/postlogin" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input class="form-control" name="username" type="text" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="password" type="password"
                                        placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                                </div>
                            </form>
                            <div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center dont-have">Don’t have an account? <a href="/register">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ 'admin/assets/js/jquery-3.5.1.min.js' }}"></script>
    <script src="{{ 'admin/assets/js/popper.min.js' }}"></script>
    <script src="{{ 'admin/assets/js/bootstrap.min.js' }}"></script>
    <script src="{{ 'admin/assets/plugins/slimscroll/jquery.slimscroll.min.js' }}"></script>
    <script src="{{ 'admin/assets/js/script.js' }}"></script>
</body>

</html>
