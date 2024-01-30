@extends('template.main')

@section('container')
    <link rel="stylesheet" href="css/dashboard.css">

    <main>
        <h1>Welcome Back {{ auth()->user()->name }}</h1>
        <p class="text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur animi voluptatibus cum maxime distinctio
            iste quod deleniti eius, autem voluptates cumque suscipit iure quasi eligendi ullam. Sapiente eligendi porro
            reprehenderit corrupti error facilis quo, fugiat fugit? Maiores aliquam ad, molestiae iste nihil, commodi
            doloremque tempore excepturi aut id ducimus unde?
        </p>
    </main>
    <script src="js/app.js"></script>
@endsection
