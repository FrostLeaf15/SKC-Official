<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('/pic/favicon.png') }}">

    {{-- CSS Style --}}
    <link rel="stylesheet" href="{{ asset('css/galerystyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbarstyle.css') }}">
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <title>SMK Kesehatan Cianjur | Galeri</title>
</head>

<body class="bg-light text-dark">
    <div class="container-fluid">
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

            @php
                $chunks = $galeri->chunk(3);
            @endphp

            @forelse ($chunks as $group)
                <div class="row justify-content-center mb-4">
                    @if ($group->count() === 1 && $group->get(0))
                        <div class="col-md-4 d-flex justify-content-center">
                            @include('partials.galeri-card', ['item' => $group->get(0)])
                        </div>
                    @elseif ($group->count() === 2 && $group->get(0) && $group->get(1))
                        <div class="col-md-4">
                            @include('partials.galeri-card', ['item' => $group->get(0)])
                        </div>
                        <div class="col-md-4 offset-md-4">
                            @include('partials.galeri-card', ['item' => $group->get(1)])
                        </div>
                    @else
                        @foreach ($group as $item)
                            <div class="col-md-4">
                                @include('partials.galeri-card', ['item' => $item])
                            </div>
                        @endforeach
                    @endif
                </div>
            @empty
                <div class="row">
                    <div class="col-12">
                        <p class="text-center text-muted">Belum ada gambar di galeri.</p>
                    </div>
                </div>
            @endforelse
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
