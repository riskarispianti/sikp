<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Produksi Peternakan</small></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="/peternakan">Peternakan</a></li>
            <li class="breadcrumb-item active">Tambah</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container">
      <form class="form-horizontal" action="/peternakan/save" method="post">
        <?= csrf_field() ?>
        <div class="row">
          <div class="col-sm-12">
            <div class="card card-tabs card-success">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                  <li class="pt-2 px-3">
                    <h3 class="card-title">Tambah Peternakan</h3>
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
                      <h4 class="text-center">PRODUKSI PETERNAKAN</h4>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row my-4">
                            <label for="komoditas" class="col-sm-5 col-form-label">Komoditas</label>
                            <div class="col-sm-7">
                              <select class="form-control select2bs4" name="id_kom">
                                <option selected disabled></option>
                                <?php foreach ($komoditas as $kom => $value) : ?>
                                  <option value="<?= $value['id_kom']; ?>"><?= $value['komoditas']; ?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="jenis_ternak" class="col-sm-5 col-form-label">Jenis Ternak</label>
                            <div class="col-sm-7">
                              <select class="form-control select2bs4" name="jenis_ternak">
                                <option selected disabled></option>
                                <option <?= (old('jenis_ternak') == 'Ternak Besar') ? 'selected' : ''; ?>>Ternak Besar</option>
                                <option <?= (old('jenis_ternak') == 'Ternak Kecil') ? 'selected' : ''; ?>>Ternak Kecil</option>
                                <option <?= (old('jenis_ternak') == 'Ternak Unggas') ? 'selected' : ''; ?>>Unggas</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="jml_populasi" class="col-sm-5 col-form-label">Jumlah Populasi</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('jml_populasi')) ? 'is-invalid' : ''; ?>" name="jml_populasi" placeholder="Ekor" value="<?= old('jml_populasi'); ?>">
                              <div class="invalid-feedback text-danger">
                                <?= $validation->getError('jml_populasi'); ?>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="lama_prod" class="col-sm-5 col-form-label">Lama Proses Produksi</label>
                            <div class="col-sm-7 input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="far fa-calendar-alt"></i>
                                </span>
                              </div>
                              <input type="text" class="form-control float-right" name="lama_prod" id="reservation" value="<?= old('lama_prod'); ?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="waktu_prod" class="col-sm-5 col-form-label">Waktu Produksi</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('waktu_prod')) ? 'is-invalid' : ''; ?>" name="waktu_prod" placeholder="Waktu Produksi" value="<?= old('waktu_prod'); ?>">
                              <div class="invalid-feedback text-danger">
                                <?= $validation->getError('waktu_prod'); ?>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="biaya_prod" class="col-sm-5 col-form-label">Biaya Produksi</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('biaya_prod')) ? 'is-invalid' : ''; ?>" name="biaya_prod" placeholder="Ton/Ha" value="<?= old('biaya_prod'); ?>">
                              <div class="invalid-feedback text-danger">
                                <?= $validation->getError('biaya_prod'); ?>
                              </div>
                            </div>
                          </div>

                        </div>

                        <div class="col-md-6">
                          <div class="form-group row mt-4">
                            <label for="harga_hsl_prod" class="col-sm-5 col-form-label">Harga Hasil Produksi</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('harga_hsl_prod')) ? 'is-invalid' : ''; ?>" name="harga_hsl_prod" value="<?= old('harga_hsl_prod'); ?>">
                              <div class="invalid-feedback text-danger">
                                <?= $validation->getError('harga_hsl_prod'); ?>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="sistem_pemel_ternak" class="col-sm-5 col-form-label">Sistem Pemeliharaan Ternak</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('sistem_pemel_ternak')) ? 'is-invalid' : ''; ?>" name="sistem_pemel_ternak" value="<?= old('sistem_pemel_ternak'); ?>">
                              <div class="invalid-feedback text-danger">
                                <?= $validation->getError('sistem_pemel_ternak'); ?>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="benih" class="col-sm-5 col-form-label">Benih</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('benih')) ? 'is-invalid' : ''; ?>" name="benih" value="<?= old('benih'); ?>">
                              <div class="invalid-feedback text-danger">
                                <?= $validation->getError('benih'); ?>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="alat_teknologi" class="col-sm-5 col-form-label">Alat/teknologi yg Digunakan</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('alat_teknologi')) ? 'is-invalid' : ''; ?>" name="alat_teknologi" value="<?= old('alat_teknologi'); ?>">
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
                                <option>Dikonsumsi Sendiri</option>
                                <option>Dijual Langsung</option>
                                <option>Diolah Lebih lanjut</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="limbah_hsl_prod" class="col-sm-5 col-form-label">Limbah Produksi dan Pengelolaannya</label>
                            <div class="col-sm-7">
                              <select class="form-control select2bs4" name="limbah_hsl_prod">
                                <option selected disabled></option>
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
                          <input type="text" class="form-control" name="nama_anc" placeholder="Ancaman" value="<?= old('nama_anc'); ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="penanggulangan" class="col-sm-5 col-form-label">Cara Penanggulangan</label>
                        <div class="col-sm-7">
                          <textarea class="form-control" name="penanggulangan" value="<?= old('penanggulangan'); ?>"></textarea>
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
                          <select class="form-control select2bs4" name="id_tp">
                            <option selected disabled></option>
                            <?php foreach ($tempat as $tem => $value) : ?>
                              <option value="<?= $value['id_tp']; ?>"><?= $value['kepemilikan']; ?></option>
                            <?php endforeach; ?>
                          </select>
                          <div class="invalid-feesback text-danger">
                            <?= $validation->getError('kepemilikan'); ?>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Kecamatan</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Kelurahan</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Letak Kawasan Produksi</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Luas Kawasan Produksi</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Status Tempat Produksi</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="" disabled>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-two-infrastruktur" role="tabpanel" aria-labelledby="custom-tabs-two-infrastruktur-tab">
                    <div class="card-body text-muted">
                      <h4 class="text-center">INFRASTRUKTUR PRODUKSI</h4>
                      <div class="form-group row my-4">
                        <label for="pemilik" class="col-sm-5 col-form-label">Pemilik Rumah Pemotongan Hewan (RPH)</label>
                        <div class="col-sm-7">
                          <select class="form-control select2bs4" name="id_ipt">
                            <option selected disabled></option>
                            <?php foreach ($infrastruktur as $infras => $value) : ?>
                              <option value="<?= $value['id_ipt']; ?>"><?= $value['pemilik']; ?></option>
                            <?php endforeach; ?>
                          </select>
                          <div class="invalid-feesback text-danger">
                            <?= $validation->getError('pemilik'); ?>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Kandang</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Lokasi RPH</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Kapasitas</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="" disabled>
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
                              <option value="<?= $value['id_produsen']; ?>"><?= $value['kelembagaan']; ?></option>
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
                          <input type="text" class="form-control" name="" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Pembinaan</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Kesejahteraan</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="" disabled>
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
            <a href="/peternakan" class="btn bg-gradient-warning mr-3">Batal</a>
            <input type="submit" value="Tambah Data Pangan" class="btn bg-gradient-success">
          </div>
        </div>
      </form>
    </div>
  </section>

</div>

<?= $this->endSection(); ?>