<?php 

require 'koneksi.php';

session_start();

if(!isset($_SESSION['login'])){
  echo "
  <script>
  document.location.href='login.php';
  </script>
  ";
} 
ob_start(); 

$hal = @$_GET['hal'];

if ($hal == '') {
  $hAktif = 'active';
}elseif ($hal == 'vpelaku') {
  $masteraktif1='menu-open';
  $masteraktif2='active';
  $video1Aktif = 'active';
}elseif ($hal == 'vkorban') {
  $masteraktif1='menu-open';
  $masteraktif2='active';
  $video2Aktif = 'active';
}elseif ($hal == 'mpelaku') {
  $masteraktif3='menu-open';
  $masteraktif4='active';
  $materi1Aktif = 'active';
}elseif ($hal == 'mkorban') {
  $masteraktif3='menu-open';
  $masteraktif4='active';
  $materi2Aktif = 'active';
}elseif ($hal == 'home') {
  $hAktif = 'active';
}elseif ($hal == 'mtambahan') {
  $masteraktif3='menu-open';
  $masteraktif4='active';
  $materi3Aktif = 'active';
}


$user = $_SESSION['id_user'];

$tampil = mysqli_query($koneksi, "select * from tbl_jawaban WHERE id_user='$user' AND jawabanpre='iya' GROUP BY id_kategori");

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
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">

  <body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-info navbar-dark">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="" class="nav-link text-white">Athena Versi 1.0</a>
          </li>

        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <div class="dropdown-divider"></div>
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="">
              Halo, <?= $_SESSION["nama"]; ?>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="" class="brand-link">
          <span class="brand-text ml-2"><img src="assets/dist/img/favicon.ico" width="50" class="mr-2"></i>Athena Versi 1.0</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user (optional) -->

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->

           <li class="nav-item">
            <a href="?hal=home" class="nav-link <?= $hAktif; ?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item <?= $masteraktif3; ?>">
            <a href="#" class="nav-link <?= $masteraktif4; ?>">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Materi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-3">
              <?php foreach ($tampil as $key => $value): ?>
                <?php if($value['id_kategori'] == '1') : ?>
                  <li class="nav-item">
                    <a href="?hal=mpelaku" class="nav-link <?= $materi1Aktif; ?>">
                      <i class="nav-icon far fa-file-pdf"></i>
                      <p>
                        Materi Edukasi Pelaku
                      </p>
                    </a>
                  </li>
                  <?php else: ?>
                    <li class="nav-item">
                      <a href="?hal=mkorban" class="nav-link <?= $materi2Aktif; ?>">
                        <i class="nav-icon far fa-file-pdf"></i>
                        <p>
                          Materi Edukasi Korban
                        </p>
                      </a>
                    </li>
                  <?php endif ?>
                <?php endforeach ?>
                <li class="nav-item">
                  <a href="?hal=mtambahan" class="nav-link <?= $materi3Aktif; ?>">
                    <i class="nav-icon far fa-file-pdf"></i>
                    <p>
                      Materi Tambahan
                    </p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item <?= $masteraktif1; ?>">
              <a href="#" class="nav-link <?= $masteraktif2; ?>">
                <i class="nav-icon fas fa-video"></i>
                <p>
                  Video
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview ml-3">
                <?php foreach ($tampil as $key => $value): ?>
                  <?php if($value['id_kategori'] == '1') : ?>
                    <li class="nav-item">
                      <a href="?hal=vpelaku" class="nav-link <?= $video1Aktif; ?>">
                        <i class="nav-icon far fa-file-video"></i>
                        <p>
                          Video Edukasi Pelaku
                        </p>
                      </a>
                    </li>
                    <?php else: ?>
                      <li class="nav-item">
                        <a href="?hal=vkorban" class="nav-link <?= $video2Aktif; ?>">
                          <i class="nav-icon far fa-file-video"></i>
                          <p>
                            Video Edukasi Korban
                          </p>
                        </a>
                      </li>
                    <?php endif ?>
                  <?php endforeach ?>
                </ul>
              </li>
              <li class="nav-item">
                <a href="geasy.php" class="nav-link">
                  <i class="nav-icon fas fa-chevron-right"></i>
                  <p>
                    Selanjutnya
                  </p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">

              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <?php 
          $hal = @$_GET['hal'];
          $aksi = @$_GET['aksi'];
          if($hal=='vpelaku'){
            if ($aksi=='') {
              include 'vpelaku.php';
            }
          }elseif($hal=='vkorban'){
            if ($aksi=='') {
              include 'vkorban.php';
            }
          }elseif($hal=='mkorban'){
            if ($aksi=='') {
              include 'mkorban.php';
            }
          }elseif($hal=='mpelaku'){
            if ($aksi=='') {
              include 'mpelaku.php';
            }
          }elseif ($hal=='') {
            include 'home.php';
          }elseif ($hal=='home') {
            include 'home.php';
          }elseif($hal=='mtambahan'){
            if ($aksi=='') {
              include 'mtambahan.php';
            }
          }
          ?>

        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer text-center">
      <strong>Copyright &copy; Widya Nurani Indah Pangestuti. || <?= date ('Y'); ?> </strong>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="assets/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="assets/dist/js/demo.js"></script>

  <script src="assets/dist/js/myjs.js"></script>

</body>
</html>

