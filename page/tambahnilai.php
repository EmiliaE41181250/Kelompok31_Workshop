<!-- judul -->
<div class="panel-top">
    <b class="text-blue"><i class="fa fa-plus-circle text-blue"></i> Tambah data</b>
</div>
<form id="form" action="./proses/prosestambah.php" method="POST">
    <input type="hidden" value="nilai" name="op">
    <div class="panel-middle row">
        <div class="group-input col-md-3">
            <label for="supplier">Supplier</label>
            <select class="form-custom form-control" required name="supplier" id="supplier">
                <option selected disabled>-- Pilih Supplier --</option>
                <?php
                $query="SELECT id_supplier,nama_supplier FROM supplier";
                $execute=$konek->query($query);
                if ($execute->num_rows > 0){
                    while($data=$execute->fetch_array(MYSQLI_ASSOC)){
                        echo "<option value=\"$data[id_supplier]\">$data[nama_supplier]</option>";
                    }
                }else {
                    echo "<option disabled value=\"\">Belum ada Supplier</option>";
                }
                ?>
            </select>
        </div>
        <div class="group-input col-md-3">
            <label for="barang">Jenis Barang</label>
            <select class="form-custom form-control" required name="barang" id="barang">
                <option selected disabled>-- Pilih Jenis Barang --</option>
                <?php
                $query="SELECT * FROM jenis_barang";
                $execute=$konek->query($query);
                if ($execute->num_rows > 0){
                    while($data=$execute->fetch_array(MYSQLI_ASSOC)){
                        echo "<option value=\"$data[id_jenisbarang]\">$data[namaBarang]</option>";
                    }
                }else {
                    echo "<option disabled value=\"\">Belum ada Jenis Barang</option>";
                }
                ?>
            </select>
        </div>
        <?php
        $query="SELECT * FROM kriteria";
        $execute=$konek->query($query);
        if ($execute->num_rows > 0){
            while($data=$execute->fetch_array(MYSQLI_ASSOC)){
                echo "<div class=\"group-input col-md-3\">";
                echo "<label for=\"nilai\">$data[nama_kriteria]</label>";
                echo "<input type='hidden' value=$data[id_kriteria] name='kriteria[]'>";
                echo "<select class=\"form-custom form-control\" required name=\"nilai[]\" id=\"nilai\">";
                echo "<option disabled selected>-- Pilih $data[nama_kriteria] --</option>";
                $query2="SELECT id_nilaikriteria,keterangan FROM nilai_kriteria WHERE id_kriteria='$data[id_kriteria]'";
                $execute2=$konek->query($query2);
                    if ($execute2->num_rows > 0){
                        while ($data2=$execute2->fetch_array(MYSQLI_ASSOC)){
                            echo "<option value=\"$data2[id_nilaikriteria]\">$data2[keterangan]</option>";
                        }
                    }else{
                        echo "<option disabled value=\"\">Belum ada Nilai Kriteria</option>";
                    };
                echo "</select></div>";
            }
        }
        ?>
    </div>
    <div class="panel-bottom">
        <button type="submit" id="buttonsimpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
        <button type="reset" id="buttonreset" class="btn btn-secondary">Reset</button>
    </div>
</form>