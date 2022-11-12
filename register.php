<?php 
session_start(); 
include 'koneksi.php';
?>
<?php  

//jika sudah login tetap di index jika belum logout
if(isset($_SESSION['login'])){
  echo "
  <script>
  document.location.href='intro.php';
  </script>
  ";
}


// cek apakah tombol login sudah ditekan
if (isset($_POST["login"])) {

  // menangkap variabel dalam form

  $nama = $_POST["nama"];
  $username = $_POST["username"];
  $umur = $_POST["umur"];
  $password = $_POST["password"];

  $query = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username='$username'");
  $hitung = mysqli_num_rows($query);
  if ($hitung > 0) {
    echo "
    <script>
    alert('username sudah ada, silahkan pilih yang lain !!');
    document.location.href='register.php';
    </script>
    ";
  }else{

    $simpan= mysqli_query($koneksi, "INSERT INTO tbl_user VALUES('', '$nama', '$username', '$umur', '$password')");

    if ($simpan) {
      echo "
      <script>
      alert('Anda berhasil mendaftar, silahkan login!!');
      document.location.href='login.php';
      </script>
      ";
    }

  }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Athena Versi 1.0</title>
  <link rel="shortcut icon" href="assets/dist/img/favicon.ico">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-info">
      <div class="card-header text-center">
        <a href="login.php" class="h1"><b> <img src="assets/dist/img/favicon.ico" class="mr-2"><span style="color: #006778">At</span><span style="color: #0093AB">he</span><span style="color: #00AFC1">na</span></b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Silahkan isi data anda</p>
        <form action="" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" autocomplete="off">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username" autocomplete="off">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Umur" name="umur" autocomplete="off">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
           <div class="col">
            <button type="submit" class="btn btn-info btn-block" name="login">Daftar</button>
          </div> 
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>

</body>
</html>


