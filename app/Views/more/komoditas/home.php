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
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Komoditas</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container">
      <div class="row">
        <<<<<<< HEAD <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-tambah">
          Tambah Komdoitas
          </button>
          <div class="col-md-12 border-bottom-0">
            <a href="/komoditas/tambah" class="btn btn-primary mr-2"><i class="fas fa-plus"></i> Tambah Komoditas</a>
            =======
            <div class="col-md-12 border-bottom-0" id="accordion">
              <a data-toggle="collapse" href="#collapseOne" class="btn bg-gradient-fuchsia"><i class="fas fa-plus"></i> Tambah Komoditas</a>
              >>>>>>> 9d51e235469236e8a42896cb951174073fd9c033
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
                        <th style="width: 100px">Aksi</th>
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
                              <a href="/<?= $kom['id_kom']; ?>" class="btn btn-warning" data-toggle="collapse" data-target="#collapseTwo"><i class="fas fa-edit"></i> Edit</a>
                              <a href="/komoditas/hapus/<?= $kom['id_kom']; ?>" class="btn btn-danger btn-sm" type="button" onclick="return confirm('Apakah anda yakin?')">
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
                          <input type="text" class="form-control <?= ($validation->hasError('komoditas')) ? 'is-invalid' : ''; ?>" name="komoditas" placeholder="Komoditas" autofocus>
                          <div class="invalid-feedback text-danger">
                            <?= $validation->getError('komoditas'); ?>
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
              <form action="" method="post">
                <div class="card collapse <?= ($validation->hasError('komoditas')) ? 'show' : ''; ?>" id="collapseTwo" data-parent="#accordion">
                  <div class="card-header bg-gradient-fuchsia">
                    <h3 class="card-title">Komoditas</h3>
                  </div>
                  <div class="card-body">
                    <div class="card-body text-muted">
                      <div class="form-group row">
                        <label for="komoditas" class="col-sm-5 col-form-label">Komoditas</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control <?= ($validation->hasError('komoditas')) ? 'is-invalid' : ''; ?>" name="komoditas" value="<?= $kom['komoditas']; ?>">
                          <div class="invalid-feedback text-danger">
                            <?= $validation->getError('komoditas'); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="footer text-center mb-3">
                    <a data-toggle="collapse" href="#collapseTwo" class="btn bg-gradient-warning mr-3">Batal</a>
                    <input type="submit" value="Edit Komoditas" class="btn bg-gradient-fuchsia">
                  </div>
                </div>
              </form>
            </div>
          </div>
      </div>
  </section>

</div>


<!-- modal tambah -->
<div class="modal fade" id="modal-tambah">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Komoditas</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="/komoditas/save" method="post">
          <?= csrf_field() ?>
          <div class="form-group row my-6">
            <label for="letak_prod" class="col-sm-5 col-form-label">Komoditas</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="komoditas" placeholder="Komdoitas">
            </div>
          </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- //modal tambah// -->

<!-- modal edit -->
<div class="modal fade" id="modal-edit">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Komoditas</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="/komoditas/update/<?= $kom['id_kom']; ?>" method="post">
          <?= csrf_field() ?>
          <div class="form-group row my-6">
            <label for="letak_prod" class="col-sm-5 col-form-label">Komoditas</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="komoditas" value="<?= $kom['komoditas']; ?>">
            </div>
          </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- //modal edit// -->
<?= $this->endSection(); ?>