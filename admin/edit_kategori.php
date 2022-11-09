<?php  

include '../koneksi.php';


$id = $_GET['id'];

$kategori = mysqli_query($koneksi, "SELECT * FROM tbl_kategori WHERE id='$id'");


if (isset($_POST["tambah"])) {
  $kategori = $_POST["kategori"];

  $query = mysqli_query($koneksi, "UPDATE tbl_kategori SET nama_kategori ='$kategori' WHERE id='$id'");

  if($query){
    echo "
    <script>
    alert('Kategori berhasil diubah');
    document.location='?hal=kategori';
    </script>
    ";
  }else{
    echo "

    <script>
    alert('Kategori gagal diubah');
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
  <form action="" method="post" id="frmkategori">
    <?php foreach ($kategori as $key => $k): ?>
      <div class="card-body">
        <div class="form-group">
          <label for="nama">Kategori</label>
          <input type="text" name="kategori" id="kategori" class="form-control" autocomplete="off" required value="<?= $k['nama_kategori']; ?>">
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-info" name="tambah">Simpan</button>
        <a href="?hal=kategori" class="btn btn-success">Batal</a>
      </div>
    <?php endforeach ?>
  </form>
</div>




