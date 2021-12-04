<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Profile</small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Profile</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-gradient-info">
              <h3 class="card-title">About Me</h3>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="card-body box-profile">
                  <div class="text-center mb-3">
                    <img class="img-fluid" src="/img/logo.png" width="150">
                  </div>
                  <h3 class="profile-username text-center">Fakultas Ilmu Komputer</h3>
                  <p class="text-muted text-center">Universitas Subang</p>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card-body">
                  <?php foreach ($profile as $prof) : ?>
                    <strong><i class="fas fa-book mr-1"></i>Nama</strong>
                    <p class="text-muted">
                      <?= $prof['nama_dinas']; ?>
                    </p>
                    <hr>
                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Username</strong>
                    <p class="text-muted">
                      <?= $prof['username']; ?>
                    </p>
                    <hr>
                    <strong><i class="far fa-file-alt mr-1"></i> Password</strong>
                    <p class="text-muted">
                      <?= $prof['password']; ?>
                    </p>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?= $this->endSection(); ?>