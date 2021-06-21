<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Supplier
      <small>Halaman Supplier</small>
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
        if (@htmlspecialchars($_GET['aksi']) == 'ubah') {
          include 'ubahsupplier.php';
        } else {
          include 'tambahsupplier.php';
        }
        ?>
      </div>
    </div>
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Daftar Supplier</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>No.Hp</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = "SELECT * FROM supplier";
            $execute = $konek->query($query);
            if ($execute->num_rows > 0) {
              $no = 1;
              while ($data = $execute->fetch_array(MYSQLI_ASSOC)) {
                echo "
                                <tr id='data'>
                                    <td>$no</td>
                                    <td>$data[nama_supplier]</td>
                                    <td>$data[alamat]</td>
                                    <td>$data[no_hp]</td>
                                    <td>
                                    <div class='norebuttom'>
                                    <a class=\"btn btn-warning\" href='./?page=supplier&aksi=ubah&id=" . $data['id_supplier'] . "'><i class='fa fa-pencil'></i></a>
                                    <a class=\"btn btn-danger\" data-a=" . $data['nama_supplier'] . " id='hapus' href='./proses/proseshapus.php/?op=supplier&id=" . $data['id_supplier'] . "'><i class='fa fa-trash'></i></a>
                                </div></tr>";
                $no++;
              }
            } else {
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
