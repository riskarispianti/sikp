<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Laporan Produksi Perikanan</small></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="/perikanan">Perikanan</a></li>
            <li class="breadcrumb-item active">Edit</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container">
      <form class="form-horizontal" action="/perikanan/update_detail_home/<?= $perikanan['id_ikan']; ?>" method="post">
        <?= csrf_field() ?>
        <div class="row">
          <div class="col-sm-12">
            <div class="card card-tabs card-primary">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                  <li class="pt-2 px-3">
                    <h3 class="card-title">Edit Data Pangan</h3>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Produksi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Ancaman Produksi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-tempat-tab" data-toggle="pill" href="#custom-tabs-two-tempat" role="tab" aria-controls="custom-tabs-two-tempat" aria-selected="false">Tempat Produksi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-infrastruktur-tab" data-toggle="pill" href="#custom-tabs-two-infrastruktur" role="tab" aria-controls="custom-tabs-two-infrastruktur" aria-selected="false">Infrastruktur</a>
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
                              <select class="form-control select2bs4" name="id_kom">
                                <option selected disabled></option>
                                <?php foreach ($komoditas as $kom => $value) : ?>
                                  <option value="<?= $value['id_kom']; ?>" <?= (old('id_kom') == $value['id_kom']) ? 'selected' : ''; ?> <?= ($value['id_kom'] == $perikanan['id_kom']) ? 'selected' : ''; ?>><?= $value['komoditas']; ?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="jenis_ikan" class="col-sm-5 col-form-label">Jenis Ikan</label>
                            <div class="col-sm-7">
                              <select class="form-control select2bs4" name="jenis_ikan">
                                <option selected disabled></option>
                                <option <?= (old('jenis_ikan') == 'Ikan Budidaya') ? 'selected' : ''; ?> <?= ($perikanan['jenis_ikan'] == 'Ikan Budidaya') ? 'selected' : ''; ?>>Ikan Budidaya</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="jml_prod" class="col-sm-5 col-form-label">Jumlah Produksi</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('jml_prod')) ? 'is-invalid' : ''; ?>" name="jml_prod" placeholder="Ton" value="<?= (old('jml_prod')) ? old('jml_prod') : $perikanan['jml_prod']; ?>">
                              <div class="invalid-feedback text-danger">
                                <?= $validation->getError('jml_prod'); ?>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="lama_prod" class="col-sm-5 col-form-label">Lama Produksi</label>
                            <div class="col-sm-7 input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="far fa-calendar-alt"></i>
                                </span>
                              </div>
                              <input type="text" class="form-control float-right" name="lama_prod" id="reservation" value="<?= (old('lama_prod')) ? old('lama_prod') : $perikanan['lama_prod']; ?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="waktu_prod" class="col-sm-5 col-form-label">Waktu Produksi</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('waktu_prod')) ? 'is-invalid' : ''; ?>" name="waktu_prod" placeholder="Waktu Produksi" value="<?= (old('waktu_prod')) ? old('waktu_prod') : $perikanan['waktu_prod']; ?>">
                              <div class="invalid-feedback text-danger">
                                <?= $validation->getError('waktu_prod'); ?>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="biaya_prod" class="col-sm-5 col-form-label">Biaya Produksi</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('biaya_prod')) ? 'is-invalid' : ''; ?>" name="biaya_prod" placeholder="Biaya produksi" value="<?= (old('biaya_prod')) ? old('biaya_prod') : $perikanan['biaya_prod']; ?>">
                              <div class="invalid-feedback text-danger">
                                <?= $validation->getError('biaya_prod'); ?>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="harga_hsl_prod" class="col-sm-5 col-form-label">Harga Jual Hasil Produksi</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('harga_hsl_prod')) ? 'is-invalid' : ''; ?>" name="harga_hsl_prod" placeholder="Harga jual" value="<?= (old('harga_hsl_prod')) ? old('harga_hsl_prod') : $perikanan['harga_hsl_prod']; ?>">
                              <div class="invalid-feedback text-danger">
                                <?= $validation->getError('harga_hsl_prod'); ?>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row my-4">
                            <label for="wadah_budidaya" class="col-sm-5 col-form-label">Wadah Budidaya</label>
                            <div class="col-sm-7">
                              <select class="form-control select2bs4" name="wadah_budidaya">
                                <option selected disabled></option>
                                <option <?= (old('wadah_budidaya') == 'Tambak') ? 'selected' : ''; ?> <?= ($perikanan['wadah_budidaya'] == 'Tambak') ? 'selected' : ''; ?>>Tambak</option>
                                <option <?= (old('wadah_budidaya') == 'Keramba') ? 'selected' : ''; ?> <?= ($perikanan['wadah_budidaya'] == 'Keramba') ? 'selected' : ''; ?>>Keramba</option>
                                <option <?= (old('wadah_budidaya') == 'Kolam Tanah') ? 'selected' : ''; ?> <?= ($perikanan['wadah_budidaya'] == 'Kolam Tanah') ? 'selected' : ''; ?>>Kolam Tanah</option>
                                <option <?= (old('wadah_budidaya') == 'Kolam Bak') ? 'selected' : ''; ?> <?= ($perikanan['wadah_budidaya'] == 'Kolam Bak') ? 'selected' : ''; ?>>Kolam Bak</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="sumber_pengairan" class="col-sm-5 col-form-label">Sumber Pengairan</label>
                            <div class="col-sm-7">
                              <select class="form-control select2bs4" name="sumber_pengairan">
                                <option selected disabled></option>
                                <option <?= (old('sumber_pengairan') == 'Irigasi') ? 'selected' : ''; ?> <?= ($perikanan['sumber_pengairan'] == 'Irigasi') ? 'selected' : ''; ?>>Irigasi</option>
                                <option <?= (old('sumber_pengairan') == 'Air Hujan') ? 'selected' : ''; ?> <?= ($perikanan['sumber_pengairan'] == 'Air Hujan') ? 'selected' : ''; ?>>Air Hujan</option>
                                <option <?= (old('sumber_pengairan') == 'Sumur/Mata Air') ? 'selected' : ''; ?> <?= ($perikanan['sumber_pengairan'] == 'Sumur/Mata Air') ? 'selected' : ''; ?>>Sumur/Mata Air</option>
                                <option <?= (old('sumber_pengairan') == 'Sungai') ? 'selected' : ''; ?> <?= ($perikanan['sumber_pengairan'] == 'Sungai') ? 'selected' : ''; ?>>Sungai</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="benih" class="col-sm-5 col-form-label">Benih Untuk Proses Produksi</label>
                            <div class="col-sm-7">
                              <select class="form-control select2bs4" name="benih">
                                <option selected disabled></option>
                                <option <?= (old('benih') == 'Produksi Sendiri') ? 'selected' : ''; ?> <?= ($perikanan['benih'] == 'Produksi Sendiri') ? 'selected' : ''; ?>>Produksi Sendiri</option>
                                <option <?= (old('benih') == 'Beli') ? 'selected' : ''; ?> <?= ($perikanan['benih'] == 'Beli') ? 'selected' : ''; ?>>Beli</option>
                                <option <?= (old('benih') == 'Bantuan') ? 'selected' : ''; ?> <?= ($perikanan['benih'] == 'Bantuan') ? 'selected' : ''; ?>>Bantuan</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="jns_asal_pakan" class="col-sm-5 col-form-label">Jenis dan Asal Pakan Ikan</label>
                            <div class="col-sm-7">
                              <select class="form-control select2bs4" name="jns_asal_pakan">
                                <option selected disabled></option>
                                <option <?= (old('jns_asal_pakan') == 'Produksi Sendiri') ? 'selected' : ''; ?> <?= ($perikanan['jns_asal_pakan'] == 'Produksi Sendiri') ? 'selected' : ''; ?>>Produksi Sendiri</option>
                                <option <?= (old('jns_asal_pakan') == 'Beli') ? 'selected' : ''; ?> <?= ($perikanan['jns_asal_pakan'] == 'Beli') ? 'selected' : ''; ?>>Beli</option>
                                <option <?= (old('jns_asal_pakan') == 'Bantuan') ? 'selected' : ''; ?> <?= ($perikanan['jns_asal_pakan'] == 'Bantuan') ? 'selected' : ''; ?>>Bantuan</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="alat_teknologi" class="col-sm-5 col-form-label">Alat/teknologi yg Digunakan</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('alat_teknologi')) ? 'is-invalid' : ''; ?>" name="alat_teknologi" placeholder="Alat/Teknologi" value="<?= (old('alat_teknologi')) ? old('alat_teknologi') : $perikanan['alat_teknologi']; ?>">
                              <div class="invalid-feedback text-danger">
                                <?= $validation->getError('alat_teknologi'); ?>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="peman_hsl_prod" class="col-sm-5 col-form-label">Pemanfaatan Hasil Produksi</label>
                            <div class="col-sm-7">
                              <select class="form-control select2bs4" name="peman_hsl_prod">
                                <option selected disabled></option>
                                <option <?= (old('peman_hsl_prod') == 'Dikonsumsi Sendiri') ? 'selected' : ''; ?> <?= ($perikanan['peman_hsl_prod'] == 'Dikonsumsi Sendiri') ? 'selected' : ''; ?>>Dikonsumsi Sendiri</option>
                                <option <?= (old('peman_hsl_prod') == 'Dijual Langsung') ? 'selected' : ''; ?> <?= ($perikanan['peman_hsl_prod'] == 'Dijual Langsung') ? 'selected' : ''; ?>>Dijual Langsung</option>
                                <option <?= (old('peman_hsl_prod') == 'Diolah Lebih Lanjut') ? 'selected' : ''; ?> <?= ($perikanan['peman_hsl_prod'] == 'Diolah Lebih Lanjut') ? 'selected' : ''; ?>>Diolah Lebih lanjut</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="limbah_hsl_prod" class="col-sm-5 col-form-label">Limbah Produksi dan Pengelolaannya</label>
                            <div class="col-sm-7">
                              <select class="form-control select2bs4" name="limbah_hsl_prod">
                                <option selected disabled></option>
                                <option <?= (old('limbah_hsl_prod') == 'Dijual') ? 'selected' : ''; ?> <?= ($perikanan['limbah_hsl_prod'] == 'Dijual') ? 'selected' : ''; ?>>Dijual</option>
                                <option <?= (old('limbah_hsl_prod') == 'DImanfaatkan Sendiri') ? 'selected' : ''; ?> <?= ($perikanan['limbah_hsl_prod'] == 'DImanfaatkan Sendiri') ? 'selected' : ''; ?>>Dimanfaatkan Sendiri</option>
                                <option <?= (old('limbah_hsl_prod') == 'Diolah') ? 'selected' : ''; ?> <?= ($perikanan['limbah_hsl_prod'] == 'Diolah') ? 'selected' : ''; ?>>Diolah</option>
                                <option <?= (old('limbah_hsl_prod') == 'Dibuang') ? 'selected' : ''; ?> <?= ($perikanan['limbah_hsl_prod'] == 'Dibuang') ? 'selected' : ''; ?>>Dibuang</option>
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
                        <label for="nama_anc" class="col-sm-5 col-form-label">Ancaman</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="nama_anc" placeholder="Ancaman" value="<?= (old('nama_anc')) ? old('nama_anc') : $perikanan['nama_anc']; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="penanggulangan" class="col-sm-5 col-form-label">Cara Penanggulangan</label>
                        <div class="col-sm-7">
                          <textarea class="form-control" name="penanggulangan"><?= (old('penanggulangan')) ? old('penanggulangan') : $perikanan['penanggulangan']; ?></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-two-tempat" role="tabpanel" aria-labelledby="custom-tabs-two-tempat-tab">
                    <div class="card-body text-muted">
                      <h4 class="text-center">TEMPAT PRODUKSI</h4>
                      <div class="form-group row my-4">
                        <label for="kepemilikan" class="col-sm-5 col-form-label">Kepemilikan</label>
                        <div class="col-sm-7">
                          <select class="form-control select2bs4" name="id_tp" id="kepemilikan">
                            <option value="" selected disabled></option>
                            <?php foreach ($tempat as $value) : ?>
                              <option value="<?= $value['id_tp']; ?>" <?= (old('id_tp') == $value['id_tp']) ? 'selected' : ''; ?> <?= $value['id_tp'] == $perikanan['id_tp'] ? 'selected' : '' ?>><?= $value['kepemilikan']; ?></option>
                            <?php endforeach ?>
                          </select>
                          <div class="invalid-feesback text-danger">
                            <?= $validation->getError('kepemilikan'); ?>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Kecamatan</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="kecamatan" id="kecamatan" value="<?= $perikanan['kecamatan']; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Kelurahan</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="kelurahan" id="kelurahan" value="<?= $perikanan['kelurahan']; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Letak Kawasan Produksi</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="letak_prod" id="letak_prod" value="<?= $perikanan['letak_prod']; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Luas Kawasan Produksi</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="luas_prod" id="luas_prod" value="<?= $perikanan['luas_prod']; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Status Tempat Produksi</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="status_lahan" id="status_lahan" value="<?= $perikanan['status_lahan']; ?>" readonly>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-two-infrastruktur" role="tabpanel" aria-labelledby="custom-tabs-two-infrastruktur-tab">
                    <div class="card-body text-muted">
                      <h4 class="text-center">INFRASTRUKTUR PRODUKSI</h4>
                      <div class="form-group row my-4">
                        <label for="sarana_pengairan" class="col-sm-5 col-form-label">Sarana dan Prasarana Pengairan</label>
                        <div class="col-sm-7">
                          <select class="form-control select2bs4" name="id_ip" id="sarana_pengairan">
                            <option selected disabled></option>
                            <?php foreach ($infrastruktur as $infras => $value) : ?>
                              <option value="<?= $value['id_ip']; ?>" <?= (old('id_ip') == $value['id_ip']) ? 'selected' : ''; ?> <?= $value['id_ip'] == $perikanan['id_ip'] ? 'selected' : '' ?>><?= $value['sarana_pengairan']; ?></option>
                            <?php endforeach; ?>
                          </select>
                          <div class="invalid-feesback text-danger">
                            <?= $validation->getError('sarana_pengairan'); ?>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Pengelolaan Jaringan Irigasi</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="pengel_jar_irigasi" id="pengel_jar_irigasi" value="<?= $perikanan['pengel_jar_irigasi']; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Infrastruktur Pengelolaan Irigasi</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="infras_pengel_air" id="infras_pengel_air" value="<?= $perikanan['infras_pengel_air']; ?>" readonly>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-two-produsen" role="tabpanel" aria-labelledby="custom-tabs-two-produsen-tab">
                    <div class="card-body text-muted">
                      <h4 class="text-center">PRODUSEN</h4>
                      <div class="form-group row my-4">
                        <label for="kelembagaan" class="col-sm-5 col-form-label">Kelembagaan Produsen/Petani</label>
                        <div class="col-sm-7">
                          <select class="form-control select2bs4" name="id_produsen">
                            <option selected disabled></option>
                            <?php foreach ($produsen as $pro => $value) : ?>
                              <option value="<?= $value['id_produsen']; ?>" <?= (old('id_produsen') == $value['id_produsen']) ? 'selected' : ''; ?> <?= $value['id_produsen'] == $perikanan['id_produsen'] ? 'selected' : '' ?>><?= $value['kelembagaan']; ?></option>
                            <?php endforeach; ?>
                          </select>
                          <div class="invalid-feesback text-danger">
                            <?= $validation->getError('kelembagaan'); ?>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Jumlah Penghasil Komoditas</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="jml_penghasil_kom" id="jml_penghasil_kom" value="<?= $perikanan['jml_penghasil_kom']; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Pembinaan</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="pembinaan" id="pembinaan" value="<?= $perikanan['pembinaan']; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Kesejahteraan</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="kesejahteraan" id="kesejahteraan" value="<?= $perikanan['kesejahteraan']; ?>" readonly>
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
            <a href="/perikanan" class="btn bg-gradient-warning mr-2">Batal</a>
            <input type="submit" value="Edit Data Pangan" class="btn bg-gradient-primary">
          </div>
        </div>
      </form>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>