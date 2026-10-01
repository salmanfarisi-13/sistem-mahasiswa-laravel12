<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  public function index()
{
    $mahasiswa = Mahasiswa::all();

    return view('mahasiswa.index', compact('mahasiswa'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('mahasiswa.create');
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'npm' => 'required|unique:mahasiswas,npm',
        'jurusan' => 'required',
        'alamat' => 'required',
    ]);

    Mahasiswa::create([
        'nama' => $request->nama,
        'npm' => $request->npm,
        'jurusan' => $request->jurusan,
        'alamat' => $request->alamat,
    ]);

    return redirect()->route('mahasiswa.index');
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
    public function edit($id)
{
    $mahasiswa = Mahasiswa::findOrFail($id);

    return view('mahasiswa.edit', compact('mahasiswa'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required',
        'npm' => 'required',
        'jurusan' => 'required',
        'alamat' => 'required',
    ]);

    $mahasiswa = Mahasiswa::findOrFail($id);

    $mahasiswa->update([
        'nama' => $request->nama,
        'npm' => $request->npm,
        'jurusan' => $request->jurusan,
        'alamat' => $request->alamat,
    ]);

    return redirect()->route('mahasiswa.index');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $mahasiswa = Mahasiswa::findOrFail($id);

    $mahasiswa->delete();

    return redirect()->route('mahasiswa.index');
}
}
