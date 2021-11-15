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

  <section class="content">
    <div class="container">
      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <form class="form-horizontal">
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="card-body text-muted">
                  <h4 class="text-center">PRODUKSI PANGAN</h4>
                  <div class="form-group row my-4">
                    <label class="col-sm-5 col-form-label">Komoditas</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" placeholder="Komoditas">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Jenis Pangan</label>
                    <div class="col-sm-7">
                      <select class="form-control">
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
                    <label class="col-sm-5 col-form-label">Luas Tanam/Areal</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" placeholder="Ha">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Luas Panen</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" placeholder="Ha">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Produktivitas</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" placeholder="Ton/Ha">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Jumlah Produksi</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" placeholder="Ton">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Lama Proses Produksi</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" placeholder="Bulan/Tahun">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Perkiraan Iklim</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" placeholder="Perkiraan iklim">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Perkiraan Musim Tanam dan Panen</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" placeholder="Waktu produksi">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Biaya Produksi</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" placeholder="Biaya produksi">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Harga Jual Hasil Produksi</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" placeholder="Harga jual">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Lahan Produksi</label>
                    <div class="col-sm-7">
                      <select class="form-control">
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
                    <label class="col-sm-5 col-form-label">Sumber Pengairan</label>
                    <div class="col-sm-7">
                      <select class="form-control">
                        <option>---</option>
                        <option>Irigasi</option>
                        <option>air Hujan</option>
                        <option>Sumur/Mata air</option>
                        <option>Sungai</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Bibit</label>
                    <div class="col-sm-7">
                      <select class="form-control">
                        <option>---</option>
                        <option>Produksi Sendiri</option>
                        <option>Beli</option>
                        <option>Bantuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Pupuk</label>
                    <div class="col-sm-7">
                      <select class="form-control">
                        <option>---</option>
                        <option>Produksi Sendiri</option>
                        <option>Beli</option>
                        <option>Bantuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Alat/teknologi yg Digunakan</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" placeholder="Alat/Teknologi">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Pemanfaatan Hasil Produksi</label>
                    <div class="col-sm-7">
                      <select class="form-control">
                        <option>---</option>
                        <option>Dikonsumsi Sendiri</option>
                        <option>Dijual Langsung</option>
                        <option>Diolah Lebih lanjut</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Limbah Produksi dan Pengelolaannya</label>
                    <div class="col-sm-7">
                      <select class="form-control">
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
                    <label class="col-sm-5 col-form-label">Ancaman</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" placeholder="Ancaman">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Cara Penanggulangan</label>
                    <div class="col-sm-7">
                      <textarea class="form-control"></textarea>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12 col-sm-6">
                <div class="card-body text-muted">
                  <h4 class="text-center">TEMPAT PRODUKSI</h4>
                  <div class="form-group row my-4">
                    <label class="col-sm-5 col-form-label">Letak Kawasan Produksi</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" placeholder="Letak produksi">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Luas Kawasan Produksi</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" placeholder="Luas produksi">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Pemilik Kawasan Produksi</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" placeholder="Pemilik produksi">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Status Lahan</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" placeholder="Status Lahan">
                    </div>
                  </div>
                </div>

                <div class="card-body text-muted">
                  <h4 class="text-center">SENTRA PRODUKSI</h4>
                  <div class="form-group row my-4">
                    <label class="col-sm-5 col-form-label">Identitas Sentra Produksi</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" placeholder="Sentra Produksi">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Kecamatan</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" placeholder="Kecamatan">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Kelurahan</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" placeholder="Kelurahan">
                    </div>
                  </div>
                </div>

                <div class="card-body text-muted">
                  <h4 class="text-center">INFRASTRUKTUR PRODUKSI</h4>
                  <div class="form-group row my-4">
                    <label class="col-sm-5 col-form-label">Sarana dan Prasarana Pengairan</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" placeholder="Prasarana">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Pengelolaan Jaringan Irigasi</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" placeholder="Prasarana">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Infrastruktur Pengelolaan Air</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" placeholder="Prasarana">
                    </div>
                  </div>
                </div>

                <div class="card-body text-muted">
                  <h4 class="text-center">PRODUSEN</h4>
                  <div class="form-group row my-4">
                    <label class="col-sm-5 col-form-label">Jumlah Produsen/Petani</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Pembinaan Kepada Produsen/Petani</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Kelembagaan Produsen/Petani</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Kesejahteraan Petani</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 text-center">
                <a href="/tanaman" class="btn bg-gradient-warning">Batal</a>
                <input type="submit" value="Tambah Data Pangan" class="btn bg-gradient-success">
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