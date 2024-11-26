<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/dashboard.css">
        <title>Dashboard</title>
    </head>
    <body>
        <h1>Data Siswa</h1>
    
        <table style="border: solid">
            <tr>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>NIK</th>
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
            </tr>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->nama }}</td>
                    <td>{{ $student->jurusan }}</td>
                    <td>{{ $student->nik }}</td>
                    <td>{{ $student->tempat_lahir }}</td>
                    <td>{{ $student->tanggal_lahir }}</td>
                    <td>{{ $student->alamat }}</td>
                    <td>{{ $student->kelamin }}</td>
                    <td>{{ $student->nisn }}</td>
                    <td>{{ $student->sekolahAsal }}</td>
                    <td>{{ $student->namaAyah }}</td>
                    <td>{{ $student->pkrjnAyah }}</td>
                    <td>{{ $student->namaIbu }}</td>
                    <td>{{ $student->pkrjnIbu }}</td>
                    <td>{{ $student->nmrkonfirmasi }}</td>
                </tr>
            @endforeach
        </table>
    </body>
    </html>

</x-app-layout>

