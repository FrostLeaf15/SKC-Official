@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
@section('table')
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

@endsection
