<?php  

include '../koneksi.php';


$jawaban = mysqli_query($koneksi, "SELECT * FROM tbl_jawaban");
$jumlahjawaban = mysqli_num_rows($jawaban);


$kategori = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
$jumlahkategori = mysqli_num_rows($kategori);


$login = mysqli_query($koneksi, "SELECT * FROM tbl_login");
$jumlahlogin = mysqli_num_rows($login);


$edukasi = mysqli_query($koneksi, "SELECT * FROM tbl_edukasi");
$jumlahedukasi = mysqli_num_rows($edukasi);

?>


<h3 class="text-capitalize">Selamat datang di game Athena</h3>
<hr>
<div class="row">
	<div class="col-md-3">
		<div class="info-box">
			<span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-friends"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">Pengguna</span>
				<span class="info-box-number">
          <?= $jumlahlogin; ?>
          <small>Orang</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <div class="col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-book"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Jawaban</span>
        <span class="info-box-number">
          <?= $jumlahjawaban; ?>
          <small>Jawaban</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <div class="col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-file"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Materi</span>
        <span class="info-box-number">
          <?= $jumlahedukasi; ?>
          <small>Materi</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <div class="col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-list"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Kategori</span>
        <span class="info-box-number">
          <?= $jumlahkategori; ?>
          <small>Kategori</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
</div>


