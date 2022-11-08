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
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="shortcut icon" href="assets/dist/img/favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">

  <title>Athena 1.0</title>
</head>
<body style="background-color: #788caa">
  <nav class="navbar navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="assets/dist/img/favicon.ico">Athena Versi 1.0</a>
      <a class="navbar-brand ms-auto" href="#">Halo, <?= $_SESSION["nama"]; ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="logout.php"><i class="fas fa-sign-out-alt me-2"></i>Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="container pt-5">      
    <div class="row justify-content-center mt-5">
      <div class="col mt-5 pt-5">
        <h1 class="text-center text-white pt-5 mt-5">Terima Kasih Atas Partisipasinya</h1>
      </div>
    </div>
  </div>

  <!-- Main Footer -->
  <footer class="main-footer text-center m-3 fixed-bottom text-white">
    <p>Copyright Sukma Maulana Hakim &copy; <?= date('Y'); ?>.</P>
    </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->


    <script src="assets/particles.js"></script>
    <script>
      particlesJS.load('particles-js', 'assets/particlesjs-config.json', function() {
        console.log('callback - particles.js config loaded');
      });
    </script>
    <!-- <script src="https://code.responsivevoice.org/responsivevoice.js?key=auvTMQpf"></script> -->
    <script src="assets/plugins/ResponsiveVoiceJS/responsivevoice.js"></script>


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


    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  -->
</body>
</html>

