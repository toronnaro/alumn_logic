@extends('template.main')

@section('container')
    <link rel="stylesheet" href="css/dashboard.css">

    <main>
        <h1>Welcome Back {{ auth()->user()->name }}</h1>
        <!-- <p class="text"> -->
            <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur animi voluptatibus cum maxime distinctio -->
            <!-- iste quod deleniti eius, autem voluptates cumque suscipit iure quasi eligendi ullam. Sapiente eligendi porro -->
            <!-- reprehenderit corrupti error facilis quo, fugiat fugit? Maiores aliquam ad, molestiae iste nihil, commodi -->
            <!-- doloremque tempore excepturi aut id ducimus unde? -->
        <!-- </p> -->
        <div class="container-fluid px-5 py-5 max-width-div">
            <div class="row">
                <div class="col-lg-3">
                    <img src="{{ '/' }}img/brosur2.jpg" class="ms-1 me-5 img-fluid" alt="" style="{">
                </div>
                <div class="col-lg-3">
                    <img src="{{ '/' }}img/brosur.jpg" class="ms-1 me-5 img-fluid" alt="" style="{">
                </div>
                <div class="col-lg-3">
                     <img src="{{ '/' }}img/brosur3.jpg" class="ms-1 me-5 img-fluid" alt="" style="{">
                </div>
            </div>

        </div>
    </main>
    <script src="js/app.js"></script>
@endsection
