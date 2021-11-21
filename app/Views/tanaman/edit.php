<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Data</small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="/tanaman">Tanaman</a></li>
            <li class="breadcrumb-item active">Edit</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div>
  </div>
  <!-- /.content-header -->

  <section class="content">
    <div class="container">
      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <form class="form-horizontal" action="/tanaman/update/<?= $tanaman['id_tanam']; ?>" method="post">
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="card-body text-muted">
                  <h4 class="text-center">PRODUKSI PANGAN</h4>
                  <div class="form-group row my-4">
                    <label for="komoditas" class="col-sm-5 col-form-label">Komoditas</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="komoditas" placeholder="Komoditas" value="<?= $tanaman['komoditas']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenis_pangan" class="col-sm-5 col-form-label">Jenis Pangan</label>
                    <div class="col-sm-7">
                      <select class="form-control" name="jenis_tanam" aria-valuenow="<?= $tanaman['jenis_tanam']; ?>">
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
                    <label for="ls_tanam" class="col-sm-5 col-form-label">Luas Tanam/Areal</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="ls_tanam" placeholder="Ha" value="<?= $tanaman['ls_tanam']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ls_panen" class="col-sm-5 col-form-label">Luas Panen</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="ls_panen" placeholder="Ha" value="<?= $tanaman['ls_panen']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="produktivitas" class="col-sm-5 col-form-label">Produktivitas</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="produktivitas" placeholder="Ton/Ha" value="<?= $tanaman['produktivitas']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jml_prod" class="col-sm-5 col-form-label">Jumlah Produksi</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="jml_prod" placeholder="Ton" value="<?= $tanaman['jml_prod']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="lama_proses_prod" class="col-sm-5 col-form-label">Lama Proses Produksi</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="lama_proses_prod" placeholder="Bulan/Tahun" value="<?= $tanaman['lama_proses_prod']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="perk_iklim" class="col-sm-5 col-form-label">Perkiraan Iklim</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="perk_iklim" placeholder="Perkiraan iklim" value="<?= $tanaman['perk_iklim']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="perk_tanam_panen" class="col-sm-5 col-form-label">Perkiraan Musim Tanam dan Panen</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="perk_tanam_panen" placeholder="Waktu produksi" value="<?= $tanaman['perk_tanam_panen']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="biaya_prod" class="col-sm-5 col-form-label">Biaya Produksi</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="biaya_prod" placeholder="Biaya produksi" value="<?= $tanaman['biaya_prod']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="harga_jual_prod" class="col-sm-5 col-form-label">Harga Jual Hasil Produksi</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="harga_jual_prod" placeholder="Harga jual" value="<?= $tanaman['harga_jual_prod']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="lahan_prod" class="col-sm-5 col-form-label">Lahan Produksi</label>
                    <div class="col-sm-7">
                      <select class="form-control" name="lahan_prod" aria-valuenow="<?= $tanaman['lahan_prod']; ?>">
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
                    <label for="sumber_pengairan" class="col-sm-5 col-form-label">Sumber Pengairan</label>
                    <div class="col-sm-7">
                      <select class="form-control" name="sumber_pengairan" aria-valuenow="<?= $tanaman['sumber_pengairan']; ?>">
                        <option>---</option>
                        <option>Irigasi</option>
                        <option>air Hujan</option>
                        <option>Sumur/Mata air</option>
                        <option>Sungai</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="bibit" class="col-sm-5 col-form-label">Bibit</label>
                    <div class="col-sm-7">
                      <select class="form-control" name="bibit" aria-valuenow="<?= $tanaman['bibit']; ?>">
                        <option>---</option>
                        <option>Produksi Sendiri</option>
                        <option>Beli</option>
                        <option>Bantuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="pupuk" class="col-sm-5 col-form-label">Pupuk</label>
                    <div class="col-sm-7">
                      <select class="form-control" name="pupuk" aria-valuenow="<?= $tanaman['pupuk']; ?>">
                        <option>---</option>
                        <option>Produksi Sendiri</option>
                        <option>Beli</option>
                        <option>Bantuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="alat_teknologi" class="col-sm-5 col-form-label">Alat/teknologi yg Digunakan</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="alat_teknologi" placeholder="Alat/Teknologi" value="<?= $tanaman['alat_teknologi']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="peman_hsl_prod" class="col-sm-5 col-form-label">Pemanfaatan Hasil Produksi</label>
                    <div class="col-sm-7">
                      <select class="form-control" name="peman_hsl_prod" aria-valuenow="<?= $tanaman['peman_hsl_prod']; ?>">
                        <option>---</option>
                        <option>Dikonsumsi Sendiri</option>
                        <option>Dijual Langsung</option>
                        <option>Diolah Lebih lanjut</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="limbah_hsl_prod" class="col-sm-5 col-form-label">Limbah Produksi dan Pengelolaannya</label>
                    <div class="col-sm-7">
                      <select class="form-control" name="limbah_hsl_prod" aria-valuenow="<?= $tanaman['limbah_hsl_prod']; ?>">
                        <option>---</option>
                        <option>Dijual</option>
                        <option>Dimanfaatkan Sendiri</option>
                        <option>Diolah</option>
                        <option>Dibuang</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="card-body text-muted">
                  <h4 class="text-center">ANCAMAN</h4>
                  <div class="form-group row my-4">
                    <label for="ancaman" class="col-sm-5 col-form-label">Ancaman</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="nama_anc" placeholder="Ancaman" value="<?= $tanaman['nama_anc']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="penanggulangan" class="col-sm-5 col-form-label">Cara Penanggulangan</label>
                    <div class="col-sm-7">
                      <textarea class="form-control" name="penanggulangan" aria-valuenow="<?= $tanaman['penanggulangan']; ?>"></textarea>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12 col-sm-6">
                <div class="card-body text-muted">
                  <h4 class="text-center">TEMPAT PRODUKSI</h4>
                  <div class="form-group row my-4">
                    <label for="letak_prod" class="col-sm-5 col-form-label">Letak Kawasan Produksi</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="letak_prod" placeholder="Letak produksi" value="<?= $tanaman['letak_prod']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="luas_prod" class="col-sm-5 col-form-label">Luas Kawasan Produksi</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="luas_prod" placeholder="Luas produksi" value="<?= $tanaman['luas_prod']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kepemilikan" class="col-sm-5 col-form-label">Pemilik Kawasan Produksi</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="kepemilikan" placeholder="Pemilik produksi" value="<?= $tanaman['kepemilikan']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="status_lahan" class="col-sm-5 col-form-label">Status Lahan</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="status_lahan" placeholder="Status Lahan" value="<?= $tanaman['status_lahan']; ?>">
                    </div>
                  </div>
                </div>

                <div class="card-body text-muted">
                  <h4 class="text-center">SENTRA PRODUKSI</h4>
                  <div class="form-group row my-4">
                    <label for="nama_sp" class="col-sm-5 col-form-label">Identitas Sentra Produksi</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="nama_sp" placeholder="Sentra Produksi" value="<?= $tanaman['nama_sp']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kecamatan" class="col-sm-5 col-form-label">Kecamatan</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan" value="<?= $tanaman['kecamatan']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kelurahan" class="col-sm-5 col-form-label">Kelurahan</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="kelurahan" placeholder="Kelurahan" value="<?= $tanaman['kelurahan']; ?>">
                    </div>
                  </div>
                </div>

                <div class="card-body text-muted">
                  <h4 class="text-center">INFRASTRUKTUR PRODUKSI</h4>
                  <div class="form-group row my-4">
                    <label for="sarana_pengairan" class="col-sm-5 col-form-label">Sarana dan Prasarana Pengairan</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="sarana_pengairan" placeholder="Prasarana" value="<?= $tanaman['sarana_pengairan']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="pengel_jar_irigasi" class="col-sm-5 col-form-label">Pengelolaan Jaringan Irigasi</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="pengel_jar_irigasi" placeholder="pengelolaan" value="<?= $tanaman['pengel_jar_irigasi']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="infras_pengel_air" class="col-sm-5 col-form-label">Infrastruktur Pengelolaan Air</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="infras_pengel_air" placeholder="pengelolaan air" value="<?= $tanaman['infras_pengel_air']; ?>">
                    </div>
                  </div>
                </div>

                <div class="card-body text-muted">
                  <h4 class="text-center">PRODUSEN</h4>
                  <div class="form-group row my-4">
                    <label for="jml_penghasil_kom" class="col-sm-5 col-form-label">Jumlah Produsen/Petani</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="jml_penghasil_kom" value="<?= $tanaman['jml_penghasil_kom']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="pembinaan" class="col-sm-5 col-form-label">Pembinaan Kepada Produsen/Petani</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="pembinaan" value="<?= $tanaman['pembinaan']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kelembagaan" class="col-sm-5 col-form-label">Kelembagaan Produsen/Petani</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="kelembagaan" value="<?= $tanaman['kelembagaan']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kesejahteraan" class="col-sm-5 col-form-label">Kesejahteraan Petani</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="kesejahteraan" value="<?= $tanaman['kesejahteraan']; ?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 text-center">
                <a href="/tanaman" class="btn bg-gradient-warning">Batal</a>
                <input type="submit" value="Edit Data Pangan" class="btn bg-gradient-success">
              </div>
            </div>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </section>

</div>

<?= $this->endSection(); ?>