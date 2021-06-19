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
      <li class="active">Barang</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Daftar Barang</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

        <table class="table table-bordered text-center">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = "SELECT * FROM jenis_barang";
            $execute = $konek->query($query);
            if ($execute->num_rows > 0) {
              $no = 1;
              while ($data = $execute->fetch_array(MYSQLI_ASSOC)) {
                echo "
                                <tr id='data'>
                                    <td>$no</td>
                                    <td>$data[namaBarang]</td>
                                    <td>
                                    <div class='norebuttom'>
                                    
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
</div>