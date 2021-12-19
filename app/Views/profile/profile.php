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

          <div class="row">
            <div class="col-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="text-center">PROFILE</h4>
                  <hr>
                  <div class="form-group row mt-4">
                    <label for="inputEmail3" class="col-sm-5 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form-control-border" value="<?= session()->get('nama_u'); ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="username" class="col-sm-5 col-form-label">Username</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form-control-border" value="<?= session()->get('username_u'); ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="username" class="col-sm-5 col-form-label">Ganti Foto</label>
                    <div class="col-sm-7">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input">
                        <label class="custom-file-label">Pilih Foto</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn bg-gradient-cyan float-right">Edit Profile</button>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="text-center">Ganti Password</h4>
                  <hr>
                  <div class="form-group row mt-4">
                    <label for="inputEmail3" class="col-sm-5 col-form-label">Password lama</label>
                    <div class="col-sm-7">
                      <input type="text" class="input-group input-group-sm">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="username" class="col-sm-5 col-form-label">Password Baru</label>
                    <div class="col-sm-7">
                      <input type="text" class="input-group input-group-sm">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="username" class="col-sm-5 col-form-label">Konfirmasi Password</label>
                    <div class="col-sm-7">
                      <input type="text" class="input-group input-group-sm">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn bg-gradient-cyan float-right">Ganti Password</button>
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