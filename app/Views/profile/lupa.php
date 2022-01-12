<?= $this->extend('layout/template_login'); ?>


<?= $this->Section('login'); ?>

<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>SI</b> Ketersediaan Pangan</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>

      <form action="lupapass" method="post">
        <div class="input-group mb-3">
          <input type="nama" class="form-control" name="nama_u" placeholder="Full Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="username" class="form-control" name="username_u" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user-circle"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Request New Password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mt-3 mb-1">
      <div>
        <a href="/">Login</a>
      </div>
      <a href="register">Buat Akun Baru.</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>

<?= $this->endSection(); ?>