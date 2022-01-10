<?= $this->extend('layout/template_login'); ?>


<?= $this->Section('login'); ?>

<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>SI</b> Ketersediaan Pangan</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">
        <img src="/img/sin.png" alt="logo" width="250">
      </p>

      <?php if (session()->get('success')) : ?>
        <div class="alert alert-success" role="alert">
          <?= session()->get('success'); ?>
        </div>
      <?php endif; ?>

      <form action="/" method="post">
        <?php if (isset($validation)) : ?>
          <div class="alert alert-danger text-sm" role="alert">
            <?= $validation->listErrors(); ?>
          </div>
        <?php endif; ?>
        <div class="input-group mb-3">
          <input type="username" class="form-control" name="username_u" placeholder="Masukan Username.." value="<?= set_value('username_u'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password_u" placeholder="Masukan Password..">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
        </div>
      </form>
      <a href="register">Buat Akun Baru</a>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>