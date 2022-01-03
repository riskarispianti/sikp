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
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Profile</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="card callout callout-info">
            <div class="text-center mb-3">
              <img class="img-fluid" src="/img/<?= session()->get('gbr_u'); ?>" width="200">
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="card card-info">
            <div class="card-header ">
              <h3 class="card-title">Profile User</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="gambarLama" value="<?= session()->get('gbr_u'); ?>" readonly>
                <div class="form-group row mt-4 text-right">
                  <label for="nama" class="col-sm-4 col-form-label">Nama Lengkap</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-border" value="<?= session()->get('nama_u'); ?>" readonly>
                  </div>
                </div>
                <div class="form-group row text-right">
                  <label for="username" class="col-sm-4 col-form-label">Username</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-border" value="<?= session()->get('username_u'); ?>" readonly>
                  </div>
                </div>
                <div class="form-group row text-right">
                  <label for="username" class="col-sm-4 col-form-label">Tanggal Daftar</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-border" value="<?= session()->get('created_at'); ?>" readonly>
                  </div>
                </div>
                <div class="form-group row text-right">
                  <label for="username" class="col-sm-4 col-form-label">Password</label>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-border" value="<?= session()->get('password_u'); ?>" readonly>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?= $this->endSection(); ?>