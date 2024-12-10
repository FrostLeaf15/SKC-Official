@extends('layout.app')

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
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile02">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gurus as $guru)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ asset($guru->photo_path) }}" alt="Foto Profil {{ $guru->nama }}"
                                    width="150">
                            </td>
                            <td>{{ $guru->nama }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
