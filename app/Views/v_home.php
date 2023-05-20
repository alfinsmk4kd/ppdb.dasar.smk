<?= $this->extend('layout/template-frontend') ?>

<?= $this->section('content') ?>
    <div class="col-sm-8">
          <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <?php $no=1; foreach ($baner as $key => $value) { $a=$no; ?>
                      <li data-target="#carouselExampleIndicators" data-slide-to="<?= $no++ ?>" class="<?= ($no==1) ? 'active' : '' ?>"></li>
                    <?php } ?>
                  </ol>
                  <div class="carousel-inner">
                  <?php $i=1; foreach ($baner as $key => $value) { $b=$i; ?>
                    <div class="carousel-item <?= ($b==1) ? 'active' : '' ?>">
                      <img class="d-block w-100" height="420px" src="<?= base_url('aset/'. $value['baner'] ) ?>" alt="<?= $i++; ?>">
                    </div>

                    <?php } ?>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                      <i class="fas fa-chevron-left"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                      <i class="fas fa-chevron-right"></i>
                    </span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
        </div>
  </div>
  <div class="col-sm-4">
    <div class="card card-outline card-primary">
        <div class="card-header">
        <h3 class="card-title"><b>Estimasi Pendaftaran</b></h3>
        </div>
        <div class="card-body">
        <div class="col-md-12 col-sm-12 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="fas fa-graduation-cap"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah Pendaftar</span>
                <span class="info-box-number">0</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-12 col-sm-12 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"></span>Laki-Laki</span>
                <span class="info-box-number">0</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-12 col-sm-12 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Perempuan</span>
                <span class="info-box-number">0</span>
              </div>
              <!-- /.info-box-content -->
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-12">
          <a href="<?= base_url('daftar') ?>" class="btn btn-primary btn-flat btn-block"><i class="fas fa-file-alt"></i> Mendaftar</a>
        </div>
    </div>
  </div>
</div>

<div class="col-sm-12">
      <div class="card card-outline card-primary">
        <div class="card-header">
          <h3 class="card-title"><b>Beranda</b></h3>
        </div>
        <div class="card-body">
          <?= $beranda['beranda'] ?>
        </div>
    </div>
  </div>

<?= $this->endSection() ?>