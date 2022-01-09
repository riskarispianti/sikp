<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="/img/sin2.png" alt="Sinkepang" height="100">
</div>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"> Aplikasi Ketersediaan Pangan</small></h1>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-md">
          <div class="row text-center">
            <div class="col-md-4">
              <div class="card">
                <div class="card-header border-0">
                  <h3 class="card-title">Tanaman Pangan</h3>
                </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                  <table class="table table-striped table-valign-middle">
                    <thead>
                      <tr>
                        <th style="width: 10px;">#</th>
                        <th>Pemilik</th>
                        <th>Komoditas</th>
                        <th style="width: 50px;">Info</th>
                      </tr>
                    </thead>
                    <tbody class="text-sm">
                      <?php $i = 1;
                      foreach ($tanaman as $tan) : ?>
                        <tr>
                          <td><?= $i++; ?></td>
                          <td><?= $tan['kepemilikan']; ?> </td>
                          <td><?= $tan['komoditas']; ?> </td>
                          <td><a href="/tanaman/detail_home/<?= $tan['id_tanam']; ?>" class="btn bg-info btn-sm"><i class="fas fa-folder-open"></i></a></td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header border-0">
                  <h3 class="card-title">Peternakan</h3>
                </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                  <table class="table table-striped table-valign-middle">
                    <thead>
                      <tr>
                        <th style="width: 10px;">#</th>
                        <th>Pemilik</th>
                        <th>Komoditas</th>
                        <th style="width: 50px;">Info</th>
                      </tr>
                    </thead>
                    <tbody class="text-sm">
                      <?php $i = 1;
                      foreach ($peternakan as $pet) : ?>
                        <tr>
                          <td><?= $i++; ?></td>
                          <td><?= $pet['kepemilikan']; ?> </td>
                          <td><?= $pet['komoditas']; ?> </td>
                          <td><a href="/peternakan/detail_home/<?= $pet['id_ternak']; ?>" class="btn bg-info btn-sm"><i class="fas fa-folder-open"></i></a></td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header border-0">
                  <h3 class="card-title">Perikanan</h3>
                </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                  <table class="table table-striped table-valign-middle">
                    <thead>
                      <tr>
                        <th style="width: 10px;">#</th>
                        <th>Pemilik</th>
                        <th>Komoditas</th>
                        <th style="width: 50px;">Info</th>
                      </tr>
                    </thead>
                    <tbody class="text-sm">
                      <?php $i = 1;
                      foreach ($perikanan as $per) : ?>
                        <tr>
                          <td><?= $i++; ?></td>
                          <td><?= $per['kepemilikan']; ?> </td>
                          <td><?= $per['komoditas']; ?> </td>
                          <td><a href="/perikanan/detail_home/<?= $per['id_ikan']; ?>" class="btn bg-info btn-sm"><i class="fas fa-folder-open"></i></a></td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
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
                <a href="/peternakan" class="btn btn-sm btn-outline-success">
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
                <a href="/perikanan" class="btn btn-sm btn-outline-primary">
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