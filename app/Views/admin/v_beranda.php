<?= $this->extend('layout/template-backend-admin') ?>

<?= $this->section('content') ?>

    <div class="col-sm-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
            <h3 class="card-title"><b>Beranda</b></h3>
            </div>
            <div class="card-body">
                <?php 
                    if (session()->getFlashdata('pesan')) {
                        echo '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="icon fas fa-check"></i>';
                        echo session()->getFlashdata('pesan');
                        echo '</div>';
                    }
                ?>
                <?= form_open('insert/beranda') ?>
                <div class="form-group">
                    <textarea id="summernote" name="beranda">
                        <?= $beranda['beranda'] ?>
                    </textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-sm btn-primary btn-flat"><i class="fas fa-save"> Simpan</i></button>
                </div>
                <?= form_open() ?>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>