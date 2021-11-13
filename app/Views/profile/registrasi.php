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
            <li class="breadcrumb-item"><a href="/profile">Profile</a></li>
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
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Account</h3>
            </div>
            <div class="card-body p-0">
              <div class="bs-stepper">
                <div class="bs-stepper-header" role="tablist">
                  <!-- your steps here -->
                  <div class="step" data-target="#logins-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                      <span class="bs-stepper-circle">1</span>
                      <span class="bs-stepper-label">Profile</span>
                    </button>
                  </div>
                  <div class="line"></div>
                  <div class="step" data-target="#information-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                      <span class="bs-stepper-circle">2</span>
                      <span class="bs-stepper-label">Logins</span>
                    </button>
                  </div>
                </div>

                <?php if (isset($validation)) : ?>
                  <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif; ?>
                <form action="/register/save" method="post">
                  <div class="mb-3">

                    <div class="bs-stepper-content">
                      <!-- your steps content here -->
                      <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                        <form class="form-horizontal">
                          <div class="form-group row">
                            <label for="InputNama" class="col-sm-2 col-form-label">Nama Dinas</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nama_dinas" placeholder="Nama dinas">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="InputVisiMisi" class="col-sm-2 col-form-label">Visi & Misi</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" placeholder="Visi & Misi">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="InputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="alamat_dinas" placeholder="Alamat">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="InputSejarah" class="col-sm-2 col-form-label">Sejarah</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" id="sejarah" placeholder="Sejarah"></textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="InputLogo" class="col-sm-2 col-form-label">Logo Dinas</label>
                            <div class="col-sm-5">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <div>
                                <img class="attachment-img" src="/dist/img/AdminLTELogo.png" alt="Logo" width="150">
                              </div>
                            </div>
                          </div>
                        </form>
                        <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                      </div>



                      <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                        <form class="form-horizontal">
                          <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="username" placeholder="Username">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" placeholder="Password">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="password2" class="col-sm-2 col-form-label">Password 2</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="password2" placeholder="Password 2">
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                </label>
                              </div>
                            </div>
                          </div>
                        </form>
                        <button class="btn btn-warning" onclick="stepper.previous()">Previous</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </div>
              </div>
              </form>
              <!-- /.card-body -->
              <div class="card-footer">

              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
  </section>
  <!-- /.content -->

</div>
<?= $this->endSection(); ?>