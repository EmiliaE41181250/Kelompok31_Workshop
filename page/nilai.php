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
                if (@htmlspecialchars($_GET['aksi']) == 'ubah') {
                    include 'ubahnilai.php';
                } elseif (@htmlspecialchars($_GET['aksi']) == 'lihat') {
                    include 'lihatnilai.php';
                } else {
                    include 'tambahnilai.php';
                }
                ?>
            </div>
        </div>
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Daftar Penilaian</h3>
            </div>


            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Nama Supplier</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($id)) {
                            $where = "WHERE nilai_supplier.id_jenisbarang='$id'";
                        } else {
                            $where = null;
                        }
                        $query = "SELECT id_nilaisupplier,id_supplier,supplier.nama_supplier AS nama_supplier,jenis_barang.id_jenisbarang AS id_jenisbarang,jenis_barang.namaBarang AS namaBarang FROM nilai_supplier INNER JOIN supplier USING(id_supplier) INNER JOIN jenis_barang USING (id_jenisbarang) $where GROUP BY id_supplier ORDER BY id_jenisbarang,id_supplier ASC";
                        $execute = $konek->query($query);
                        if ($execute->num_rows > 0) {
                            $no = 1;
                            while ($data = $execute->fetch_array(MYSQLI_ASSOC)) {
                                echo "
                                     <tr id='data'>
                                        <td>$no</td>
                                        <td>$data[namaBarang]</td>
                                        <td>$data[nama_supplier]</td>
                                        <td>
                                        <div class='norebuttom'>
                                        <a class=\"btn btn-primary\" href=\"./?page=penilaian&aksi=lihat&a=$data[id_supplier]&b=$data[id_jenisbarang]\"><i class='fa fa-eye'></i></a>
                                        <a class=\"btn btn-warning\" href=\"./?page=penilaian&aksi=ubah&a=$data[id_supplier]&b=$data[id_jenisbarang]\"><i class='fa fa-pencil'></i></a>
                                        <a class=\"btn btn-danger\" data-a=\".$data[namaBarang] - $data[nama_supplier]\" id='hapus' href='./proses/proseshapus.php/?op=nilai&id=" . $data['id_supplier'] . "'><i class='fa fa-trash'></i></a></td>
                                        </div>
                                    </tr>";
                                $no++;
                            }
                        } else {
                            echo "<tr><td  class='text-center text-green' colspan='4'><b>Kosong</b></td></tr>";
                        }

                        ?>

                    </tbody>

                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
</div>