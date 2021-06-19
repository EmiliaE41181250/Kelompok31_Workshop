<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Penilaian
        <small>Halaman penilaian</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <!-- <li><a href="#">Tables</a></li> -->
        <li class="active">Penilaian</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
        
        <div class="box-body">
        <?php
            if (@htmlspecialchars($_GET['aksi'])=='ubah'){
                include 'ubahnilai.php';
            }elseif (@htmlspecialchars($_GET['aksi'])=='lihat'){
                include 'lihatnilai.php';
            }else{
                include 'tambahnilai.php';
            }
            ?>
        </div>
        </div>
        <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar Penilaian</h3>
              <a href="./?page=penilaian"><button class="btn btn-sm btn-primary pull-right mb-2"><i class="fa fa-plus"></i> Tambah Data</button></a>
            </div>
            <div style="float:right;width: 250px;">
                    <select class="form-custom" name="pilih" id="pilihNilai">
                        <option value="">Semua Jenis Barang</option>;
                        <?php
                        $query="SELECT*FROM jenis_barang";
                        $execute=$konek->query($query);
                        if ($execute->num_rows > 0){
                            while ($data=$execute->fetch_array(MYSQLI_ASSOC)){
                           if ($pilih==$data[id_jenisbarang]) {
                                $selected="selected";
                            }else{
                                $selected=null;
                            }
                                echo "<option $selected value=$data[id_jenisbarang]>$data[namaBarang]</option>";
                            }
                        }else{
                            echo '<option disabled value="">Tidak ada data</option>';
                        }
                        ?>
                    </select>
                </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <thead><tr><th>No</th><th>Nama Barang</th><th>Nama Supplier</th><th>Aksi</th></tr></thead>
                    <tbody id="isiNilai"></tbody>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </section>
    </div>
