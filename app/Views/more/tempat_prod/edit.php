<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Tempat Produksi</small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="/tempatprod">Tempat Produksi</a></li>
            <li class="breadcrumb-item active">Edit</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container">
      <form class="form-horizontal" action="/tempatprod/update/<?= $tempat['id_tp']; ?>" method="post">
        <?= csrf_field() ?>
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header bg-gradient-indigo">
                <h3 class="card-title">Edit Tempat Produksi</h3>
              </div>
              <div class="card-body text-muted">
                <h4 class="text-center">Tempat Produksi</h4>
                <div class="form-group row my-4">
                  <label for="letak_prod" class="col-sm-5 col-form-label">Letak Kawasan Produksi</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control <?= ($validation->hasError('letak_prod')) ? 'is-invalid' : ''; ?>" name="letak_prod" value="<?= $tempat['letak_prod']; ?>">
                    <div class="invalid-feedback text-danger">
                      <?= $validation->getError('letak_prod'); ?>
                    </div>
                  </div>
                </div>
                <div class="form-group row my-4">
                  <label for="luas_prod" class="col-sm-5 col-form-label">Luas Kawasan Produksi</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control <?= ($validation->hasError('luas_prod')) ? 'is-invalid' : ''; ?>" name="luas_prod" value="<?= $tempat['luas_prod']; ?>">
                    <div class="invalid-feedback text-danger">
                      <?= $validation->getError('luas_prod'); ?>
                    </div>
                  </div>
                </div>
                <div class="form-group row my-4">
                  <label for="kepemilikan" class="col-sm-5 col-form-label">Kepemilikan</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control <?= ($validation->hasError('kepemilikan')) ? 'is-invalid' : ''; ?>" name="kepemilikan" value="<?= $tempat['kepemilikan']; ?>">
                    <div class="invalid-feedback text-danger">
                      <?= $validation->getError('kepemilikan'); ?>
                    </div>
                  </div>
                </div>
                <div class="form-group row my-4">
                  <label for="status_lahan" class="col-sm-5 col-form-label">Status Tempat Produksi</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control <?= ($validation->hasError('status_lahan')) ? 'is-invalid' : ''; ?>" name="status_lahan" value="<?= $tempat['status_lahan']; ?>">
                    <div class="invalid-feedback text-danger">
                      <?= $validation->getError('status_lahan'); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="/tempatprod" class="btn bg-gradient-warning mr-2">Batal</a>
            <input type="submit" value="Edit Tempat Produksi" class="btn bg-gradient-indigo">
          </div>
        </div>
      </form>
    </div>
  </section>

</div>

<?= $this->endSection(); ?>