@extends('layout.app')

@section('title', 'Tambah Kolase Baru')

@section('content')
    <div class="container pt-4">
        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Tambah Kolase Baru</h5>
            </div>

            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Terjadi kesalahan!</strong>
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('collage.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Judul Kolase (opsional)</label>
                        <input type="text" name="title" id="title"
                            class="form-control" placeholder="Contoh: Liburan di Bali">
                    </div>

                    <div class="mb-3">
                        <label for="images" class="form-label">Pilih Gambar</label>
                        <input type="file" name="images[]" id="images"
                            class="form-control" multiple required>
                        <small class="text-muted">Kamu bisa pilih lebih dari satu gambar.</small>
                    </div>

                    <button type="submit" class="btn btn-success">
                        Simpan Kolase
                    </button>

                    <a href="{{ route('collage.index') }}" class="btn btn-secondary">
                        Batal
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection
