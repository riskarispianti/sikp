<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tambah Infrastruktur Peternakan</small></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="/infrasternak">Infrastruktur</a></li>
            <li class="breadcrumb-item active">Tambah</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container">
      <form class="form-horizontal" action="/infrasternak/save" method="post">
        <?= csrf_field() ?>
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header bg-gradient-indigo">
                <h3 class="card-title">Tambah Infrastruktur Peternakan</h3>
              </div>
              <div class="card-body text-muted">
                <h4 class="text-center">Peternakan</h4>
                <div class="form-group row my-4">
                  <label for="kandang" class="col-sm-5 col-form-label">Kandang</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control <?= ($validation->hasError('kandang')) ? 'is-invalid' : ''; ?>" name="kandang" placeholder="Kandang">
                    <div class="invalid-feedback text-danger">
                      <?= $validation->getError('kandang'); ?>
                    </div>
                  </div>
                </div>
                <div class="form-group row my-4">
                  <label for="lok_rph" class="col-sm-5 col-form-label">Lokasi Rumah Pemotongan Hewan (RPH)</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control <?= ($validation->hasError('lok_rph')) ? 'is-invalid' : ''; ?>" name="lok_rph" placeholder="Lokasi">
                    <div class="invalid-feedback text-danger">
                      <?= $validation->getError('lok_rph'); ?>
                    </div>
                  </div>
                </div>
                <div class="form-group row my-4">
                  <label for="kapasitas_rph" class="col-sm-5 col-form-label">Kapasitas RPH</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control <?= ($validation->hasError('kapasitas_rph')) ? 'is-invalid' : ''; ?>" name="kapasitas_rph" placeholder="Kapasitas">
                    <div class="invalid-feedback text-danger">
                      <?= $validation->getError('kapasitas_rph'); ?>
                    </div>
                  </div>
                </div>
                <div class="form-group row my-4">
                  <label for="pemilik" class="col-sm-5 col-form-label">Pemilik</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control <?= ($validation->hasError('pemilik')) ? 'is-invalid' : ''; ?>" name="pemilik" placeholder="Pemilik">
                    <div class="invalid-feedback text-danger">
                      <?= $validation->getError('pemilik'); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="/infrasternak" class="btn bg-gradient-warning mr-2">Batal</a>
            <input type="submit" value="Tambah Infrastruktur" class="btn bg-gradient-indigo">
          </div>
        </div>
      </form>
    </div>
  </section>

</div>

<?= $this->endSection(); ?>