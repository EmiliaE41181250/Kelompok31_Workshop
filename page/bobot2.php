<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bobot
        <small>Halaman bobot</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <!-- <li><a href="#">Tables</a></li> -->
        <li class="active">Bobot</li>
      </ol>
    </section>

     <!-- Main content -->
     <section class="content">
    <div class="box">
      <div class="box-body">
    <?php
            if (@htmlspecialchars($_GET['aksi'])=='ubah'){
                include 'ubahbobot2.php';
            }else {
                include 'tambahbobot2.php';
            }
            ?>
      </div>
    </div>
      <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Daftar kriteria</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Barang</th>
                  <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                        <?php
                       $query="SELECT bobot_kriteria.id_jenisbarang AS idbarangbobot,jenis_barang.namaBarang AS namaBarang FROM bobot_kriteria INNER JOIN jenis_barang WHERE bobot_kriteria.id_jenisbarang=jenis_barang.id_jenisbarang GROUP BY idbarangbobot ORDER BY idbarangbobot ASC";
                        $execute=$konek->query($query);
                        if ($execute->num_rows > 0){
                            $no=1;
                            while($data=$execute->fetch_array(MYSQLI_ASSOC)){
                                echo"
                                <tr id='data'>
                                    <td>$no</td>
                                    <td>$data[namaBarang]</td>
                                    <td>
                                    <div class='norebuttom'>
                                   <!-- <a class=\"btn btn-info\" href='./?page=bobot&aksi=lihat&id=".$data['idbarangbobot']."'><i class='fa fa-eye'></i></a>-->
                                    <a class=\"btn btn-warning\" href='./?page=bobot&aksi=ubah&id=".$data['idbarangbobot']."'><i class='fa fa-pencil'></i></a>
                                    <a class=\"btn btn-danger\" data-a=".$data['idbarangbobot']." id='hapus' href='./proses/proseshapus.php/?op=bobot&id=".$data['idbarangbobot']."'><i class='fa fa-trash'></i></a></td>
                                </div></tr>";
                                $no++;
                            }
                        }else{
                            echo "<tr><td  class='text-center text-green' colspan='4'><b>Kosong</b></td></tr>";
                        }
                        ?>
                        </tbody>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                </section>
              </div>
