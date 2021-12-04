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
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <section class="content">
    <div class="container">
      <div class="row">
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-tambah">
          Tambah Komdoitas
        </button>
        <div class="col-md-12 border-bottom-0">
          <a href="/komoditas/tambah" class="btn btn-primary mr-2"><i class="fas fa-plus"></i> Tambah Komoditas</a>
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
                      <td>
                        <div class="btn-group">
                          <a href="/komoditas/edit/<?= $kom['id_kom']; ?>" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-edit" type="button">
                            <i class="fa fa-edit"></i> Edit</a>
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
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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