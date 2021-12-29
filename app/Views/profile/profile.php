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
              <img class="img-fluid img-preview" src="/img/<?= session()->get('gbr_u'); ?>" width="200">
            </div>
            <h3 class="profile-username text-center"><?= session()->get('nama_u'); ?></h3>
            <p class="text-muted text-center">Software Engineer</p>
            <ul class="list-group list-group-unbordered mb-3 text-center">
              <li class="list-group-item">
                <b>Username</b>
                <p class="text-primary"><?= session()->get('username_u'); ?></p>
              </li>
              <li class="list-group-item">
                <b>Tanggal Daftar</b>
                <p class="text-primary"><?= session()->get('created_at'); ?></p>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-9">
          <div class="card card-info card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
              <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Ubah Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-four-password-tab" data-toggle="pill" href="#custom-tabs-four-password" role="tab" aria-controls="custom-tabs-four-password" aria-selected="false">Ubah Password</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content" id="custom-tabs-four-tabContent">
                <div class="tab-pane fade active show" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                  <form action="/profile/updateprofile/<?= session()->get('id_u'); ?>" method="post">
                    <h2 class="text-center my-3">PROFILE</h2>
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
                      <div class="col-sm-4">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="gbr_u" id="gbr_u" onchange="previewGbr()">
                          <label class="custom-file-label" for="gambar">Pilih Foto</label>
                        </div>
                      </div>
                    </div>
                    <a href="" type="submit" class="btn btn-info mt-5">Ubah Profile</a>
                  </form>
                </div>

                <div class="tab-pane fade" id="custom-tabs-four-password" role="tabpanel" aria-labelledby="custom-tabs-four-password-tab">
                  <form action="">
                    <h2 class="text-center my-3">GANTI PASSWORD</h2>
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
                    <a href="" class="btn btn-info mt-5">Ubah Password</a>
                  </form>
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?= $this->endSection(); ?>