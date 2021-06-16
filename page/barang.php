<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Barang
        <small>Halaman Barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <!-- <li><a href="#">Tables</a></li> -->
        <li class="active">Supplier</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
        <div class="box-body">
            <?php
                if (@htmlspecialchars($_GET['aksi'])=='ubah'){
                    include 'ubahbarang.php';
                }else{
                    include 'tambahbarang.php';
                }
            ?>
        </div>
        </div>
        <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar Barang</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <a href="./?page=barang"><button class="btn btn-sm btn-primary pull-right mb-2"><i class="fa fa-plus"></i> Tambah Data</button></a>
              <table class="table table-bordered">
                <thead><tr><th>No</th><th>Nama</th><th>Aksi</th></tr></thead>
                <tbody>
                        <?php
                        $query="SELECT * FROM jenis_barang";
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
                                    <a class=\"btn btn-light-green\" href='./?page=barang&aksi=ubah&id=".$data['id_jenisbarang']."'><i class='fa fa-pencil-alt'></i></a>
                                    <a class=\"btn btn-yellow\" data-a=".$data['namaBarang']." id='hapus' href='./proses/proseshapus.php/?op=barang&id=".$data['id_jenisbarang']."'><i class='fa fa-trash-alt'></i></a></td>
                                </div></tr>";
                                $no++;
                            }
                        }else{
                            echo "<tr><td  class='text-center text-green' colspan='3'>Kosong</td></tr>";
                        }
                        ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </section>
    </div>
</div>
