<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Laporan Ketersediaan Pangan</small></h1>

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
        <div class="col-md-3">
          <div class="card">
            <div class="card-header">
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                  <a href="/tanaman/tambah" class="nav-link">
                    <i class="fas fa-plus"></i> Tambah Data
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/print" class="nav-link">
                    <i class="fas fa-print"></i> Print
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/download" class="nav-link">
                    <i class="fas fa-download"></i> Download (PDF)
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/dashboard" class="nav-link">
                    <i class="fas fa-reply"></i> Kembali
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
        <div class="col-9">
          <div class="card">
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Komoditas</th>
                    <th>Kepemilikan</th>
                    <th>Lokasi</th>
                    <th></th>
                  </tr>
                
                </thead>
                <tbody>
                  <?php foreach($tanaman as $tan): ?>
                  <tr>
                    <td>1</td>
                    <td><?= $tan['komoditas']; ?> </td>
                    <td><?= $tan['kepemilikan']; ?></td>
                    <td><?= $tan['kecamatan']; ?></td>
                    <td>
                    
                      <a href="/tanaman/detail" class="btn btn-block btn-info btn-sm" type="button">
                        <i class="fa fa-folder-open"></i> Detail</a>
                    </td>
                  </tr>
                    <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
</div>

<?= $this->endSection(); ?>