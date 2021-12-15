<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Komoditas</small></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Komoditas</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-sm">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Apakah Anda Yakin?</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Komoditas&hellip; akan dihapus!!</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger">Yes, Delete</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-12 border-bottom-0" id="accordion">
          <a data-toggle="collapse" href="#collapseOne" class="btn bg-gradient-fuchsia"><i class="fas fa-plus"></i> Tambah Komoditas</a>
        </div>
        <div class="col-md-6 mt-3">
          <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert bg-gradient-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h5><i class="icon fas fa-check"></i> Komoditas berhasil <?= session()->getFlashdata('pesan'); ?></h5>
            </div>
          <?php endif; ?>
          <div class="card">
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead class="text-center">
                  <tr>
                    <th style="width: 10px;">#</th>
                    <th>Komoditas</th>
                    <th style="width: 130px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;
                  foreach ($komoditas as $kom) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $kom['komoditas']; ?> </td>
                      <td class="text-center">
                        <div class="btn-group btn-group-sm">
                          <a href="/komoditas/hapus/<?= $kom['id_kom']; ?>" class="btn btn-danger btn-sm" type="button" onclick="return confirm('Apakah anda yakin?')">
                            <i class="far fa-trash-alt"></i> Hapus</a>
                          <a href="/komoditas/hapus/<?= $kom['id_kom']; ?>" class="btn btn-warning btn-sm" type="button" data-toggle="modal" data-target="#modal-sm">
                            <i class="far fa-trash-alt"></i> Hapus</a>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-6 mt-3">
          <form action="/komoditas/save" method="post">
            <div class="card collapse <?= ($validation->hasError('komoditas')) ? 'show' : ''; ?>" id="collapseOne" data-parent="#accordion">
              <div class="card-header bg-gradient-fuchsia">
                <h3 class="card-title">Komoditas</h3>
              </div>
              <div class="card-body">
                <div class="card-body text-muted">
                  <div class="form-group row">
                    <label for="komoditas" class="col-sm-5 col-form-label">Komoditas</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control <?= ($validation->hasError('komoditas')) ? 'is-invalid' : ''; ?>" name="komoditas" placeholder="Komoditas" autofocus value="<?= old('komoditas'); ?>">
                      <div class="invalid-feedback text-danger">
                        <?= $validation->getError('komoditas'); ?>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="g_kom" class="col-sm-5 col-form-label">Produksi</label>
                    <div class="col-sm-7">
                      <select class="form-control select2bs4 <?= ($validation->hasError('g_kom')) ? 'is-invalid' : ''; ?>" name="g_kom">
                        <option selected disabled></option>
                        <option <?= (old('g_kom') == 'Tanaman' ? 'selected' : ''); ?>>Tanaman</option>
                        <option <?= (old('g_kom') == 'Peternakan' ? 'selected' : ''); ?>>Peternakan</option>
                        <option <?= (old('g_kom') == 'Perikanan' ? 'selected' : ''); ?>>Perikanan</option>
                      </select>
                      <div class="invalid-feedback text-danger">
                        <?= $validation->getError('g_kom'); ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="footer text-center mb-3">
                <a data-toggle="collapse" href="#collapseOne" class="btn bg-gradient-warning mr-3">Batal</a>
                <input type="submit" value="Tambah Komoditas" class="btn bg-gradient-fuchsia">
              </div>
            </div>
          </form>
        </div>
  </section>
</div>

<?= $this->endSection(); ?>