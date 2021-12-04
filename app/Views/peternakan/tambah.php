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
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container">
      <form class="form-horizontal" action="/tanaman/save" method="post">
        <?= csrf_field() ?>
        <div class="row">
          <div class="col-sm-12">
            <div class="card card-tabs card-success">
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
                    <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill" href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false">Master Data</a>
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
                                  <option value="<?= $value['id_kom']; ?>"><?= $value['komoditas']; ?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="jenis_pangan" class="col-sm-5 col-form-label">Jenis Pangan</label>
                            <div class="col-sm-7">
                              <select class="form-control select2bs4" name="jenis_tanam">
                                <option selected disabled></option>
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
                              <input type="text" class="form-control <?= ($validation->hasError('ls_tanam')) ? 'is-invalid' : ''; ?>" name="ls_tanam" placeholder="Ha" value="<?= old('ls_tanam'); ?>">
                              <div class="invalid-feedback text-danger">
                                <?= $validation->getError('ls_tanam'); ?>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="ls_panen" class="col-sm-5 col-form-label">Luas Panen</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('ls_panen')) ? 'is-invalid' : ''; ?>" name="ls_panen" placeholder="Ha" value="<?= old('ls_panen'); ?>">
                              <div class="invalid-feedback text-danger">
                                <?= $validation->getError('ls_panen'); ?>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="produktivitas" class="col-sm-5 col-form-label">Produktivitas</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('produktivitas')) ? 'is-invalid' : ''; ?>" name="produktivitas" placeholder="Ton/Ha" value="<?= old('produktivitas'); ?>">
                              <div class="invalid-feedback text-danger">
                                <?= $validation->getError('produktivitas'); ?>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="jml_prod" class="col-sm-5 col-form-label">Jumlah Produksi</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('jml_prod')) ? 'is-invalid' : ''; ?>" name="jml_prod" placeholder="Ton" value="<?= old('jml_prod'); ?>">
                              <div class="invalid-feedback text-danger">
                                <?= $validation->getError('jml_prod'); ?>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="lama_proses_prod" class="col-sm-5 col-form-label">Lama Proses Produksi</label>
                            <div class="col-sm-7 input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="far fa-calendar-alt"></i>
                                </span>
                              </div>
                              <input type="text" class="form-control float-right <?= ($validation->hasError('lama_proses_prod')) ? 'is-invalid' : ''; ?>" name="lama_proses_prod" id="reservation">
                              <div class="invalid-feedback text-danger">
                                <?= $validation->getError('lama_proses_prod'); ?>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="perk_iklim" class="col-sm-5 col-form-label">Perkiraan Iklim</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('perk_iklim')) ? 'is-invalid' : ''; ?>" name="perk_iklim" placeholder="Perkiraan iklim" value="<?= old('perk_iklim'); ?>">
                              <div class="invalid-feedback text-danger">
                                <?= $validation->getError('perk_iklim'); ?>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="perk_tanam_panen" class="col-sm-5 col-form-label">Perkiraan Musim Tanam dan Panen</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('perk_tanam_panen')) ? 'is-invalid' : ''; ?>" name="perk_tanam_panen" placeholder="Waktu produksi" value="<?= old('perk_tanam_panen'); ?>">
                              <div class="invalid-feedback text-danger">
                                <?= $validation->getError('perk_tanam_panen'); ?>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row my-4">
                            <label for="biaya_prod" class="col-sm-5 col-form-label">Biaya Produksi</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('biaya_prod')) ? 'is-invalid' : ''; ?>" name="biaya_prod" placeholder="Biaya produksi" value="<?= old('biaya_prod'); ?>">
                              <div class="invalid-feedback text-danger">
                                <?= $validation->getError('biaya_prod'); ?>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="harga_jual_prod" class="col-sm-5 col-form-label">Harga Jual Hasil Produksi</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('harga_jual_prod')) ? 'is-invalid' : ''; ?>" name="harga_jual_prod" placeholder="Harga jual" value="<?= old('harga_jual_prod'); ?>">
                              <div class="invalid-feedback text-danger">
                                <?= $validation->getError('harga_jual_prod'); ?>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="lahan_prod" class="col-sm-5 col-form-label">Lahan Produksi</label>
                            <div class="col-sm-7">
                              <select class="form-control select2bs4" name="lahan_prod">
                                <option selected disabled></option>
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
                              <select class="form-control select2bs4" name="sumber_pengairan">
                                <option selected disabled></option>
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
                              <select class="form-control select2bs4" name="bibit">
                                <option selected disabled></option>
                                <option>Produksi Sendiri</option>
                                <option>Beli</option>
                                <option>Bantuan</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="pupuk" class="col-sm-5 col-form-label">Pupuk</label>
                            <div class="col-sm-7">
                              <select class="form-control select2bs4" name="pupuk">
                                <option selected disabled></option>
                                <option>Produksi Sendiri</option>
                                <option>Beli</option>
                                <option>Bantuan</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="alat_teknologi" class="col-sm-5 col-form-label">Alat/teknologi yg Digunakan</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('alat_teknologi')) ? 'is-invalid' : ''; ?>" name="alat_teknologi" placeholder="Alat/Teknologi" value="<?= old('alat_teknologi'); ?>">
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
                  <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel" aria-labelledby="custom-tabs-two-messages-tab">
                    <div class="card-body text-muted">
                      <div class="form-group row my-4">
                        <label for="letak_prod" class="col-sm-5 col-form-label">Letak Kawasan Produksi</label>
                        <div class="col-sm-7">
                          <select class="form-control select2bs4" name="id_tp">
                            <option selected disabled></option>
                            <?php foreach ($tempat as $tem => $value) : ?>
                              <option value="<?= $value['id_tp']; ?>"><?= $value['letak_prod']; ?></option>
                            <?php endforeach; ?>
                          </select>
                          <div class="invalid-feesback text-danger">
                            <?= $validation->getError('letak_prod'); ?>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row my-4">
                        <label for="nama_sp" class="col-sm-5 col-form-label">Identitas Sentra Produksi</label>
                        <div class="col-sm-7">
                          <select class="form-control select2bs4" name="id_sp">
                            <option selected disabled></option>
                            <?php foreach ($sentra as $sen => $value) : ?>
                              <option value="<?= $value['id_sp']; ?>"><?= $value['nama_sp']; ?></option>
                            <?php endforeach; ?>
                          </select>
                          <div class="invalid-feesback text-danger">
                            <?= $validation->getError('nama_sp'); ?>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row my-4">
                        <label for="sarana_pengairan" class="col-sm-5 col-form-label">Sarana dan Prasarana Pengairan</label>
                        <div class="col-sm-7">
                          <select class="form-control select2bs4" name="id_ip">
                            <option selected disabled></option>
                            <?php foreach ($infrastruktur as $infras => $value) : ?>
                              <option value="<?= $value['id_ip']; ?>"><?= $value['sarana_pengairan']; ?></option>
                            <?php endforeach; ?>
                          </select>
                          <div class="invalid-feesback text-danger">
                            <?= $validation->getError('sarana_pengairan'); ?>
                          </div>
                        </div>
                      </div>
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
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="/tanaman" class="btn bg-gradient-warning mr-3">Batal</a>
            <input type="submit" value="Tambah Data Pangan" class="btn bg-gradient-success">
          </div>
        </div>
      </form>
    </div>
  </section>

</div>

<?= $this->endSection(); ?>