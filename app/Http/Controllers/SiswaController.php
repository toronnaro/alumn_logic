<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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
        if (!auth()->check() || !auth()->user()->is_admin) {
            abort(403);
        } else {
            return view('dashboard.create');
        }
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
            'nis' => 'required|regex:/^[0-9]+$/|min:3|max:11',
            'nisn' => 'required|regex:/^[0-9]+$/|min:3|max:11',
            'jurusan' => 'required',
            'tahun_masuk' => 'required|digits:4',
            'tahun_keluar' => 'required|digits:4',
            'status' => 'required',
            'nomor_telepon' => 'required|min:3|regex:/^[0-9]+$/|max:13',
            'image' => 'image|file|max:2048'
        ]);

        // Validasi & Penempatan Image Siswa
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('images');
        }

        Siswa::create($validatedData);

        return redirect()->route('siswa.index')->with('success', 'Data Siswa Telah Ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        return view('dashboard.show', [
            'siswa' => $siswa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {

        if (!auth()->check() || !auth()->user()->is_admin) {
            abort(403);
        } else {
            return view('dashboard.edit', [
                'siswa' => $siswa
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        $rules = [
            'nama' => 'required',
            'gender' => 'required',
            'birthplace' => 'required',
            'nis' => 'required|regex:/^[0-9]+$/|min:3|max:11',
            'nisn' => 'required|regex:/^[0-9]+$/|min:3|max:11',
            'jurusan' => 'required',
            'tahun_masuk' => 'required|digits:4',
            'tahun_keluar' => 'required|digits:4',
            'status' => 'required',
            'nomor_telepon' => 'required|regex:/^[0-9]+$/|min:3|max:13',
            'image' => 'image|file|max:2048'
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('images');
        }

        Siswa::where('id', $siswa->id)->update($validatedData);

        return redirect()->route('siswa.index')->with('success', 'Data Siswa Telah Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        if ($siswa->image) {
            Storage::delete($siswa->image);
        }

        Siswa::destroy($siswa->id);

        return redirect()->route('siswa.index')->with('delete', 'Data Siswa Telah Dihapus!');
    }
}
