<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Profile</small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Profile</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="img-fluid" src="/img/logo_portal.png" alt="User profile picture">
              </div>
              <h3 class="profile-username text-center">Fakultas Ilmu Komputer</h3>
              <p class="text-muted text-center">Universitas Subang</p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="card">

            <div class="card-body row">
              <div class="col-md-4">
                <a href="profile/registrasi" type="button" class="btn btn-outline-info">
                  <i class="fas fa-plus"></i>
                  Regist..</a>

              </div>
              <div class="col-md-4">
                <a href="profile/edit" type="button" class="btn btn-outline-primary">
                  <i class="fas fa-edit"></i>
                  Edit...</a>

              </div>
              <div class="col-md-4">
                <a href="/dashboard" type="button" class="btn btn-outline-warning">
                  <i class="fas fa-ban"></i>
                  Keluar..</a>

              </div>
            </div>
          </div>
          <!-- About Me Box -->

          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">About Me</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <strong><i class="fas fa-book mr-1"></i> Visi & Misi</strong>

              <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita sit,
                voluptatum repellendus soluta obcaecati fugit sint,
                nulla magni harum rem quae molestiae illum nostrum sequi temporibus numquam ipsum exercitationem quisquam.
              </p>

              <hr>

              <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fas fa-pencil-alt mr-1"></i> Fasilitas</strong>

              <p class="text-muted">
                <span class="tag tag-danger">Ruang Perkuliahan</span>
                <span class="tag tag-success">Gedung Perkuliahan</span>
                <span class="tag tag-info">Laboratoriom Komputer</span>
                <span class="tag tag-warning">Ruang kelas bernuansa kafe</span>
                <span class="tag tag-primary">teknologi whiteboard interaktive</span>
              </p>

              <hr>

              <strong><i class="far fa-file-alt mr-1"></i> Sejarah Singkat</strong>

              <p class="text-muted">Di Universitas Subang berdiri fakultas ilmu Komputer jurusan sistem informasi pada tanggal
                21 april 2005. Fakultas ilmu komputer mempunyai satu jurusan yaitu sistem informasi.</p>

              <hr>

              <strong><i class="far fa-file-alt mr-1"></i> Struktur Organisasi</strong>

              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
</div>
<?= $this->endSection(); ?>