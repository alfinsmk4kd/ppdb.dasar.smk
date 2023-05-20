<?php
  $db = \Config\Database::connect();
  $setting = $db->table('tb_setting')->where('id','1')->get()->getRowArray();
  $ta = $db->table('tb_ta')->where('status','1')->get()->getRowArray();
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?> | <?= $subtitle ?></title>

  <link rel="shortcut icon" href="<?= base_url() ?>/imgppdb/ppdb.png" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-dark navbar-dark mt-0">
    <div class="container">
      <a href="<?= base_url() ?>" class="navbar-brand">
        <img src="<?= base_url() ?>/logo/<?= $setting['logo'] ?>" width="50px" height="50px" class="img-circle">
        <span class="brand-text font-weight-light">PPDB ONLINE 2023 <?= $setting['nama_sekolah'] ?></span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?= base_url() ?>" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Petunjuk Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">About</a>
          </li>
        </ul>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        
        <li class="nav-item">
          <?php if (session()->get('nisn') == '') { ?>
            <a class="nav-link" href="<?= base_url('auth/link') ?>">
                <i class="fas fa-user"></i> Login
            </a>
          <?php }else { ?>
            <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
              <i class="fa fa-user"></i> <?= session()->get('nama_lengkap') ?>
            </a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="<?= base_url('siswa') ?>" class="dropdown-item"><i class="fa fa-user"></i> Biodata </a></li>
              <li class="dropdown-divider"></li>
              <li><a href="<?= base_url('auth/logouts') ?>" onclick="return confirm('Yakin Mau Keluar..??')"  class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
          </li>
          <?php } ?>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <?php if (isset($ta['ta'] )<> '1') { ?>
              <h1 class="text-danger"><b>Pendaftaran Tahun Ini sudah Ditutup !!!</b></h1>
            <?php } else { ?>
              <h1 class="m-0">Pendaftaran Tahun Ajaran <?= $ta['ta'] ?></h1>
            <?php } ?>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
      <div class="container">
        <div class="row">
          <!-- /.col-md-6 -->
          <?= $this->renderSection('content') ?>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer bg-dark">
    <!-- To the right -->
    <!-- <div class="float-right d-none d-sm-inline">
      Anything you want
    </div> -->
    <!-- Default to the left -->
    <strong>Copyright &copy; PPDB ONLINE <?= date('Y') ?> <a href="<?= $setting['web'] ?>" target="blank"><?= $setting['nama_sekolah'] ?></a></strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?= base_url() ?>/assets/dist/js/demo.js"></script> -->

<script>
  window.setTimeout(function() {
    $(".alert-success").fadeTo(500, 0).slideUp(500, function() {
      $(this).remove();
    });
  }, 3000);
</script>

<script>
  function bacaGambar(input) {
    if (input.files && input.files['0']) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#load_gambar').attr('src', e.target.result)
      }
      reader.readAsDataURL(input.files['0']);
    }
    
  }

  $('#gambar_preview').change(function() {
    bacaGambar(this);
  })
</script>

</body>
</html>
