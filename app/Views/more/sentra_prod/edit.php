<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Sentra Produksi</small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="/sentraprod">Sentra Produksi</a></li>
            <li class="breadcrumb-item active">Edit</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container">
      <form class="form-horizontal" action="/sentraprod/update/<?= $sentra['id_sp']; ?>" method="post">
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
                    <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Sentra Produksi</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                    <div class="card-body text-muted">
                      <h4 class="text-center">Sentra Produksi</h4>
                      <div class="form-group row my-4">
                        <label for="nama_sp" class="col-sm-5 col-form-label">Nama/Identitas Sentra Produksi</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control <?= ($validation->hasError('nama_sp')) ? 'is-invalid' : ''; ?>" name="nama_sp" value="<?= $sentra['nama_sp']; ?>">
                          <div class="invalid-feedback text-danger">
                            <?= $validation->getError('nama_sp'); ?>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row my-4">
                        <label for="kecamatan" class="col-sm-5 col-form-label">Kecamatan</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control <?= ($validation->hasError('kecamatan')) ? 'is-invalid' : ''; ?>" name="kecamatan" value="<?= $sentra['kecamatan']; ?>">
                          <div class="invalid-feedback text-danger">
                            <?= $validation->getError('kecamatan'); ?>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row my-4">
                        <label for="kelurahan" class="col-sm-5 col-form-label">Kelurahan</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control <?= ($validation->hasError('kelurahan')) ? 'is-invalid' : ''; ?>" name="kelurahan" value="<?= $sentra['kelurahan']; ?>">
                          <div class="invalid-feedback text-danger">
                            <?= $validation->getError('kelurahan'); ?>
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
            <a href="/sentraprod" class="btn bg-gradient-warning">Batal</a>
            <input type="submit" value="Edit Sentra Produksi" class="btn bg-gradient-primary">
          </div>
        </div>
      </form>
    </div>
  </section>

</div>

<?= $this->endSection(); ?>