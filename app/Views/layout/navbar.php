<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-dark navbar-dark">
  <div class="container">
    <a href="/" class="navbar-brand">
      <img src="/img/sin2.png" alt="SInKePang" class="brand-image" width="130">
    </a>

    <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <!-- Right navbar links -->
    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
      <li class="nav-item active">
        <a href="/dashboard" class="nav-link">Home</a>
      </li>
      <li class="nav-item active">
        <a href="/komoditas" class="nav-link">Komoditas</a>
      </li>
      <li class="nav-item dropdown active">
        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Komponen Produksi</a>
        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
          <li><a href="/tempatprod" class="dropdown-item">Tempat Produksi</a></li>
          <!-- <li><a href="/sentraprod" class="dropdown-item">Sentra Produksi</a></li> -->
          <li><a href="/infrastruktur" class="dropdown-item">Infrastruktur Tanaman & Perikanan</a></li>
          <li><a href="/infrasternak" class="dropdown-item">Infrastruktur Ternak</a></li>
          <li><a href="/produsen" class="dropdown-item">Produsen</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown active">
        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Produksi Pangan</a>
        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
          <li><a href="/tanaman" class="dropdown-item">Produksi Tanaman</a></li>
          <li><a href="/peternakan" class="dropdown-item">Produksi Peternakan</a></li>
          <li><a href="/perikanan" class="dropdown-item">Produksi Perikanan</a></li>
        </ul>
      </li>
      <!-- profile Dropdown Menu -->
      <li class="nav-item dropdown user-menu active">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <!-- <img src="/img/logo_portal.png" class="user-image"> -->
          <i class="fas fa-user-circle fa-lg"></i>
          <span class="d-none d-md-inline"><?= session()->get('nama_u'); ?></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-gradient-lightblue">
            <img src="/img/<?= session()->get('gbr_u'); ?>" class="border-0">
            <p>
              <b><?= session()->get('nama_u'); ?></b>
              <small><?= date('h-M-Y'); ?></small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="/profile" class="btn btn-default btn-flat">Profile</a>
            <a href="/login/logout" class="btn btn-default btn-flat float-right">Logout</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
<!-- /.navbar -->