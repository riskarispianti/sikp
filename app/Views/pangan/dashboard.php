<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"> Aplikasi Ketersediaan Pangan</small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <a href="#">
            <div class="card bg-info">
              <div class="card-body">
                <div class="text-center">
                  <img class="img-fluid" src="/img/pngwing.com (13).png">
                </div>
                <h3 class="profile-username text-center">Sayuran</h3>
              </div>
            </div>
          </a>

          <a href="#">
            <div class="card bg-primary">
              <div class="card-body">
                <div class="text-center">
                  <img class="img-fluid" src="/img/pngwing.com (4).png">
                </div>
                <h3 class="profile-username text-center">Sapi</h3>
              </div>
            </div>
          </a>

          <a href="#">
            <div class="card bg-secondary">
              <div class="card-body">
                <div class="text-center">
                  <img class="img-fluid" src="/img/kambing.png">
                </div>
                <h3 class="profile-username text-center">Kambing</h3>
              </div>
            </div>
          </a>
        </div>

        <div class="col-lg-3">
          <a href="#">
            <div class="card bg-warning">
              <div class="card-body">
                <div class="text-center">
                  <img class="img-fluid" src="/img/domba.png">
                </div>
                <h3 class="profile-username text-center">Domba</h3>
              </div>
            </div>
          </a>

          <a href="#">
            <div class="card bg-danger">
              <div class="card-body">
                <div class="text-center">
                  <img class="img-fluid" src="/img/pngwing.com (11).png">
                </div>
                <h3 class="profile-username text-center">Jagung</h3>
              </div>
            </div>
          </a>

          <a href="#">
            <div class="card bg-success">
              <div class="card-body">
                <div class="text-center">
                  <img class="img-fluid" src="/img/buah.png">
                </div>
                <h3 class="profile-username text-center">Buah-buahan</h3>
              </div>
            </div>
          </a>
        </div>

        <div class="col-lg-3">
          <a href="#">
            <div class="card bg-indigo">
              <div class="card-body">
                <div class="text-center">
                  <img class="img-fluid" src="/img/ayam.png">
                </div>
                <h3 class="profile-username text-center">Ayam</h3>
              </div>
            </div>
          </a>

          <a href="#">
            <div class="card bg-navy">
              <div class="card-body">
                <div class="text-center">
                  <img class="img-fluid" src="/img/pngwing.com (14).png">
                </div>
                <h3 class="profile-username text-center">Beras</h3>
              </div>
            </div>
          </a>

          <a href="#">
            <div class="card bg-fuchsia">
              <div class="card-body">
                <div class="text-center">
                  <img class="img-fluid" src="/img/pngwing.com (10).png">
                </div>
                <h3 class="profile-username text-center">Umbi-umbian</h3>
              </div>
            </div>
          </a>
        </div>

        <div class="col-lg-3">
          <a href="#">
            <div class="card bg-teal">
              <div class="card-body">
                <div class="text-center">
                  <img class="img-fluid" src="/img/pngwing.com (9).png">
                </div>
                <h3 class="profile-username text-center">Kacang-kacangan</h3>
              </div>
            </div>
          </a>

          <a href="#">
            <div class="card bg-lime">
              <div class="card-body">
                <div class="text-center">
                  <img class="img-fluid" src="/img/pngwing.com (7).png">
                </div>
                <h3 class="profile-username text-center">Ikan</h3>
              </div>
            </div>
          </a>

          <a href="#">
            <div class="card bg-orange">
              <div class="card-body">
                <div class="text-center">
                  <img class="img-fluid" src="/img/pngwing.com (8).png">
                </div>
                <h3 class="profile-username text-center">Telur</h3>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?= $this->endSection(); ?>