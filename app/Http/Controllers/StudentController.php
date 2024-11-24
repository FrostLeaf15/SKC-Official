<?php

namespace App\Http\Controllers;

use App\Models\Student; // Pastikan ini ada
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'nama' => 'required|string|max:255',
    //         'nik' => 'required|string|max:16|unique:students,nik',
    //         'jurusan' => 'required|string|max:255',
    //         'tempat_lahir' => 'required|string|max:255',
    //         'tanggal_lahir' => 'required|date',
    //         'alamat' => 'required|string',
    //         'kelamin' => 'required|in:Laki-laki,Perempuan',
    //         'nisn' => 'required|string|max:10',
    //         'sekolahAsal' => 'required|string|max:255',
    //         'namaAyah' => 'required|string|max:255',
    //         'pkrjnAyah' => 'nullable|string|max:255',
    //         'namaIbu' => 'required|string|max:255',
    //         'pkrjnIbu' => 'nullable|string|max:255',
    //         'nmrkonfirmasi' => 'nullable|string|max:20',
    //     ]);

    //     Student::create($validatedData);

    //     return redirect()->route('dashboard')->with('success', 'Data berhasil disimpan.');
    // }

    public function index()
    {
        // Ambil semua data dari tabel students
        $students = Student::all();

        // Kirim data ke view dashboard
        return view('dashboard', compact('students'));
    }
}
