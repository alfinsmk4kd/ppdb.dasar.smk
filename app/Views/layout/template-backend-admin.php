
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
   <!-- SweetAlert2 -->
   <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/dist/css/adminlte.min.css">

  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/summernote/summernote-bs4.min.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <h3 class="text-light">Halaman Admin</h3>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a onclick="return confirm('Yakin Mau Keluar..??')" class="nav-link" href="<?= base_url('auth/logout') ?>">
        <i class="fas fa-sign-out-alt"></i> | Logout
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin') ?>" class="brand-link">
      <img src="<?= base_url() ?>/imgppdb/ppdb.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PPDB Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>/uploads/<?= session()->get('foto') ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= session()->get('nama_user') ?></a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="<?= base_url('admin') ?>" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item menu-open">
            <a href="<?= base_url('agama') ?>" class="nav-link">
              <i class="nav-icon fas fa-star-and-crescent"></i>
              <p>Agama</p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="<?= base_url('jurusan') ?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>Jurusan</p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="<?= base_url('pendidikan') ?>" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>Pendidikan</p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="<?= base_url('pekerjaan') ?>" class="nav-link">
              <i class="nav-icon fas fa-suitcase"></i>
              <p>Pekerjaan</p>
            </a>
          </li>
          
          <li class="nav-item menu-open">
            <a href="<?= base_url('penghasilan') ?>" class="nav-link">
              <i class="nav-icon fas fa-money-bill-wave"></i>
              <p>Penghasilan</p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="<?= base_url('user') ?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>User</p>
            </a>
          </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Setup
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item menu-open">
                <a href="<?= base_url('ta') ?>" class="nav-link">
                  <i class="nav-icon fas fa-calendar"></i>
                  <p>Tahun Ajaran</p>
                </a>
              </li>

              <li class="nav-item menu-open">
                <a href="<?= base_url('jalur') ?>" class="nav-link">
                  <i class="nav-icon fas fa-sitemap"></i>
                  <p>Jalur Masuk</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= base_url('admin/setting') ?>" class="nav-link">
                  <i class="fas fa-cog nav-icon"></i>
                  <p>Setting Web</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= base_url('baner') ?>" class="nav-link">
                  <i class="fas fa-cog nav-icon"></i>
                  <p>Setting Banner</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="<?= base_url('admin/beranda') ?>" class="nav-link">
                  <i class="fas fa-cog nav-icon"></i>
                  <p>Setting Beranda</p>
                </a>
              </li>

            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $subtitle ?></h1>
          </div><!-- /.col --><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <?= $this->renderSection('content') ?>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer bg-dark">
    <!-- To the right -->
    <!-- Default to the left -->
    <strong>Copyright &copy; PPDB 2022-2023 </strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?= base_url() ?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?= base_url() ?>/assets/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/assets/dist/js/adminlte.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url() ?>/assets/plugins/summernote/summernote-bs4.min.js"></script>

<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function() {
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

<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()
  })
</script>


</body>
</html>
