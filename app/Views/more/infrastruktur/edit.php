<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Infrastruktur Produksi</small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="/infrastruktur">Infrastruktur</a></li>
            <li class="breadcrumb-item active">Edit</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div>
  </div>

  <section class="content">
    <div class="container">
      <form class="form-horizontal" action="/infrastruktur/update/<?= $infrastruktur['id_ip']; ?>" method="post">
        <?= csrf_field() ?>
        <div class="row">
          <div class="col-sm-12">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                  <li class="pt-2 px-3">
                    <h3 class="card-title">Edit Data</h3>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Infrastruktur Produksi</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                    <div class="card-body text-muted">
                      <h4 class="text-center">Infrastruktur Produksi</h4>
                      <div class="form-group row my-4">
                        <label for="sarana_pengairan" class="col-sm-5 col-form-label">Sarana Pengairan</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control <?= ($validation->hasError('sarana_pengairan')) ? 'is-invalid' : ''; ?>" name="sarana_pengairan" value="<?= $infrastruktur['sarana_pengairan']; ?>">
                          <div class="invalid-feedback text-danger">
                            <?= $validation->getError('sarana_pengairan'); ?>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row my-4">
                        <label for="pengel_jar_irigasi" class="col-sm-5 col-form-label">Pengelolaan Jaringan Irigasi</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control <?= ($validation->hasError('pengel_jar_irigasi')) ? 'is-invalid' : ''; ?>" name="pengel_jar_irigasi" value="<?= $infrastruktur['pengel_jar_irigasi']; ?>">
                          <div class="invalid-feedback text-danger">
                            <?= $validation->getError('pengel_jar_irigasi'); ?>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row my-4">
                        <label for="infras_pengel_air" class="col-sm-5 col-form-label">infrastruktur Pengelolaan Irigasi</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control <?= ($validation->hasError('infras_pengel_air')) ? 'is-invalid' : ''; ?>" name="infras_pengel_air" value="<?= $infrastruktur['infras_pengel_air']; ?>">
                          <div class="invalid-feedback text-danger">
                            <?= $validation->getError('infras_pengel_air'); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="/infrastruktur" class="btn bg-gradient-warning">Batal</a>
            <input type="submit" value="Ubah Data Infrastruktur" class="btn bg-gradient-primary">
          </div>
        </div>
      </form>
    </div>
  </section>

</div>

<?= $this->endSection(); ?>