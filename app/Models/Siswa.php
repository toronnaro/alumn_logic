<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = [
        'nama',
        'gender',
        'birthplace',
        'nis',
        'nisn',
        'jurusan',
        'tahun_masuk',
        'tahun_keluar',
        'status',
        'nomor_telepon',
        'image'
    ];
}
