<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Laporan Produksi Tanaman Pangan, Holtikultura, dan Perkebunan</small></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Laporan</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div>
  </div>
  <!-- /.content-header -->

  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-12 border-bottom-0">
          <a href="/tanaman/tambah" class="btn btn-primary mr-2"><i class="fas fa-plus"></i> Tambah Data Pangan</a>
          <a href="" class="btn btn-secondary mr-2"><i class="fas fa-print"></i> Print</a>
          <a href="" class="btn btn-success"><i class="fas fa-download"></i> Download (PDF)</a>
        </div>
        <div class="col-md-12 mt-3">
          <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert bg-gradient-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h5><i class="icon fas fa-check"></i> Data berhasil <?= session()->getFlashdata('pesan'); ?></h5>
            </div>
          <?php endif; ?>
          <div class="card">
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Komoditas</th>
                    <th>Kepemilikan</th>
                    <th>Lokasi</th>
                    <th>Jenis Tanam</th>
                    <th>Luas Panen</th>
                    <th>Produktivitas</th>
                    <th></th>
                  </tr>

                </thead>
                <tbody>
                  <?php $i = 1;
                  foreach ($tanaman as $tan) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $tan['komoditas']; ?> </td>
                      <td><?= $tan['kepemilikan']; ?></td>
                      <td><?= $tan['kecamatan']; ?></td>
                      <td><?= $tan['jenis_tanam']; ?></td>
                      <td><?= $tan['ls_panen']; ?></td>
                      <td><?= $tan['produktivitas']; ?></td>
                      <td>
                        <div class="btn-group">
                          <a href="/tanaman/detail/<?= $tan['id_tanam']; ?>" class="btn btn-info btn-sm" type="button">
                            <i class="fa fa-folder-open"></i></a>
                          <a href="/tanaman/edit/<?= $tan['id_tanam']; ?>" class="btn btn-warning btn-sm" type="button">
                            <i class="fa fa-edit"></i></a>
                          <a href="/tanaman/hapus/<?= $tan['id_tanam']; ?>" class="btn btn-danger btn-sm" type="button" onclick="return confirm('Apakah anda yakin?');">
                            <i class="fa fa-trash"></i></a>
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