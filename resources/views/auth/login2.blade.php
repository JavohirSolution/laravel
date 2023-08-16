{{-- 
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
                <input type="text" class="form-control" id="username"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
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
                    <i class='bx bxl-twitter'></i>Login with  Twitter
                </a>
                <a href="#" class="google btn d-flex justify-content-center align-items-center">
                    <i class='bx bxl-google' ></i> Login with  Google
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




<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');
    </style>
    </head>
    <body>
        
        <section>
            <div class="left">
                <h1>O'zbekiston Respublikasi <br>
                    Ichki ishlar vazirligi</h1>
                    <img src="/img/brand-logo.png" alt="rasm chiqmadi">
                    <h2>IT_PROGRESS</h2>
            </div>
            <div class="right">
                <div class="">
                    <div class="page">
                        <h3 style="text-align: center;">Tizimga kirish</h3>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="login-input inputs">
                                    <i class='bx bxs-user'></i>
                                    <input id="email" placeholder='Login' type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
                                <div class="password-input inputs">
                                    <i class='bx bxs-lock-alt' ></i>
                                    <input id="password" placeholder='Password' type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                </div>
                                <button>Kirish</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </section>
    </body>
    </html> --> -->

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- main css -->

    <link rel="stylesheet" href="login.css">

    <!-- / main css -->


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>

    <section class="login">

        <div class="container">

             
            <div class="image-left">
                <img src="https://avatars.mds.yandex.net/i?id=f2ba9139770920305825a38d5565c67f1987663a-8082760-images-thumbs&n=13" alt="">
            </div>

            <div class="kabinet-right">
                <h2>Kabinetga kirish!</h2>
                <input type="email" id="input1" class="form-control" id="exampleFormControlInput1" placeholder="Loginingizni yozing">
                <br>
                <input type="email" id="input2" class="form-control" id="exampleFormControlInput1" placeholder="Parolingizni yozing">
                <br>
                <div class="eslab-qol-party">
                  <input type="checkbox" id="inp-check" >
                  <p>Meni eslab qol?</p>
                </div>
                <button class="btn-btn-party">Kirish</button>

            </div>

        </div>

        <a href="" class="pastki-qism">
            <i class='bx bx-left-arrow-alt'></i>
            <h1>Bosh sahifaga qaytish</h1>  
        </a>

    </section>
    
</body>
</html> --}}
