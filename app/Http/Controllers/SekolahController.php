<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sekolahs = Sekolah::all();
        return view('sekolah.index', compact('sekolahs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'jenis_sekolah' => 'required',
            'status_sekolah' => 'required',
            'akreditasi' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        Sekolah::create($request->all());
        return redirect()->route('sekolah.index')->with('success', 'Data sekolah berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sekolah $sekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sekolah $sekolah)
    {
        return view('sekolah.edit', compact('sekolah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sekolah $sekolah)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'jenis_sekolah' => 'required',
            'status_sekolah' => 'required',
            'akreditasi' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $sekolah->update($request->all());
        return redirect()->route('sekolah.index')->with('success', 'Data sekolah berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sekolah $sekolah)
    {
        $sekolah->delete();
        return redirect()->route('sekolah.index')->with('success', 'Data sekolah berhasil dihapus.');
    }
}
