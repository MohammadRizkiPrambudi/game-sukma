<?php  

include '../koneksi.php';

if (isset($_POST["tambah"])) {
  $soal = $_POST["soal"];
  $kategori = $_POST['kategori'];

  $query = mysqli_query($koneksi, "INSERT INTO tbl_soal VALUES('','$soal','$kategori')");

  if($query){
    echo "

    <script>
    alert('Soal berhasil disimpan');
    document.location='?hal=soal';
    </script>
    ";
  }else{
    echo "

    <script>
    alert('Soal gagal disimpan');
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
        <label for="soal">Soal</label>
        <input type="text" name="soal" id="soal" class="form-control" autocomplete="off" required>
      </div>
      <?php 
      $data = mysqli_query($koneksi, "SELECT * FROM tbl_kategori"); 
      ?>
      <div class="form-group">
        <label for="kategori">Kategori</label>
        <select name="kategori" class="form-control">
          <?php foreach ($data as $key => $d) : ?>
            <option value="<?= $d['id']; ?>"><?= $d['nama_kategori']; ?></option>
          <?php endforeach ?>
        </select>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-info" name="tambah">Simpan</button>
      <a href="?hal=soal" class="btn btn-success">Batal</a>
    </div>
  </form>
</div>




