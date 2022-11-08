<?php  

include 'koneksi.php';

session_start();

//jika sudah login tetap di index jika belum logout
if(!isset($_SESSION['login'])){
  echo "
  <script>
  document.location.href='login.php';
  </script>
  ";
}
?>
<?php

$batas = 1;
$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;  

$previous = $halaman - 1;
$next = $halaman + 1;

$data = mysqli_query($koneksi,"select * from tbl_soal");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

$query = mysqli_query($koneksi,"select * from tbl_soal limit $halaman_awal, $batas");


$no = $halaman_awal + 1;

if (isset($_POST["jawaban"])) {

  $id_user = $_POST["id_user"];
  $id_soal = $_POST["id_soal"];
  $id_kategori = $_POST["id_kategori"];
  $jawaban = $_POST["jawaban"];

  $query = mysqli_query($koneksi, "SELECT * FROM tbl_jawaban WHERE id_user='$id_user' AND id_soal='$id_soal'");

  $hitung = mysqli_num_rows($query);

  if ($hitung > 0) {
    mysqli_query($koneksi, "UPDATE tbl_jawaban SET jawabanpre = '$jawaban'WHERE id_user = '$id_user' AND id_soal='$id_soal'");
  }else{
    mysqli_query($koneksi, "INSERT INTO tbl_jawaban(id_jawaban,id_user,id_soal,id_kategori,jawabanpre) VALUES('','$id_user','$id_soal','$id_kategori','$jawaban')");
  }

}



?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="assets/dist/img/favicon.ico">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <title>Athena Versi 1.0</title>
</head>
<body style="background-image: linear-gradient(-90deg, #49FF00, #77E4D4); width: 100%">
  <nav class="navbar navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="assets/dist/img/favicon.ico">Athena Versi 1.0</a>
      <a class="navbar-brand ms-auto" href="#">Halo, <?= $_SESSION["nama"]; ?></a>
  <!-- <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
  <span class="navbar-toggler-icon"></span>
</button> -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="logout.php" onclick="return confirm('Apakah anda akan keluar?')"><i class="fas fa-sign-out-alt me-2"></i>Keluar</a>
      </li>
    </ul>
  </div>
</div>
</div>
</nav>
<div id="particles-js">
  <div class="container">
    <?php foreach ($query as  $value): ?>
      <div class="row justify-content-center">
        <div class="col-md-7" style="position: absolute; top: 25%">
          <div class="card border-info shadow-sm bg-body rounded" data-aos="zoom-in" data-aos-offset="200"data-aos-delay="50" data-aos-duration="1000">
            <div class="card-header">
              <h5>Jawablah pertanyaan dibawah ini dengan jujur !!!</h5>
            </div>
            <div class="card-body p-5 ">
              <form class="form-soal">
                <p class="card-text" data-aos="fade-down" data-aos-offset="200"data-aos-delay="50" data-aos-duration="1000">
                  <?= $value["soal"]; ?>
                </p>
                <input type="hidden" name="id_user" value="<?= $_SESSION["id_user"]; ?>">
                <input type="hidden" name="id_soal" value="<?= $value["id_soal"]; ?>">
                <input type="hidden" name="id_kategori" value="<?= $value["id_kategori"]; ?>">
                <input type="radio" class="btn-check jawaban" name="jawaban" id="option1" autocomplete="off" value="iya" required>
                <label class="btn btn-outline-success" for="option1" data-aos="fade-up" data-aos-offset="200"data-aos-delay="50" data-aos-duration="1000">Iya</label>

                <input type="radio" class="btn-check jawaban" name="jawaban" id="option2" autocomplete="off" value="tidak" required>
                <label class="btn btn-outline-success" for="option2" data-aos="fade-up" data-aos-offset="200"data-aos-delay="50" data-aos-duration="1000">Tidak</label>
              </div>
              <div class="card-footer">
                <!-- <button name="simpan" class="btn btn-success"><i class="fas fa-check me-1"></i>Pilih</button> -->
                <small>* Silahkan pilih salah satu jawaban diatas</small>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<audio hidden autoplay loop>
  <source src="assets/dist/audio/backsound.mp3" type="audio/mpeg">
    Browsermu tidak mendukung tag audio, upgrade donk!
  </audio>

  <!-- Main Footer -->
  <footer class="main-footer text-white text-center m-3 fixed-bottom">
    <strong>Copyright &copy; <?= date('Y'); ?>.</strong> Widya Nurani Indah Pangestuti.
  </footer>


  <!-- Optional JavaScript; choose one of the two! -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $(".jawaban").click(function(){
        var data = $('.form-soal').serialize();
        $.ajax({
          type: 'POST',
          url: "",
          data: data,
          success: function() {
            if (<?= $_GET["halaman"] ?> == <?= $total_halaman; ?>) {
              window.location.href = 'edukasi.php';
            }else{
              window.location.href = 'soalpre.php?halaman=<?= $next; ?>';
            }
          }
        });
      });
    });
  </script>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->


  <script src="assets/particles.js"></script>
  <script>
    particlesJS.load('particles-js', 'assets/particlesjs-nasa.json', function() {
      console.log('callback - particles.js config loaded');
    });
  </script>
  <script src="https://code.responsivevoice.org/responsivevoice.js?key=auvTMQpf"></script>
  <!-- <script src="assets/plugins/ResponsiveVoiceJS/responsivevoice.js"></script> -->

  <script type="text/javascript">
    $(document).ready(function() {
      const soal = $('#soal').val();
      responsiveVoice.speak(soal, "Indonesian Female", {
        pitch: 1,
        rate: 1,
        volume: 2

      });

    } );
  </script>    
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
