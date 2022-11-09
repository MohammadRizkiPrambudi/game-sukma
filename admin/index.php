<?php session_start(); ?>

<?php if(!isset($_SESSION['login_admin'])){
  echo "
  <script>
  document.location.href='login.php';
  </script>
  ";
} ?>
<?php ob_start(); ?>

<?php  

$hal = @$_GET['hal'];

if ($hal == '') {
  $hAktif = 'active';
}elseif ($hal == 'soal') {
  $masteraktif1='menu-open';
  $masteraktif2='active';
  $sAktif = 'active';
}elseif ($hal == 'materi') {
  $masteraktif1='menu-open';
  $masteraktif2='active';
  $mAktif = 'active';
}elseif ($hal == 'jawaban') {
  $peAktif = 'active';
}elseif ($hal=='pengguna') {
  $masteraktif1='menu-open';
  $masteraktif2='active';
  $pAktif = 'active';
}elseif ($hal=='tanggapan') {
  $gpAktif = 'active'; 
}elseif ($hal=='kategori') {
  $masteraktif1='menu-open';
  $masteraktif2='active';
  $kAktif = 'active';
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Athena Versi 1.0</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="shortcut icon" href="../assets/dist/img/favicon.ico">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <!-- dataTables -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="" class="brand-link">
          <span class="brand-text font-weight-bold ml-2"><img src="../assets/dist/img/favicon.ico">Athena Versi 1.0</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="../assets/dist/img/<?= $_SESSION['foto']; ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block"><?= $_SESSION['username_login']; ?>
            </a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="index.php" class="nav-link <?= $hAktif; ?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item <?= $masteraktif1; ?>">
            <a href="#" class="nav-link <?= $masteraktif2; ?>">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?hal=soal" class="nav-link <?= $sAktif; ?>">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Soal
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="?hal=materi" class="nav-link <?= $mAktif; ?>">
                  <i class="nav-icon fas fa-file"></i>
                  <p>
                    Materi
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?hal=kategori" class="nav-link <?= $kAktif; ?>">
                  <i class="nav-icon fas fa-list"></i>
                  <p>
                    Kategori
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?hal=pengguna" class="nav-link <?= $pAktif; ?>">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Pengguna
                  </p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="?hal=jawaban" class="nav-link <?= $peAktif; ?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Jawaban
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="?hal=tanggapan" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Tanggapan
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
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
        if($hal=='pegawai'){
          if ($aksi=='') {
            include 'pegawai.php';
          }elseif ($aksi=='tambah') {
            include 'tambah_pegawai.php';
          }elseif ($aksi=='edit') {
            include 'edit_pegawai.php';
          }
        }elseif($hal=='divisi'){
          if ($aksi=='') {
            include 'divisi.php';
          }elseif ($aksi=='tambah') {
            include 'tambah_divisi.php';
          }elseif ($aksi=='edit') {
            include 'edit_divisi.php';
          }
        }elseif($hal=='soal'){
          if ($aksi=='') {
            include 'soal.php';
          }elseif ($aksi=='tambah') {
            include 'tambah_soal.php';
          }elseif ($aksi=='edit') {
            include 'edit_soal.php';
          }
        }elseif($hal=='jawaban'){
          if ($aksi=='') {
            include 'jawaban.php';
          }
        }elseif($hal=='tanggapan'){
         if ($aksi == '') {
           include 'tanggapan.php';
         }
       }elseif($hal=='ganti_password'){
        include 'ganti_password.php';
      }elseif ($hal=='') {
        include 'home.php';
      }elseif ($hal=='materi') {
        if ($aksi == '') {
          include 'materi.php';
        }if ($aksi == 'tambah') {
          include 'tambah_materi.php';
        }if ($aksi == 'edit') {
          include 'edit_materi.php';
        }
      }elseif ($hal=='kategori') {
        if ($aksi == '') {
          include 'kategori.php';
        }if ($aksi == 'tambah') {
          include 'tambah_kategori.php';
        }if ($aksi == 'edit') {
          include 'edit_kategori.php';
        }
      }elseif ($hal=='pengguna') {
        if ($aksi == '') {
          include 'pengguna.php';
        }if ($aksi == 'tambah') {
          include 'tambah_pengguna.php';
        }if ($aksi == 'edit') {
          include 'edit_pengguna.php';
        }

      }
      ?>

    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<footer class="main-footer text-center">
  <strong>Copyright &copy; Kendal || <?= date ('Y'); ?> </strong>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Apakah akan logout ?</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">Jika akan logout pilih tombol logout</div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
      <a class="btn btn-primary" href="logout.php">Logout</a>
    </div>
  </div>
</div>
</div>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<!-- sweetalert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- datatables -->
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>
<!-- myjs -->
<script src="../assets/dist/js/myjs.js"></script>
</body>
</html>

<script type="text/javascript">
  $(document).ready(function() {
    var table = $('#example1').DataTable( {
      responsive: true,
      autoWidth: false,
      lengthChange: false,
      buttons: [ 
      {
        extend: 'excelHtml5',
        title: 'Export Data Soal',
      }
      ]
    } );

    table.buttons().container()
    .appendTo( '#example1_wrapper .col-md-6:eq(0)' );
  } );

</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable( {

    } );
  } );

</script>


<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>