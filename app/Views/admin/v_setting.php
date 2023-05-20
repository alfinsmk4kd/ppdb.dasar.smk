<?= $this->extend('layout/template-backend-admin') ?>

<?= $this->section('content') ?>
<div class="col-sm-12">
<?php 
    if (session()->getFlashdata('pesan')) {
        echo '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="icon fas fa-check"></i>';
        echo session()->getFlashdata('pesan');
        echo '</div>';
    }
?>
</div>
<div class="col-sm-4">
    <div class="card card-outline card-primary">
        <div class="card-header">
        <h3 class="card-title">Logo</h3>
        </div>
        <div class="card-body">
        <?= form_open_multipart('setting/insert') ?>
            <div class="text-center">
                <img id="load_gambar" class="img-fluid pad" src="<?= base_url('logo/'. $setting['logo']) ?>" width="250px" height="250px">
            </div>
            <div class="form-group mt-2">
                <label>Ganti Foto</label>
                <input id="gambar_preview" type="file" name="logo" class="form-control" accept="image/*">
            </div>
        </div>
    </div>
</div>
<div class="col-sm-8">
    <div class="card card-outline card-primary">
        <div class="card-header">
        <h3 class="card-title">Data Sekolah</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama Sekolah</label>
                        <input type="text" value="<?= $setting['nama_sekolah'] ?>" name="nama_sekolah" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>No Telephone</label>
                        <input type="text" value="<?= $setting['no_telpon'] ?>" name="no_telpon" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" value="<?= $setting['email'] ?>" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Web</label>
                        <input type="text" name="web" value="<?= $setting['web'] ?>" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Alamat sekolah</label></label>
                        <input type="text" name="alamat" value="<?= $setting['alamat'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kecamatan</label>
                        <input type="text" name="kecamatan" value="<?= $setting['kecamatan'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kabupaten/Kota</label>
                        <input type="text" name="kabupaten" value="<?= $setting['kabupaten'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Provinsi</label>
                        <input type="text" name="profinsi" value="<?= $setting['profinsi'] ?>" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
        <h3 class="card-title">Deskripsi Sekolah</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <textarea name="deskripsi" class="form-control" rows="5"><?= $setting['deskripsi'] ?></textarea>
            </div>
        </div>

        <div class="card-body">
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-flat"> Simpan</button>
            </div>
        </div>
    </div>
</div>
<?= form_close() ?>

<?= $this->endSection() ?>