<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Logo pada bagian tab --}}
    <link rel="icon" type="image/png" href="{{ asset('/pic/favicon.png') }}">

    {{-- local style --}}
    <link rel="stylesheet" href="/css/informasijurusan.css">

    {{-- style css bootstrap --}}
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Informasi | {{ $namajurusan }}</title>
</head>

<body>
    <div class="container-fluid">
        <header class="navigasi">
            @include('layout.navbar2')
        </header>

        {{-- Logo dan Nama Jurusan --}}
        <div class="logo-jurusan text-center">
            <div class="logo">
                <img src="/pic/{{ $logo }}" alt="{{ $namajurusan }}">
            </div>
            <div class="nama-jurusan">
                <p class="nmjrsn">
                    {{ $namajurusan }}
                </p>
            </div>
        </div>

        <div class="container">
            @yield('main')
        </div>
    </div>

    {{-- script js bootstrap --}}
    <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
