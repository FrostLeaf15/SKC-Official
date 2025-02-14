@extends('layout.app')

@section('title', 'Daftar Siswa')

@section('content')

    <!-- Main content -->
    <section class="content pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <h1>Daftar Siswa Gel 2</h1>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($student_gel1s as $student_gel1)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td> <!-- Nomor Urut -->
                                            <td>{{ $student_gel1->nama }}</td>
                                            <td>{{ $student_gel1->jurusan }}</td>
                                            <td>{{ $student_gel1->jurusan_2 }}</td>
                                            <td>{{ $student_gel1->nisn }}</td>
                                            <td>{{ $student_gel1->tempat_lahir }}</td>
                                            <td>{{ $student_gel1->tanggal_lahir }}</td>
                                            <td>{{ $student_gel1->alamat }}</td>
                                            <td>{{ $student_gel1->kelamin }}</td>
                                            <td>{{ $student_gel1->sekolahAsal }}</td>
                                            <td>{{ $student_gel1->nmorngtuawali }}</td>
                                            <td>{{ $student_gel1->nmrkonfirmasi }}</td>
                                            <td>{{ $student_gel1->rekomendasi }}</td>
                                            <td>{{ $student_gel1->created_at }}</td>
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
