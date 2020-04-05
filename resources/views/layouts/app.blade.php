<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <title>@yield('title','佰易信ERP系统')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('./assets/images/favicon.ico') }}">
    <link href=" {{ asset('./assets/css/vendor/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    <link href=" {{ asset('./assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('./assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

</head>
<body data-layout="topnav">
    <div class="wrapper">
        <div class="content-page">
            <div class="content">
                <div class="navbar-custom topnav-navbar">
                    @include('layouts.header')
                </div>
                <div class="topnav">
                    @include('layouts.nav')
                </div>
                <div class="container-fluid">
                    @include('shared.message')
                </div>
                @yield('content')
            </div>

            @include('layouts.footer')

        </div>
    </div>


    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/js/pages/demo.dashboard.js') }}"></script>

</body>
</html>

