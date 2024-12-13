<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::all(); // Ambil semua data guru
        return view('dashboard.profileguru', compact('gurus')); // Kirim data ke view
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('uploads', 'public');
            if (!$path) {
                return redirect()->back()->with('error', 'Gagal menyimpan file!');
            }
        }

        Guru::create([
            'nama' => $validated['nama'],
            'photo_path' => $path,
            'deskripsi' => $validated['deskripsi'],
        ]);

        return redirect()->route('guru.index')->with('success', 'Data Guru berhasil disimpan!');
    }
}
