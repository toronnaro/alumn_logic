@extends('template.main')

@section('container')
    <link rel="stylesheet" href="css/style.css">
    <div class="container">
        <div class="forms-container"></div>
        <div class="signin-signup">
            <form action="#" class="sign-in-form">
                <img class="logo" src="img/SMKIT IQIS Logo.png" alt="logo">
                <h2 class="title">WELCOME BACK, STUDENT !</h2>
                <h1000 class="title">Please, sign in to continue</h1000>
                <div class="input-field">
                    <img class="fa-user" src="img/user-solid (2).svg" alt="">
                    <input type="text" placeholder="Enter your username here" />
                </div>
                <div class="input-field">
                    <img class="fa-lock" src="img/lock-solid.svg" alt="">
                    <input type="password" placeholder="Enter Your Password" />
                </div>
                <input type="submit" value="SIGN IN" class="btn solid" />
            </form>
        </div>
    </div>
    </div>
    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
            </div>
            <img src="img/programming-amico.svg" class="image" alt="" />
        </div>
        <div>
            <a href="#" class="guest">
                <img src="img/user-solid (2).svg" height="60px" width="30px " alt="Guest">

            </a>
        </div>
    @endsection
