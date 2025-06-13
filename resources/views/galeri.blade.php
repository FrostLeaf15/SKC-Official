@extends('app')

@section('title', 'Galeri')

@section('content')

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

@endsection
