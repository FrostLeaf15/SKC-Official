@extends('layout.app')

@section('title', 'Galeri Kolase')

@section('content')
    <a href="{{ route('collage.create') }}" class="btn btn-primary mb-4">
        + Tambah Kolase Baru
    </a>

    <div class="container">
        @foreach ($collages as $collage)
            <div class="card mb-5 shadow">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        {{ $collage->title ?? 'Kolase #' . $collage->id }}
                    </h5>
                    <br>
                    <p class="card-subtitle text-muted mb-3">
                        Dibuat pada: {{ $collage->created_at->format('d M Y') }}
                    </p>

                    <div class="row row-cols-2 row-cols-md-3 g-3" data-masonry='{"percentPosition": true }'>
                        @foreach ($collage->images as $image)
                            <div class="col">
                                <div class="card">
                                    <img src="{{ asset('storage/' . $image->path) }}" class="rounded-xl img-fluid" alt="Kolase">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
