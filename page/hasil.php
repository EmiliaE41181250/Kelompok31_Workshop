<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Hasil
        <small>Halaman Hasil</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <!-- <li><a href="#">Tables</a></li> -->
        <li class="active">Hasil</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">Daftar hasil</h3> -->
              <div style="float: right;" class="input-dropdown">
               <!-- <a  class="btn btn-blue" id="btn-dropdown" target="_blank" href="./cetakpdf.php"><i class="fa fa-print"></i> Cetak Pdf</a>-->
                </div>
              <div style="float:left;width: 300px;">
            <select class="form-custom" name="pilih"  id="pilihHasil">
                <option disabled selected value="">-- Pilih Jenis Barang --</option>;
                <?php
                $query="SELECT*FROM jenis_barang";
                $execute=$konek->query($query);
                if ($execute->num_rows > 0){
                    while ($data=$execute->fetch_array(MYSQLI_ASSOC)){
                        echo "<option value=$data[id_jenisbarang]>$data[namaBarang]</option>";
                    }
                }else{
                    echo '<option disabled value="">Tidak ada data</option>';
                }
                ?>
            </select>
        </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="panel-middle">
        <div id="valueHasil">
            <p class='text-center'><b>Pilih List Barang, untuk menampilkan hasil</b></p>
        </div>
    </div>
    <div class="panel-bottom"></div>
            </div>
            <!-- /.box-body -->
          </div>
    </section>
    </div>
