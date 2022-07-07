<h3>Tambah Data Matakuliah</h3>
<div class="alert alert-primary" role="alert" id="pesan">
  Data berhasil ditambahkan
</div>
<form>
    <div class="mb-3">
        <label class="form-label">Kode Matakuliah</label>
        <input type="text" class="form-control" id="txkdmk" placeholder="Isikan Kode Matakuliah">
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Matakuliah</label>
        <input type="text" class="form-control" id="txnamamk" placeholder="Isikan Nama Matakuliah">
    </div>
    <div class="mb-3">
        <label class="form-label">SKS</label>
        <input type="text" class="form-control" id="txsks" placeholder="Isikan Berapa SKS">
    </div>
    <div class="mb-3">
        <label class="form-label">Semester</label>
        <input type="text" class="form-control" id="txsms" placeholder="Isikan Semester">
    </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Kode Kelas</label>
        <input type="text" class="form-control" id="txkodekls" placeholder="Isikan Kode Kelas">
    </div>

    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="storedata()" class="btn btn-primary">Simpan Data</button>
        <button type="button" onclick="ngakjadi()" class="btn btn-secondary"> Batal </button>
    </div>
</form>
<script>
    document.getElementById("pesan").style.display = "none";
function ngakjadi() {
  location.replace("http://localhost/UAS/Client/main.php?p=matakuliah")
}
</script>
<script src="http://localhost/UAS/Client/Matkul/matkulstore.js"></script>