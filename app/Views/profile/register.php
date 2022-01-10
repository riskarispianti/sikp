<?= $this->extend('layout/template_login'); ?>


<?= $this->Section('login'); ?>

<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>SI</b> Ketersediaan Pangan</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Membuat Akun baru</p>
      <form action="/register" method="post" enctype="multipart/form-data">
        <?php if (isset($validation)) : ?>
          <div class="alert alert-danger text-sm" role="alert">
            <?= $validation->listErrors(); ?>
          </div>
        <?php endif; ?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="nama_u" value="<?= set_value('nama_u'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username_u" value="<?= set_value('username_u'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user-circle"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password_u">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Konfirmasi Password" name="password_confirm">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <div class="row">
            <div class="col-md-5">
              <img src="/img/users.png" width="130" class="img-preview">
            </div>
            <div class="col-md-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="gbr_u" id="gbr_u" onchange="previewGbr()">
                <label class="custom-file-label" for="gambar">Pilih Foto</label>
              </div>
            </div>
          </div>
        </div>
        <div class="row footer">
          <div class="col-8">
            <div class="icheck-primary">
              <a href="/" class="text-center">Sudah Punya Akun.</a>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Buat Akun</button>
          </div>
        </div>
      </form>
    </div>
    <!-- /.form-box -->
  </div>
</div>

<?= $this->endSection(); ?>