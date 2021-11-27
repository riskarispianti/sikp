<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Jumlah Persediaan Pangan</small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active">Grafik</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg">
          <div class="card-header text-center">
            <a href="" type="button" class="btn btn-primary mr-2">Produksi</a>
            <a href="" type="button" class="btn btn-info mr-2">Daerah Produksi</a>
            <a href="" type="button" class="btn btn-warning">Tahun Produksi</a>
          </div>

          <div class="card">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h2>Produksi</h2>
              </div>
            </div>
            <div class="card-body">
              <div class="position-relative mb-4">
                <canvas id="sales-chart" height="500"></canvas>
              </div>
              <div class="d-flex flex-row justify-content-end">
                <span class="mr-2">
                  <i class="fas fa-square text-primary"></i> Tanaman Pangan
                </span>
                <span>
                  <i class="fas fa-square text-gray"></i> Peternakan
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div>
  </div>
  <!-- /.content -->
</div>

<?= $this->endSection(); ?>