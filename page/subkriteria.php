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
        if (@htmlspecialchars($_GET['aksi']) == 'ubah') {
          include 'ubahsubkriteria.php';
        } else {
          include 'tambahsubkriteria.php';
        }
        ?>
      </div>
    </div>
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Daftar Subkriteria</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Nilai</th>
              <th>Sifat</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if (!empty($id)) {
              $where = "WHERE nilai_kriteria.id_kriteria='$id'";
            } else {
              $where = null;
            }

            $query = "SELECT id_nilaikriteria,nilai,keterangan,nama_kriteria,id_kriteria FROM nilai_kriteria INNER JOIN kriteria USING (id_kriteria) $where ORDER BY id_kriteria,nilai ASC";
            $execute = $konek->query($query);
            if ($execute->num_rows > 0) {
              $no = 1;
              while ($data = $execute->fetch_array(MYSQLI_ASSOC)) {
                echo "
                <tr id='data'>
                    <td>$no</td>
                    <td>" . $data['nama_kriteria'] . "</td>
                    <td>" . $data['nilai'] . "</td>
                    <td>" . $data['keterangan'] . "</td>
                    <td><div class='norebuttom'>
                    <a class=\"btn btn-warning\" href='./?page=subkriteria&aksi=ubah&id=" . $data['id_nilaikriteria'] . "'><i class='fa fa-pencil'></i></a>
                    <a class=\"btn btn-danger\" data-a=\"nilai $data[nilai] dalam $data[nama_kriteria]\" id='hapus' href='./proses/proseshapus.php/?op=subkriteria&id=" . $data['id_nilaikriteria'] . "'><i class='fa fa-trash'</a></td></div>
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
