{{-- @dd($siswas->all()) --}}

@extends('template.main') <!-- menghubungkan ke resources/views/template/main  -->

@section('container')
    <link rel="stylesheet" href="css/dashboard.css">

    <!-- 'section' untuk memanggil si template (yield)  -->
    <h1 class="mb-3 text-center ">Data Alumni</h1>
    <table class="table table-hover text-center">
        <thead>
            <a href="{{ route('siswa.create') }}" class="btn btn-success">Tambah</a>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Gender</th>
                <th scope="col">Tgl Lahir</th>
                <th scope="col">NIS</th>
                <th scope="col">NISN</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Tahun Masuk</th>
                <th scope="col">Tahun Keluar</th>
                <th scope="col">Status</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Opsi</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($siswas as $siswa)
                <!-- 'foreach' digunakan untuk mengulang  -->
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->gender == 'MALE' ? 'Laki-Laki' : 'Perempuan' }}</td>
                    <!-- jika datanya 'M' maka akan tampil 'Laki-Laki', dan jika tidak maka akan tampil 'Perempuan -->
                    <td>{{ $siswa->birthplace }}</td>
                    <td>{{ $siswa->nis }}</td>
                    <td>{{ $siswa->nisn }}</td>
                    <td>{{ $siswa->jurusan }}</td>
                    <td>{{ $siswa->tahun_masuk }}</td>
                    <td>{{ $siswa->tahun_keluar }}</td>
                    <td>{{ $siswa->status }}</td>
                    <td>{{ $siswa->nomor_telepon }}</td>
                    <td>
                        <form action="/siswa/{{ $siswa->id }}" class="d-inline" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="badge bg-danger border-0 p-2" onclick="return confirm('Yoi ga?')">Del</button>
                        </form>
                        <a class="badge bg-warning border-0 p-2" href="{{ route('siswa.edit', $siswa->id) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script src="js/app.js"></script>
@endsection
