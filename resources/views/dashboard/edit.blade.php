@extends('template.main')

@section('container')
    <link rel="stylesheet" href="{{ '/' }}css/dashboard.css">
    <h1 class="text-center">Edit Data Form</h1>

    <div class="container">
        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" class="col-lg-8" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" required
                    value="{{ $siswa->nama }}">
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
            <div class="mb-3">
                <label for="birthplace">Tgl Lahir</label>
                <input type="date" name="birthplace" required value="{{ $siswa->birthplace }}"
                    class="form-control @error('birthplace')
                is-invalid
            @enderror">
                @error('birthplace')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nis" class="form-label">Nis</label>
                <input type="text" class="form-control @error('nis')
                is-invalid
            @enderror"
                    name="nis" value="{{ $siswa->nis }}">
                @error('nis')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nisn" class="form-label">Nisn</label>
                <input type="text" class="form-control @error('nisn')
                is-invalid
            @enderror"
                    name="nisn" required value="{{ $siswa->nisn }}">
                @error('nisn')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select class="form-select" name="jurusan">
                    @if ($siswa->jurusan)
                        <option value="{{ $siswa->jurusan }}" selected>{{ $siswa->jurusan }}</option>
                    @endif
                    <option value="RPL">RPL</option>
                    <option value="Jaringan">Jaringan</option>
                    <option value="DKV">DKV</option>
                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tahun_masuk">Tahun Masuk</label>
                <input type="text" name="tahun_masuk" class="form-control @error('tahun_masuk') is-invalid @enderror"
                    required value="{{ $siswa->tahun_masuk }}">
                @error('tahun_masuk')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tahun_keluar">Tahun Keluar</label>
                <input type="text" class="form-control @error('tahun_keluar') is-invalid @enderror" name="tahun_keluar"
                    required value="{{ $siswa->tahun_keluar }}">
                @error('tahun_keluar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
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
                <input type="text"
                    class="form-control @error('nomor_telepon')
                is-invalid
            @enderror"
                    name="nomor_telepon" required value="{{ $siswa->nomor_telepon }}">
                @error('nomor_telepon')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Foto Siswa</label>
                <input type="hidden" name="oldImage" value="{{ $siswa->image }}">
                @if ($siswa->image)
                    <img src="{{ asset('storage/' . $siswa->image) }}" class="img-preview img-fluid mb-3 col-sm-3 d-block">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-3 d-block">
                @endif
                <img class="img-preview img-fluid mb-3 col-sm-3">
                <input class="form-control @error('image')
                is-invalid
            @enderror" type="file"
                    id="image" name="image" onchange="previewImage()" value="{{ old('image') }}">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>

                <div>
                    <button type="submit" class="btn btn-success">OK</button>
                </div>
        </form>
    </div>
    <script src="{{ '/' }}js/app.js"></script>
    <!-- Preview Image -->
    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(ofREvent) {
                imgPreview.src = ofREvent.target.result;
            }
        }
    </script>
@endsection
