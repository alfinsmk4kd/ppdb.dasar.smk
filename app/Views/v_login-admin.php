<?php
  $db = \Config\Database::connect();
  $setting = $db->table('tb_setting')->where('id','1')->get()->getRowArray();
?>
<?= $this->extend('layout/template-frontend') ?>

<?= $this->section('content') ?>
<div class="col-sm-4">
    <img src="<?= base_url('logo/adm.png') ?>" alt="Register" class="img-fluid pad img-circle" width="250">
   </div>
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b></b>Login Admin <?= $setting['nama_sekolah'] ?></a>
    </div>
    <div class="card-body">
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
      <?= form_open('auth/cek_login_user')?>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email" autocomplete="off" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
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
        <div class="row">
          <div class="col-8">
            
              <a href="<?= base_url('') ?>">
                <i class="fa fa-globe"></i> Website
              </a>
            
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      <?= form_close() ?>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

<?= $this->endSection() ?>
