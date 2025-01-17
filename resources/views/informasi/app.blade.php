<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Logo pada bagian tab --}}
    <link rel="icon" type="image/png" href="{{ asset('/pic/favicon.png') }}">

    {{-- local style --}}
    <link rel="stylesheet" href="{{ asset('/css/informasijurusan.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/navbarstyle.css') }}">

    {{-- style css bootstrap --}}
    <link href="{{ asset('/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Informasi | {{ $namajurusan }}</title>
</head>

<body>
    <div class="container-fluid body">
        <header class="navigasi">
            @include('layout.navbar2')
        </header>
        <div style="--bs-breadcrumb-divider: '>'; color: rgb(0, 0, 0);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Informasi</li>
                <li class="breadcrumb-item active" aria-current="page">{{ $namajurusan }}</li>
            </ol>
        </div>

        <div class="container">
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
            @yield('main')
        </div>

        <!-- Tombol Go to Top -->
        <button id="goToTopBtn" class="btn btn-primary position-fixed bottom-0 end-0 m-3 rounded-circle">
            ↑
        </button>

        @include('layout.footer2')
    </div>

    {{-- script js bootstrap --}}
    <script src="{{ asset('/dist/js/bootstrap.bundle.min.js') }}"></script>

    {{-- Script js --}}
    <script src="{{ asset('js/script.js') }}"></script>

    {{-- Local Script --}}
    <script>
        // Ambil tombol Go to Top
        const goToTopBtn = document.getElementById('goToTopBtn');

        // Fungsi untuk menampilkan tombol saat scroll ke bawah
        window.onscroll = function() {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                goToTopBtn.style.display = 'block'; // Tampilkan tombol
            } else {
                goToTopBtn.style.display = 'none'; // Sembunyikan tombol
            }
        };

        // Fungsi untuk menggulir ke atas saat tombol diklik
        goToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0, // Scroll ke posisi 0 (atas)
                behavior: 'smooth' // Efek gulir halus
            });
        });
    </script>

</body>

</html>
