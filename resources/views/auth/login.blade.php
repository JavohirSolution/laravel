<!--

<!doctype html>
<html lang="en">
  <head>
     <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="fonts/icomoon/style.css">

<link rel="stylesheet" href="login-form-click/css/owl.carousel.min.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="login-form-click/css/bootstrap.min.css">

<!-- Style -->
<link rel="stylesheet" href="login-form-click/css/style.css">

<title>Login</title>
</head>

<body>


    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('login-form-click/images/bg_1.jpg');"></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <div class="mb-4">
                            <h3>Sign In</h3>
                            <p class="mb-4">Kirish uchun login kiriting!</p>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group first">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                    <input type="checkbox" checked="checked" />
                                    <div class="control__indicator"></div>
                                </label>
                            </div>

                            <input type="submit" value="Log In" class="btn btn-block btn-primary">

                            <span class="d-block text-center my-4 text-muted">&mdash; or &mdash;</span>

                            <div class="social-login">
                                <a href="" class="facebook btn d-flex justify-content-center align-items-center">
                                    <i class='bx bxl-facebook'></i> Login with Facebook
                                </a>
                                <a href="#" class="twitter btn d-flex justify-content-center align-items-center">
                                    <i class='bx bxl-twitter'></i>Login with Twitter
                                </a>
                                <a href="#" class="google btn d-flex justify-content-center align-items-center">
                                    <i class='bx bxl-google'></i> Login with Google
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <script src="login-form-click/js/jquery-3.3.1.min.js"></script>
    <script src="login-form-click/js/popper.min.js"></script>
    <script src="login-form-click/js/bootstrap.min.js"></script>
    <script src="login-form-click/js/main.js"></script>
</body>

</html>
