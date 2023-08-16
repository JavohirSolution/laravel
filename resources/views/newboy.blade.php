<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> My Profile</title>
  <link href="salom/dist/img/IT-park.jpg" rel="icon">

  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <style>
      .dropdown-item-salom{
      padding:15px 20px;
      font-size:20px;
      display:flex;
      background:#3498db;
      color:white;
    }
    .yurbtn-clasws{
       width: 200px;
       border: 5px solid grey;
       padding: 5px; 
       border-radius: 50px;    
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="salom/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="salom/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
  @if (Auth::user()->admin == 1)
      
  
<div class="wrapper">


   <!-- Preloader -->
   <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="salom/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>







  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
   
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">{{$kur}}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            @foreach($wet as $dd)
            <div class="media">
              <img src="salom/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  {{$dd->name}}
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">{{$dd->message}}</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            @endforeach
            <!-- Message End -->
          </a>
         
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">{{$ilm}}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">{{$ilm}} Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="/student" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> {{$kur}} new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="/newboy" class="dropdown-item">
            <i class="fas fa-users mr-2"></i>{{$who}} friends
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
       
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        </a>
      </li>
      <!-- <li>
            <a class="dropdown-item-salom" href="{{ route('logout') }}"
            
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                <i class='bx bx-exit' style="font-size:22px; margin-top:5px"></i>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
      </li> -->
    
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="salom/dist/img/IT-park.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/" class="d-block">IT PROGRESS</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
           
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="/newboy" class="nav-link active">
                <img src="salom/dist/img/user8-128x128.jpg"  width="20" alt="">

                  <p>Portfolio </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/home" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/gallery" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Team</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/video" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Video Darslar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./student" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Xabarlar</p>
                </a>
              </li>
              <li> 
                        <a class="dropdown-item-salom" href="{{ route('logout') }}"
                        
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            <i class='bx bx-exit' style="font-size:22px; margin-top:5px"></i>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
              </li>
            </ul>
          </li>
        </ul>
    </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  
  <a href="/export" class="btn btn-success m-3">Export</a>
  <a href="/importExportView" class="btn btn-success">Import</a>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
     

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="salom/dist/img/user8-128x128.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Admin</h3>

                <p class="text-muted text-center">Software Engineer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  Uzbekistan in IT-PARK center of Jizzakh,
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Uzbakistan</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">Frontend,</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP,</span>
                  <span class="tag tag-warning">Mysql,</span>
                  <span class="tag tag-warning">PHP,</span>
                  <span class="tag tag-warning">LARAVEL 7v,</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">I am Full Stack  and React js developer</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                  @if (Auth::User()->admin == 1)
                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Edit</a></li>
                  @endif
                </ul>
              </div>
          <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    
                    <!-- /.post -->
                      <div class="container" >
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="box-shadow-full">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                      <div class="about-img">
                                        <img src="salom/dist/img/user8-128x128.jpg" class="img-fluid yurbtn-clasws rounded b-shadow-a" alt="">
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-7">
                                      <div class="about-info">
                                        @foreach($user as $dd)
                                        <p><span class="title-s">Name: </span><span>{{$dd->name}}</span></p>
                                        <p><span class="title-s">Company: </span> <span>{{$dd->company}}</span></p>
                                        <p><span class="title-s">Job: </span> <span>{{$dd->job}}</span></p>
                                        <p><span class="title-s">Country: </span> <span>{{$dd->country}}</span></p>
                                        <p><span class="title-s">Address: </span> <span>{{$dd->address}}</span></p>
                                        <p><span class="title-s">Phone: </span> <span>{{$dd->phone}}</span></p>
                                        <p><span class="title-s">Email: </span> <span>{{$dd->email}}</span></p>
                                       
                                        @endforeach




                                      </div>
                                    </div>
                                  </div>
                                  <div class="skill-mf">
                                    <p class="title-s">Skill</p>
                                    <span>HTML</span> <span class="pull-right">85%</span>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>CSS3</span> <span class="pull-right">90%</span>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>PHP</span> <span class="pull-right">50%</span>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>JAVASCRIPT</span> <span class="pull-right">80%</span>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>LARAVEL</span> <span class="pull-right">90%</span>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="about-me pt-4 pt-md-0">
                                    <div class="title-box-2">
                                      <h5 class="title-left">
                                        About me
                                      </h5>
                                    </div>
                                    <p class="lead">
                                    My name is Javohir. I was born in Uzbekistan. I still live in Uzbekistan.
                                    I have been learning programming for half a year,<br>
                                    I have two years of experience
                                    </p>
                                    <p class="lead">
                                    
                                    </p>
                                    <p class="lead">  
                                    
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                          
                    </div>

                    
                  
                  <!--Edit  /.tab-pane -->
                  @if (Auth::User()->admin == 1)
                      
                 <div class="tab-pane" id="settings">
                    <form action="/Userprofile/{{$dd->id}}" method="post">
                      @csrf
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" name="name" value="{{$dd->name}}"  class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Company</label>
                        <div class="col-sm-10">
                          <input type="text" name="company" value="{{$dd->company}}" class="form-control" id="inputName" placeholder="Company">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Job</label>
                        <div class="col-sm-10">
                          <input type="text" name="job" value="{{$dd->job}}" class="form-control" id="inputName" placeholder="Job">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Country</label>
                        <div class="col-sm-10">
                          <input type="text" name="country" value="{{$dd->country}}" class="form-control" id="inputName" placeholder="Country">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text" name="address" value="{{$dd->address}}" class="form-control" id="inputName" placeholder="Address">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                          <input type="number" name="phone" value="{{$dd->phone}}" class="form-control" id="inputName" placeholder="Phone">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" name="email" value="{{$dd->email}}"  class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Parol</label>
                        <div class="col-sm-10">
                          <input type="password" name="password" class="form-control" id="inputEmail" placeholder="password">
                        </div>
                      </div>
                      <button class="btn btn-danger">O'zgartirish</button>
                      
                     
                   
                    </form>
                   
                         
                  <!-- Clode  Edit/.tab-pane -->
                </div>
                @endif

               
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
          
            <!-- /.card -->
          </div>
         
            <!-- title O'zgartitish  -->
          <!-- <form action="/label23/{{$dd->id}}" method='post'>
            @csrf
            <div class="form-floating mb-3">
              <input type="text" name="titlt" value="{{$dd->title}}" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Title</label>
            </div>
            <button class='btn btn-danger'>Kirish</button>
          </form> -->

            <!--/ title O'zgartitish  -->
          
          <!-- /.col -->
        </div>
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="salom/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="salom/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="salom/dist/js/adminlte.min.js"></script>
@endif
<!-- AdminLTE for demo purposes -->
@if (Auth::User()->admin == 2)
    Sorry You are not Admin
@endif
</body>
</html>
