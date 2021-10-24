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
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Tanaman Pangan</th>
                    <th>Jenis Pangan</th>
                    <th>Tempat Produksi</th>
                    <th> </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>
                      <a href="/laporan/detail" class="btn btn-info"><i class="fas fa-folder"></i> Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Internet
                      Explorer 5.0
                    </td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td>
                      <a href="/laporan/detail" class="btn btn-info"><i class="fas fa-folder"></i> Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Internet
                      Explorer 5.5
                    </td>
                    <td>Win 95+</td>
                    <td>5.5</td>
                    <td>
                      <a href="/laporan/detail" class="btn btn-info"><i class="fas fa-folder"></i> Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Internet
                      Explorer 6
                    </td>
                    <td>Win 98+</td>
                    <td>6</td>
                    <td>
                      <a href="/laporan/detail" class="btn btn-info"><i class="fas fa-folder"></i> Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Internet Explorer 7</td>
                    <td>Win XP SP2+</td>
                    <td>7</td>
                    <td>
                      <a href="/laporan/detail" class="btn btn-info"><i class="fas fa-folder"></i> Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>AOL browser (AOL desktop)</td>
                    <td>Win XP</td>
                    <td>6</td>
                    <td>
                      <a href="/laporan/detail" class="btn btn-info"><i class="fas fa-folder"></i> Detail</a>
                    </td>
                  </tr>
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