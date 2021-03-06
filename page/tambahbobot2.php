
<!-- judul -->
<div class="panel-top">
    <b class="text-blue"><i class="fa fa-plus-circle text-blue"></i> Tambah data</b>
</div>
<form id="form" action="./proses/prosestambah.php" method="POST">
    <input type="hidden" value="bobot" name="op">
    <div class="panel-middle">
        <div class="group-input">
            <label for="barang">Jenis Barang</label>
            <select class="form-custom" required name="barang" id="barang">
                <option selected disabled>--Pilih Jenis Barang--</option>
                <?php
                $query="SELECT * FROM jenis_barang";
                $execute=$konek->query($query);
                if ($execute->num_rows > 0){
                    while($data=$execute->fetch_array(MYSQLI_ASSOC)){
                        echo "<option value=\"$data[id_jenisbarang]\">$data[namaBarang]</option>";
                    }
                }else {
                    echo "<option value=\"\">Belum ada Jenis Barang</option>";
                }
                ?> 
            </select>
        </div>
        <?php
$listWeight=array(
    array("nama" => "1 - Tidak terlalu penting", "nilai" => 1),
    array("nama" => "2 - Kurang penting", "nilai" => 2),
    array("nama" => "3 - Lumayan Penting", "nilai" => 3),
    array("nama" => "4 - Penting", "nilai" => 4),
    array("nama" => "5 - Sangat penting", "nilai" => 5),
);

$query="SELECT * FROM kriteria";
$execute=$konek->query($query);
if ($execute->num_rows > 0){
    while($data=$execute->fetch_array(MYSQLI_ASSOC)){
        echo "<div class=\"group-input\">
                <label for=\"$data[nama_kriteria]\">$data[nama_kriteria]</label>
                <input type='hidden' value=$data[id_kriteria] name='kriteria[]'>
                    <select class=\"form-custom\" required name=\"bobot[]\" id=\"$data[nama_kriteria]\">
                    <option selected disabled>--Pilih Bobot $data[nama_kriteria]--</option>";
                    foreach ($listWeight as $key) {
                        echo "<option value=\"$key[nilai]\">$key[nama]</option>";
                    }
        echo "      </select>
              </div>
        ";
    }
}
                ?>    
    </div>
    <div class="panel-bottom">
        <button type="submit" id="buttonsimpan" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
        <button type="reset" id="buttonreset" class="btn btn-secondary">Reset</button>
    </div>
</form>