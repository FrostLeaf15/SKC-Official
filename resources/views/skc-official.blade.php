<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('/pic/favicon.png') }}">

    {{-- Local Style --}}
    <link rel="stylesheet" href="{{ asset('css/navbarstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skcofficialstyle.css') }}">

    {{-- style css bootstrap --}}
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <title>SMK Kesehatan Cianjur</title>
</head>

<body>
    <div class="container-fluid">
        <header class="navigasi">
            @include('layout.navbar2')
        </header>

        {{-- isi dari website --}}
        <div class="main">

            {{-- logo sekolah SMK Kesehatan Cianjur --}}
            <div class="logoskc">
                <img src="pic/LOGO_SKC.png" alt="Logo Seklolah">
            </div>

            {{-- nama sekolah --}}
            <div class="jdl">
                <p>SMK Kesehatan Cianjur</p>
            </div>

            {{-- logo jurusan --}}
            <div class="logo-jurusan">
                <a href="https://smkkesehatancianjur.sch.id/informasi/askep">
                    <img src="pic/LOGO_ASKEP.png" alt="Logo Jurusan">
                </a>
                <a href="https://smkkesehatancianjur.sch.id/informasi/farmasi">
                    <img src="pic/LOGO_FARMASI.png" alt="Logo Jurusan">
                </a>
                <a href="https://smkkesehatancianjur.sch.id/informasi/tlm">
                    <img src="pic/LOGO_TLM.png" alt="Logo Jurusan">
                </a>
            </div>

            {{-- pencarian --}}
            {{-- <div>
                <input type="search" name="pencarian" id="pencarian" class="pencarian">
            </div> --}}
        </div>

        @include('layout.footer2')

    </div>

    {{-- script js bootstrap --}}
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
