<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collage;
use App\Models\Image;

class CollageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collages = Collage::with('images')->get();
        return view('collage.index', compact('collages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('collage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // Validasi input
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg|max:102048',
        ]);

        $collage = Collage::create([
            'title' => $request->title,
        ]);

        foreach ($request->file('images') as $file) {
            $path = $file->store('collages', 'public');
            $collage->images()->create(['path' => $path]);
        }

        return redirect('/collage')->with('success', 'Kolase berhasil dibuat!');
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
