@extends('layout.app')

@section('title', 'Dashboard')

@section('content')

    <!-- Flash Message -->
    {{-- @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif --}}

    <!-- Main content -->
    <section class="content pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <h1 class="pb-3 text-center">List Siswa Daftar Online</h1>
                            <table id="example1" class="table table-bordered table-striped" style="white-space: nowrap;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Jurusan 1</th>
                                        <th>Jurusan 2</th>
                                        <th>NISN</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Asal Sekolah</th>
                                        <th>Nama Orang Tua / Wali</th>
                                        <th>Nomor HP/WA</th>
                                        <th>Rekomendasi</th>
                                        <th>Waktu Daftar</th>
                                        <th></th> <!-- Tambahkan kolom aksi -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td> <!-- Nomor Urut -->
                                            <td>{{ $student->nama }}</td>
                                            <td>{{ $student->jurusan }}</td>
                                            <td>{{ $student->jurusan_2 }}</td>
                                            <td>{{ $student->nisn }}</td>
                                            <td>{{ $student->tempat_lahir }}</td>
                                            <td>{{ $student->tanggal_lahir }}</td>
                                            <td>{{ $student->alamat }}</td>
                                            <td>{{ $student->kelamin }}</td>
                                            <td>{{ $student->sekolahAsal }}</td>
                                            <td>{{ $student->nmorngtuawali }}</td>
                                            <td>{{ $student->nmrkonfirmasi }}</td>
                                            <td>{{ $student->rekomendasi }}</td>
                                            <td>{{ $student->created_at }}</td>
                                            <td>
                                                <!-- Tombol Hapus -->
                                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
