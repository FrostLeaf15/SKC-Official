@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Dashboard</h3>
                        </div>
                        <div class="card-body">
                            Selamat datang di Dashboard!
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Jurusan</th>
                                <th>Jurusan ke-2</th>
                                <th>NISN</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal lahir</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Asal Sekolah</th>
                                <th>Nama Ayah</th>
                                <th>Pekerjaan Ayah</th>
                                <th>Nama Ibu</th>
                                <th>Pekerjaan Ibu</th>
                                <th>Nomor yang dapat Dihubungi</th>
                                <th>Rekomendasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->nama }}</td>
                                    <td>{{ $student->jurusan }}</td>
                                    <td>{{ $student->jurusan_2 }}</td>
                                    <td>{{ $student->nisn }}</td>
                                    <td>{{ $student->tempat_lahir }}</td>
                                    <td>{{ $student->tanggal_lahir }}</td>
                                    <td>{{ $student->alamat }}</td>
                                    <td>{{ $student->kelamin }}</td>
                                    <td>{{ $student->sekolahAsal }}</td>
                                    <td>{{ $student->namaAyah }}</td>
                                    <td>{{ $student->pkrjnAyah }}</td>
                                    <td>{{ $student->namaIbu }}</td>
                                    <td>{{ $student->pkrjnIbu }}</td>
                                    <td>{{ $student->nmrkonfirmasi }}</td>
                                    <td>{{ $student->rekomendasi }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </section>
@endsection
