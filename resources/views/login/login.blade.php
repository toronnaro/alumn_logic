<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ '' }}css/login.css" />
    <title>ALUMNI SMKIT IQIS</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <!-- Form 1 -->
                <form action="/login" method="POST" class="sign-in-form">
                    @csrf
                    <img src="{{ '' }} img/SMKIT IQIS Logo.png" alt="" class="logos">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Email" name="email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" />
                    </div>
                    <input type="submit" class="btn solid" />

                    <p class="social-text">Our Social Media</p>
                    <div class="social-media">
                        <a href="https://www.instagram.com/smkitibnulqayyim/" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/@IQISTV" class="social-icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="https://www.smkit.iqis.sch.id/" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        If you're new here, we recommend registering an account first.
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        <a href="/register">Sign up</a>
                    </button>
                </div>
                <img src="img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        If you are one of us, please log in from here.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <!-- <script src="{{ '' }}js/login.js"></script> -->
</body>

</html>
