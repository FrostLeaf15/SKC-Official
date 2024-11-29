<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('/pic/favicon.png') }}">
    <link rel="stylesheet" href="/css/form.css">
    <title>PPDB - SMK Kesehatan Cianjur</title>
</head>
<body>
    <header>
        SMK Kesehatan Cianjur
    </header>

    <main>
        @yield('main')
    </main>

    @include('layout.footer2')

    <script src="/js/script.js"></script>
    
</body>
</html>