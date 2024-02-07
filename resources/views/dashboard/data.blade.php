@extends('template.main')

@section('container')
    <link rel="stylesheet" href="{{ '/' }}css/dashboard.css">

    <style>
        .button {
            position: relative;
            width: 150px;
            height: 40px;
            cursor: pointer;
            display: flex;
            align-items: center;
            border: 1px solid #34974d;
            background-color: #3aa856;
            margin-bottom: 1.4rem;
        }

        .button,
        .button__icon,
        .button__text {
            transition: all 0.3s;
        }

        .button .button__text {
            transform: translateX(30px);
            color: #fff;
            font-weight: 600;
        }

        .button .button__icon {
            position: absolute;
            transform: translateX(109px);
            height: 100%;
            width: 39px;
            background-color: #34974d;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .button .svg {
            width: 30px;
            stroke: #fff;
        }

        .button:hover {
            background: #34974d;
        }

        .button:hover .button__text {
            color: transparent;
        }

        .button:hover .button__icon {
            width: 148px;
            transform: translateX(0);
        }

        .button:active .button__icon {
            background-color: #2e8644;
        }

        .button:active {
            border: 1px solid #2e8644;
        }
    </style>

    <h1 class="mb-3 text-center ">Data Alumni</h1>
    @can('admin')
        <a href="{{ route('siswa.create') }}" class="button">

            <span class="button__text">Tambah</span>
            <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24" fill="none"
                    class="svg">
                    <line y2="19" y1="5" x2="12" x1="12"></line>
                    <line y2="12" y1="12" x2="19" x1="5"></line>
                </svg></span>

        </a>
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
                            <a class="badge bg-primary border-0 p-2" href="/siswa/{{ $siswa->id }}"><i
                                    class="bx bx-show"></i></a>
                            <a class="badge bg-warning border-0 p-2" href="{{ route('siswa.edit', $siswa->id) }}"><i
                                    class="bx bx-edit-alt"></i></a>
                            <form action="/siswa/{{ $siswa->id }}" class="d-inline" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="badge bg-danger border-0 p-2"
                                    onclick="return confirm('Anda yakin ingin menghapusnya?')"><i
                                        class="bx bx-trash"></i></button>
                            </form>
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
                <div class="col-lg-3 mb-3">
                    <div class="card width-siswa imagee-container">
                        @if ($siswa->image)
                            <div class="imagee"><img src="{{ asset('storage/' . $siswa->image) }}" class="card-img-top"
                                    alt="{{ $siswa->nama }}"></div>
                        @else
                            <img src="/img/siswa-unknown.png" class="card-img-top" alt="{{ $siswa->nama }}">
                        @endif
                        <div class="card-body">
                            <h6 class="card-title">{{ $siswa->nama }}</h6>
                            <p class="card-text">{{ $siswa->jurusan }}</p>

                            <a class="badge bg-primary border-0 p-2" href="{{ route('siswa.show', $siswa->id) }}"><i
                                    class="bx bx-show"></i></a>
                            @can('admin')
                                <a class="badge bg-warning border-0 p-2" href="{{ route('siswa.edit', $siswa->id) }}"><i
                                        class="bx bx-edit-alt"></i></a>
                                <form action="/siswa/{{ $siswa->id }}" class="d-inline" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="badge bg-danger border-0 p-2"
                                        onclick="return confirm('Anda yakin ingin menghapusnya?')"><i
                                            class="bx bx-trash"></i></button>
                                </form>
                            @endcan
                        </div>
                        <div class="popup-imagee">
                            <span>&times;</span>
                            <img src="{{ asset('storage/' . $siswa->image) }}" alt="{{ $siswa->nama }}">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- Card End --}}

    <script src="js/app.js"></script>
    <script>
        document.querySelectorAll('.imagee-container img').forEach(image => {
            image.onclick = () => {
                document.querySelector('.popup-imagee').style.display = 'block';
                document.querySelector('.popup-imagee img').src = image.getAttribute('src');
            }
        });

        document.querySelector('.popup-imagee span').onclick = () => {
            document.querySelector('.popup-imagee').style.display = 'none';
        }
    </script>
@endsection
