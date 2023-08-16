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
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> --}}
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
       
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
    
          {{-- <span class="badge badge-danger navbar-badge">{{$kur}}</span> --}}
        
      <!-- Notifications Dropdown Menu -->
     
     
  
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
                <a href="/gallery" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Team</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/video" class="nav-link active">
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

    <a href="/addvideo" class="btn btn-outline-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Add</a>
    <!-- Button trigger modal -->

 <!-- add modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/addvideos" method="post" >
          @csrf
          <div class="modal-body">
            <form action="/addvideos" method="post" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Ism kiriting..." id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Link</label>
                <input type="text" name="file" class="form-control" placeholder="Link kiriting..." id="exampleInputPassword1">
              </div>
              <br>
              <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
         
          </div>
          

          <!-- JAV-O-HIR-1 -->
          <!-- table Sayti -->
        </form>
      </div>
    </div>
  </div>

     

        <!-- Modal -->

        <!-- Export haqida -->

         {{-- <a href="/export3" class="btn btn-success">Export Gallery</a>
         <a href="/import2" class="btn btn-success">Import Gallery</a> --}}


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
        <th scope="col"></th>
        <th scope="col">First</th>
        <th scope="col">Vedio darslar</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($ved as $dd)
      <tr>
        <th scope="row">{{$count++}}</th>
        <td width='300'>{{$dd->name}}</td>
        <td>

          <iframe width="300" height="150" src="{{$dd->file}}" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </td>
        <td>
          <a href="" class='btn btn-danger'  data-bs-toggle="modal" data-bs-target="#exampleModal4{{$dd->id}}">
          
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
              <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
            </svg>

          </a>

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
                  <a href="/delvideo/{{$dd->id}}" class="btn btn-primary" style="width:49%">Delete</a>
                </div>
              
              </div>
            </div>
          </div>


          <!--/ delete modal -->
          <button class='btn btn-primary editbtn' value="{{$dd->id}}"  data-bs-toggle="modal" data-bs-target="#exampleModal3{{$dd->id}}">

          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>
          
          </button>
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

                <form action="/editvideo/{{$dd->id}}" method="POST">
                  @csrf

                  <input type="hidden" name="student_id" id="student_id">

                  <div class="mb-3">  
                      <label for="exampleInputEmail1" class="form-label">Name</label>
                      <input type="text" name="name" id="name" value="{{$dd->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Link</label>
                      <input type="text" name="file" id="code" value="{{$dd->file}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>          
              
                  <button type="submit" class="btn btn-primary">Saqlash</button>
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

