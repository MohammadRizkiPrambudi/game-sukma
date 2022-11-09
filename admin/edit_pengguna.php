<?php  

include '../koneksi.php';

$id = $_GET['id'];

$data= mysqli_query($koneksi, "SELECT * FROM tbl_login WHERE id_login = '$id'");
$pecah = mysqli_fetch_assoc($data);
$fotou = $pecah['foto'];


if (isset($_POST["tambah"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $namaFile = $_FILES['foto']['name'];
  $fotolama = $_POST['fotolama'];
  if ($namaFile != '' ) {
    $namaSementara = $_FILES['foto']['tmp_name'];
    $dirUpload = "../assets/dist/img/";

    if (file_exists("../assets/dist/img/$fotou")) {
      unlink("../assets/dist/img/$fotou");
    }

    move_uploaded_file($namaSementara, $dirUpload.$namaFile);

    $query = mysqli_query($koneksi, "UPDATE tbl_login SET username_login = '$username',password_login = '$password', foto = '$namaFile' WHERE id_login='$id'");
    if($query){
      echo "
      <script>
      alert('Pengguna berhasil diedit');
      document.location='?hal=pengguna';
      </script>
      ";
    }else{
      echo "
      <script>
      alert('Pengguna gagal diedit');
      document.location='?hal=pengguna';
      </script>
      ";
    }
  }else{
    $query = mysqli_query($koneksi, "UPDATE tbl_login SET username_login = '$username',password_login = '$password', foto = '$fotolama' WHERE id_login='$id'");
    if($query){
      echo "
      <script>
      alert('Pengguna berhasil diedit');
      document.location='?hal=pengguna';
      </script>
      ";
    }else{
      echo "
      <script>
      alert('Pengguna gagal diedit');
      document.location='?hal=pengguna';
      </script>
      ";
    }

  }

}


?>


<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">Edit Pengguna</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="" method="post"  enctype="multipart/form-data">
    <?php foreach ($data as $key => $v): ?>
      <input type="hidden" name="fotolama" value="<?= $v['foto']; ?>">
      <div class="card-body">
        <div class="form-group">
          <label for="Username">Username</label>
          <input type="text" name="username" id="username" class="form-control" autocomplete="off" required value="<?= $v['username_login']; ?>">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control" autocomplete="off" required value="<?= $v['password_login']; ?>">
        </div>
        <div class="form-gorup">
          <img src="../assets/dist/img/<?= $v['foto']; ?>" width="100">
        </div>
        <div class="form-group">
          <label for="foto">File foto</label>
          <input type="file" name="foto" id="foto" class="form-control" autocomplete="off">
        </div>
      </div>

      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-info" name="tambah">Simpan</button>
        <a href="?hal=materi" class="btn btn-success">Batal</a>
      </div>
    <?php endforeach ?>
  </form>
</div>



