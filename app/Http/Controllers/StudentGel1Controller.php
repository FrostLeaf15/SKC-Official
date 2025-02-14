<?php

namespace App\Http\Controllers;

use App\Models\StudentGel1;
use app\Models\Student;
use Illuminate\Http\Request;

class StudentGel1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student_gel1s = StudentGel1::all(); // Ambil data sesuai kondisi
        // dd($student_gel1s); // Debugging
        return view('dashboard/daftarsiswa', ['student_gel1s' => $student_gel1s]); // Kirim ke view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
