<?php  

include '../koneksi.php';

if (isset($_POST["tambah"])) {
  $soal = $_POST["soal"];

  $query = mysqli_query($koneksi, "INSERT INTO tb_soal VALUES('','$soal')");

  if(mysqli_affected_rows($koneksi) > 0){
    echo "

    <script>
    alert('soal berhasil disimpan');
    document.location='?hal=soal';
    </script>
    ";
  }else{
    echo "

    <script>
    alert('soal gagal disimpan');
    document.location='?hal=soal';
    </script>
    ";
  }

}


?>


<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">Tambah Soal</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="" method="post" id="frmsoal">
    <div class="card-body">
      <div class="form-group">
        <label for="nama">Soal</label>
        <input type="text" name="soal" id="soal" class="form-control" autocomplete="off" required>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-info" name="tambah">Simpan</button>
      <button type="reset" class="btn btn-danger">Hapus</button>
      <a href="?hal=soal" class="btn btn-success">Batal</a>
    </div>
  </form>
</div>




