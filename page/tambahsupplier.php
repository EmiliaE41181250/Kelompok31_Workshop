<div class="panel-top">
    <b class="text-blue"><i class="fa fa-plus-circle text-blue"></i> Tambah data</b>
</div>
<form id="form" method="POST" action="./proses/prosestambah.php">
    <input type="hidden" name="op" value="supplier">
    <div class="panel-middle">
        <div class="group-input">
            <label for="supplier">Nama Supplier :</label>
            <input type="text" class="form-custom" required autocomplete="off" placeholder="Nama Supplier" id="supplier" name="supplier">
        </div>
        <div class="group-input">
            <label for="alamat">Alamat :</label>
            <input type="text" class="form-custom" required placeholder="alamat" id="alamat" name="alamat">
        </div>
        <div class="group-input">
            <label for="no_hp">No HP :</label>
            <input type="numeric" class="form-custom" required placeholder="No hp" id="no_hp" name="no_hp">
        </div>
    </div>
    <div class="panel-bottom">
        <button type="submit" id="buttonsimpan" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
        <button type="reset" id="buttonreset" class="btn btn-secondary">Reset</button>
    </div>
</form>