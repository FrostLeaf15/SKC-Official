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

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
}
