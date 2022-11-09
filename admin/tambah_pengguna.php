<?php  

include '../koneksi.php';

if (isset($_POST["tambah"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $query = mysqli_query($koneksi, "SELECT * FROM tbl_login WHERE username_login ='$username'");
  $hitung = mysqli_num_rows($query);
  if ($hitung > 0) {
    echo "
    <script>
    alert('username sudah ada, silahkan pilih yang lain !!');
    document.location.href='?hal=pengguna';
    </script>
    ";
  }else{
    $namaFile = $_FILES['foto']['name'];
    $namaSementara = $_FILES['foto']['tmp_name'];
    $dirUpload = "../assets/dist/img/";

    move_uploaded_file($namaSementara, $dirUpload.$namaFile);

    $query = mysqli_query($koneksi, "INSERT INTO tbl_login VALUES('','$username','$password','$namaFile')");

    if($query){
      echo "
      <script>
      alert('Pengguna berhasil disimpan');
      document.location='?hal=pengguna';
      </script>
      ";
    }else{
      echo "
      <script>
      alert('Pengguna gagal disimpan');
      document.location='?hal=pengguna';
      </script>
      ";
    }
  }

}


?>


<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">Tambah Pengguna</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="" method="post"  enctype="multipart/form-data">
    <div class="card-body">
      <div class="form-group">
        <label for="Username">Username</label>
        <input type="text" name="username" id="username" class="form-control" autocomplete="off" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" autocomplete="off" required>
      </div>
      <div class="form-group">
        <label for="foto">File foto</label>
        <input type="file" name="foto" id="foto" class="form-control" autocomplete="off" required>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-info" name="tambah">Simpan</button>
      <a href="?hal=pengguna" class="btn btn-success">Batal</a>
    </div>
  </form>
</div>



