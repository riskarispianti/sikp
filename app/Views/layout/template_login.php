<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">

  <?= $this->renderSection('login'); ?>

  <!-- jQuery -->
  <script src="/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/dist/js/adminlte.min.js"></script>
  <script>
    function previewGbr() {
      const gbr_u = document.querySelector('#gbr_u');
      const gbrLabel = document.querySelector('.custom-file-label');
      const imgPreview = document.querySelector('.img-preview');

      gbrLabel.textContent = gbr_u.files[0].name;

      const fileGbr = new FileReader();
      fileGbr.readAsDataURL(gbr_u.files[0]);

      fileGbr.onload = function(e) {
        imgPreview.src = e.target.result;
      }
    }
  </script>
</body>

</html>