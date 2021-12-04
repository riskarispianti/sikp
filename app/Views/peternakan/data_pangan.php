<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Laporan Produksi Peternakan</small></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Laporan</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-12 border-bottom-0">
          <a href="/peternakan/tambah" class="btn btn-success mr-2"><i class="fas fa-plus"></i> Tambah Data Pangan</a>
          <a href="" class="btn btn-secondary mr-2"><i class="fas fa-print"></i> Print</a>
          <a href="" class="btn btn-success"><i class="fas fa-download"></i> Download (PDF)</a>
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
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Komoditas</th>
                    <th>Kepemilikan</th>
                    <th>Lokasi</th>
                    <th>Jenis Ternak</th>
                    <th>Jumlah Populasi</th>
                    <th>Sistem Pemeliharaan Ternak</th>
                    <th>Aksi</th>
                  </tr>

                </thead>
                <tbody>
                  <?php $i = 1;
                  foreach ($peternakan as $pet) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $pet['komoditas']; ?> </td>
                      <td><?= $pet['kepemilikan']; ?></td>
                      <td><?= $pet['kecamatan']; ?></td>
                      <td><?= $pet['jenis_ternak']; ?></td>
                      <td><?= $pet['jml_populasi']; ?> Ekor</td>
                      <td><?= $pet['sistem_pemel_ternak']; ?></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="/peternakan/detail/<?= $pet['id_ternak']; ?>" class="btn btn-info btn-sm" type="button">
                            <i class="fa fa-folder-open"></i></a>
                          <a href="" class="btn btn-warning btn-sm" type="button">
                            <i class="fa fa-edit"></i></a>
                          <a href="" class="btn btn-danger btn-sm" type="button" onclick="return confirm('Apakah anda yakin?');">
                            <i class="far fa-trash-alt"></i></a>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>