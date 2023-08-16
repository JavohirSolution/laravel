<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT-PROGRESS</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="salom/dist/img/IT-park.jpg" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="welcome.css">
    

   

    <link href="Arsha/Arsha/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">






    <style>
        #one234{
            width:100%;
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
            <a class="login-link logen" style="display:none" href="{{ route('login') }}" >Login</a>
            

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->        


<!--    
        <header>
            <nav>
                <h1 class="logo"> <a href="/" id="title-son-ikki">IT PROGRESS</a></h1>
                <ul class="navigation">
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#about">About us</a></li>
                    <li><a href="#project">Our projects</a></li>
                    <li><a href="#servise">Our services</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li>
                        <a class="login-link logen" style="display:none" href="{{ route('login') }}" >Login</a>
                        <a class="login-link logen" href="{{ route('register') }}" style="display:none" >Login</a>
                    </li>
                </ul>
            </nav>
        </header>
      -->
        <script> 
                document.addEventListener('keyup', (e) =>{
                if (e.key == 'a' && e.altKey){
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
                    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Let's develop together in the digital world!</h1>
                    <h2>Do you want a professional who is a master of his craft to call you?</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#contact" class="btn-get-started scrollto">Send a message</a>
                    </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="Arsha/Arsha/assets/img/hero-img.png" width="80%" class="img-fluid animated" alt="">
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

    <section id="about">
   
        <div class="conatainer">
            <div class="section-title" data-aos="fade-up" data-aos-duration="1000">
                <h2>ABOUT US</h2>
            </div>

            <div class="row">
                <div class="left-about" data-aos="fade-up" data-aos-duration="2000"> 
                    <p>IT PROGRESS SOFTWARE programming company started its work on June 22, 2021. Providing technical assistance in the use of technical tools, creation of websites, as well as development and acceleration of information portals and web resources; Formation of a "digital and information society" in order to ensure the openness of the activities of state bodies and other organizations.</p>
                </div>

                <div class="right-about" data-aos="fade-up" data-aos-duration="3000">
                    <p>In the field of information and telecommunications, it prepares proposals for draft laws and regulatory documents, draft technical conditions, licensing and regulatory norms and rules, and participates in their development. At the same time, the Center provides information and communication to state and economic administration, local state authorities, other organizations and agencies.</p>
                    <a href="/about" class="btn-about">Learn more</a>
                </div>  
                
            </div>
        
        </div>
    </section>

    <!-- count part -->

    <section id="count">
         <div class="row">

            <div class="count-column">
                <div class="count-image" data-aos="fade-right" data-aos-duration="3000">
                    <img src="salom/docs/assets/img/why-us.png" class="rasm-chiq-asrta" alt="rasm chiq">
                </div>

                <div class="customs-A" data-aos="fade-left" data-aos-duration="3000">
                    <div class="column">
                        <i class='bx bx-smile'></i><span></span>
                        <p><span>Customers</span> number of all Customers</p>
                    </div>
                    <div class="column">
                        <i class='bx bxs-user'></i><span style="font-size:50px">{{$family}}</span>
                        <p> <span>Employees</span> number of all employees</p>
                    </div>
                    <div class="column">
                        <i class='bx bx-terminal'></i><span  style="font-size:50px">4</span>
                        <p> <span>Projects</span> all completed projects</p>
                    </div>
                    <div class="column">
                        <i class='bx bxs-award' ></i><span></span>
                        <p><span>Most</span>  good staff</p>
                    </div>

                </div>

            </div>
         </div>
        
    </section>
    <!-- Ssfef121A.,012Sf# -->

    <!-- end count part -->

    <!-- project -->

     <section id="project">
        <div class="container">

       
            <div class="name-of-project" data-aos="fade-up" data-aos-duration="3000">
                <h1 class="logo-of-pro">PROJECT</h1>
            </div>

            <div class="row class-34ff" data-aos="fade-up" data-aos-duration="3000">

                <div class="all-div" >
                    <a href="https://ekosfera.uz">
                        <div class="image-of-pro">
                            <img src="salom/dist/img/ekosfera.jpg" alt="">
                        </div>
                    </a>
                    <div class="izoh-of-page">
                        <span class="label-n">Project Name:</span>  "Ekosfera"  
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


    <!-- team -->
    <section id="team" class="team section-bg">
   <!-- Button trigger modal -->
     
       

        <!-- Modal -->
      
        
        <!-- Modal -->
      

        <div class="conatainer">
            <div class="section-title-team" data-aos="fade-right" data-aos-duration="3000"  style="margin: 0 200px">
                <h2 class="h2-team">TEAM</h2>
                <h3>Here are the best employees of our team</h3>
            </div>
        </div>

            <div class="row">    
                <div class="container">

                    @foreach($gal as $dd)
                        
                         <div class="team-col" data-aos="fade-up" data-aos-duration="3000">
                             <div class="team-image">
                                 <a href=""  data-bs-toggle="modal" data-bs-target="#exampleModal{{$dd->id}}">
                                     <i class='bx bx-plus-circle'></i>
                                 </a>
                             </div>
                             <div class="team-izoh">
                                 <h2>{{$dd->name}}</h2>
                                 <h4 style="font-weight:1">{{$dd->who}}</h4>
                             </div>
                         </div>
                    <div class="modal fade" id="exampleModal{{$dd->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <a href="/file/{{$dd->image}}" target="_blank">
                                <img src="/file/{{$dd->image}}"  id="one234" target="_blank" alt="">
                            </a> 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    @endforeach
                    
                    
                
            </div>
        </div>

      </div>

    </section>
    <!-- end team -->

    <!-- contact -->
    <section id="contact">
       
 <h1 class="logo-cont"  data-aos="fade-up" data-aos-duration="3000" >COMMUNICATION CENTER</h1>       
        <div class="contact-all"  data-aos="fade-up" data-aos-duration="1                                                                                                                                                           000">

        <div class="contact-servise">
            

        </div>


            <div class="row12">
                
        
                <div class="connection" >
                    <h1>Connection</h1> 
                    <p>If you want to develop the digital world with us, contact us!</p>
                    <i class='bx bxl-telegram'></i>
                    <i class='bx bxl-youtube' ></i>
                    <i class='bx bxl-instagram' ></i>
                    <i class='bx bxl-linkedin-square'></i>
                </div>

                <div class="place" > 
                    <p><i class='bx bxs-location-plus'></i>
                        Jizzakh region, Jizzakh city
                        Sh.Rashidov Street, 64
                    </p>
                    <p><i class='bx bx-envelope' ></i>info@itprogress.com</p>
                    <p><i class='bx bxs-phone' ></i>+998 94 344 19 29</p>
                </div>
            </div>

                <form action="/xabar" method='post'>
                  @csrf
                    <div class="sent-email" >
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1"  name="name" placeholder="Ism">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control"   id="exampleFormControlInput1" name="email" placeholder="Your email">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="subject" id="exampleFormControlInput1" placeholder="Subject">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Subject">
                        </div>
                         <textarea class="form-control" name="message" id="exampleFormControlTextarea1" style="font-size:20px;" placeholder="message" cols="30" rows="10"></textarea>
                        <br>

                           
                            <button class="btn-sent">Send a message</button>
                    </div>  
                </form>
        </div>

    </section>

                <!-- end contact -->



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



