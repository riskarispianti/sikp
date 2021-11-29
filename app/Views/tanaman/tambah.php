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

  <section class="content">
    <div class="container">
      <form class="form-horizontal" action="/tanaman/save" method="post">
        <?= csrf_field() ?>
        <div class="row">
          <div class="col-sm-12">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                  <li class="pt-2 px-3">
                    <h3 class="card-title">Tambah Data Pangan</h3>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Produksi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Ancaman Produksi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill" href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false">Tempat Produksi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-settings-tab" data-toggle="pill" href="#custom-tabs-two-settings" role="tab" aria-controls="custom-tabs-two-settings" aria-selected="false">Sentra Produksi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-infras-tab" data-toggle="pill" href="#custom-tabs-two-infras" role="tab" aria-controls="custom-tabs-two-infras" aria-selected="false">Infrastruktur Produksi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-produsen-tab" data-toggle="pill" href="#custom-tabs-two-produsen" role="tab" aria-controls="custom-tabs-two-produsen" aria-selected="false">Produsen</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                    <div class="card-body text-muted">
                      <h4 class="text-center">PRODUKSI PANGAN</h4>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row my-4">
                            <label for="komoditas" class="col-sm-5 col-form-label">Komoditas</label>
                            <div class="col-sm-7">
                              <select class="form-control" name="id_kom">
                                <option hidden></option>
                                <?php foreach ($komoditas as $kom => $value) : ?>
                                  <option value="<?= $value['id_kom']; ?>"><?= $value['komoditas']; ?></option>
                                <?php endforeach; ?>
                              </select>
                              <!-- <input type="text" class="form-control <?= ($validation->hasError('komoditas')) ? 'is-invalid' : ''; ?>" name="komoditas" placeholder="Komoditas" autofocus> -->
                              <div class="invalid-feesback text-danger">
                                <?= $validation->getError('komoditas'); ?>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="jenis_pangan" class="col-sm-5 col-form-label">Jenis Pangan</label>
                            <div class="col-sm-7">
                              <select class="form-control" name="jenis_tanam">
                                <option hidden></option>
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
                              <input type="text" class="form-control" name="ls_tanam" placeholder="Ha">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="ls_panen" class="col-sm-5 col-form-label">Luas Panen</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" name="ls_panen" placeholder="Ha">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="produktivitas" class="col-sm-5 col-form-label">Produktivitas</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" name="produktivitas" placeholder="Ton/Ha">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="jml_prod" class="col-sm-5 col-form-label">Jumlah Produksi</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" name="jml_prod" placeholder="Ton">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="jml_prod" class="col-sm-5 col-form-label">Tanggal Produksi</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" name="jml_prod" placeholder="Tgl">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="lama_proses_prod" class="col-sm-5 col-form-label">Lama Proses Produksi</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" name="lama_proses_prod" placeholder="Bulan/Tahun">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="perk_iklim" class="col-sm-5 col-form-label">Perkiraan Iklim</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" name="perk_iklim" placeholder="Perkiraan iklim">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="perk_tanam_panen" class="col-sm-5 col-form-label">Perkiraan Musim Tanam dan Panen</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" name="perk_tanam_panen" placeholder="Waktu produksi">
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row my-4">
                            <label for="biaya_prod" class="col-sm-5 col-form-label">Biaya Produksi</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" name="biaya_prod" placeholder="Biaya produksi">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="harga_jual_prod" class="col-sm-5 col-form-label">Harga Jual Hasil Produksi</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" name="harga_jual_prod" placeholder="Harga jual">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="lahan_prod" class="col-sm-5 col-form-label">Lahan Produksi</label>
                            <div class="col-sm-7">
                              <select class="form-control" name="lahan_prod">
                                <option hidden></option>
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
                              <select class="form-control" name="sumber_pengairan">
                                <option hidden></option>
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
                              <select class="form-control" name="bibit">
                                <option hidden></option>
                                <option>Produksi Sendiri</option>
                                <option>Beli</option>
                                <option>Bantuan</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="pupuk" class="col-sm-5 col-form-label">Pupuk</label>
                            <div class="col-sm-7">
                              <select class="form-control" name="pupuk">
                                <option hidden></option>
                                <option>Produksi Sendiri</option>
                                <option>Beli</option>
                                <option>Bantuan</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="alat_teknologi" class="col-sm-5 col-form-label">Alat/teknologi yg Digunakan</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" name="alat_teknologi" placeholder="Alat/Teknologi">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="peman_hsl_prod" class="col-sm-5 col-form-label">Pemanfaatan Hasil Produksi</label>
                            <div class="col-sm-7">
                              <select class="form-control" name="peman_hsl_prod">
                                <option hidden></option>
                                <option>Dikonsumsi Sendiri</option>
                                <option>Dijual Langsung</option>
                                <option>Diolah Lebih lanjut</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="limbah_hsl_prod" class="col-sm-5 col-form-label">Limbah Produksi dan Pengelolaannya</label>
                            <div class="col-sm-7">
                              <select class="form-control" name="limbah_hsl_prod">
                                <option hidden></option>
                                <option>Dijual</option>
                                <option>Dimanfaatkan Sendiri</option>
                                <option>Diolah</option>
                                <option>Dibuang</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
                    <div class="card-body text-muted">
                      <h4 class="text-center">ANCAMAN</h4>
                      <div class="form-group row my-4">
                        <label for="ancaman" class="col-sm-5 col-form-label">Ancaman</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="nama_anc" placeholder="Ancaman">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="penanggulangan" class="col-sm-5 col-form-label">Cara Penanggulangan</label>
                        <div class="col-sm-7">
                          <textarea class="form-control" name="penanggulangan"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel" aria-labelledby="custom-tabs-two-messages-tab">
                    <div class="card-body text-muted">
                      <h4 class="text-center">TEMPAT PRODUKSI</h4>
                      <div class="form-group row my-4">
                        <label for="letak_prod" class="col-sm-5 col-form-label">Letak Kawasan Produksi</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="letak_prod" placeholder="Letak produksi">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="luas_prod" class="col-sm-5 col-form-label">Luas Kawasan Produksi</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="luas_prod" placeholder="Luas produksi">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="kepemilikan" class="col-sm-5 col-form-label">Pemilik Kawasan Produksi</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="kepemilikan" placeholder="Pemilik produksi">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="status_lahan" class="col-sm-5 col-form-label">Status Tempat Produksi</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="status_lahan" placeholder="Status Lahan">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-two-settings" role="tabpanel" aria-labelledby="custom-tabs-two-settings-tab">
                    <div class="card-body text-muted">
                      <h4 class="text-center">SENTRA PRODUKSI</h4>
                      <div class="form-group row my-4">
                        <label for="nama_sp" class="col-sm-5 col-form-label">Identitas Sentra Produksi</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="nama_sp" placeholder="Sentra Produksi">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="kecamatan" class="col-sm-5 col-form-label">Kecamatan</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="kelurahan" class="col-sm-5 col-form-label">Kelurahan</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="kelurahan" placeholder="Kelurahan">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-two-infras" role="tabpanel" aria-labelledby="custom-tabs-two-infras-tab">
                    <div class="card-body text-muted">
                      <h4 class="text-center">INFRASTRUKTUR PRODUKSI</h4>
                      <div class="form-group row my-4">
                        <label for="sarana_pengairan" class="col-sm-5 col-form-label">Sarana dan Prasarana Pengairan</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="sarana_pengairan" placeholder="Prasarana">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="pengel_jar_irigasi" class="col-sm-5 col-form-label">Pengelolaan Jaringan Irigasi</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="pengel_jar_irigasi" placeholder="pengelolaan">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="infras_pengel_air" class="col-sm-5 col-form-label">Infrastruktur Pengelolaan Air</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="infras_pengel_air" placeholder="pengelolaan air">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-two-produsen" role="tabpanel" aria-labelledby="custom-tabs-two-produsen-tab">
                    <div class="card-body text-muted">
                      <h4 class="text-center">PRODUSEN</h4>
                      <div class="form-group row my-4">
                        <label for="jml_penghasil_kom" class="col-sm-5 col-form-label">Jumlah Produsen/Petani</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="jml_penghasil_kom">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="pembinaan" class="col-sm-5 col-form-label">Pembinaan Kepada Produsen/Petani</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="pembinaan">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="kelembagaan" class="col-sm-5 col-form-label">Kelembagaan Produsen/Petani</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="kelembagaan">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="kesejahteraan" class="col-sm-5 col-form-label">Kesejahteraan Petani</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="kesejahteraan">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="/tanaman" class="btn bg-gradient-warning">Batal</a>
            <input type="submit" value="Tambah Data Pangan" class="btn bg-gradient-primary">
          </div>
        </div>
      </form>
    </div>
  </section>

</div>

<?= $this->endSection(); ?>