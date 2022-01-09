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
            <li class="breadcrumb-item"><a href="/peternakan">Peternakan</a></li>
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
                            <dt>Kelompok/Jenis Ternak</dt>
                            <dd><?= $peternakan['jenis_ternak']; ?></dd>
                            <dt>Jumlah Populasi</dt>
                            <dd><?= $peternakan['jml_populasi']; ?> Ekor</dd>
                            <dt>Lama Produksi</dt>
                            <dd><?= $peternakan['lama_prod']; ?></dd>
                            <dt>Waktu Produksi</dt>
                            <dd><?= $peternakan['waktu_prod']; ?></dd>
                            <dt>Biaya Produksi</dt>
                            <dd>Rp. <?= $peternakan['biaya_prod']; ?></dd>
                            <dt>Harga Hasil Produksi</dt>
                            <dd>Rp. <?= $peternakan['harga_hsl_prod']; ?></dd>
                            <dt>Sistem Pemeliharaan Ternak</dt>
                            <dd><?= $peternakan['sistem_pemel_ternak']; ?></dd>
                            <dt>Benih</dt>
                            <dd><?= $peternakan['benih']; ?></dd>
                            <dt>Alat atau teknologi yang digunakan</dt>
                            <dd><?= $peternakan['alat_teknologi']; ?></dd>
                            <dt>Pemanfaatan Hasil Produksi</dt>
                            <dd><?= $peternakan['peman_hsl_prod']; ?></dd>
                            <dt>Limbah Hasil Produksi dan Pengelolaannya</dt>
                            <dd><?= $peternakan['limbah_hsl_prod']; ?></dd>
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
                            <?= $peternakan['nama_anc']; ?>
                          </p>
                          <strong>Penanggulangan</strong>
                          <p class="text-muted">
                            <?= $peternakan['penanggulangan']; ?>
                          </p>
                        </div>
                      </div>

                      <div class="card card-info card-outline">
                        <div class="card-header">
                          <h5 class="card-title">Infrastruktur Produksi</h5>
                        </div>
                        <div class="card-body text-muted">
                          <strong>Kandang</strong>
                          <p class="text-muted">
                            <?= $peternakan['kandang']; ?>
                          </p>
                          <strong>Lokasi Rumah Pemotongan Hewan (RPH)</strong>
                          <p class="text-muted">
                            <?= $peternakan['lok_rph']; ?>
                          </p>
                          <strong>Kapasitas (RPH)</strong>
                          <p class="text-muted">
                            <?= $peternakan['kapasitas_rph']; ?>
                          </p>
                          <strong>Pemilik (RPH)</strong>
                          <p class="text-muted">
                            <?= $peternakan['pemilik']; ?>
                          </p>
                        </div>
                      </div>

                      <div class="card card-warning card-outline">
                        <div class="card-header">
                          <h5 class="card-title">Produsen</h5>
                        </div>
                        <div class="card-body text-muted">
                          <strong>Jumlah Produsen/Peternak Pengahasil Komoditas</strong>
                          <p class="text-muted">
                            <?= $peternakan['jml_penghasil_kom']; ?> Orang
                          </p>
                          <strong>Pembinaan Kepada Produsen/Peternak</strong>
                          <p class="text-muted">
                            <?= $peternakan['pembinaan']; ?>
                          </p>
                          <strong>Kelembagaan Produsen/Peternak</strong>
                          <p class="text-muted">
                            <?= $peternakan['kelembagaan']; ?>
                          </p>
                          <strong>Kesejahteraan Peternak</strong>
                          <p class="text-muted">
                            <?= $peternakan['kesejahteraan']; ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h1 class="text-secondary text-center"><b><?= $peternakan['komoditas']; ?></b></h1>

              <h5 class="mt-5 text-muted">Tempat Produksi</h5>
              <hr>
              <div class="text-muted">
                <strong>Kepemilikan</strong>
                <p class="text-muted">
                  <?= $peternakan['kepemilikan']; ?>
                </p>
                <strong>Kecamatan</strong>
                <p class="text-muted">
                  <?= $peternakan['kecamatan']; ?>
                </p>
                <strong>Kelurahan</strong>
                <p class="text-muted">
                  <?= $peternakan['kelurahan']; ?>
                </p>
                <strong>Letak Produksi</strong>
                <p class="text-muted">
                  <?= $peternakan['letak_prod']; ?>
                </p>
                <strong>Luas Produksi</strong>
                <p class="text-muted">
                  <?= $peternakan['luas_prod']; ?> Km<sup>2</sup>
                </p>
                <strong>Status Tempat Produksi</strong>
                <p class="text-muted">
                  <?= $peternakan['status_lahan']; ?>
                </p>
              </div>

              <div class="text-center">
                <form action="/peternakan/<?= $peternakan['id_ternak']; ?>" method="POST">
                  <div class="btn-group">
                    <a href="/peternakan" class="btn btn-info">Kembali</a>
                    <a class="btn btn-warning" href="/peternakan/edit_detail/<?= $peternakan['id_ternak']; ?>">
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
    </div>
  </section>

</div>

<?= $this->endSection(); ?>