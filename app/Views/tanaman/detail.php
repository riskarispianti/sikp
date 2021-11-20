<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Detail</small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="/laporan">Laporan</a></li>
            <li class="breadcrumb-item active">Detail</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div>
  </div>
  <!-- /.content-header -->

  <section class="content">
    <div class="container">
      <!-- Default box -->
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row">
                <div class="col-6">
                  <div class="row">
                    <div class="card-body">
                      <div class="card card-info card-outline">
                        <div class="card-header">
                          <h5 class="card-title">Kelompok/Jenis Pangan</h5>

                        </div>
                        <div class="card-body">
                          <strong>jenis_tanam</strong>
                        </div>
                      </div>

                      <div class="card card-primary card-outline">
                        <div class="card-header">
                          <h5 class="card-title">Ancaman Produksi</h5>

                        </div>
                        <div class="card-body">
                          <strong>nama_amcaman</strong>

                          <p class="text-muted">
                            dengan menyemprotkan pestisida kepada tanaman cabai tersebut
                          </p>
                        </div>
                      </div>

                      <div class="card card-primary card-outline">
                        <div class="card-header">
                          <h5 class="card-title">Infrastruktur Produksi</h5>

                        </div>
                        <div class="card-body">
                          <strong>Sarana dan Prasarana Pengairan</strong>

                          <p class="text-muted">
                            Irigasi
                          </p>
                          <strong>Pengelolaan Jaringan Irigasi, Embung dan Rawa</strong>

                          <p class="text-muted">
                            Jaringan irigasi memakai air hujan
                          </p>
                          <strong>Insfrastruktur Pengelolaan Air Bagi Pertanian</strong>



                          
                          <p class="text-muted">
                            
                          
                          </p>
                        </div>
                      </div>

                      <div class="card card-primary card-outline">
                        <div class="card-header">
                          <h5 class="card-title">Produsen</h5>

                        </div>
                        <div class="card-body">
                          <strong>Jumlah Produsen/Petani Pengahasil Komoditas</strong>
                          <p class="text-muted">
                            100 Petani
                          </p>
                          <strong>Pembinaan Kepada Produsen/Petani</strong>
                          <p class="text-muted">
                            Pada perkebunan cabai melakukan pembinaan Kepada petani pengelola perkebunan
                          </p>
                          <strong>Kelembagaan Produsen/Petani</strong>
                          p class="text-muted">
                            <?= $tanaman['kelembagaan']; ?>
                          </p>
                          <strong>Kesejahteraan Petani</strong>
                          <p class="text-muted">
                            <?= $tanaman['Kesejahteraan Petani']; ?>
                          </p>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="row">
                    <div class="card-body">
                      <div class="card card-info card-outline">
                        <div class="card-header">
                          <h5 class="card-title">Produksi Pangan</h5>

                        </div>
                        <div class="card-body">
                          <dl>
                            <dt>Kelompok/Jenis Pangan</dt>
                            <dd><?= $tanaman['jenis tanam']; ?></dd>
                            <dt>Luas Tanaman/Areal</dt>
                            <dd><?= $tanaman['ls_tanam']; ?></dd>
                            <dt>Luas Panen</dt>
                            <dd><?= $tanaman['ls_tanam']=; ?></dd>
                            <dt>Produktivitas</dt>
                            <dd><?= $tanaman['produktivitas']; ?></dd>
                            <dt>Jumlah Produksi</dt>
                            <dd><?= $tanaman['jml_prod']; ?></dd>
                            <dt>Lama Proses Produksi</dt>
                            <dd><?= $tanaman['lama_proses_prod'] ?></dd>
                            <dt>Perkiraan Iklim</dt>
                            <dd><?= $tanaman [' perk_iklim']; ?></dd>
                            <dt>Perkiraan Musim Tanaman Panen</dt>
                            <dd><?= $tanaman ['perk_tanam_panen']; ?></dd>
                            <dt>Biaya Produksi </dt>
                            <dd><?= $tanaman ['biaya_prod']; ?></dd>
                            <dt>Harga Jual Hasil Produksi </dt>
                            <dd><?= $tanaman ['harga_jual_prod']; ?></dd>
                            <dt>Lahan Produksi </dt>
                            <dd><?= $tanaman ['lahan_prod']; ?></dd>
                            <dt>Sumber Pengairan </dt>
                            <dd><?= $tanaman ['sumber_pengairan']; ?></dd>
                            <dt>Bibit </dt>
                            <dd><?= $thistanaman ['bibit']; ?>l</dd>
                            <dt>Pupuk</dt>
                            <dd><?= $tanaman ['pupuk']; ?></dd>
                            <dt>Alat atau teknologi yang digunakan</dd>
                            <dd><?= $tanaman ['alat_teknologi']; ?></dd>
                            
                            <dt>Pemanfaatan Hasil Produksi</dt>
                            <dd><?= $tanaman ['peman_hsl_prod']; ?></dd>
                            <dt>Limbah Hasil Produksi dan Pengelolaannya</dd> 
                            <dd><?= $tanaman ['limbah_hsl_prod']; ?></dd>
                          </dl>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h1 class="text-primary"><?= $tanaman['Komoditas']; ?></h1>
              <h5 class="mt-5 text-muted">Tempat Produksi</h5>
              <div class="text-muted
              <strong>Nama/Identitas Sentra Produksi</strong>
                <p class="text-muted">
                  <?= $tanaman ['nama_sp']; ?>
                </p>

                <strong>Kecamatan</strong>
                <p class="text-muted">
                  <?= $tanaman['kecamatan']; ?>
                </p>

                <strong>Kelurahan</strong>
                <p class="text-muted">
                  <?= $tanaman['kelurahan']; ?>
                </p>

                

              <h5 class="mt-5 text-muted">Senstra Produksi</h5>
              <div class="text-muted">
                <strong>Nama/Identitas Sentra Produksi</strong>
                <p class="text-muted">
                  <?= $tanaman ['nama_sp']; ?>
                </p>

                <strong>Kecamatan</strong>
                <p class="text-muted">
                  <?= $tanaman['kecamatan']; ?>
                </p>

                <strong>Kelurahan</strong>
                <p class="text-muted">
                  <?= $tanaman['kelurahan']; ?>
                </p>

              </div>
              <div class="text-center mt-5 mb-3">
                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                <a href="/tanaman" class="btn btn-sm btn-warning">Kembali</a>
                <a href="#" class="btn btn-sm btn-danger">Hapus</a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </section>

</div>

<?= $this->endSection(); ?>