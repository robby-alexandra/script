<!DOCTYPE html>
<html>

<head class="kunci">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?= base_url('img/icon.png') ?>">
  <title>Albeta & Y2C</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css"> -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
  <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- Select2 -->
  <script src="<?= base_url() ?>assets/plugins/select2/js/select2.full.min.js"></script>
  <!-- InputMask -->
  <script src="<?= base_url() ?>assets/plugins/moment/moment.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- <script>
    $(function() {
      $('#datetimepicker1').datetimepicker({
        locale: 'id',
        format: 'DD/MMMM/YYYY'
      });

      $('#datetimepicker2').datetimepicker({
        useCurrent: false,
        locale: 'id',
        format: 'DD/MMMM/YYYY'
      });

      $('#datetimepicker1').on("dp.change", function(e) {
        $('#datetimepicker2').data("DateTimePicker").minDate(e.date);
      });

      $('#datetimepicker2').on("dp.change", function(e) {
        $('#datetimepicker1').data("DateTimePicker").maxDate(e.date);
        CalcDiff()
      });

    });

    function CalcDiff() {
      var a = $('#datetimepicker1').data("DateTimePicker").date();
      var b = $('#datetimepicker2').data("DateTimePicker").date();


      var timeDiff = 0
      if (b) {
        timeDiff = (b - a) / 1000;
      }
     
      $('#hasil').val(Math.floor((timeDiff / (86400) + (86400)) + 1) - (86400))
    }
  </script> -->

</head>