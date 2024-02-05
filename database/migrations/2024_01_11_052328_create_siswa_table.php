<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->char('nama');
            $table->enum('gender', ['MALE', 'FEMALE']);
            $table->date('birthplace');
            $table->char('nis');
            $table->char('nisn');
            $table->enum('jurusan', ['RPL', 'Jaringan', 'DKV', 'Manajemen Informatika']);
            $table->char('tahun_masuk');
            $table->char('tahun_keluar');
            $table->enum('status', ['Kuliah', 'Bekerja']);
            $table->char('nomor_telepon');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
