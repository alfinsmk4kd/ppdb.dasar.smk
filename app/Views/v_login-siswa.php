<?php
  $db = \Config\Database::connect();
  $setting = $db->table('tb_setting')->where('id','1')->get()->getRowArray();
  $ta = $db->table('tb_ta')->where('status','1')->get()->getRowArray();
?>
<?= $this->extend('layout/template-frontend') ?>

<?= $this->section('content') ?>
    <div class="col-sm-4">
    <img src="<?= base_url('logo/sw.png') ?>" alt="Register" class="img-fluid pad img-circle">
   </div>
   <div class="col-sm-6">
   <div class="card card-outline card-primary">
        <div class="card-header">
        <h3 class="card-title"><b>Halaman Login Siswa</b></h3><br>
        </div>
        <div class="card-body">
        <?php 
                if (session()->getFlashdata('add')) {
                    echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fas fa-check"></i>';
                    echo session()->getFlashdata('add');
                    echo '</div>';
                }
            ?>
            <?php 
    $errors = session()->getFlashdata('errors');
     if (!empty($errors)) : ?>
        <div class="alert alert-danger alert-sm" role="alert">
            <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach ?>
            </ul>
        </div>
    <?php endif ?>
    <?php 
     if (session()->getFlashdata('pesan')) {
       echo ' <div class="alert alert-danger" role="alert">';
       echo session()->getFlashdata('pesan');
        echo '</div>';
        } ?>
        <?= form_open('auth/cek_login_siswa')  ?>
        <div class="row">
        <p class="text-danger">*) Silahkan Klik Tombol Mendaftar Jika Belum Punya Akun untuk Login !!!</p>
        <p class="text-danger">*) Gunakan Nisn Sebagai Password Anda !!!</p>
        <div class="input-group mb-3">
          <input type="number" name="nisn" class="form-control" placeholder="NISN" autocomplete="off" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-graduation-cap"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-sm-4">
            <button type="submit" class="btn btn-primary btn-flat btn-block btn-sm"><i class="fas fa-save"></i> Login</button>
            </div>
            <div class="col-sm-4">
            <a href="<?= base_url('daftar') ?>" class="btn btn-success btn-flat btn-block btn-sm"><i class="fas fa-save"></i> Mendaftar</a>
            </div>
            <div class="col-sm-4">
              <a href="<?= base_url() ?>"><i class="fa fa-globe"> </i> Website</a>
            </div>
          </div>
        </div>
        <?= form_close() ?>
    </div>
   </div>




   <!-- jQuery -->
<script src="<?= base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>

<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function() {
      $(this).remove();
    });
  }, 3000);
</script>


<?= $this->endSection() ?>