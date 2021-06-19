<?php
$listWeight=array(
    array("nama"=>"1 - Tidak terlalu penting","nilai"=>1),
    array("nama"=>"2 - Kurang penting","nilai"=>2),
    array("nama"=>"3 - Lumayan Penting","nilai"=>3),
    array("nama"=>"4 - Penting","nilai"=>4),
    array("nama"=>"5 - Sangat penting","nilai"=>5),
);
$id=htmlspecialchars(@$_GET['id']);
$querylihat="SELECT id_jenisbarang,bobot,id_bobotkriteria,kriteria.nama_kriteria AS nama_kriteria FROM bobot_kriteria INNER JOIN kriteria USING(id_kriteria) WHERE id_jenisbarang='$id'";
$execute2=$konek->query($querylihat);
if ($execute2->num_rows == 0){
    header('location:./?page=bobot');
}
?>
<!-- judul -->
<div class="panel-top panel-top-edit">
    <b><i class="fa fa-pencil"></i> Ubah data</b>
</div>
<form id="form" action="./proses/prosesubah.php" method="POST">
    <input type="hidden" value="bobot" name="op">
    <div class="panel-middle">
        <div class="group-input">
            <div class="group-input">
                <?php
                $query="SELECT namaBarang FROM jenis_barang WHERE id_jenisbarang='$id'";
                $execute=$konek->query($query);
                $data=$execute->fetch_array(MYSQLI_ASSOC);
                ?>
                <div class="group-input">
                    <label for="jenisbarang">Jenis Barang</label>
                    <input class="form-custom" value="<?php echo $data['namaBarang'];?>" disabled type="text" autocomplete="off" required name="barang" id="barang">
                </div>
            </div>
        </div>
        <?php
        $execute2=$konek->query($querylihat);
        while($data=$execute2->fetch_array(MYSQLI_ASSOC)){
            echo "<div class=\"group-input\">
                    <label for=\"$data[nama_kriteria]\">$data[nama_kriteria]</label>
                    <input type='hidden' value=\"$data[id_bobotkriteria]\" name=\"id[]\">
                    <select class=\"form-custom\" required name=\"bobot[]\" id=\"$data[nama_kriteria]\">
                    <option selected disabled>--Pilih Bobot $data[nama_kriteria]--</option>";
                foreach ($listWeight as $key) {
                    if ($key['nilai']==$data['bobot']) {
                        $selected="selected";
                    }else{
                        $selected=null;
                    }
                    echo "<option $selected value=\"$key[nilai]\">$key[nama]</option>";
                }
            echo "</select>
            </div>
                ";
        }
        ?>
    </div>
    <div class="panel-bottom">
        <button type="submit" id="buttonsimpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
        <button type="reset" id="buttonreset" class="btn btn-secondary">Reset</button>
    </div><br></br>
</form>