<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tambah Data</small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="/tanaman">Tanaman</a></li>
            <li class="breadcrumb-item active">Tambah</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div>
  </div>
  <!-- /.content-header -->
  <?php if (!empty(session()->getFlashdata('error'))) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <h4>Periksa Entrian Form</h4>
      </hr />
      <?php echo session()->getFlashdata('error'); ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif; ?>
  <form action="/tanaman/tambah" class="form-horizontal" method="POST">

    <section class="content">
      <div class="container">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Produksi Tanaman Pangan</h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->

              <form class="form-horizontal">
                <div class="card-body">

                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="nama_pangan">Tanaman Pangan</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="nama_pangan" name="nama_pangan" value="<?= old('nama_pangan'); ?>" placeholder="Tanaman Pangan">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="jenis_pangan">Jenis Pangan</label>
                    <div class="col-sm-7">
                      <select class="form-control" id="jenis_pangan" name="jenis_pangan">
                        <option>---</option>
                        <option>Serealia</option>
                        <option>Umbi-umbian</option>
                        <option>Kacang-kacangan</option>
                        <option>Sayur Musiman</option>
                        <option>Sayur Tahunan</option>
                        <option>Buah Musiman</option>
                        <option>Buah Tahunan</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="luas_tanam">Luas Tanam/Areal</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="luas_tanam" name="luas_tanam" value="<?= old('luas_tanam'); ?> " placeholder="Luas">
                    </div>
                    <h7>Ha</h7>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="luas_panen">Luas Panen</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="luas_panen" name="luas_panen" value="<?= old('luas_panen'); ?> " placeholder="Luas">
                    </div>
                    <h7>Ha</h7>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="produktivitas">Produkstivitas</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="produktivitas" name="produktivitas" value="<?= old('produktivitas'); ?>" placeholder="Produkstivitas">
                    </div>
                    <h7>Ton/Ha</h7>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="jumlah_produksi">Jumlah Produksi</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="jumlah_produksi" name="jumlah_produksi" value="<?= old('jumlah_produksi'); ?>" placeholder="Jumlah">
                    </div>
                    <h7>Ton</h7>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="lama_proses">Lama Proses Produksi</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="lama_proses" name="lama_proses" value="<?= old('lama_proses'); ?>" placeholder="Lama Proses">
                    </div>
                    <h7>Bulan/Tahun</h7>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="iklim">Perkiraan Iklim</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="iklim" name="iklim" value="<?= old('iklim'); ?>" placeholder="Perkiraan iklim">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="waktu_produksi">Waktu Produksi</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="waktu_produksi" name="waktu_produksi" value="<?= old('waktu_produksi'); ?>" placeholder="Waktu produksi">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="harga_jual">Harga Jual Hasil Produksi</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="harga_jual" name="harga_jual" value="<?= old('harga_jual'); ?>" placeholder="Harga jual">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="lahan_produksi">Lahan Produksi</label>
                    <div class="col-sm-7">
                      <select class="form-control" id="lahan_produksi" name="lahan_produksi">
                        <option>---</option>
                        <option>Sawah Irigasi</option>
                        <option>Sawah Tadah Hujan</option>
                        <option>Tegal/Kebun</option>
                        <option>Ladang/Huma</option>
                        <option>Perkebunan</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="sumber_pengairan">Sumber Pengairan</label>
                    <div class="col-sm-7">
                      <select class="form-control" is="sumber_pengairan" name="sumber_pengairan">
                        <option>---</option>
                        <option>Irigasi</option>
                        <option>air Hujan</option>
                        <option>Sumur/Mata air</option>
                        <option>Sungai</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="bibit">Bibit</label>
                    <div class="col-sm-7">
                      <select class="form-control" id="bibit" name="bibit">
                        <option>---</option>
                        <option>Produksi Sendiri</option>
                        <option>Beli</option>
                        <option>Bantuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="pupuk">Pupuk</label>
                    <div class="col-sm-7">
                      <select class="form-control" id="pupuk" name="pupuk">
                        <option>---</option>
                        <option>Produksi Sendiri</option>
                        <option>Beli</option>
                        <option>Bantuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="alat_teknologi">Alat/teknologi yg Digunakan</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="alat_teknologi" name="alat_teknologi" value="<?= old('alat_teknologi'); ?>" placeholder="Alat/Teknologi">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="pemanfaatan_produksi">Pemanfaatan Hasil Produksi</label>
                    <div class="col-sm-7">
                      <select class="form-control" id="pemanfaatan_produksi" name="pemanfaatan_produksi">
                        <option>---</option>
                        <option>Dikonsumsi Sendiri</option>
                        <option>Dijual Langsung</option>
                        <option>Diolah Lebih lanjut</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="limbah_produksi">Limbah Produksi dan Pengelolaannya</label>
                    <div class="col-sm-7">
                      <select class="form-control" id="limbah_produksi" name="limbah_produksi">
                        <option>---</option>
                        <option>Dijual</option>
                        <option>Dimanfaatkan Sendiri</option>
                        <option>Diolah</option>
                        <option>Dibuang</option>
                      </select>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="col-md-6">
            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Ancaman Produksi</h3>
              </div>
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label" for="ancaman_produksi">Ancaman</label>
                  <div class="col-sm-7">
                    <select class="form-control" id="ancaman_produksi" name="ancaman_produksi">
                      <option>---</option>
                      <option>Hama/Penyakit</option>
                      <option>Banjir</option>
                      <option>Kekeringan</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Tempat Produksi</h3>
              </div>
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label" for="letak_dan_luas_produksi">Letak Kawasan Produksi</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="letak_dan_luas_produksi" name="letak_dan_luas_produksi" value="<?= old('letak_dan_luas_produksi'); ?>" placeholder="Letak produksi">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-5 col-form-label" for="kepemilikan_dan_status_lahan">Pemilik Kawasan Produksi</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="kepemilikan_dan_status_lahan" name="kepemilikan_dan_status_lahan" value="<?= old('kepemilikan_dan_status_lahan'); ?>" placeholder="Pemilik produksi">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->



            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Sentra Produksi</h3>
              </div>

              <div class="card-body">
                <form>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="nama_sentra_produksi">Nama Sentra Produksi</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="nama_sentra_produksi" name="nama_sentra_produksi" value="<?= old('nama_sentra_produksi'); ?>" placeholder="Sentra Produksi">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="lokasi_sentra_produksi">Lokasi Sentra Produksi</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="lokasi_sentra_produksi" name="lokasi_sentra_produksi" value="<?= old('lokasi_sentra_produksi'); ?>" placeholder="Kecamatan">
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Infrastruktur Produksi</h3>
              </div>

              <div class="card-body">
                <form>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="prasarana_pengairan">Sarana dan Prasarana Pengairan</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="prasarana_pengairan" name="prasarana_pengairan" value="<?= old('prasarana_pengairan'); ?>" placeholder="Prasarana">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="pengelolaan_jaringan">Pengelolaan Jaringan Irigasi</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="pengelolaan_jaringan" name="pengelolaan_jaringan" value="<?= old('pengelolaan_jaringan'); ?>" placeholder="Prasarana">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="infrastruktur_pengelolaan">Infrastruktur Pengelolaan Air</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="infrastruktur_pengelolaan" name="infrastruktur_pengelolaan" value="<?= old('infrastruktur_pengelolaan'); ?>" placeholder="Prasarana">
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Produsen</h3>
              </div>
              <div class="card-body">
                <form>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="jumlah_petani">Jumlah Produsen/Petani</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="jumlah_petani" name="jumlahh_petani" value="<?= old('jumlah_petani'); ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="pembinaan_petani">Pembinaan Kepada Produsen/Petani</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="pembinaan_petani" name="pembinaan_petani" value="<?= old('pembinaan_petani'); ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="kelembagaan_petani">Kelembagaan Produsen/Petani</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="kelembagaan_petani" name="kelembagaan_petani" value="<?= old('kelembagaan_petani'); ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="kesejahteraan_petani">Kesejahteraan Petani</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="kesejahteraan_petani" name="kesejahteraan_petani" value="<?= old('kesejahteraan_petani') ?>">
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <a href="/tanaman" class="btn btn-secondary">Keluar</a>
            <input type="submit" value="Tambah Data Pangan" class="btn btn-success float-right">
          </div>
        </div>
      </div>
  </form>
  </section>
  <!-- /.content -->

</div>

<?= $this->endSection(); ?>