@extends('layout.app')

@section('title', 'Unggah Gambar Kegiatan')

@section('content')

@if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

    <h2>Unggah Gambar</h2>
    <form action="{{ route('galeri.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
            <input type="file" name="gambar" class="form-control mx-5" id="inputGroupFile02" required>
        </div>
        <div class="input-group mb-3 container-fluid">
            <textarea name="deskripsi" class="form-control mx-4" aria-label="With textarea" required></textarea>
        </div>
        <button type="submit" class="btn btn-success mb-3 ml-4">Success</button>
    </form>

@endsection
