<?php
  $db = \Config\Database::connect();
  $setting = $db->table('tb_setting')->where('id','1')->get()->getRowArray();
  $ta = $db->table('tb_ta')->where('status','1')->get()->getRowArray();
?>
<?= $this->extend('layout/template-frontend') ?>

<?= $this->section('content') ?>

  <?php if (isset($ta['status'] )== 1) { ?>
    <div class="col-sm-4">
    <img src="<?= base_url('logo/register.png') ?>" alt="Register" class="img-fluid pad img-circle">
   </div>
   <div class="col-sm-7">
   <div class="card card-outline card-primary">
        <div class="card-header">
        <h3 class="card-title"><b>Halaman Pendaftaran</b></h3><br>
        </div>
        <div class="card-body">
        <?= validation_list_errors() ?>
        <?php $errors = session()->getFlashdata('errors') ?>
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
                if (session()->getFlashdata('pesan')) {
                echo ' <div class="alert alert-danger" role="alert">';
                echo session()->getFlashdata('pesan');
                    echo '</div>';
                    } 
            ?>
        <?= form_open('pendaftaran/insert')  ?>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>* Nis</label>
                    <input type="number" name="nisn" class="form-control" value="<?= old('nisn') ?>" placeholder="Nis" autocomplete="off">
                    <p class="text-danger"><?= $validation->hasError('nisn') ? $validation->getError('nisn') : '' ?></p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>* Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" value="<?= old('nama_lengkap') ?>" class="form-control" placeholder="Nama Lengkap" autocomplete="off">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>* Nama Panggilan</label>
                    <input type="text" name="nama_panggilan" class="form-control" value="<?= old('nama_panggilan') ?>" placeholder="Nama Panggilan" autocomplete="off">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>* Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="<?= old('tempat_lahir') ?>" autocomplete="off">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>* Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" value="<?= old('tgl_lahir') ?>" autocomplete="off">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>* Jenis Kelamin</label>
                    <select name="jk" class="form-control">
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-12">
          <button type="submit" class="btn btn-primary btn-flat btn-block"><i class="fas fa-save"></i> Daftar</button>
        </div>
        <?= form_close() ?>
    </div>
   </div>
  <?php }else{ ?>
    <div class="col-sm-12 alert alert-sm alert-danger alert-dismissible">
        <h4><i class="icon fas fa-exclamation-triangle"></i> Pemberitahuan</h4>
        Maaf, Pendaftaran Tahun Ini Sudah ditutup, Anda tidak dapat lagi Melakukan Pendaftaran !!!
    </div>
  <?php } ?>



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