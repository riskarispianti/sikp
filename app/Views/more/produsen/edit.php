<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Produsen</small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="/produsen">Produsen</a></li>
            <li class="breadcrumb-item active">Edit</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container">
      <form class="form-horizontal" action="/produsen/update/<?= $produsen['id_produsen']; ?>" method="post">
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
                    <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Produsen</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                    <div class="card-body text-muted">
                      <h4 class="text-center">Produsen</h4>
                      <div class="form-group row my-4">
                        <label for="jml_penghasil_kom" class="col-sm-5 col-form-label">Jumlah Penghasil Komoditas</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control <?= ($validation->hasError('jml_penghasil_kom')) ? 'is-invalid' : ''; ?>" name="jml_penghasil_kom" value="<?= $produsen['jml_penghasil_kom']; ?>">
                          <div class="invalid-feedback text-danger">
                            <?= $validation->getError('jml_penghasil_kom'); ?>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row my-4">
                        <label for="pembinaan" class="col-sm-5 col-form-label">Pembinaan</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control <?= ($validation->hasError('pembinaan')) ? 'is-invalid' : ''; ?>" name="pembinaan" value="<?= $produsen['pembinaan']; ?>">
                          <div class="invalid-feedback text-danger">
                            <?= $validation->getError('pembinaan'); ?>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row my-4">
                        <label for="kelembagaan" class="col-sm-5 col-form-label">Kelembagaan</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control <?= ($validation->hasError('kelembagaan')) ? 'is-invalid' : ''; ?>" name="kelembagaan" value="<?= $produsen['kelembagaan']; ?>">
                          <div class="invalid-feedback text-danger">
                            <?= $validation->getError('kelembagaan'); ?>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row my-4">
                        <label for="kesejahteraan" class="col-sm-5 col-form-label">Kesejahteraan</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control <?= ($validation->hasError('kesejahteraan')) ? 'is-invalid' : ''; ?>" name="kesejahteraan" value="<?= $produsen['kesejahteraan']; ?>">
                          <div class="invalid-feedback text-danger">
                            <?= $validation->getError('kesejahteraan'); ?>
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
            <a href="/produsen" class="btn bg-gradient-warning">Batal</a>
            <input type="submit" value="Ubah Data Produsen" class="btn bg-gradient-primary">
          </div>
        </div>
      </form>
    </div>
  </section>

</div>

<?= $this->endSection(); ?>