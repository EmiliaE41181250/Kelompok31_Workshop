<?php
$id = htmlspecialchars(@$_GET['id']);
$query = "SELECT * FROM supplier WHERE id_supplier='$id'";
$execute = $konek->query($query);
if ($execute->num_rows > 0) {
    $data = $execute->fetch_array(MYSQLI_ASSOC);
} else {
    header('location:./?page=supplier');
}
?>
<div class="panel-top panel-top-edit">
    <b class="text-blue"> <i class="fa fa-pencil"></i> Ubah data</b>
</div>
<form id="form" method="POST" action="./proses/prosesubah.php">
    <input type="hidden" name="op" value="supplier">
    <input type="hidden" name="id" value="<?php echo $data['id_supplier']; ?>">
    <div class="panel-middle">
        <div class="group-input">
            <label for="supplier">Nama Supplier :</label>
            <input type="text" value="<?php echo $data['nama_supplier']; ?>" class="form-custom" required autocomplete="off" placeholder="Nama Supplier" id="supplier" name="supplier">
        </div>
        <div class="group-input">
            <label for="alamat">Alamat :</label>
            <input type="text" value="<?php echo $data['alamat']; ?>" class="form-custom" required autocomplete="off" placeholder="alamat" id="alamat" name="alamat">
        </div>
        <div class="group-input">
            <label for="no_hp">No hp :</label>
            <input type="text" value="<?php echo $data['no_hp']; ?>" class="form-custom" required autocomplete="off" placeholder="no hp" id="no_hp" name="no_hp">
        </div>
    </div>
    <div class="panel-bottom">
        <button type="submit" id="buttonsimpan" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
        <button type="reset" id="buttonreset" class="btn btn-secondary">Reset</button>
    </div>
</form>