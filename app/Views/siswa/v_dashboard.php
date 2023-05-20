<?= $this->extend('layout/template-frontend') ?>

<?= $this->section('content') ?>

<div class="col-sm-12">
      <div class="card card-outline card-primary">
        <div class="card-header">
          <h3 class="card-title"><b>Biodata Peserta Didik</b></h3>
        </div>
        <div class="card-body">
            <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-exclamation-triangle"></i> Pemberitahuan !</h5>
                  Lengkapi Terlebih Dahulu Biodata Anda sebelum Melakukan Apply Pendaftaran !!!
            </div>
            
            <?php 
                if (session()->getFlashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fas fa-check"></i>';
                    echo session()->getFlashdata('pesan');
                    echo '</div>';
                }
            ?>
            <div class="row">
            <div class="col-sm-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-bars"></i><b> Pendaftaran</b></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-xs btn-flat">
                                <i class="fas fa-pencil-alt text-info" data-toggle="modal" data-target="#edit"></i> 
                            </button>
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <strong><i class="fas fa-table"></i> NISN</strong>

                                    <p class="text-muted"><?= $siswa['nisn'] ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <strong><i class="fas fa-table"></i> No Pendaftaran</strong>

                                    <p class="text-muted"><?= $siswa['no_daftar']; ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <strong><i class="fas fa-table"></i> Tanggal Pendaftaran</strong>

                                    <p class="text-muted"><?= $siswa['tgl_daftar']; ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <strong><i class="fas fa-table"></i> Jalur Masuk</strong>
                                    <?= (isset($siswa['jalur_masuk']) == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>'.$siswa['jalur_masuk'].'</p>' ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-image"></i><b> Foto</b></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-xs btn-flat" data-toggle="modal" data-target="#editfoto">
                                <i class="fas fa-pencil-alt text-info"></i> 
                            </button>
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <img class="img-fluid pad" src="<?= base_url('gambar/'. $siswa['foto']) ?>" alt="Photo" width="100%">
                                <br><br>
                                <label for=""><?= $siswa['nisn'] ?></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-graduation-cap"></i><b> Identitas Peserta Didik</b></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-xs btn-flat" data-toggle="modal" data-target="#edits">
                                <i class="fas fa-pencil-alt text-info"></i> 
                            </button>
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <strong><i class="fas fa-table"></i> Nama Lengkap</strong>

                                    <p class="text-muted">Nama Lengkap</p>

                                    <hr>

                                    <strong><i class="fas fa-table"></i> Tempat Lahir</strong>

                                    <p class="text-muted">Tempat Lahir</p>

                                    <hr>

                                    <strong><i class="fas fa-table"></i> NIK</strong>

                                    <p class="text-muted">Jenis Kelamin</p>

                                    <hr>

                                    <strong><i class="fas fa-table"></i> Agama</strong>

                                    <p class="text-muted">Agama</p>
                                   
                                </div>
                                <div class="col-sm-4">
                                    <strong><i class="fas fa-table"></i> Nama Panggilan</strong>

                                    <p class="text-muted">Nama Panggilan</p>

                                    <hr>

                                    <strong><i class="fas fa-table"></i> Tanggal Lahir</strong>

                                    <p class="text-muted">Tanggal Lahir</p>

                                    <hr>

                                    <strong><i class="fas fa-table"></i> Jenis Kelamin</strong>

                                    <p class="text-muted">Nik</p>

                                    <hr>

                                    <strong><i class="fas fa-table"></i> Nomor Telephone</strong>

                                    <p class="text-muted">Nomor Telephone</p>
                                    
                                </div>
                                <div class="col-sm-4">
                                    <strong><i class="fas fa-table"></i> Nama Panggilan</strong>

                                    <p class="text-muted">Nama Panggilan</p>

                                    <hr>

                                    <strong><i class="fas fa-table"></i> Tanggal Lahir</strong>

                                    <p class="text-muted">Tanggal Lahir</p>

                                    <hr>

                                    <strong><i class="fas fa-table"></i> Jenis Kelamin</strong>

                                    <p class="text-muted">Nik</p>

                                    <hr>

                                    <strong><i class="fas fa-table"></i> Nomor Telephone</strong>

                                    <p class="text-muted">Nomor Telephone</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-male"></i><b> Data Ayah</b></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-xs btn-flat">
                                <i class="fas fa-pencil-alt text-info"></i> 
                            </button>
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <strong><i class="fas fa-table"></i> NIK Ayah</strong>

                                    <p class="text-muted">Nik Ayah</p>

                                    <hr>
                                    <strong><i class="fas fa-table"></i> Nama Ayah</strong>

                                    <p class="text-muted">Nama Lengkap</p>

                                    <hr>
                                </div>

                                <div class="col-sm-4">
                                    <strong><i class="fas fa-table"></i> Pendidikan</strong>

                                    <p class="text-muted">Pendidikan</p>

                                    <hr>

                                    <strong><i class="fas fa-table"></i> Pekerjaan</strong>

                                    <p class="text-muted">Pekerjaan</p>

                                    <hr>
                                </div>
                                <div class="col-sm-4">

                                    <strong><i class="fas fa-table"></i> Penghasilan/Bulan</strong>

                                    <p class="text-muted">Penghasilan</p>

                                    <hr>

                                    <strong><i class="fas fa-table"></i> Nomor Telephone</strong>

                                    <p class="text-muted">Nomor Telephone</p>

                                    <hr>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-female"></i><b> Data Ibu</b></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-xs btn-flat">
                                <i class="fas fa-pencil-alt text-info"></i> 
                            </button>
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <strong><i class="fas fa-table"></i> NIK Ibu</strong>

                                    <p class="text-muted">Nik Ibu</p>

                                    <hr>
                                    <strong><i class="fas fa-table"></i> Nama Ibu</strong>

                                    <p class="text-muted">Nama Ibu</p>

                                    <hr>
                                </div>
                                <div class="col-sm-4">
                                    <strong><i class="fas fa-table"></i> Pendidikan</strong>

                                    <p class="text-muted">Pendidikan</p>

                                    <hr>

                                    <strong><i class="fas fa-table"></i> Pekerjaan</strong>

                                    <p class="text-muted">Pekerjaan</p>

                                    <hr>
                                </div>
                                <div class="col-sm-4">
                                    <strong><i class="fas fa-table"></i> Penghasilan/Perbulan</strong>

                                    <p class="text-muted">Penghasilan Perbulan</p>

                                    <hr>
                                    <strong><i class="fas fa-table"></i> Nomor Telephone</strong>

                                    <p class="text-muted">Nomor Telephone</p>

                                    <hr>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-school"></i><b> Sekolah Asal</b></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-xs btn-flat">
                                <i class="fas fa-pencil-alt text-info"></i> 
                            </button>
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <strong><i class="fas fa-table"></i> Tahun Lulus</strong>

                                    <p class="text-muted">Tahun Lulus</p>

                                    <hr>
                                    <strong><i class="fas fa-table"></i> Nama Sekolah</strong>

                                    <p class="text-muted">Nama Sekolah</p>

                                    <hr>
                                </div>
                                <div class="col-sm-4">
                                    <strong><i class="fas fa-table"></i> Provinsi</strong>

                                    <p class="text-muted">Provinsi</p>

                                    <hr>

                                    <strong><i class="fas fa-table"></i> Kabupaten</strong>

                                    <p class="text-muted">Kabupaten</p>

                                    <hr>

                                    <strong><i class="fas fa-table"></i> Kecamatan</strong>

                                    <p class="text-muted">Kecamatan</p>

                                    <hr>
                                </div>
                                <div class="col-sm-4">
                                    <strong><i class="fas fa-table"></i> No Ijazah</strong>

                                    <p class="text-muted">Nomor Ijazah</p>

                                    <hr>
                                    <strong><i class="fas fa-table"></i> No SKHUS</strong>

                                    <p class="text-muted">No SKHUS</p>

                                    <hr>

                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                <div class="card card-outline card-primary">
                        <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-pen-square"></i><b> Nilai</b></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-xs btn-flat">
                                <i class="fas fa-pencil-alt text-info"></i> 
                            </button>
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <strong><i class="fas fa-table"></i> Matematika</strong>

                                    <p class="text-muted">Matematika</p>

                                    <hr>
                                </div>
                                <div class="col-sm-3">
                                    <strong><i class="fas fa-table"></i> Bahasa Indonesia</strong>

                                    <p class="text-muted">Bahasa Indonesia</p>

                                    <hr>
                                </div>
                                <div class="col-sm-3">
                                    <strong><i class="fas fa-table"></i> Bahasa Inggris</strong>

                                    <p class="text-muted">Bahasa Inggris</p>

                                    <hr>
                                </div>
                                <div class="col-sm-3">
                                    <strong><i class="fas fa-table"></i> IPA</strong>

                                    <p class="text-muted">IPA</p>

                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-file"></i><b> File Pendukung</b></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-xs btn-flat">
                                <i class="fas fa-pencil-alt text-info"></i> 
                            </button>
                        </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>#</th>
                                    <th>Jenis File</th>
                                    <th>File</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 mb-3">
                <a href="" class="btn btn-success btn-flat btn-block"><i class="fas fa-check"></i> Apply Pendaftaran</a>
            </div>
        </div>
    </div>
  </div>
</div>
<!-- Update Pendaftaran -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header bg-success">
            <h4 class="modal-title">Form Edit Pendaftaran</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?= form_open('siswa/editp/'. $siswa['id_siswa'])  ?>
        <div class="modal-body">
            <div class="form-group">
                <label>NISN</label>
                <input type="text" class="form-control" value="<?= $siswa['nisn'] ?>" readonly>
            </div>
            <div class="form-group">
                <label>Nomor Pendaftaran</label>
                <input type="text" class="form-control" value="<?= $siswa['no_daftar'] ?>" readonly>
            </div>
            <div class="form-group">
                <label>Tanggal Pendaftaran</label>
                <input type="text" class="form-control" value="<?= $siswa['tgl_daftar'] ?>" readonly>
            </div>
            <div class="form-group">
                <label>Jalur Masuk</label>
                <select name="id_jalur" class="form-control">
                    <option value="">== Pilih Jalur Masuk ==</option>
                    <?php foreach ($jalur as $key => $value) { ?>
                        <option value="<?= $value['id_jalur'] ?>" <?= $siswa['id_jalur'] == $value['id_jalur'] ? 'selected' : '' ?> ><?= $value['jalur_masuk'] ?></option>
                    <?php } ?>
                </select>
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
<!-- Update Pendaftaran -->
<div class="modal fade" id="editfoto">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header bg-success">
            <h4 class="modal-title">Form Edit Foto</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?= form_open_multipart('siswa/editf/'. $siswa['id_siswa'])  ?>
        <div class="modal-body">
            <div class="form-group">
                <label>File Foto</label>
                <input type="file" name="foto" id="gambar_preview" class="form-control" placeholder="Gambar">
            </div>
            <div class="form-group">
                <label>Preview</label><br>
                <img id="load_gambar" src="<?= base_url('gambar/'. $siswa['foto']) ?>" width="150" height="100">
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

<!-- Update Peserta Didik -->
<div class="modal fade" id="edits">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header bg-success">
            <h4 class="modal-title">Form Edit Identitas Peserta Didik</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?= form_open('siswa/edits/'. $siswa['id_siswa'])  ?>
        <div class="modal-body">
            <div class="form-group">
                <label>NISN</label>
                <input type="text" class="form-control" value="<?= $siswa['nisn'] ?>" readonly>
            </div>
            <div class="form-group">
                <label>Nomor Pendaftaran</label>
                <input type="text" class="form-control" value="<?= $siswa['no_daftar'] ?>" readonly>
            </div>
            <div class="form-group">
                <label>Tanggal Pendaftaran</label>
                <input type="text" class="form-control" value="<?= $siswa['tgl_daftar'] ?>" readonly>
            </div>
            <div class="form-group">
                <label>Jalur Masuk</label>
                <select name="id_jalur" class="form-control">
                    <option value="">== Pilih Jalur Masuk ==</option>
                    <?php foreach ($jalur as $key => $value) { ?>
                        <option value="<?= $value['id_jalur'] ?>" <?= $siswa['id_jalur'] == $value['id_jalur'] ? 'selected' : '' ?> ><?= $value['jalur_masuk'] ?></option>
                    <?php } ?>
                </select>
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

<?= $this->endSection() ?>