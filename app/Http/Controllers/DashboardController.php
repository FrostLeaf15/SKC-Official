<?php

namespace App\Http\Controllers;

use App\Models\Student;  // Pastikan baris ini ada!
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel 'students'
        $students = Student::all();  // Anda juga bisa menggunakan query lain seperti `paginate()`

        // Kirim data ke view
        return view('dashboard', compact('students'));
    }
}
