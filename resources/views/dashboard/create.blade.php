@extends('template.main')

@section('container')
    <link rel="stylesheet" href="{{ '/' }}css/dashboard.css">
    <h1 class="text-center">Form Tambah Data</h1>

    <div class="container">
        <form action="{{ route('siswa.store') }}" method="POST" class="col-lg-8">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid
                @enderror"
                    name="nama" required>
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="gender">Gender</label>      
                <select class="form-select" name="gender">
                    <option value="MALE">Male</option>
                    <option value="FEMALE">Female</option>
                </select>
            </div>
            <div class="mb-3 ">
                <label for="birthplace">Tgl Lahir</label>
                <input type="date" class="form-control" name="birthplace" required>
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
                <label for="jurusan">Jurusan</label>
                <select class="form-select" name="jurusan">
                    <option value="RPL">RPL</option>
                    <option value="Jaringan">Jaringan</option>
                    <option value="DKV">DKV</option>
                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tahun_masuk">Tahun Masuk</label>
                <input type="text" class="form-control" name="tahun_masuk" required>
            </div>
            <div class="mb-3">
                <label for="tahun_keluar">Tahun Keluar</label>
                <input type="text" class="form-control" name="tahun_keluar" required>
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
    <script src="{{ '/' }}js/app.js"></script>
@endsection
