<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT-PROGRESS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <link href="salom/dist/img/IT-park.jpg" rel="icon">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" href="welcome.css">






    <link href="Arsha/Arsha/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">






    <style>
        #one234 {
            width: 100%;
        }
    </style>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>

<body>

    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto salom234-hello"><a href="">IT PROGRESS</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About us</a></li>
                    <li><a class="nav-link scrollto" href="#project">Our projects</a></li>
                    <li><a class="nav-link scrollto" href="#servise">Our services</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>

                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

                    <li>
                        <a class="login-link logen" style="display:none" href="{{ route('login') }}">Login</a>


                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->


    <script>
        document.addEventListener('keyup', (e) => {
            if (e.key == 'a' && e.altKey) {
                var logen = document.querySelector('.logen')
                logen.style.display = 'block'
            }
            if (e.key == 's' && e.altKey) {
                var logen = document.querySelector('.logen')
                logen.style.display = 'none'
            }
        })
    </script>
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Let's develop together in the digital world!</h1>
                    <h2>Do you want a professional who is a master of his craft to call you?</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#contact" class="btn-get-started scrollto">Send a message</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="Arsha/Arsha/assets/img/hero-img.png" width="80%" class="img-fluid animated"
                        alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->
    <!-- <section id='home'>
                    <div class="row">

                        <div class="lets-dev">
                            <div class="develop" data-aos="fade-up"  data-aos-duration="3000">
                                <h1>Let's develop together in the digital world!</h1>
                                <h2>Do you want a professional who is a master of his craft to call you?</h2>
                                <button class="dev-btn"><span> Send a message</span></button>
                            </div>
                            <div class="image-t" data-aos="fade-left"
                            data-aos-delay="200">
                                <img src="salom/docs/assets/img/hero-img.png" alt="">
                            </div>

                        </div>
                    </div>

                    </section> -->

    <!-- About part  -->

    <section id="about" class="about">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>About Us</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                    <p>
                        IT PROGRESS SOFTWARE programming company started its work on June 22, 2021. Providing technical
                        assistance in the use of technical tools, creation of websites, as well as development and
                        acceleration of information portals and web resources; Formation of a "digital and information
                        society" in order to ensure the openness of the activities of state bodies and other
                        organizations.
                    </p>

                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <p>
                        In the field of information and telecommunications, it prepares proposals for draft laws and
                        regulatory documents,
                        draft technical conditions, licensing and regulatory norms and rules, and participates in their
                        development. At the same time,
                        the Center provides information and
                        communication to state and economic administration, local state authorities, other organizations
                        and agencies. </p>
                    <a href="/about" class="btn-about">Learn more</a>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->



    <!-- count part -->

    <section id="counts" class="counts">
        <div class="container">

            <div class="row">
                <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start"
                    data-aos="fade-right" data-aos-delay="150">
                    <img src="salom/docs/assets/img/why-us.png" width="100%" class="rasm-chiq-asrta"
                        alt="rasm chiq">
                </div>

                <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left"
                    data-aos-delay="300">
                    <div class="content d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-emoji-smile"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="65"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>Customers</strong> number of all Customers.</p>
                                </div>
                            </div>

                            <div class="col-md-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-journal-richtext"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="{{ $family }}"
                                        data-purecounter-duration="1" class="purecounter">{{ $family }}</span>
                                    <p><strong>Employees</strong> number of all employees</p>
                                </div>
                            </div>

                            <div class="col-md-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-clock"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="18"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>Projects</strong>all completed projects</p>
                                </div>
                            </div>

                            <div class="col-md-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-award"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="15"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>Most</strong>good staff</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End Counts Section -->



    <!-- project -->

    <section id="project">
        <div class="container">


            <div class="name-of-project" data-aos="fade-up" data-aos-duration="3000">
                <h1 class="logo-of-pro">PROJECT</h1>
            </div>

            <div class="row class-34ff" data-aos="fade-up" data-aos-duration="3000">

                <div class="all-div">
                    <a href="https://ekosfera.uz">
                        <div class="image-of-pro">
                            <img src="salom/dist/img/ekosfera.jpg" alt="">
                        </div>
                    </a>
                    <div class="izoh-of-page">
                        <span class="label-n">Project Name:</span> "Ekosfera"
                    </div>
                    <a class="link-of-pro" href="https://ekosfera.uz">Link</a>
                </div>
                <div class="all-div">
                    <a href="https://it-progress.uz">
                        <div class="image-of-pro">
                            <img src="salom/dist/img/e-kontec t.jpg" alt="">
                        </div>
                    </a>
                    <div class="izoh-of-page">
                        <span class="label-n">Project Name:</span>"E-inspektorpsixolog"
                    </div>
                    <a class="link-of-pro" href="https://it-progress.uz">Link</a>
                </div>
                <div class="all-div">
                    <a href="https://baxmalakm.uz">
                        <div class="image-of-pro">
                            <img src="salom/dist/img/baxmal.jpg" alt="">
                        </div>

                    </a>
                    <div class="izoh-of-page">
                        <span class="label-n">Project Name:</span>"Baxmalakm.uz"
                    </div>
                    <a class="link-of-pro" href="https://baxmalakm.uz">Link</a>
                </div>

            </div>

        </div>
    </section>

    <!-- as123456#.3541AA -->





    <!-- end project -->



    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Team</h2>
                <p>Here are the best employees of our team</p>
            </div>

            <div class="row">
                @foreach ($gal as $dd)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="/file/{{ $dd->image }}"class="img-fluid" id="one234" target="_blank"
                                    alt="">

                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>{{ $dd->name }}</h4>
                                <span>{{ $dd->who }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach







            </div>

        </div>
    </section><!-- End Team Section -->















    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>COMMUNICATION CENTER</h2>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-about">
                        <h3>Connection</h3>
                        <p>If you want to develop the digital world with us, contact us!</p>
                        <div class="social-links">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="info">
                        <div>
                            <i class="ri-map-pin-line"></i>
                            <p> Jizzakh region, Jizzakh city<br>Sh.Rashidov Street, 64</p>
                        </div>

                        <div>
                            <i class="ri-mail-send-line"></i>
                            <p>info@example.com</p>
                        </div>

                        <div>
                            <i class="ri-phone-line"></i>
                            <p>+998 94 344 19 29</p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
                    {{-- class="php-email-form" --}}
                    <form action="/xabar" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control mb-3" id="name"
                                placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control mb-3" name="email" id="email"
                                placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control mb-3" name="subject" id="subject"
                                placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control mb-3" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>


                        <h1>{{ session('status') }}</h1>
                        <button class="btn-sent">Send Message</button>

                    </form>
                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Section -->





    <!-- Script qismi -->

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="Arsha/Arsha/assets/js/main.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="salom2/assets/js/main.js"></script>

    <script src="Arsha/Arsha/assets/vendor/aos/aos.js"></script>
    <script src="Arsha/Arsha/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Arsha/Arsha/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="Arsha/Arsha/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="Arsha/Arsha/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="Arsha/Arsha/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="Arsha/Arsha/assets/vendor/php-email-form/validate.js"></script>
</body>

</html>
