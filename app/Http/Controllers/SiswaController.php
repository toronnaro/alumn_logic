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
    //index berfungsi untuk menampilkan semua data
    public function index()
    {
        return view('dashboard.data', [
            'siswas' => Siswa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    //create berfungsi untuk mengarahkan ke form pembuatan data
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    //store digunakan untuk menambahkan dan menyimpan data
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
    //show digunakan untuk memunculkan data
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    //edit digunakan untuk mengarahkan dan mengatur data
    public function edit(Siswa $siswa)
    {
        return view('dashboard.edit', [
            'siswa' => $siswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    //update digunakan untuk mengubah data
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
    //destroy digunakan untuk menghapus data
    public function destroy(Siswa $siswa)
    {
        Siswa::destroy($siswa->id);

        return redirect()->route('siswa.index');
    }
}
