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
                      <div class="card card-primary card-outline">
                        <div class="card-header">
                          <h5 class="card-title">Produksi Pangan</h5>
                        </div>
                        <div class="card-body text-muted">
                          <dl>
                            <dt>Kelompok/Jenis Pangan</dt>
                            <dd><?= $tanaman['jenis_tanam']; ?></dd>
                            <dt>Luas Tanam/Areal</dt>
                            <dd><?= $tanaman['ls_tanam']; ?></dd>
                            <dt>Luas Panen</dt>
                            <dd><?= $tanaman['ls_panen']; ?></dd>
                            <dt>Produktivitas</dt>
                            <dd><?= $tanaman['produktivitas']; ?></dd>
                            <dt>Jumlah Produksi</dt>
                            <dd><?= $tanaman['jml_prod']; ?></dd>
                            <dt>Lama Proses Produksi</dt>
                            <dd><?= $tanaman['lama_proses_prod']; ?></dd>
                            <dt>Perkiraan Iklim</dt>
                            <dd><?= $tanaman['perk_iklim']; ?></dd>
                            <dt>Perkiraan Musim Tanam dan Panen</dt>
                            <dd><?= $tanaman['perk_tanam_panen']; ?></dd>
                            <dt>Biaya Produksi</dt>
                            <dd><?= $tanaman['biaya_prod']; ?></dd>
                            <dt>Harga Jual Hasil Produksi</dt>
                            <dd><?= $tanaman['harga_jual_prod']; ?></dd>
                            <dt>Lahan Produksi</dt>
                            <dd><?= $tanaman['lahan_prod']; ?></dd>
                            <dt>Sumber Pengairan</dt>
                            <dd><?= $tanaman['sumber_pengairan']; ?></dd>
                            <dt>Bibit</dt>
                            <dd><?= $tanaman['bibit']; ?></dd>
                            <dt>Pupuk</dt>
                            <dd><?= $tanaman['pupuk']; ?></dd>
                            <dt>Alat atau teknologi yang digunakan</dt>
                            <dd><?= $tanaman['alat_teknologi']; ?></dd>
                            <dt>Pemanfaatan Hasil Produksi</dt>
                            <dd><?= $tanaman['peman_hsl_prod']; ?></dd>
                            <dt>Limbah Hasil Produksi dan Pengelolaannya</dt>
                            <dd><?= $tanaman['limbah_hsl_prod']; ?></dd>
                          </dl>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="row">
                    <div class="card-body">
                      <div class="card card-danger card-outline">
                        <div class="card-header">
                          <h5 class="card-title">Ancaman</h5>
                        </div>
                        <div class="card-body text-muted">
                          <strong>Ancaman</strong>
                          <p class="text-muted">
                            <?= $tanaman['nama_anc']; ?>
                          </p>
                          <strong>Penanggulangan</strong>
                          <p class="text-muted">
                            <?= $tanaman['penanggulangan']; ?>
                          </p>
                        </div>
                      </div>

                      <div class="card card-info card-outline">
                        <div class="card-header">
                          <h5 class="card-title">Infrastruktur Produksi</h5>
                        </div>
                        <div class="card-body text-muted">
                          <strong>Sarana dan Prasarana Pengairan</strong>
                          <p class="text-muted">
                            <?= $tanaman['sarana_pengairan']; ?>
                          </p>
                          <strong>Pengelolaan Jaringan Irigasi, Embung dan Rawa</strong>
                          <p class="text-muted">
                            <?= $tanaman['pengel_jar_irigasi']; ?>
                          </p>
                          <strong>Insfrastruktur Pengelolaan Air Bagi Pertanian</strong>
                          <p class="text-muted">
                            <?= $tanaman['infras_pengel_air']; ?>
                          </p>
                        </div>
                      </div>

                      <div class="card card-warning card-outline">
                        <div class="card-header">
                          <h5 class="card-title">Produsen</h5>
                        </div>
                        <div class="card-body text-muted">
                          <strong>Jumlah Produsen/Petani Pengahasil Komoditas</strong>
                          <p class="text-muted">
                            <?= $tanaman['jml_penghasil_kom']; ?>
                          </p>
                          <strong>Pembinaan Kepada Produsen/Petani</strong>
                          <p class="text-muted">
                            <?= $tanaman['pembinaan']; ?>
                          </p>
                          <strong>Kelembagaan Produsen/Petani</strong>
                          <p class="text-muted">
                            <?= $tanaman['kelembagaan']; ?>
                          </p>
                          <strong>Kesejahteraan Petani</strong>
                          <p class="text-muted">
                            <?= $tanaman['kesejahteraan']; ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h1 class="text-secondary text-center"><b><?= $tanaman['komoditas']; ?></b></h1>

              <h5 class="mt-5 text-muted">Tempat Produksi</h5>
              <hr>
              <div class="text-muted">
                <strong>Kepemilikan</strong>
                <p class="text-muted">
                  <?= $tanaman['kepemilikan']; ?>
                </p>
                <strong>Status Tempat Produksi</strong>
                <p class="text-muted">
                  <?= $tanaman['status_lahan']; ?>
                </p>
                <strong>Letak Produksi</strong>
                <p class="text-muted">
                  <?= $tanaman['letak_prod']; ?>
                </p>
                <strong>Luas Produksi</strong>
                <p class="text-muted">
                  <?= $tanaman['luas_prod']; ?>
                </p>
              </div>

              <h5 class="mt-5 text-muted">Senstra Produksi</h5>
              <hr>
              <div class="text-muted">
                <strong>Nama/Identitas Senstra Produksi</strong>
                <p class="text-muted">
                  <?= $tanaman['nama_sp']; ?>
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
              <form action="/tanaman/<?= $tanaman['id_tanam']; ?>" method="POST">
                <div class="btn-group">
                  <a class="btn btn-info" href="/tanaman">
                    <i class="fas fa-undo"></i> Kembali
                  </a>
                  <a class="btn btn-warning" href="/tanaman/edit/<?= $tanaman['id_tanam']; ?>">
                    <i class="fas fa-edit"></i> Edit
                  </a>
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');"><i class="far fa-trash-alt"></i> Hapus</button>
                </div>
              </form>
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