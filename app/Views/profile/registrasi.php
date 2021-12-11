<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Registrasi</small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Registrasi</li>
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
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Horizontal Form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <?php if (isset($validation)) : ?>
              <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
            <?php endif; ?>
            <form class="form-horizontal" action="/register/save" method="post">
              <div class="card-body">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Dinas</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_dinas" placeholder="Nama Dinas">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Visi Misi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="visimisi" placeholder="Visi Misi">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Sejarah</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="sejarah" placeholder="Sejarah">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="confpassword" placeholder="Confirm Password">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="InputLogo" class="col-sm-2 col-form-label">Logo Dinas</label>
                  <div class="col-sm-5">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="logo_dinas">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="offset-sm-2 col-sm-10">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck2">
                      <label class="form-check-label" for="exampleCheck2">Remember me</label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-info">Submit</button>
                <button type="submit" class="btn btn-default float-right">Cancel</button>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
  </section>
  <!-- /.content -->

</div>
<?= $this->endSection(); ?>