@extends('template.main')

@section('container')
    <link rel="stylesheet" href="{{ '/' }}css/dashboard.css">
    <h1 class="ms-5">Data Siswa</h1>

    <div class="container">
        <div class="row my-5">
            <div class="col-md-4">
                @if ($siswa->image)
                    <img class="img-fluid mb-5 ms-5" style="width: 40%; border: black solid 2px"
                        src="{{ asset('storage/' . $siswa->image) }}" alt="{{ $siswa->nama }}">
                @else
                    <img class="img-fluid mb-5 ms-5" style="width: 40%; border: black solid 2px"
                        src="/img/siswa-unknown.png" alt="{{ $siswa->nama }}">
                @endif
            </div>
            <div class="col-md-4">
                <h5 class="mb-3">Nama : {{ $siswa->nama }}</h5>
                <h5 class="mb-3">Jenis Kelamin : {{ $siswa->gender == 'MALE' ? 'Laki-Laki' : 'Perempuan' }}</h5>
                <h5 class="mb-3">Jurusan : {{ $siswa->jurusan }}</h5>
                <h5 class="mb-3">Tahun Masuk : {{ $siswa->tahun_masuk }}</h5>
                <h5>Tahun Keluar : {{ $siswa->tahun_keluar }}</h5>
            </div>
        </div>
    </div>
    <a class="btn btn-primary mt-1 ms-5" href="/siswa">Back</a>
    <script src="js/app.js"></script>
@endsection
