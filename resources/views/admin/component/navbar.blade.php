<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="/admin" class="logo d-flex align-items-center">
      <img src="/AdminAssets/img/anu.png" alt="">
      <span class="d-none d-lg-block">Room Management</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->

  @if ($status === 'ruangan')
  <div class="search-bar">
    <form class="search-form d-flex align-items-center" method="GET" action="/admin">
      <input type="text" name="search" placeholder="Cari Ruangan.." title="Enter search keyword" value="{{ request('search') }}">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
  </div>
  @elseif ($status === 'dosen')
  <div class="search-bar">
    <form class="search-form d-flex align-items-center" method="GET" action="/admin/dosen">
      <input type="text" name="search" placeholder="Cari Dosen.." title="Enter search keyword" value="{{ request('search') }}">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
  </div>
  @elseif ($status === 'jam')
  <div class="search-bar">
    
  </div>
  @endif
  
  <!-- End Search Bar -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle " href="#">
          <i class="bi bi-search"></i>
        </a>
      </li><!-- End Search Icon-->


      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="/AdminAssets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
          
          <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::guard('admin')->name}}</span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6>{{Auth::guard('admin')->name}}</h6>
            <span>Admin</span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="bi bi-box-arrow-right"></i>
              <form action="/logoutAdmin" method="post" >
                @csrf
                <button  class="dropdown-item"  type="submit">Keluar</button>
              </form>
            </a>
          </li>

          
        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->

</header>