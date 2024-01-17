@extends('template.main') <!-- menghubungkan ke resources/views/template/main  -->

@section('container')
    <!-- 'section' untuk memanggil si template (yield)  -->
    <h1 class="mb-3 text-center ">Data Alumni</h1>
    <table class="table table-hover">
        <thead>
            <a href="{{ route('siswa.create') }}" class="btn btn-success">Tambah</a>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Gender</th>
                <th scope="col">Birthplace</th>
                <th scope="col">NIS</th>
                <th scope="col">NISN</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Tanggal Keluar</th>
                <th scope="col">Status</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Del</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($siswas as $siswa)
                <!-- 'foreach' digunakan untuk mengulang  -->
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->gender == 'MALE' ? 'Laki-Laki' : 'Perempuan' }}</td>
                    <!-- jika datanya 'M' maka tampil 'Laki-Laki', jika tidak maka tampil 'Perempuan -->
                    <td>{{ $siswa->birthplace }}</td>
                    <td>{{ $siswa->nis }}</td>
                    <td>{{ $siswa->nisn }}</td>
                    <td>{{ $siswa->jurusan }}</td>
                    <td>{{ $siswa->tanggal_masuk }}</td>
                    <td>{{ $siswa->tanggal_keluar }}</td>
                    <td>{{ $siswa->status == 'Bekerja' ? 'Bekerja' : 'Kuliah' }}</td>
                    <td>{{ $siswa->nomor_telepon }}</td>
                    <td>
                        <form action="/siswa/{{ $siswa->id }}" class="d-inline" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="badge bg-danger border-0 p-2">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
