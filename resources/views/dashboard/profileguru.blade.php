@extends('layout.app')

@section('title', 'Daftar Guru')

@section('content')
    <div class="container mt-5" style="padding-top: 20px">
        <h2>Upload Foto Profil Guru</h2>
        <form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Guru</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama guru"
                    required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="photo">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Deskripsi" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        <!-- Tampilkan Daftar Guru -->
        <div class="mt-5">
            <h3>Daftar Guru</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gurus as $guru)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @if ($guru->photo_path)
                                    <img src="{{ asset('storage/' . $guru->photo_path) }}" alt="Foto {{ $guru->nama }}"
                                        width="100">
                                @else
                                    <p>Foto tidak tersedia.</p>
                                @endif
                            </td>
                            <td>{{ $guru->nama }}</td>
                            <td>{{ $guru->deskripsi }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
