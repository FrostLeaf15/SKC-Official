<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        // Menampilkan form pendaftaran atau dashboard
        return view('pendaftaran');
    }

    public function store(Request $request)
    {
        // Logika untuk menyimpan data yang diterima dari form
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|numeric|digits:16',
            'jurusan' => 'required|string|max:100',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',  // Validasi tanggal
            'alamat' => 'required|string|max:500',
            'kelamin' => 'required|in:Laki-laki,Perempuan',  // Misalnya, hanya dua pilihan kelamin
            'nisn' => 'required|numeric|digits:10',  // Misalnya, NISN terdiri dari 10 digit
            'sekolahAsal' => 'required|string|max:255',
            'namaAyah' => 'required|string|max:255',
            'pkrjnAyah' => 'required|string|max:255',
            'namaIbu' => 'required|string|max:255',
            'pkrjnIbu' => 'required|string|max:255',
            'nmrkonfirmasi' => 'required|string|max:50',  // Sesuaikan panjang maksimalnya jika perlu
            // Validasi lainnya sesuai kebutuhan
        ]);

        // Simpan data ke database atau proses lainnya
        // Misalnya menggunakan model untuk menyimpan data
        // User::create($validatedData);

        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran berhasil!');
    }
}
