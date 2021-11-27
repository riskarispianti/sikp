<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tempat Produksi</small></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tempat Produksi</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-12 border-bottom-0">
          <a href="/tempatprod/tambah" class="btn btn-primary mr-2"><i class="fas fa-plus"></i> Tambah Tempat Produksi</a>
        </div>
        <div class="col-md-12 mt-3">
          <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert bg-gradient-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h5><i class="icon fas fa-check"></i> Data berhasil <?= session()->getFlashdata('pesan'); ?></h5>
            </div>
          <?php endif; ?>
          <div class="card">
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead class="text-center">
                  <tr>
                    <th style="width: 10px;">#</th>
                    <th>Letak Kawasan Produksi</th>
                    <th>Luas Kawasan Produksi</th>
                    <th>Kepemilikan</th>
                    <th>Status Tempat Produksi</th>
                    <th style="width: 100px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;
                  foreach ($tempat as $temp) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $temp['letak_prod']; ?> </td>
                      <td><?= $temp['luas_prod']; ?> </td>
                      <td><?= $temp['kepemilikan']; ?> </td>
                      <td><?= $temp['status_lahan']; ?> </td>
                      <td>
                        <div class="btn-group">
                          <a href="" class="btn btn-warning btn-sm" type="button">
                            <i class="fa fa-edit"></i> Edit</a>
                          <a href="" class="btn btn-danger btn-sm" type="button">
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

<?= $this->endSection(); ?>