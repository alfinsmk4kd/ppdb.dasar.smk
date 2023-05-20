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
                        <th>Tahun</th>
                        <th>Tahun Ajaran</th>
                        <th>Status</th>
                        <th class="text-center">Aktifkan/Nonaktifkan</th>
                        <th width="100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($ta as $key => $value) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $value['tahun'] ?></td>
                        <td><?= $value['ta'] ?></td>
                        <td><?= ($value['status'] == 1) ? '<small class="badge badge-primary">Active</small>' : '<small class="badge badge-danger">Non Active</small>'?></td>
                        <td class="text-center">
                             <?php if ($value['status'] == 1) { ?>
                                <a href="<?= base_url('ta/statusNonAktif/'. $value['id_ta']) ?>" class="btn btn-xs btn-danger btn-flat">Nonaktifkan</a>
                             <?php }else { ?>
                                <a href="<?= base_url('ta/statusAktif/'. $value['id_ta']) ?>" class="btn btn-xs btn-success btn-flat">Aktifkan</a>
                             <?php } ?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modaledit<?= $value['id_ta'] ?>"><i class="fas fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modaldelete<?= $value['id_ta'] ?>"><i class="fas fa-trash"></i>
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
            <h4 class="modal-title">Form Input Data Tahun Ajaran</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?= form_open('ta/insert')  ?>
        <div class="modal-body">
            <div class="form-group">
                <label>Tahun</label>
                <!-- <input type="number" name="tahun" class="form-control" placeholder="Tahun" required> -->
                <select name="tahun" class="form-control">
                <option selected=”selected”>Pilih Tahun</option>
                    <?php
                        $now = date('Y');
                        for ($i=2018; $i <= $now; $i++) { ?>
                            <option value="<?= $i ?>" <?= ($now == $i) ? 'selected' : '' ?>><?= $i ?></option>
                        <?php } ?>
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Tahun Ajaran</label>
                <input type="text" name="ta" class="form-control" placeholder="Tahun Ajaran" required>
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
<?php foreach ($ta as $key => $value) : ?>
<div class="modal fade" id="modaledit<?= $value['id_ta'] ?>">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header bg-primary">
            <h4 class="modal-title">Form Edit Data Tahun Ajaran</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?= form_open('ta/edit/'.$value['id_ta'])  ?>
        <div class="modal-body">
        <div class="form-group">
                <label>Tahun</label>
                <select name="tahun" class="form-control">
                <option selected=”selected”>Pilih Tahun</option>
                    <?php
                        $now = date('Y');
                        for ($i=2018; $i <= $now; $i++) { ?>
                            <option value="<?= $i ?>" <?= ($i == $value['tahun']) ? 'selected' : '' ?>><?= $i ?></option>
                        <?php } ?>
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Tahun Ajaran</label>
                <input type="text" name="ta" class="form-control" value="<?= $value['ta'] ?>" placeholder="Tahun Ajaran" required>
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
<?php foreach ($ta as $key => $value) : ?>
<div class="modal fade" id="modaldelete<?= $value['id_ta'] ?>">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header bg-primary">
            <h4 class="modal-title">Form Delete Data Tahun Ajaran</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?= form_open('ta/delete/'.$value['id_ta'])  ?>
        <div class="modal-body">
            Apakah Anda Yakin Menghapus Data <strong><?= $value['ta'] ?></strong>
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