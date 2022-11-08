<?php  

include 'koneksi.php';

session_start();

//jika jika belum login maka akan logout
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

  <link rel="shortcut icon" href="assets/dist/img/favicon.ico">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


  <title>Athena Versi 1.0</title>

</head>
<body style="background-color: #79DAE8; width: 100%;" >
  <div id="particles-js">
    <div class="container" style="position: absolute; left: 5%">
      <div class="row">
        <div class="col">
          <small class="float-end mt-3 text-success">Aplikasi ini dibuat untuk pengedukasian cyber bullying</small>
          <br>
          <div class="logo mt-5">
            <center><img src="assets/dist/img/logo3.png" class="text-center mt-5" width="280px" data-aos="zoom-in" data-aos-offset="200"data-aos-delay="100" data-aos-duration="1000"></center>
            <p class="fs-1 text-center fw-bold text-success" data-aos="zoom-in-down" data-aos-offset="0"data-aos-delay="500" data-aos-duration="1000">Athena Versi 1.0</p>
          </div>
          <div class="tombol mt-4 text-center" data-aos="zoom-in-up" data-aos-offset="0"data-aos-delay="600" data-aos-duration="1000" >
            <a href="soalpre.php?halaman=1" class="btn btn-secondary"><i class="fa fa-play me-2" aria-hidden="true"></i>Mulai</a>
          </div>
        </div>
      </div>
    </div>
    <input type="hidden" name="intro" id="intro" value="Selamat Datang, mari bersama jadi penggerak anti cyber bullying">
    
    <!-- Main Footer -->
    <footer class="main-footer bg-transparent text-success text-center m-3 fixed-bottom">
      <strong>Copyright &copy; <?= date('Y'); ?>.</strong> Sukma Maulana Hakim.
    </footer>

    <audio hidden autoplay loop>
      <source src="assets/dist/audio/backsound.mp3" type="audio/mpeg">
        Browsermu tidak mendukung tag audio, upgrade donk!
      </audio>


      <!-- Optional JavaScript; choose one of the two! -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="https://code.responsivevoice.org/responsivevoice.js?key=auvTMQpf"></script>
      <script type="text/javascript">
        $(document).ready(function() {
          const intro = $('#intro').val();
          responsiveVoice.speak(intro, "Indonesian Male", {
            pitch: 1,
            rate: 1,
            volume: 2

          });

        } );
      </script>    

      <script src="assets/particles.js"></script>
      <script>
        particlesJS.load('particles-js', 'assets/particlesjs-buble.json', function() {
          console.log('callback - particles.js config loaded');
        });
      </script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
