<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <title>注册 - 佰易信ERP系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>
<body class="authentication-bg">
<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">

                    <div class="card-header pt-4 pb-4 text-center bg-primary">
                        <a href="index.html">
                            <span><img src="assets/images/logo.png" alt="" height="18"></span>
                        </a>
                    </div>
                    <div class="card-body p-4">
                        <div class="text-center w-75 m-auto">
                            <h4 class="text-dark-50 text-center mt-0 font-weight-bold">注册</h4>
                            <p class="text-muted mb-4">Don't have an account? Create your account, it takes less than a minute </p>
                        </div>
                        <form action="{{ route('register') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">用户名</label>
                                <input class="form-control" type="text" required id="name" name="name" placeholder="请输入你的密码" required>
                            </div>
                            <div class="form-group">
                                <label for="password">密码</label>
                                <input class="form-control" type="password" required id="password" name="password" placeholder="请输入密码">
                            </div>
                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary" type="submit"> 注 册 </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-muted">已经有账号了? <a href="{{ route('login') }}" class="text-muted ml-1"><b>登陆</b></a></p>
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

