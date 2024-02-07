@extends('template.main')

@section('container')
    <link rel="stylesheet" href="{{ '/' }}css/dashboard.css">

    <h1 class="mb-3 text-center ">Data Alumni</h1>
    @can('admin')
        <a href="{{ route('siswa.create') }}" class="btn btn-success mb-3 ms-3">Tambah</a>
    @endcan
    {{-- Tabel Start --}}
    @can('admin')
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Gender</th>
                    <th scope="col">NIS</th>
                    <th scope="col">NISN</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Opsi</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($siswas as $siswa)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->gender == 'MALE' ? 'Laki-Laki' : 'Perempuan' }}</td>
                        <td>{{ $siswa->nis }}</td>
                        <td>{{ $siswa->nisn }}</td>
                        <td>{{ $siswa->jurusan }}</td>
                        <td>
                            <form action="/siswa/{{ $siswa->id }}" class="d-inline" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="badge bg-danger border-0 p-2"
                                    onclick="return confirm('Anda yakin ingin menghapusnya?')">Del</button>
                            </form>
                            <a class="badge bg-warning border-0 p-2" href="{{ route('siswa.edit', $siswa->id) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endcan
    {{-- Tabel End --}}


    {{-- Card Start --}}
    <div class="container ">
        <div class="row ">
            @foreach ($siswas as $siswa)
                <div class="col-sm-3 mb-5">
                    <div class="card width-siswa">
                        @if ($siswa->image)
                            <img src="{{ asset('storage/' . $siswa->image) }}" class="card-img-top"
                                alt="{{ $siswa->nama }}">
                        @else
                            <img src="/img/siswa-unknown.png" class="card-img-top" alt="{{ $siswa->nama }}">
                        @endif
                        <div class="card-body">
                            <h6 class="card-title">{{ $siswa->nama }}</h6>
                            <p class="card-text">{{ $siswa->jurusan }}</p>

                            <a class="badge bg-primary border-0 p-2" href="/siswa/{{ $siswa->id }}">Show More</a>
                            @can('admin')
                                <form action="/siswa/{{ $siswa->id }}" class="d-inline" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="badge bg-danger border-0 p-2"
                                        onclick="return confirm('Anda yakin ingin menghapusnya?')">Del</button>
                                </form>
                                <a class="badge bg-warning border-0 p-2" href="{{ route('siswa.edit', $siswa->id) }}">Edit</a>
                            @endcan
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- Card End --}}

    <script src="js/app.js"></script>
@endsection
