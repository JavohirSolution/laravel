<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link href="salom/dist/img/IT-park.jpg" rel="icon">
  
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <style>
    *{
      text-decoration:none;
      list-style:none;
    }
    .top-margin-auto{
      margin-left:20px;
    }
    .dropdown-item-salom{
      padding:15px 20px;
      text-decoration:none;
      background:  #3498db;
      font-size:      20px;
      display:        flex;
      color:         white;
    }
    
  </style>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="salom/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="salom/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="salom/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="salom/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="salom/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="salom/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="salom/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="salom/plugins/summernote/summernote-bs4.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">


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
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/home" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
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
            <i class="fas fa-envelope mr-2"></i>{{$kur}} new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="/gallery" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> {{$who}} friends
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
     
  
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="salom/dist/img/IT-park.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/" style="text-decoration:none" class="d-block">IT PROGRESS</a>
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
                
                <a href="/newboy" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
 
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
                <a href="" class="nav-link active">
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
                <a href="/student" class="nav-link">
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
           
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   
  <!-- /.content-wrapper -->
  <div class='top-margin-auto'>

    <a href="/addgal" class="btn btn-outline-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Add</a>
    <!-- Button trigger modal -->

 <!-- add modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/addgalsave" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name">
            </div>
            <div class="mb-3">

                <label for="exampleFormControlInput1" class="form-label">Job</label>
                <select class="form-select" id="" name="job">
                  <option value="1">Direktor</option>
                  <option value="2">Student</option>
                  <option value="3">Teacher</option>
                </select>

            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Image</label>
                <input type="file" name="file" placeholder="linkni kiriting" class="form-control" id="exampleFormControlTextarea1" >
            </div> 
           
            <br>
            <button class="btn btn-primary">Saqlash</button>
          </div>
          
  <!-- /add modal -->

          <!-- JAV-O-HIR-1 -->
          <!-- table Sayti -->
        </form>
      </div>
    </div>
  </div>

     

        <!-- Modal -->

        <!-- Export haqida -->

         <a href="/export3" class="btn btn-success">Export Gallery</a>
         <a href="/import2" class="btn btn-success">Import Gallery</a>


          {{-- @if(Auth::user()->admin == 1 || Auth::user()->admin == 2)
            <button type="button" class="btn btn-primary float-end m-2" data-bs-toggle="modal" data-bs-target="#addmodal">
                Qo'shish
            </button>
          @endif --}}
            
        
             
         
          
             
       
        <br>
        <!-- Export haqida -->


    <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Jobs</th>
        <th scope="col">Image</th>
        <th scope="col">Addition</th>
      </tr>
    </thead>
    <tbody>
      @foreach($gal as $dd)
      <tr>
        <th scope="row">{{$number++}}</th>
        <td>{{$dd->name}}</td>
        @if($dd->who == 1)
        <td><button class="btn btn-success">SuperAdmin</button></td>
        @endif
        @if($dd->who == 2)
        <td><button class="btn btn-danger">Admin</button></td>
        @endif
        @if($dd->who == 3)
        <td><button class="btn btn-info">Student</button></td>
        @endif
      


        <td>
          {{-- <!-- <img src="images/{{$dd->image}}" class="img-thumbnail" width="120"  alt="{{$dd->image}}"></td> --> --}}
          <a href="/file/{{$dd->image}}"  width="100" target="_blank">ochish</a>
          {{-- <iframe width="200" height="100" src="{{$dd->image}}" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}
        </td>
        <td>
          <a href="" class='btn btn-danger'  data-bs-toggle="modal" data-bs-target="#exampleModal4{{$dd->id}}">Delete</a>

           <!-- delete modal -->

         <div class="modal fade" id="exampleModal4{{$dd->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <h1 style="text-align:center">Delete Account</h1>
                  <p  style="text-align:center">Are you sure you want to delete your account?</p>
                  <button type="button" class="btn btn-secondary" style="width:49%" data-bs-dismiss="modal">Cancel</button>
                  <a href="/gallerdel/{{$dd->id}}" class="btn btn-primary" style="width:49%">Delete</a>
                </div>
              
              </div>
            </div>
          </div>


          <!--/ delete modal -->
          <button class='btn btn-primary editbtn' value="{{$dd->id}}"  data-bs-toggle="modal" data-bs-target="#exampleModal3{{$dd->id}}">Edit</button>
           <!-- edit Model -->
           
          <!-- Modal -->
          <div class="modal fade" id="exampleModal3{{$dd->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title  fs-5" id="exampleModalLabel">Edit</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                <form action="/editimage/{{$dd->id}}" method="POST">
                  @csrf

                  <input type="hidden" name="student_id" id="student_id">

                  <div class="mb-3">  
                      <label for="exampleInputEmail1" class="form-label">Name</label>
                      <input type="text" name="name" id="name" value="{{$dd->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Jobs</label>
                      <input type="text" name="jobs" id="code" value="{{$dd->who}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>          
              
                  <button type="submit" id="btn-save" class="btn btn-primary">Saqlash</button>
              </form>
                </div>
              
              </div>
            </div>
          </div>
        <!-- /edit Model -->


        </td>
      </tr>
      @endforeach
    </tbody>
    </table>

  </div>
 
    <!--/ Table part-main -->



    <!-- Button trigger modal -->



 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="salom/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="salom/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="salom/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="salom/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="salom/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap --> 
<script src="salom/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="salom/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="salom/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="salom/plugins/moment/moment.min.js"></script>
<script src="salom/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="salom/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="salom/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="salom/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="salom/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="salom/dist/js/pages/dashboard.js"></script>
</body>
</html>
<!-- edit modal id in laravel  -->
