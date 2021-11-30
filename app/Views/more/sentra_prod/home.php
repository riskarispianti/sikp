<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Sentra Produksi</small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Sentra Produksi</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-12 border-bottom-0">
          <a href="/sentraprod/tambah" class="btn bg-gradient-indigo"><i class="fas fa-plus"></i> Tambah Sentra Produksi</a>
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
                    <th>Nama/Identitas Sentra Produksi</th>
                    <th>Kecamatan</th>
                    <th>Kelurahan</th>
                    <th style="width: 100px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;
                  foreach ($sentra as $sen) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $sen['nama_sp']; ?> </td>
                      <td><?= $sen['kecamatan']; ?> </td>
                      <td><?= $sen['kelurahan']; ?> </td>
                      <td>
                        <div class="btn-group">
                          <a href="/sentraprod/edit/<?= $sen['id_sp']; ?>" class="btn btn-warning btn-sm" type="button">
                            <i class="fa fa-edit"></i> Edit</a>
                          <a href="/sentraprod/hapus/<?= $sen['id_sp']; ?>" class="btn btn-danger btn-sm" type="button" onclick="return confirm('Apakan anda yakin?');">
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