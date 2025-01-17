<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSS Style --}}
    <link rel="stylesheet" href="{{ asset('css/galerystyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbarstyle.css') }}">
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <title>SMK Kesehatan Cianjur | Galeri</title>
</head>

<body>
    <div class="container-fluid">
        <header>
            @include('layout.navbar2')
        </header>

        <div class="judul">
            
        </div>

        <h1>Ini adalah halaman galeri</h1>
    </div>
</body>

</html>
