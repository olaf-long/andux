<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <title>登陆  --佰易信ERP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="./assets/images/favicon.ico">

    <link href="./assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="./assets/css/app.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="authentication-bg">
<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">

                    @include('shared.login_message')

                    <div class="card-header pt-4 pb-4 text-center bg-primary">
                        <a href="index.html">
                            <span><img src="assets/images/logo.png" alt="" height="18"></span>
                        </a>
                    </div>
                    <div class="card-body p-4">
                        <div class="text-center w-75 m-auto">
                            <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Andux ERP</h4>
                            <p class="text-muted mb-4">Enter your username and password to access admin panel.</p>
                        </div>
                        <form action="{{ route('login') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">用户名</label>
                                <input class="form-control" type="text" id="name" required="" name="name" placeholder="Enter your username">
                            </div>
                            <div class="form-group">
                                <label for="password">密码</label>
                                <input class="form-control" type="password" required="" id="password" name="password" placeholder="Enter your password">
                            </div>
                            <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox-signin" name="remember_me" >
                                    <label class="custom-control-label"  for="checkbox-signin">记住我</label>
                                </div>
                            </div>
                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary" type="submit"> 登  陆 </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-muted">还没有账号? <a href="javascript: void(0);" class="text-muted ml-1"><b>请联系IT</b></a></p>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>

<footer class="footer footer-alt">
    2019 - 2020 © Andux - By IT
</footer>

<script src="assets/js/app.min.js"></script>
</body>
</html>
