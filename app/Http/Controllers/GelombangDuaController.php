<?php

namespace App\Http\Controllers;

use App\Models\GelombangDua;
use Illuminate\Http\Request;

class GelombangDuaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gelombangdua = GelombangDua::all();
        return view('dashboard.gelombangdua', compact('gelombangdua'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.gelombangdua.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        GelombangDua::create($request->all());
        return redirect()->route('dashboard.gelombangdua.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(GelombangDua $gelombangDua)
    {
        return view('dashboard.gelombangdua.show', compact('gelombangDua'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GelombangDua $gelombangDua)
    {
        return view('dashboard.gelombangdua.edit', compact('gelombangDua'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GelombangDua $gelombangDua)
    {
        $gelombangDua->update($request->all());
        return redirect()->route('dashboard.gelombangdua.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GelombangDua $gelombangDua)
    {
        $gelombangDua->delete();
        return redirect()->route('dashboard.gelombangdua.index');
    }
}
