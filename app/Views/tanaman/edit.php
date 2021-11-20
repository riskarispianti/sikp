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
                  <label class="col-sm-5 col-form-label">Komoditas</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" placeholder="Tanaman Pangan">
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
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Luas">
                  </div>
                  <h7>Ha</h7>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Luas Panen</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Luas">
                  </div>
                  <h7>Ha</h7>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Produkstivitas</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Produkstivitas">
                  </div>
                  <h7>Ton/Ha</h7>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Jumlah Produksi</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Jumlah">
                  </div>
                  <h7>Ton</h7>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Lama Proses Produksi</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" placeholder="Lama Proses">
                  </div>
                  <h7>Bulan/Tahun</h7>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Perkiraan Iklim</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" placeholder="Perkiraan iklim">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Waktu Produksi</label>
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
                <label class="col-sm-5 col-form-label">Ancaman</label>
                <div class="col-sm-7">
                  <select class="form-control">
                    <option>---</option>
                    <option>Hama/Penyakit</option>
                    <option>Banjir</option>
                    <option>Kekeringan</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-5 col-form-label">Cara Penanggulangan</label>
                <div class="col-sm-7">
                  <textarea class="form-control"></textarea>
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
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- general form elements disabled -->
          <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">Sentra Produksi</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form>
                <div class="form-group row">
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
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <!-- general form elements disabled -->
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Infrastruktur Produksi</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form>
                <div class="form-group row">
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
              </form>
            </div>
            <!-- /.card-body -->
          </div>

          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Produsen</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form>
                <div class="form-group row">
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
  </section>
  <!-- /.content -->

</div>

<?= $this->endSection(); ?>