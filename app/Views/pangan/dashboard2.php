<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"> Aplikasi Ketersediaan Pangan</small></h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-md">
          <div class="card">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h4>Produksi</h4>
              </div>
            </div>
            <div class="card-body">
              <div class="position-relative mb-4">
                <canvas id="sales-chart" height="200"></canvas>
              </div>
              <div class="d-flex flex-row justify-content-end">
                <span class="mr-2">
                  <i class="fas fa-square text-primary"></i> in year
                </span>
                <span>
                  <i class="fas fa-square text-gray"></i> last year
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
          <div class="card bg-light d-flex flex-fill">
            <div class="card-header text-muted border-bottom-0">
              Produksi
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col-7 mt-5">
                  <h1 class="lead"><b>Tanaman Pangan, Holtikultura, dan Perkebunan</b></h1>
                </div>
                <div class="col-5 text-center">
                  <img src="/img/sabuah.png" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="text-right">
                <a href="/tanaman" class="btn btn-sm btn-outline-info">
                  More info <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
          <div class="card bg-light d-flex flex-fill">
            <div class="card-header text-muted border-bottom-0">
              Produksi
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col-7 mt-5">
                  <h1 class="lead"><b>Peternakan</b></h1>
                </div>
                <div class="col-5 text-center">
                  <img src="/img/kandang.png" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="text-right">
                <a href="#" class="btn btn-sm btn-outline-success">
                  More info <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
          <div class="card bg-light d-flex flex-fill">
            <div class="card-header text-muted border-bottom-0">
              Produksi
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col-7 mt-5">
                  <h1 class="lead"><b>Perikanan</b></h1>
                </div>
                <div class="col-5 text-center">
                  <img src="/img/emberikan2.png" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="text-right">
                <a href="#" class="btn btn-sm btn-outline-primary">
                  More info <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>

<?= $this->endSection(); ?>