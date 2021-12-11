<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-light">
  <div class="container">
    <a href="/" class="navbar-brand">
      <img src="/img/sin2.png" alt="SInKePang" class="brand-image" style="opacity: 5" width="150">
      <!-- <span class="brand-text font-weight-light">SInKePang</span> -->
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
        <a href="/dashboard/persediaan" class="nav-link">Persediaan</a>
      </li>
      <li class="nav-item">
        <a href="/komoditas" class="nav-link">Komoditas</a>
      </li>
      <li class="nav-item dropdown">
        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Produksi</a>
        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
          <li><a href="/tanaman" class="dropdown-item">Tanaman Pangan </a></li>
          <li><a href="/peternakan" class="dropdown-item">Peternakan</a></li>
          <li><a href="/perikanan" class="dropdown-item">Perikanan</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Master Data</a>
        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
          <li><a href="/tempatprod" class="dropdown-item">Tempat Produksi</a></li>
          <li><a href="/sentraprod" class="dropdown-item">Sentra Produksi</a></li>
          <li><a href="/infrastruktur" class="dropdown-item">Infrastruktur Produksi</a></li>
          <li><a href="/infrasternak" class="dropdown-item">Infrastruktur Ternak</a></li>
          <li><a href="/produsen" class="dropdown-item">Produsen</a></li>
        </ul>
      </li>
      <!-- profile Dropdown Menu -->
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <!-- <img src="/img/logo_portal.png" class="user-image"> -->
          <!-- <span class="d-none d-md-inline"><b> Dinas Ketahanan Pangan </b></span> -->
          <i class="fas fa-user-circle fa-lg"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-gradient-lightblue">
            <img src="/img/logo-indonesia-berdaulat-pangan.png" class="border-0">
            <p>
              <b> Indonesia Berdaulat Pangan</b>
              <small>Member since Oct. 2021</small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="/profile" class="btn btn-default btn-flat">Profile</a>
            <a href="/" class="btn btn-default btn-flat float-right">Sign out</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
<!-- /.navbar -->