<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.data', [
            'siswas' => Siswa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'birthplace' => 'required',
            'nis' => 'required|min:1|max:11',
            'nisn' => 'required|min:1|max:11',
            'jurusan' => 'required',
            'tahun_masuk' => 'required',
            'tahun_keluar' => 'required',
            'status' => 'required',
            'nomor_telepon' => 'required|min:1|max:13'
        ]);

        Siswa::create($validatedData);

        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        return view('dashboard.edit', [
            'siswa' => $siswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'birthplace' => 'required',
            'nis' => 'required|min:1|max:11',
            'nisn' => 'required|min:1|max:11',
            'jurusan' => 'required',
            'tahun_masuk' => 'required',
            'tahun_keluar' => 'required',
            'status' => 'required',
            'nomor_telepon' => 'required|min:1|max:13'
        ]);

        $siswa->update($validatedData);

        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        Siswa::destroy($siswa->id);

        return redirect()->route('siswa.index');
    }
}
