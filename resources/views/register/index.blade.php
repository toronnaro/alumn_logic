<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ '' }}css/login.css" />
    <title>Sign in & Sign up Form</title>
</head>

<body>
    <!-- Form 2 -->
    <form action="/register" method="POST">
        @csrf
        <h2 class="title">Sign up</h2>
        <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Name" name="name" />
        </div>
        <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="username" />
        </div>
        <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="email" />
        </div>
        <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" />
        </div>
        <button type="submit">SIGN UP</button>
    </form>



    <script src="{{ '' }}js/login.js"></script>
</body>

</html>
