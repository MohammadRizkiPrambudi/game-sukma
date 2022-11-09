<?php  

include '../koneksi.php';

if (isset($_POST["tambah"])) {
  $kategori = $_POST["kategori"];

  $query = mysqli_query($koneksi, "INSERT INTO tbl_kategori VALUES('','$kategori')");

  if($query){
    echo "
    <script>
    alert('Kategori berhasil disimpan');
    document.location='?hal=kategori';
    </script>
    ";
  }else{
    echo "

    <script>
    alert('Kategori gagal disimpan');
    document.location='?hal=kategori';
    </script>
    ";
  }

}


?>


<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">Tambah kategori</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="" method="post" id="frmkategori">
    <div class="card-body">
      <div class="form-group">
        <label for="nama">Kategori</label>
        <input type="text" name="kategori" id="kategori" class="form-control" autocomplete="off" required>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-info" name="tambah">Simpan</button>
      <a href="?hal=soal" class="btn btn-success">Batal</a>
    </div>
  </form>
</div>




