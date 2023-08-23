<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="chatting.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</head>

<body>

    <link href="salom/dist/img/IT-park.jpg" rel="icon">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        .top-margin-auto {
            margin-left: 20px;
        }

        .dropdown-item-salom {
            padding: 15px 20px;
            font-size: 20px;
            display: flex;
            background: #3498db;
            color: white;
        }
    </style>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">


        <div class="wrapper">

            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__shake" src="salom/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                    width="60">
            </div>

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
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
                                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                        aria-label="Search">
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
                            <span class="badge badge-danger navbar-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                {{-- @foreach ($wet as $dd)
                <div class="media">
                  <img src="salom/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      {{$dd->name}}
                      <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">{{$dd->message}}</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>{{$dd->updated_at}}</p>
                  </div>
                </div>
                @endforeach --}}
                                <!-- Message End -->
                            </a>

                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                        </div>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header"> Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="/student" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="/gallery" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> friends
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
                            <a href="/" class="d-block">IT PROGRESS</a>
                        </div>
                    </div>
                    <!-- SidebarSearch Form -->
                    <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                            <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
                                    <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
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
                                        <a href="/video" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Video Darslar</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link active">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Xabarlar</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/chatting" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Chatting</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item-salom" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                            <i class='bx bx-exit' style="font-size:22px; margin-top:5px"></i>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
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


            <div class="content-wrapper">

                <section class="gradient-custom">
                    <div class="container py-5">

                        <div class="row">

                            <div class="col-md-6 col-lg-5 col-xl-5 mb-4 mb-md-0">

                                <h5 class="font-weight-bold mb-3 text-center text-white">Member</h5>

                                <div class="card mask-custom" id="chatting-ul-a">
                                    <div class="card-body">

                                        <ul class="list-unstyled mb-0">
                                            <li class="p-2 border-bottom"
                                                style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                                                <a href="#!" class="d-flex justify-content-between link-light">
                                                    <div class="d-flex flex-row">
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp"
                                                            alt="avatar"
                                                            class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                                            width="60">
                                                        <div class="pt-1">
                                                            <p class="fw-bold mb-0">John Doe</p>
                                                            <p class="small text-black">Hello, Are you there?</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-1">
                                                        <p class="small text-black mb-1">Just now</p>
                                                        <span class="badge bg-danger float-end">1</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="p-2 border-bottom"
                                                style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                                                <a href="#!" class="d-flex justify-content-between link-light">
                                                    <div class="d-flex flex-row">
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-1.webp"
                                                            alt="avatar"
                                                            class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                                            width="60">
                                                        <div class="pt-1">
                                                            <p class="fw-bold mb-0">Danny Smith</p>
                                                            <p class="small text-black">Lorem ipsum dolor sit.</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-1">
                                                        <p class="small text-black mb-1">5 mins ago</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="p-2 border-bottom"
                                                style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                                                <a href="#!" class="d-flex justify-content-between link-light">
                                                    <div class="d-flex flex-row">
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-2.webp"
                                                            alt="avatar"
                                                            class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                                            width="60">
                                                        <div class="pt-1">
                                                            <p class="fw-bold mb-0">Alex Steward</p>
                                                            <p class="small text-black">Lorem ipsum dolor sit.</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-1">
                                                        <p class="small text-black mb-1">Yesterday</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="p-2 border-bottom"
                                                style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                                                <a href="#!" class="d-flex justify-content-between link-light">
                                                    <div class="d-flex flex-row">
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-3.webp"
                                                            alt="avatar"
                                                            class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                                            width="60">
                                                        <div class="pt-1">
                                                            <p class="fw-bold mb-0">Ashley Olsen</p>
                                                            <p class="small text-black">Lorem ipsum dolor sit.</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-1">
                                                        <p class="small text-black mb-1">Yesterday</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="p-2 border-bottom"
                                                style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                                                <a href="#!" class="d-flex justify-content-between link-light">
                                                    <div class="d-flex flex-row">
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-4.webp"
                                                            alt="avatar"
                                                            class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                                            width="60">
                                                        <div class="pt-1">
                                                            <p class="fw-bold mb-0">Kate Moss</p>
                                                            <p class="small text-black" style="color: red;">Lorem
                                                                ipsum dolor sit.</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-1">
                                                        <p class="small text-black mb-1">Yesterday</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="p-2 border-bottom"
                                                style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                                                <a href="#!" class="d-flex justify-content-between link-light">
                                                    <div class="d-flex flex-row">
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp"
                                                            alt="avatar"
                                                            class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                                            width="60">
                                                        <div class="pt-1">
                                                            <p class="fw-bold mb-0">Lara Croft</p>
                                                            <p class="small text-black">Lorem ipsum dolor sit.</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-1">
                                                        <p class="small text-black mb-1">Yesterday</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="p-2">
                                                <a href="#!" class="d-flex justify-content-between link-light">
                                                    <div class="d-flex flex-row">
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                                                            alt="avatar"
                                                            class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                                            width="60">
                                                        <div class="pt-1">
                                                            <p class="fw-bold mb-0">Brad Pitt</p>
                                                            <p class="small text-black">Lorem ipsum dolor sit.</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-1">
                                                        <p class="small text-black mb-1">5 mins ago</p>
                                                        <span class="text-black float-end"><i class="fas fa-check"
                                                                aria-hidden="true"></i></span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6 col-lg-7 col-xl-7">

                                <ul class="list-unstyled text-black">
                                    <li class="d-flex justify-content-between mb-4">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                                            alt="avatar"
                                            class="rounded-circle d-flex align-self-start me-3 shadow-1-strong"
                                            width="60">
                                        <div class="card mask-custom">
                                            <div class="card-header d-flex justify-content-between p-3"
                                                style="border-bottom: 1px solid rgba(255,255,255,.3);">
                                                <p class="fw-bold mb-0">Brad Pitt</p>
                                                <p class="text-light small mb-0"><i class="far fa-clock"></i> 12 mins
                                                    ago</p>
                                            </div>
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut
                                                    labore et dolore magna aliqua.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between mb-4">
                                        <div class="card mask-custom w-100">
                                            <div class="card-header d-flex justify-content-between p-3"
                                                style="border-bottom: 1px solid rgba(255,255,255,.3);">
                                                <p class="fw-bold mb-0">Lara Croft</p>
                                                <p class="text-light small mb-0"><i class="far fa-clock"></i> 13 mins
                                                    ago</p>
                                            </div>
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                    accusantium doloremque
                                                    laudantium.
                                                </p>
                                            </div>
                                        </div>
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp"
                                            alt="avatar"
                                            class="rounded-circle d-flex align-self-start ms-3 shadow-1-strong"
                                            width="60">
                                    </li>
                                    <li class="d-flex justify-content-between mb-4">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                                            alt="avatar"
                                            class="rounded-circle d-flex align-self-start me-3 shadow-1-strong"
                                            width="60">
                                        <div class="card mask-custom">
                                            <div class="card-header d-flex justify-content-between p-3"
                                                style="border-bottom: 1px solid rgba(255,255,255,.3);">
                                                <p class="fw-bold mb-0">Brad Pitt</p>
                                                <p class="text-light small mb-0"><i class="far fa-clock"></i> 10 mins
                                                    ago</p>
                                            </div>
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut
                                                    labore et dolore magna aliqua.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="form-outline form-black">
                                            <textarea class="form-control" id="textAreaExample3" rows="4"></textarea>
                                            <label class="form-label" for="textAreaExample3">Message</label>
                                        </div>
                                    </li>
                                    <button type="button"
                                        class="btn btn-light btn-lg btn-rounded float-end">Send</button>
                                </ul>

                            </div>

                        </div>

                    </div>
                </section>
            </div>



            <!-- Content Wrapper. Contains page content -->




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
