<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Produksi Tanaman Pangan, Holtikultura, dan Perkebunan</small></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="/tanaman">Tanaman</a></li>
            <li class="breadcrumb-item active">Edit</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container">
      <form class="form-horizontal" action="/tanaman/update_detail_home/<?= $tanaman['id_tanam']; ?>" method="post">
        <?= csrf_field() ?>
        <div class="row">
          <div class="col-sm-12">
            <div class="card card-tabs card-info">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                  <li class="pt-2 px-3">
                    <h3 class="card-title">Edit Tanaman Pangan</h3>
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
                                <option disabled></option>
                                <?php foreach ($komoditas as $kom => $value) : ?>
                                  <option value="<?= $value['id_kom']; ?>" <?= $value['id_kom'] == $tanaman['id_kom'] ? 'selected' : '' ?>><?= $value['komoditas']; ?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="jenis_pangan" class="col-sm-5 col-form-label">Jenis Pangan</label>
                            <div class="col-sm-7">
                              <select class="form-control select2bs4" name="jenis_tanam">
                                <option selected disabled></option>
                                <option <?= ($tanaman['jenis_tanam'] == 'Serealia') ? 'selected' : ''; ?>>Serealia</option>
                                <option <?= ($tanaman['jenis_tanam'] == 'Umbi-umbian') ? 'selected' : ''; ?>>Umbi-umbian</option>
                                <option <?= ($tanaman['jenis_tanam'] == 'Kacang-kacangan') ? 'selected' : ''; ?>>Kacang-kacangan</option>
                                <option <?= ($tanaman['jenis_tanam'] == 'Sayur Musiman') ? 'selected' : ''; ?>>Sayur Musiman</option>
                                <option <?= ($tanaman['jenis_tanam'] == 'Sayur Tahunan') ? 'selected' : ''; ?>>Sayur Tahunan</option>
                                <option <?= ($tanaman['jenis_tanam'] == 'Buah Musiman') ? 'selected' : ''; ?>>Buah Musiman</option>
                                <option <?= ($tanaman['jenis_tanam'] == 'Buah Tahunan') ? 'selected' : ''; ?>>Buah Tahunan</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="ls_tanam" class="col-sm-5 col-form-label">Luas Tanam/Areal</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('ls_tanam')) ? 'is-invalid' : ''; ?>" name="ls_tanam" placeholder="Ha" value="<?= (old('ls_tanam')) ? old('ls_tanam') : $tanaman['ls_tanam']; ?>">
                              <div class="invalid-feedback text-danger">
                                <?= $validation->getError('ls_tanam'); ?>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="ls_panen" class="col-sm-5 col-form-label">Luas Panen</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('ls_panen')) ? 'is-invalid' : ''; ?>" name="ls_panen" placeholder="Ha" value="<?= (old('ls_panen')) ? old('ls_panen') : $tanaman['ls_panen']; ?>">
                              <div class="invalid-feedback text-danger">
                                <?= $validation->getError('ls_panen'); ?>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="produktivitas" class="col-sm-5 col-form-label">Produktivitas</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('produktivitas')) ? 'is-invalid' : ''; ?>" name="produktivitas" placeholder="Ton/Ha" value="<?= (old('produktivitas')) ? old('produktivitas') : $tanaman['produktivitas']; ?>">
                              <div class="invalid-feedback text-danger">
                                <?= $validation->getError('produktivitas'); ?>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="jml_prod" class="col-sm-5 col-form-label">Jumlah Produksi</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('jml_prod')) ? 'is-invalid' : ''; ?>" name="jml_prod" placeholder="Ton" value="<?= (old('jml_prod')) ? old('jml_prod') : $tanaman['jml_prod']; ?>">
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
                              <input type="text" class="form-control float-right <?= ($validation->hasError('lama_proses_prod')) ? 'is-invalid' : ''; ?>" name="lama_proses_prod" id="reservation" value="<?= (old('lama_proses_prod')) ? old('lama_proses_prod') : $tanaman['lama_proses_prod']; ?>">
                              <div class="invalid-feedback text-danger">
                                <?= $validation->getError('lama_proses_prod'); ?>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="perk_iklim" class="col-sm-5 col-form-label">Perkiraan Iklim</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('perk_iklim')) ? 'is-invalid' : ''; ?>" name="perk_iklim" placeholder="Perkiraan iklim" value="<?= (old('perk_iklim')) ? old('perk_iklim') : $tanaman['perk_iklim']; ?>">
                              <div class="invalid-feedback text-danger">
                                <?= $validation->getError('perk_iklim'); ?>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="perk_tanam_panen" class="col-sm-5 col-form-label">Perkiraan Musim Tanam dan Panen</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('perk_tanam_panen')) ? 'is-invalid' : ''; ?>" name="perk_tanam_panen" placeholder="Waktu produksi" value="<?= (old('perk_tanam_panen')) ? old('perk_tanam_panen') : $tanaman['perk_tanam_panen']; ?>">
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
                              <input type="text" class="form-control <?= ($validation->hasError('biaya_prod')) ? 'is-invalid' : ''; ?>" name="biaya_prod" placeholder="Biaya produksi" value="<?= (old('biaya_prod')) ? old('biaya_prod') : $tanaman['biaya_prod']; ?>">
                              <div class="invalid-feedback text-danger">
                                <?= $validation->getError('biaya_prod'); ?>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="harga_jual_prod" class="col-sm-5 col-form-label">Harga Jual Hasil Produksi</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('harga_jual_prod')) ? 'is-invalid' : ''; ?>" name="harga_jual_prod" placeholder="Harga jual" value="<?= (old('harga_jual_prod')) ? old('harga_jual_prod') : $tanaman['harga_jual_prod']; ?>">
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
                                <option <?= ($tanaman['lahan_prod'] == 'Sawah Irigasi') ? 'selected' : ''; ?>>Sawah Irigasi</option>
                                <option <?= ($tanaman['lahan_prod'] == 'Sawah Tadah hujan') ? 'selected' : ''; ?>>Sawah Tadah Hujan</option>
                                <option <?= ($tanaman['lahan_prod'] == 'Tegal/Kebun') ? 'selected' : ''; ?>>Tegal/Kebun</option>
                                <option <?= ($tanaman['lahan_prod'] == 'Ladang/Huma') ? 'selected' : ''; ?>>Ladang/Huma</option>
                                <option <?= ($tanaman['lahan_prod'] == 'Perkebunan') ? 'selected' : ''; ?>>Perkebunan</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="sumber_pengairan" class="col-sm-5 col-form-label">Sumber Pengairan</label>
                            <div class="col-sm-7">
                              <select class="form-control select2bs4" name="sumber_pengairan">
                                <option selected disabled></option>
                                <option <?= ($tanaman['sumber_pengairan'] == 'Irigasi') ? 'selected' : ''; ?>>Irigasi</option>
                                <option <?= ($tanaman['sumber_pengairan'] == 'Air Hujan') ? 'selected' : ''; ?>>Air Hujan</option>
                                <option <?= ($tanaman['sumber_pengairan'] == 'Sumur/Mata air') ? 'selected' : ''; ?>>Sumur/Mata air</option>
                                <option <?= ($tanaman['sumber_pengairan'] == 'Sungai') ? 'selected' : ''; ?>>Sungai</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="bibit" class="col-sm-5 col-form-label">Bibit</label>
                            <div class="col-sm-7">
                              <select class="form-control select2bs4" name="bibit">
                                <option selected disabled></option>
                                <option <?= ($tanaman['bibit'] == 'Produksi Sendiri') ? 'selected' : ''; ?>>Produksi Sendiri</option>
                                <option <?= ($tanaman['bibit'] == 'Beli') ? 'selected' : ''; ?>>Beli</option>
                                <option <?= ($tanaman['bibit'] == 'Bantuan') ? 'selected' : ''; ?>>Bantuan</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="pupuk" class="col-sm-5 col-form-label">Pupuk</label>
                            <div class="col-sm-7">
                              <select class="form-control select2bs4" name="pupuk">
                                <option selected disabled></option>
                                <option <?= ($tanaman['pupuk'] == 'Produksi Sendiri') ? 'selected' : ''; ?>>Produksi Sendiri</option>
                                <option <?= ($tanaman['pupuk'] == 'Beli') ? 'selected' : ''; ?>>Beli</option>
                                <option <?= ($tanaman['pupuk'] == 'Bantuan') ? 'selected' : ''; ?>>Bantuan</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="alat_teknologi" class="col-sm-5 col-form-label">Alat/teknologi yg Digunakan</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control <?= ($validation->hasError('alat_teknologi')) ? 'is-invalid' : ''; ?>" name="alat_teknologi" placeholder="Alat/Teknologi" value="<?= (old('alat_teknologi')) ? old('alat_teknologi') : $tanaman['alat_teknologi']; ?>">
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
                                <option <?= ($tanaman['peman_hsl_prod'] == 'Dikonsumsi Sendiri') ? 'selected' : ''; ?>>Dikonsumsi Sendiri</option>
                                <option <?= ($tanaman['peman_hsl_prod'] == 'Dijual Langsung') ? 'selected' : ''; ?>>Dijual Langsung</option>
                                <option <?= ($tanaman['peman_hsl_prod'] == 'Diolah Lebih Lanjut') ? 'selected' : ''; ?>>Diolah Lebih lanjut</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="limbah_hsl_prod" class="col-sm-5 col-form-label">Limbah Produksi dan Pengelolaannya</label>
                            <div class="col-sm-7">
                              <select class="form-control select2bs4" name="limbah_hsl_prod">
                                <option selected disabled></option>
                                <option <?= ($tanaman['limbah_hsl_prod'] == 'Dijual') ? 'selected' : ''; ?>>Dijual</option>
                                <option <?= ($tanaman['limbah_hsl_prod'] == 'Dimanfaatkan Sendiri') ? 'selected' : ''; ?>>Dimanfaatkan Sendiri</option>
                                <option <?= ($tanaman['limbah_hsl_prod'] == 'Diolah') ? 'selected' : ''; ?>>Diolah</option>
                                <option <?= ($tanaman['limbah_hsl_prod'] == 'Dibuang') ? 'selected' : ''; ?>>Dibuang</option>
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
                          <input type="text" class="form-control" name="nama_anc" placeholder="Ancaman" value="<?= (old('nama_anc')) ? old('nama_anc') : $tanaman['nama_anc']; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="penanggulangan" class="col-sm-5 col-form-label">Cara Penanggulangan</label>
                        <div class="col-sm-7">
                          <textarea class="form-control" name="penanggulangan"><?= (old('penanggulangan')) ? old('penanggulangan') : $tanaman['penanggulangan']; ?></textarea>
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
                              <option value="<?= $value['id_tp']; ?>" <?= (old('id_tp') == $value['id_tp']) ? 'selected' : ''; ?> <?= $value['id_tp'] == $tanaman['id_tp'] ? 'selected' : '' ?>><?= $value['kepemilikan']; ?></option>
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
                          <input type="text" class="form-control" name="kecamatan" id="kecamatan" value="<?= $tanaman['kecamatan']; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Kelurahan</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="kelurahan" id="kelurahan" value="<?= $tanaman['kelurahan']; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Letak Kawasan Produksi</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="letak_prod" id="letak_prod" value="<?= $tanaman['letak_prod']; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Luas Kawasan Produksi</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="luas_prod" id="luas_prod" value="<?= $tanaman['luas_prod']; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Status Tempat Produksi</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="status_lahan" id="status_lahan" value="<?= $tanaman['status_lahan']; ?>" readonly>
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
                              <option value="<?= $value['id_ip']; ?>" <?= (old('id_ip') == $value['id_ip']) ? 'selected' : ''; ?> <?= $value['id_ip'] == $tanaman['id_ip'] ? 'selected' : '' ?>><?= $value['sarana_pengairan']; ?></option>
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
                          <input type="text" class="form-control" name="pengel_jar_irigasi" id="pengel_jar_irigasi" value="<?= $tanaman['pengel_jar_irigasi']; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Infrastruktur Pengelolaan Irigasi</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="infras_pengel_air" id="infras_pengel_air" value="<?= $tanaman['infras_pengel_air']; ?>" readonly>
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
                              <option value="<?= $value['id_produsen']; ?>" <?= (old('id_produsen') == $value['id_produsen']) ? 'selected' : ''; ?> <?= $value['id_produsen'] == $tanaman['id_produsen'] ? 'selected' : '' ?>><?= $value['kelembagaan']; ?></option>
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
                          <input type="text" class="form-control" name="jml_penghasil_kom" id="jml_penghasil_kom" value="<?= $tanaman['jml_penghasil_kom']; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Pembinaan</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="pembinaan" id="pembinaan" value="<?= $tanaman['pembinaan']; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label">Kesejahteraan</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="kesejahteraan" id="kesejahteraan" value="<?= $tanaman['kesejahteraan']; ?>" readonly>
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
            <a href="/tanaman" class="btn bg-gradient-warning mr-2">Batal</a>
            <input type="submit" value="Edit Data Pangan" class="btn bg-gradient-info">
          </div>
        </div>
      </form>
    </div>
  </section>

</div>

<?= $this->endSection(); ?>