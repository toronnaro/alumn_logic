@extends('template.main')

@section('container')
    <h1 class="text-center">Form Tambah Data</h1>

    <div class="container">
        <form action="{{ route('siswa.store') }}" method="POST" class="col-lg-8">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="gender">Gender</label>
                <select class="form-select" name="gender">
                    <option value="MALE">Male</option>
                    <option value="FEMALE">Female</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="birthplace">Tgl Lahir</label>
                <input type="date" name="birthplace" required>
            </div>
            <div class="mb-3">
                <label for="nis" class="form-label">Nis</label>
                <input type="text" class="form-control" name="nis" required>
            </div>
            <div class="mb-3">
                <label for="nisn" class="form-label">Nisn</label>
                <input type="text" class="form-control" name="nisn" required>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" name="jurusan" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_masuk">Tgl Masuk</label>
                <input type="date" name="tanggal_masuk" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_keluar">Tgl Keluar</label>
                <input type="date" name="tanggal_keluar" required>
            </div>
            <div class="mb-3">
                <label for="status">Status</label>
                <select class="form-select" name="status">
                    <option value="Bekerja">Bekerja</option>
                    <option value="Kuliah">Kuliah</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nomor_telepon" class="form-label">No.Telepon</label>
                <input type="text" class="form-control" name="nomor_telepon" required>
            </div>
            <div>
                <button type="submit" class="btn btn-success">OK</button>
            </div>
        </form>
    </div>
@endsection
