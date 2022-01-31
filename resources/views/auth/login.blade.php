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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"/>
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
                                <div class="form-floating  mb-3">
                                    <input class="form-control" id="floatingInput" name="username" type="text" placeholder="Username">
                                     <label for="username">Username</label>
                                </div>
                                <div class="form-floating  mb-3">
                                    <input class="form-control" name="password" type="password"
                                        placeholder="Password">
                                         <label for="exampleInputEmail1">Password</label>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
