<aside class="main-sidebar sidebar-dark-primary elevation-4" ">
    <!-- Brand Logo -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar" >
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
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2" style="background: rgba(red, green, blue, alpha)">
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
                <a href="" class="nav-link active">
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
