<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <!-- AdminLTE CSS -->
    <link rel="icon" type="image/png" href="{{ asset('/pic/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
<body class="sidebar-mini control-sidebar-slide-open sidebar-collapse layout-navbar-fixed dark-mode layout-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        @include('layout.navbar')
        <!-- Sidebar -->
        @include('layout.sidebar')
        <!-- Content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- Footer -->
        @include('layout.footer')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>
</html>
