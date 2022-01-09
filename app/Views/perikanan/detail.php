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
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="/perikanan">Perikanan</a></li>
            <li class="breadcrumb-item active">Detail</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container">
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
                            <dt>Kelompok/Jenis Ikan</dt>
                            <dd><?= $perikanan['jenis_ikan']; ?></dd>
                            <dt>Jumlah Produksi</dt>
                            <dd><?= $perikanan['jml_prod']; ?> Ton</dd>
                            <dt>Lama Produksi</dt>
                            <dd><?= $perikanan['lama_prod']; ?></dd>
                            <dt>Waktu Produksi</dt>
                            <dd><?= $perikanan['waktu_prod']; ?></dd>
                            <dt>Biaya Produksi</dt>
                            <dd>Rp. <?= $perikanan['biaya_prod']; ?></dd>
                            <dt>Harga Jual Hasil Produksi</dt>
                            <dd>Rp. <?= $perikanan['harga_hsl_prod']; ?></dd>
                            <dt>Wadah Budidaya</dt>
                            <dd><?= $perikanan['wadah_budidaya']; ?></dd>
                            <dt>Sumber Pengairan</dt>
                            <dd><?= $perikanan['sumber_pengairan']; ?></dd>
                            <dt>Benih</dt>
                            <dd><?= $perikanan['benih']; ?></dd>
                            <dt>Jenis dan Asal Paka Ikan</dt>
                            <dd><?= $perikanan['jns_asal_pakan']; ?></dd>
                            <dt>Alat atau teknologi yang digunakan</dt>
                            <dd><?= $perikanan['alat_teknologi']; ?></dd>
                            <dt>Pemanfaatan Hasil Produksi</dt>
                            <dd><?= $perikanan['peman_hsl_prod']; ?></dd>
                            <dt>Limbah Hasil Produksi dan Pengelolaannya</dt>
                            <dd><?= $perikanan['limbah_hsl_prod']; ?></dd>
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
                            <?= $perikanan['nama_anc']; ?>
                          </p>
                          <strong>Penanggulangan</strong>
                          <p class="text-muted">
                            <?= $perikanan['penanggulangan']; ?>
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
                            <?= $perikanan['sarana_pengairan']; ?>
                          </p>
                          <strong>Pengelolaan Jaringan Irigasi, Embung dan Rawa</strong>
                          <p class="text-muted">
                            <?= $perikanan['pengel_jar_irigasi']; ?>
                          </p>
                          <strong>Insfrastruktur Pengelolaan Air Bagi Pertanian</strong>
                          <p class="text-muted">
                            <?= $perikanan['infras_pengel_air']; ?>
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
                            <?= $perikanan['jml_penghasil_kom']; ?> Orang
                          </p>
                          <strong>Pembinaan Kepada Produsen/Petani</strong>
                          <p class="text-muted">
                            <?= $perikanan['pembinaan']; ?>
                          </p>
                          <strong>Kelembagaan Produsen/Petani</strong>
                          <p class="text-muted">
                            <?= $perikanan['kelembagaan']; ?>
                          </p>
                          <strong>Kesejahteraan Petani</strong>
                          <p class="text-muted">
                            <?= $perikanan['kesejahteraan']; ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h1 class="text-secondary text-center"><b><?= $perikanan['komoditas']; ?></b></h1>

              <h5 class="mt-5 text-muted">Tempat Produksi</h5>
              <hr>
              <div class="text-muted">
                <strong>Kepemilikan</strong>
                <p class="text-muted">
                  <?= $perikanan['kepemilikan']; ?>
                </p>
                <strong>Kecamatan</strong>
                <p class="text-muted">
                  <?= $perikanan['kecamatan']; ?>
                </p>
                <strong>Kelurahan</strong>
                <p class="text-muted">
                  <?= $perikanan['kelurahan']; ?>
                </p>
                <strong>Letak Produksi</strong>
                <p class="text-muted">
                  <?= $perikanan['letak_prod']; ?>
                </p>
                <strong>Luas Produksi</strong>
                <p class="text-muted">
                  <?= $perikanan['luas_prod']; ?> Km<sup>2</sup>
                </p>
                <strong>Status Tempat Produksi</strong>
                <p class="text-muted">
                  <?= $perikanan['status_lahan']; ?>
                </p>
              </div>

              <div class="text-center">
                <form action="/perikanan/<?= $perikanan['id_ikan']; ?>" method="POST">
                  <div class="btn-group btn-lg">
                    <a href="/perikanan" class="btn btn-info">Kembali</a>
                    <a class="btn btn-warning" href="/perikanan/edit_detail/<?= $perikanan['id_ikan']; ?>">
                      <i class="fas fa-edit"></i> Edit
                    </a>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');"><i class="far fa-trash-alt"></i> Hapus</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

</div>

<?= $this->endSection(); ?>