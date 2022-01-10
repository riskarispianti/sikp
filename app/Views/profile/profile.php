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
              <img class="img-fluid" src="/img/<?= $user['gbr_u']; ?>" width="200">
            </div>
            <h3 class="profile-username text-center"><?= $user['nama_u']; ?></h3>
            <hr>
            <div class="text-center">
              <b>Username</b>
              <p class="text-primary"><?= $user['username_u']; ?></p>
              <b>Tanggal Daftar</b>
              <p class="text-primary"><?= $user['created_at']; ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <?php if (session()->get('success')) : ?>
            <div class="alert alert-success" role="alert">
              <?= session()->get('success'); ?>
            </div>
          <?php endif; ?>

          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Edit Profile</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm">
                  <form action="/profile" method="post" enctype="multipart/form-data">
                    <?php if (isset($validation)) : ?>
                      <div class="alert alert-danger text-sm" role="alert">
                        <?= $validation->listErrors(); ?>
                      </div>
                    <?php endif; ?>
                    <h2 class="my-3">PROFILE</h2>
                    <hr>
                    <input type="hidden" name="gambarLama" value="<?= $user['gbr_u']; ?>">
                    <div class="form-group row mt-4 text-right">
                      <label for="nama" class="col-sm-4 col-form-label">Nama Lengkap</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-border" name="nama_u" value="<?= set_value('nama_u', $user['nama_u']); ?>">
                      </div>
                    </div>
                    <div class="form-group row text-right">
                      <label for="username" class="col-sm-4 col-form-label">Username</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-border" name="username_u" value="<?= set_value('username_u', $user['username_u']); ?>">
                      </div>
                    </div>
                    <div class="form-group row text-right">
                      <label for="password" class="col-sm-4 col-form-label">Password</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-border" name="password_u">
                      </div>
                    </div>
                    <div class="form-group row text-right">
                      <label for="password" class="col-sm-4 col-form-label">Password confirm</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-border" name="password_confirm">
                      </div>
                    </div>
                    <div class="form-group row text-right">
                      <label for="foto" class="col-sm-4 col-form-label">Ganti Foto</label>
                      <div class="col-sm-4 text-left">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="gbr_u" id="gbr_u" onchange="previewGbr()">
                          <label class="custom-file-label" for="gambar">Pilih Foto</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row text-left">
                      <label for="foto" class="col-sm-4 col-form-label"></label>
                      <div class="col-sm-4">
                        <img src="" class="img-preview" width="130">
                      </div>
                    </div>
                    <div class="form-group row text-left">
                      <label for="foto" class="col-sm-4 col-form-label"></label>
                      <div class="col-sm-4">
                        <button type="submit" class="btn btn-info">Edit Profile</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?= $this->endSection(); ?>