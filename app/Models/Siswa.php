<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = [ // untuk apa saja yang diisi
        'nama',
        'gender',
        'birthplace',
        'nis',
        'nisn',
        'jurusan',
        'tanggal_masuk',
        'tanggal_keluar',
        'status',
        'nomor_telepon'
    ];
}
