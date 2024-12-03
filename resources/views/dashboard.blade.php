@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card" style="margin-top: 10px">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12" style="overflow-x: auto; white-space: nowrap;">
                                        <table id="example1"
                                            class="table table-bordered table-striped dataTable dtr-inline"
                                            aria-describedby="example1_info">
                                            <thead>
                                                <tr>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1" aria-sort="ascending"
                                                        aria-label="No: activate to sort column descending">
                                                        No</th>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1" aria-sort="ascending"
                                                        aria-label="Nama Lengkap: activate to sort column descending">
                                                        Nama Lengkap</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Jurusan: activate to sort column ascending">Jurusan</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Jurusan_2: activate to sort column ascending">Jurusan_2
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="NISN: activate to sort column ascending">
                                                        NISN</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Tempat Lahir: activate to sort column ascending">
                                                        Tempat Lahir</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Tanggal Lahir: activate to sort column ascending">
                                                        Tanggal Lahir
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Alamat: activate to sort column ascending">Alamat
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Jenis Kelamin: activate to sort column ascending">Jenis
                                                        Kelamin
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Asal Sekolah: activate to sort column ascending">Asal
                                                        Sekolah
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Nama Orang Tua Wali: activate to sort column ascending">
                                                        Nama Orang Tua / Wali
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Nomor yang dapat dihubungi: activate to sort column ascending">
                                                        Nomor yang dapat dihubungi
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Rekomendasi: activate to sort column ascending">
                                                        Rekomendasi
                                                    </th>
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
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            {{-- <tfoot>
                                                <tr>
                                                    <th rowspan="1" colspan="1">No</th>
                                                    <th rowspan="1" colspan="1">Nama Lengkap</th>
                                                    <th rowspan="1" colspan="1">Jurusan</th>
                                                    <th rowspan="1" colspan="1">Jurusan_2</th>
                                                    <th rowspan="1" colspan="1">NISN</th>
                                                    <th rowspan="1" colspan="1">Tempat Lahir</th>
                                                    <th rowspan="1" colspan="1">Tanggal Lahir</th>
                                                    <th rowspan="1" colspan="1">Alamat</th>
                                                    <th rowspan="1" colspan="1">Jenis Kelamin</th>
                                                    <th rowspan="1" colspan="1">Asal Sekolah</th>
                                                    <th rowspan="1" colspan="1">Nama Orang Tua atau Wali</th>
                                                    <th rowspan="1" colspan="1">Nomor yang dapat dihubungi</th>
                                                    <th rowspan="1" colspan="1">Rekomendasi</th>
                                                </tr>
                                            </tfoot> --}}
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
