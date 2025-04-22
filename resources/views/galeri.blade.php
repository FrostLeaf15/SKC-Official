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

<body class="bg-light text-dark">
    <div class="container-fluid p-0">
        <header class="navigasi">
            @include('layout.navbar2')
        </header>

        <div class="judul text-center py-4 bg-primary text-white">
            <h1>GALERI</h1>
        </div>

        <div class="container my-5">
            @if (session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif

            <div class="row">
                @forelse ($galeri as $item)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top img-fluid"
                                alt="Photo Kegiatan" style="object-fit: cover; height: 250px;">
                            <div class="card-body text-center">
                                <p class="card-text">{{ $item->deskripsi }}</p>
                            </div>
                            <div class="card-footer text-muted text-center">
                                <small>{{ $item->created_at->format('d-m-Y') }}</small>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-center text-muted">Belum ada gambar di galeri.</p>
                    </div>
                @endforelse
            </div>
        </div>

        <footer>
            @include('layout.footer2')
        </footer>
    </div>

    {{-- script js bootstrap --}}
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
