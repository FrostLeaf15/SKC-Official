<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::all(); // Ambil semua data guru
        return view('dashboard.profileguru', compact('gurus'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'photo' => 'nullable|image|file|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('uploads', 'public');
        }

        Guru::create([
            'nama' => $validated['nama'],
            'photo_path' => $path,
        ]);

        return redirect()->route('guru.index')->with('success', 'Data Guru berhasil disimpan!');
    }
}