@extends('template.main')

@section('container')
    <link rel="stylesheet" href="{{ '/' }}css/dashboard.css">

    <h1 class="mb-3 text-center ">Data Alumni</h1>
    <table class="table table-hover text-center">
        <thead>
            <a href="{{ route('siswa.create') }}" class="btn btn-success mb-3">Tambah</a>
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
                            <button class="badge bg-danger border-0 p-2" onclick="return confirm('Anda yakin ingin mengapusnya?')">Del</button>
                        </form>
                        <a class="badge bg-warning border-0 p-2" href="{{ route('siswa.edit', $siswa->id) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script src="js/app.js"></script>
@endsection
