<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Kriteria
      <small>Halaman kriteria</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <!-- <li><a href="#">Tables</a></li> -->
      <li class="active">Kriteria</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="box">
      <div class="box-body">
        <?php
        if (@htmlspecialchars($_GET['aksi']) == 'ubah') {
          include 'ubahkriteria.php';
        } else {
          include 'tambahkriteria.php';
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
              <th>Nama</th>
              <th>Sifat</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = "SELECT * FROM kriteria";
            $execute = $konek->query($query);
            if ($execute->num_rows > 0) {
              $no = 1;
              while ($data = $execute->fetch_array(MYSQLI_ASSOC)) {
                echo "
                                <tr id='data'>
                                    <td>$no</td>
                                    <td>$data[nama_kriteria]</td>
                                    <td>$data[sifat]</td>
                                    <td><div class='norebuttom'>
                                    <a class=\"btn btn-warning\"  href='./?page=kriteria&aksi=ubah&id=" . $data['id_kriteria'] . "'><i class='fa fa-pencil'></i></a>
                                    <a class=\"btn btn-danger\" data-a=" . $data['nama_kriteria'] . " id='hapus' href='./proses/proseshapus.php/?op=kriteria&id=" . $data['id_kriteria'] . "'><i class='fa fa-trash'></i></a></td>
                                </div></tr>";
                $no++;
              }
            } else {
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