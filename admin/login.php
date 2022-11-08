<?php 

session_start(); 


?>
<?php  

// jika sudah login tetap di index jika belum logout
if(isset($_SESSION['login_admin'])){
  echo "
  <script>
  document.location.href='index.php';
  </script>
  ";
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Athena</title>
  <link rel="shortcut icon" href="../assets/dist/img/favicon.ico">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-info">
      <div class="card-header text-center">
        <a href="login.php" class="h1"><b> <img src="../assets/dist/img/favicon.ico" class="mr-2"><span style="color: #bce50d">Ath</span><span style="color: #019934">ena</span></b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Silahkan isi terlebih dahulu</p>
        <form action="proses_login.php" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Silahkan isi username anda" name="username" autocomplete="off">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Silahkan masukkan password" name="password" autocomplete="off">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-unlock"></span>
              </div>
            </div>
          </div>
          <div class="row">
           <div class="col">
            <button type="submit" class="btn btn-info btn-block" name="login">Masuk</button>
          </div> 
          <!-- /.col -->
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
<!-- SweetAlert2 -->
<script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>


</body>
</html>


