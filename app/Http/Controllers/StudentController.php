<?php

namespace App\Http\Controllers;

use App\Models\Student; // Pastikan ini ada
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        // Ambil semua data dari tabel students
        $students = Student::all();

        // Kirim data ke view dashboard
        return view('dashboard', compact('students'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required|unique:students,nisn', // Ganti 'users' dengan nama tabel yang sesuai
            'jurusan' => 'required|string',
            'jurusan_2' => 'required|string',
            'rekomendasi' => 'nullable|string|max:255',
            // 'name' => 'required|string|max:255',
            // tambahkan validasi lainnya
        ]);

        // Simpan data jika validasi lolos
        Student::create($request->all());

        // Redirect ke halaman pembayaran
        return redirect()->route('payment.show')->with('success', 'Data berhasil dikirim. Lanjutkan ke pembayaran.');
    }

    public function destroy($id)
    {
        // Cari data berdasarkan ID
        $student = Student::findOrFail($id);

        // Hapus data
        $student->delete();

        // Redirect kembali ke halaman dashboard dengan pesan sukses
        return redirect()->route('students.index')->with('success', 'Data siswa berhasil dihapus.');
    }


    // Menampilkan Halaman Pembayaran
    public function showPayment()
    {
        return view('payment');
    }
}
