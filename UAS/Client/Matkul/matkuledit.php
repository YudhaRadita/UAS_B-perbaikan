<h3>Edit Data Matakuliah <span id="txedit"></span></h3>
<div class="alert alert-primary" role="alert" id="pesan">
  Data berhasil di Perbaharui
</div>
<form>
    <div class="mb-3">
        <label class="form-label">Kode Matakuliah</label>
        <input type="text" class="form-control" id="txkdmk" disabled >
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Matakuliah</label>
        <input type="text" class="form-control" id="txnamamk" >
    </div>
    <div class="mb-3">
        <label class="form-label">SKS</label>
        <input type="text" class="form-control" id="txsks" >
    </div>
    <div class="mb-3">
        <label class="form-label">Semester</label>
        <input type="text" class="form-control" id="txsms" >
    </div>
    <div class="mb-3">
        <label class="form-label">Kode Kelas</label>
        <input type="text" class="form-control" id="txkodekls">
    </div>
    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="updatedata()" class="btn btn-primary">Simpan Data</button>
        <button type="button" onclick="ngakjadi()" class="btn btn-secondary"> Batal </button>
    </div>
</form>
<script>
    document.getElementById("pesan").style.display = "none";
function ngakjadi() {
  location.replace("http://localhost/UAS/Client/main.php?p=matakuliah")
}
</script>
<script src="http://localhost/UAS/Client/Matkul/matkulcaridata.js"></script>
<script src="http://localhost/UAS/Client/Matkul/matkulupdatedata.js"></script>