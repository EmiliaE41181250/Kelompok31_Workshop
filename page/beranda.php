<?php 
// print_r($supplier);
$queryS="SELECT * FROM supplier";
$executeS=$konek->query($queryS);
$supplier=$executeS->num_rows;
$queryK="SELECT * FROM kriteria";
$executeK=$konek->query($queryK);
$kriteria=$executeK->num_rows;

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Halaman Utama</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $supplier ?></h3>

              <p>Supplier</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?= BASE."/?page=supplier" ?>" class="small-box-footer">Klik Disini <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $kriteria ?></h3>

              <p>Kriteria</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= BASE."/?page=kriteria" ?>" class="small-box-footer">Klik Disini <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
      </div>
      <h3 class="text-center">
      Selamat Datang,<br>
            di Sistem Pendukung Keputusan pemilihan supplier berbasis web menggunakan metode <span class="text-blue">Simple Additive Weighting</span>
      </h3>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>