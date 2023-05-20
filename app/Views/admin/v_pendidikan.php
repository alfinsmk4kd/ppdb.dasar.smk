<?= $this->extend('layout/template-backend-admin') ?>

<?= $this->section('content') ?>
<div class="col-sm-12">
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="card-title">Daftar <?= $subtitle ?></h3>
            <div class="card-tools">
                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalinput"><i class="fas fa-plus-circle"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
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
                if (session()->getFlashdata('update')) {
                    echo '<div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fas fa-check"></i>';
                    echo session()->getFlashdata('update');
                    echo '</div>';
                }
            ?>
            <?php 
                if (session()->getFlashdata('delete')) {
                    echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><i class="icon fas fa-check"></i>';
                    echo session()->getFlashdata('delete');
                    echo '</div>';
                }
            ?>
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th width="70px">#</th>
                        <th>Pendidikan</th>
                        <th width="100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($pendidikan as $key => $value) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $value['pendidikan'] ?></td>
                        <td>
                            <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modaledit<?= $value['id_pendidikan'] ?>"><i class="fas fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modaldelete<?= $value['id_pendidikan'] ?>"><i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Input -->

<div class="modal fade" id="modalinput">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header bg-success">
            <h4 class="modal-title">Form Input Data Pendidikan</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?= form_open('pendidikan/insert')  ?>
        <div class="modal-body">
            <div class="form-group">
                <label>Pendidikan</label>
                <input type="text" name="pendidikan" class="form-control" placeholder="pendidikan" required>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm">Save</button>
        </div>
        <?= form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Modal edit -->
<?php foreach ($pendidikan as $key => $value) : ?>
<div class="modal fade" id="modaledit<?= $value['id_pendidikan'] ?>">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header bg-primary">
            <h4 class="modal-title">Form Edit Data Pendidikan</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?= form_open('pendidikan/edit/'.$value['id_pendidikan'])  ?>
        <div class="modal-body">
            <div class="form-group">
                <label>Pendidikan</label>
                <input type="text" name="pendidikan" class="form-control" placeholder="pendidikan" value="<?= $value['pendidikan'] ?>" required>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm">Update</button>
        </div>
        <?= form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php endforeach ?>

<!-- Modal delete -->
<?php foreach ($pendidikan as $key => $value) : ?>
<div class="modal fade" id="modaldelete<?= $value['id_pendidikan'] ?>">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header bg-primary">
            <h4 class="modal-title">Form Delete Data Pendidikan</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?= form_open('pendidikan/delete/'.$value['id_pendidikan'])  ?>
        <div class="modal-body">
            Apakah Anda Yakin Menghapus Data <strong><?= $value['pendidikan'] ?></strong>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </div>
        <?= form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php endforeach ?>

<?= $this->endSection() ?>