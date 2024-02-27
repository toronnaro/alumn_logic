@extends('template.main')

@section('container')
    <link rel="stylesheet" href="{{ '/' }}css/dashboard.css">
    <h1 class="text-center fw-bold">Data Guru</h1>

    <table class="table table-hover text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Mapel</th>
                <th scope="col">NIY</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gurus as $guru)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $guru->nama }}</td>
                    <td>{{ $guru->mapel }}</td>
                    <td>{{ $guru->niy }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="{{ '/' }}js/app.js"></script>
@endsection
