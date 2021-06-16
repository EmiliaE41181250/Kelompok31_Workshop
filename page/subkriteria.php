<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Subkriteria
        <small>Halaman Subkriteria</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <!-- <li><a href="#">Tables</a></li> -->
        <li class="active">Subkriteria</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
        <div class="box-body">
        <?php
            if (@htmlspecialchars($_GET['aksi'])=='ubah'){
                include 'ubahsubkriteria.php';
            }else{
                include 'tambahsubkriteria.php';
            }
            ?>
        </div>
        </div>
        <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar Subkriteria</h3>
              <a href="./?page=subkriteria"><button class="btn btn-sm btn-primary pull-right mb-2"><i class="fa fa-plus"></i> Tambah Data</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                    <thead><tr><th>No</th><th>Nama</th><th>Nilai</th><th>Sifat</th><th>Aksi</th></tr></thead>
                    <tbody id="isiSubkriteria"></tbody>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </section>
    </div>
</div>