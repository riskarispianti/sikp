<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-light">
  <div class="container">
    <a href="/" class="navbar-brand">
      <img src="/img/SIKP.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
      <span class="brand-text font-weight-light">SInKePang</span>
    </a>

    <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <!-- Right navbar links -->
    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
      <li class="nav-item">
        <a href="/dashboard" class="nav-link">Home</a>
      </li>
      <li class="nav-item">
        <a href="/dashboard/grafik" class="nav-link">Persediaan</a>
      </li>
      <li class="nav-item dropdown">
        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Data Pangan</a>
        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
          <li><a href="/tanaman" class="dropdown-item">Tanaman Pangan </a></li>
          <li><a href="#" class="dropdown-item">Peternakan</a></li>
          <li><a href="#" class="dropdown-item">Perikanan</a></li>
        </ul>
      </li>
      <!-- profile Dropdown Menu -->
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="/img/logo_portal.png" class="user-image" alt="User Image">
          <span class="d-none d-md-inline">FASILKOM</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-info">
            <img src="/img/logo_portal.png" class="elevation-2" alt="User Image">
            <p>
              Fakultas Ilmu komputer
              <small>Member since Oct. 2021</small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">

            <a href="/profile/registrasi" class="btn btn-default btn-flat">Edit Profile</a>
            <a href="/" class="btn btn-default btn-flat float-right">Sign out</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
<!-- /.navbar -->