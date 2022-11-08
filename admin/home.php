<?php  

include '../koneksi.php';

// menghitung jumlah baris data pegawai
$user = mysqli_query($koneksi, "SELECT * FROM tbl_user");
$jumlahuser = mysqli_num_rows($user);





?>


<h3 class="text-capitalize">Selamat datang di game Athena</h3>
<hr>
<div class="row">
	<div class="col-12 col-sm-6 col-md-3">
		<div class="info-box">
			<span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-friends"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">Player</span>
				<span class="info-box-number">
          <?= $jumlahuser; ?>
          <small>Orang</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
