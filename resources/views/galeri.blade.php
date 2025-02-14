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
        <header class="navigasi">
            @include('layout.navbar2')
        </header>

        <div class="judul">
            <h1>GALERI</h1>
        </div>

        <div class="main">
            <div class="galeri">
                <div class="judul-header py-3">
                    <h1 class="text-center m-5">Galeri</h1>
                </div>
                <div class="row">
                    <div class="post col-md-8">

                        @if (session('success'))
                            <p style="color: green;">{{ session('success') }}</p>
                        @endif

                        <article>
                            @foreach ($galeri as $item)
                                <div class="post-img">
                                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="Photo Kegiatan">
                                </div>
                                <div class="date-post">
                                    <span>Diunggah pada: {{ $item->created_at->format('d-m-Y') }}</span>
                                </div>
                                <div class="post-content">
                                    <p>{{ $item->deskripsi }}</p>
                                </div>
                            @endforeach
                        </article>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
            <aside class="filter-kalender"></aside>
        </div>

        <footer>
            @include('layout.footer2')
        </footer>
    </div>
</body>

</html>
