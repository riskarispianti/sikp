<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tambah Produsen</small></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="/produsen">Produsen</a></li>
            <li class="breadcrumb-item active">Tambah</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container">
      <form class="form-horizontal" action="/produsen/save" method="post">
        <?= csrf_field() ?>
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header bg-gradient-indigo">
                <h3 class="card-title">Tambah Produsen</h3>
              </div>
              <div class="card-body text-muted">
                <h4 class="text-center">Produsen</h4>
                <div class="form-group row my-4">
                  <label for="kelembagaan" class="col-sm-5 col-form-label">Kelembagaan</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control <?= ($validation->hasError('kelembagaan')) ? 'is-invalid' : ''; ?>" name="kelembagaan" placeholder="Kelembagaan">
                    <div class="invalid-feedback text-danger">
                      <?= $validation->getError('kelembagaan'); ?>
                    </div>
                  </div>
                </div>
                <div class="form-group row my-4">
                  <label for="jml_penghasil_kom" class="col-sm-5 col-form-label">Jumlah Penghasil Komoditas</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control <?= ($validation->hasError('jml_penghasil_kom')) ? 'is-invalid' : ''; ?>" name="jml_penghasil_kom" placeholder="jumlah">
                    <div class="invalid-feedback text-danger">
                      <?= $validation->getError('jml_penghasil_kom'); ?>
                    </div>
                  </div>
                </div>
                <div class="form-group row my-4">
                  <label for="pembinaan" class="col-sm-5 col-form-label">Pembinaan</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control <?= ($validation->hasError('pembinaan')) ? 'is-invalid' : ''; ?>" name="pembinaan" placeholder="Pembinaan">
                    <div class="invalid-feedback text-danger">
                      <?= $validation->getError('pembinaan'); ?>
                    </div>
                  </div>
                </div>
                <div class="form-group row my-4">
                  <label for="kesejahteraan" class="col-sm-5 col-form-label">Kesejahteraan</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control <?= ($validation->hasError('kesejahteraan')) ? 'is-invalid' : ''; ?>" name="kesejahteraan" placeholder="Kesejahteraan">
                    <div class="invalid-feedback text-danger">
                      <?= $validation->getError('kesejahteraan'); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="/produsen" class="btn bg-gradient-warning mr-2">Batal</a>
            <input type="submit" value="Tambah Produsen" class="btn bg-gradient-indigo">
          </div>
        </div>
      </form>
    </div>
  </section>

</div>

<?= $this->endSection(); ?>