<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="salom/dist/img/IT-park.jpg" rel="icon">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        * {
            text-decoration: none;
            list-style: none;
        }

        .top-margin-auto {
            margin-left: 20px;
        }

        .dropdown-item-salom {
            padding: 15px 20px;
            text-decoration: none;
            background: #3498db;
            font-size: 20px;
            display: flex;
            color: white;
        }

        #select {
            width: 20%;
            padding: 40px
        }

        #media-class-id {
            width: 400px;
        }

        #btn-btn-margin {
            position: absolute;
            top: 18.9%;
            left: 35%;


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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">


    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="salom/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60">
        </div>
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/home" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
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
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">{{ $kur }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            @foreach ($wet as $dd)
                                <div class="media" id="media-class-id">
                                    <img src="salom/dist/img/user1-128x128.jpg" alt="User Avatar"
                                        class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            {{ $dd->name }}
                                            <span class="float-right text-sm text-danger"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">{{ $dd->message }}</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                            @endforeach
                        </a>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">{{ $ilm }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">{{ $ilm }} Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="/student" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i>{{ $kur }} new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="/gallery" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> {{ $who }} friends
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

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="salom/dist/img/IT-park.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="/" style="text-decoration:none" class="d-block">IT PROGRESS</a>
                    </div>
                </div>

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

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
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

            </div>
        </aside>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div>
            </div>
            <div class='top-margin-auto'>

                <a href="/addgal" class="btn btn-outline-primary mb-3" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Add</a>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="/addgalsave" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control"
                                            id="exampleFormControlInput1" placeholder="First Name">
                                    </div>
                                    <div class="mb-3">

                                        <label for="exampleFormControlInput1" class="form-label">Number</label>
                                        <select class="form-select" id="" name="job">
                                            <option value="0">Choose</option>
                                            <option value="1">Director</option>
                                            <option value="2">Full stack developer</option>
                                            <option value="3">Web designer</option>
                                        </select>

                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Image</label>
                                        <input type="file" name="file" placeholder="linkni kiriting"
                                            class="form-control" id="exampleFormControlTextarea1">
                                    </div>

                                    <br>
                                    <button class="btn btn-primary">Saqlash</button>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
                <a href="/export3" class="btn btn-success">Export Gallery</a>
                <a href="/import2" class="btn btn-success">Import Gallery</a>
                <form action="/filter" method="POST">
                    @csrf
                    @if ($type == 'all')
                        <select class="form-select border border-success p-2" aria-label="Default select example"
                            id="select" name="filter">
                            <option value="all" selected>All</option>
                            <option value="1">Director</option>
                            <option value="2">Full stack developer</option>
                            <option value="3">Web designer</option>
                        </select>
                    @endif

                    @if ($type == '1')
                        <select name="filter" class="form-select border border-success p-2"
                            aria-label="Default select example" id="select">
                            <option value="all">All</option>
                            <option value="1" selected>Director</option>
                            <option value="2">Full stack developer</option>
                            <option value="3">Web designer</option>
                        </select>
                    @endif
                    @if ($type == '2')
                        <select name="filter" class="form-select border border-success p-2"
                            aria-label="Default select example" id="select">
                            <option value="all">All</option>
                            <option value="1">Director</option>
                            <option value="2" selected>Full stack developer</option>
                            <option value="3">Web designer</option>
                        </select>
                    @endif
                    @if ($type == '3')
                        <select name="filter" class="form-select border border-success p-2"
                            aria-label="Default select example" id="select">
                            <option value="all">All</option>
                            <option value="1">Director</option>
                            <option value="2">Full stack developer</option>
                            <option value="3" selected>Web designer</option>
                        </select>
                    @endif
                    <button class="btn btn-success p-2" id="btn-btn-margin" style="margin-top: 10px;">Filter</button>
                </form>
                <br>
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
                        @foreach ($gal as $dd)
                            <tr>
                                <th scope="row">{{ $number++ }}</th>
                                <td>{{ $dd->name }}</td>
                                @if ($dd->who == 1)
                                    <td>Director</td>
                                @endif
                                @if ($dd->who == 2)
                                    <td>Full satck developer</td>
                                @endif
                                @if ($dd->who == 3)
                                    <td>Web designer</td>
                                @endif

                                <td>
                                    {{-- <!-- <img src="images/{{$dd->image}}" class="img-thumbnail" width="120"  alt="{{$dd->image}}"></td> --> --}}
                                    <a href="/file/{{ $dd->image }}" width="100" target="_blank">ochish</a>
                                </td>
                                <td>
                                    <a href="" class='btn btn-danger' data-bs-toggle="modal"
                                        data-bs-target="#exampleModal4{{ $dd->id }}">Delete</a>

                                    <!-- delete modal -->

                                    <div class="modal fade" id="exampleModal4{{ $dd->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h1 style="text-align:center">Delete Account</h1>
                                                    <p style="text-align:center">Are you sure you want to delete your
                                                        account?</p>
                                                    <button type="button" class="btn btn-secondary"
                                                        style="width:49%" data-bs-dismiss="modal">Cancel</button>
                                                    <a href="/gallerdel/{{ $dd->id }}" class="btn btn-primary"
                                                        style="width:49%">Delete</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!--/ delete modal -->
                                    <button class='btn btn-primary editbtn' value="{{ $dd->id }}"
                                        data-bs-toggle="modal"
                                        data-bs-target="#exampleModal3{{ $dd->id }}">Edit</button>
                                    <!-- edit Model -->
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal3{{ $dd->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title  fs-5" id="exampleModalLabel">Edit</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <form action="/editimage/{{ $dd->id }}" method="POST">
                                                        @csrf

                                                        <input type="hidden" name="student_id" id="student_id">

                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1"
                                                                class="form-label">Name</label>
                                                            <input type="text" name="name" id="name"
                                                                value="{{ $dd->name }}" class="form-control"
                                                                id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1"
                                                                class="form-label">Jobs</label>
                                                            <input type="text" name="jobs" id="code"
                                                                value="{{ $dd->who }}" class="form-control"
                                                                id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        </div>

                                                        <button type="submit" id="btn-save"
                                                            class="btn btn-primary">Saqlash</button>
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
            <aside class="control-sidebar control-sidebar-dark">
            </aside>
        </div>

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
