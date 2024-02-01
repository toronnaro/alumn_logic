@extends('template.main')

@section('container')
    <link rel="stylesheet" href="{{ '/' }}css/dashboard.css">

    <main>
        <h1>About IQIS</h1>
         {{-- maps iqis --}}
            <iframe
            width="1200" 
            height="600" 
            title="Internal Content" 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.0598640572216!2d119.5122935!3d-5.0940236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefb879f7636e7%3A0xa195cc00d794c676!2sSMPIT-SMKIT%20Ibnul%20Qayyim%20Makassar!5e0!3m2!1sid!2sid!4v1706766463018!5m2!1sid!2sid"></iframe>
    </main>
    <script src="{{ '/' }}js/app.js"></script>
@endsection
