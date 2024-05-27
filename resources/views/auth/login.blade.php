<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!--<title> Login and Registration Form in HTML & CSS | CodingLab </title>-->
    <link rel="stylesheet" href="css/stylelogin.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/tah.png" type="">

    <title> Direktori PT-Login</title>
</head>

<body>
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="images/hal.jpg" alt="">
                <div class="text">
                    <span class="text-1">Direktori Guru Besar<br> LLDIKTI WIlayah 4</span>
                    <span class="text-2">Silahkan masukkan akun</span>
                </div>
            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login</div>
                    <!-- Menampilkan error messages di sini -->
                    @if (\Session::has('message'))
                        <div class="alert alert-danger">
                            {{ \Session::get('message') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="text" placeholder="Enter your username or email" id="login"
                                    name="login" required autofocus>
                                @if ($errors->has('login'))
                                    <span class="text-danger">{{ $errors->first('login') }}</span>
                                @endif
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Enter your password" id="password" name="password"
                                    required>
                            </div>
                            <div class="button input-box">
                                <input type="submit" value="Sign In">
                            </div>
                            <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup
                                    now</label></div>
                        </div>
                    </form>
                </div>



                <div class="signup-form">
                    <div class="title">Sign Up</div>
                    <!-- Menampilkan error messages di sini -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="Enter your name" id="name" class="form-control"
                                    name="name" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="input-box">
                                <i class="fas fa-user-circle"></i>
                                <input type="text" placeholder="Enter your username" id="username"
                                    class="form-control" name="username" required>
                                @if ($errors->has('username'))
                                    <span class="text-danger">{{ $errors->first('username') }}</span>
                                @endif
                            </div>
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="email" placeholder="Enter your email" id="email_address"
                                    class="form-control" name="email" required>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Enter your password" id="password"
                                    class="form-control" name="password" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Confirm your password" id="password_confirmation"
                                    class="form-control" name="password_confirmation" required>
                            </div>
                            <div class="button input-box">
                                <input type="submit" value="Sign Up">
                            </div>
                            <div class="text sign-up-text">Already have an account? <label for="flip">Login
                                    now</label></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
    window.onload = function() {
        var errorsExist = @json($errors->any());
        if (errorsExist) {
            document.getElementById('flip').checked = true;
        }
    };
    </script>
</body>

</html>
