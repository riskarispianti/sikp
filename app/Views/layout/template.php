<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <?= $this->include('layout/navbar'); ?>

    <?= $this->renderSection('content'); ?>

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2021 <a href="/">Ketahanan Pangan</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->
  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/dist/js/adminlte.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="/plugins/jszip/jszip.min.js"></script>
  <script src="/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <!-- BS-Stepper -->
  <script src="/plugins/bs-stepper/js/bs-stepper.min.js"></script>
  <!-- OPTIONAL SCRIPTS -->
  <script src="/plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="/dist/js/pages/dashboard3.js"></script>
  <!-- bs-custom-file-input -->
  <script src="/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- Select2 -->
  <script src="/plugins/select2/js/select2.full.min.js"></script>
  <!-- InputMask -->
  <script src="/plugins/moment/moment.min.js"></script>
  <!-- date-range-picker -->
  <script src="/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/dist/js/demo.js"></script>
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      })

      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

      //Date range picker
      $('#reservation').daterangepicker()

    })
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function() {
      window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })

    $('#kepemilikan').on('change', (event) => {
      getTempat(event.target.value).then(tempat => {
        $('#kecamatan').val(tempat.kecamatan);
        $('#kelurahan').val(tempat.kelurahan);
        $('#letak_prod').val(tempat.letak_prod);
        $('#luas_prod').val(tempat.luas_prod);
        $('#status_lahan').val(tempat.status_lahan);
      })
    });
    async function getTempat(id_tp) {
      let response = await fetch('/api/tempat/' + id_tp)
      let data = await response.json();
      return data;
    }

    $('#pemilik').on('change', (event) => {
      getInfrasTernak(event.target.value).then(infrasternak => {
        $('#kandang').val(infrasternak.kandang);
        $('#lok_rph').val(infrasternak.lok_rph);
        $('#kapasitas_rph').val(infrasternak.kapasitas_rph);
      })
    });
    async function getInfrasTernak(id_ipt) {
      let response = await fetch('/api/infrasternak/' + id_ipt)
      let data = await response.json();
      return data;
    }

    $('#kelembagaan').on('change', (event) => {
      getProdusen(event.target.value).then(produsen => {
        $('#jml_penghasil_kom').val(produsen.jml_penghasil_kom);
        $('#pembinaan').val(produsen.pembinaan);
        $('#kesejahteraan').val(produsen.kesejahteraan);
      })
    });
    async function getProdusen(id_produsen) {
      let response = await fetch('/api/produsen/' + id_produsen)
      let data = await response.json();
      return data;
    }

    $('#sarana_pengairan').on('change', (event) => {
      getInfrastruktur(event.target.value).then(infrastruktur => {
        $('#pengel_jar_irigasi').val(infrastruktur.pengel_jar_irigasi);
        $('#infras_pengel_air').val(infrastruktur.infras_pengel_air);
      })
    });
    async function getInfrastruktur(id_ip) {
      let response = await fetch('/api/infrastruktur/' + id_ip)
      let data = await response.json();
      return data;
    }

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

    $(document).ready(function() {
      $('#kecamatan').change(function() {
        var id_kec = $('#kecamatan').val();
        var action = 'get_kelurahan';
        if (id_kec != '') {
          $.ajax({
            url: "/tempatprod/action",
            method: "post",
            data: {
              id_kec: id_kec,
              action: action
            },
            dataType: "JSON",
            success: function(data) {
              var html = '<option selected disabled></option>';
              for (var count = 0; count < data.length; count++) {
                html += '<option value="' + data[count].id_kel + '">' + data[count].kelurahan + '</option>';
              }
              $('#kelurahan').html(html);
            }
          });
        } else {
          $('#kelurahan').val('');
        }

      });
    });
  </script>
</body>

</html>