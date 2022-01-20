<?= $this->extend('layout/template_login'); ?>


<?= $this->Section('login'); ?>

<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>SI</b> Ketersediaan Pangan</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Reset Password.</p>

      <form action="lupa_pass" method="post">
        <?php if (isset($validation)) : ?>
          <div class="alert alert-danger text-sm" role="alert">
            <?= $validation->listErrors(); ?>
          </div>
        <?php endif; ?>
        <input type="text" class="form-control" value="">
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password_u" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user-circle"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password_confirm" placeholder="Password Confirm">
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
      <div>
        <a href="/">Login</a>
      </div>
      <a href="register">Buat Akun Baru.</a>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>

<?= $this->endSection(); ?>