<?php  


session_start();
if(!isset($_SESSION['login'])){
  echo "
  <script>
  document.location.href='login.php';
  </script>
  ";
}

include 'koneksi.php';


if(isset($_POST["simpan"])){

  $tanggapan = $_POST["tanggapan"];
  $user = $_POST["id_user"];

  $query = mysqli_query($koneksi, "SELECT * FROM tbl_tanggapan WHERE id_user='$user'");

  $hitung = mysqli_num_rows($query);

  if ($hitung  > 0) {

    $update = mysqli_query($koneksi, "UPDATE tbl_tanggapan SET tanggapan_easy = '$tanggapan' WHERE id_user='$user'");
    if($update){
      echo "
      <script>
      alert('Terima kasih atas tanggapannya!!');
      document.location='gnormal.php';
      </script>
      ";
    }

  }else{
    $simpan = mysqli_query($koneksi, "INSERT INTO tbl_tanggapan(id_tanggapan, id_user, tanggapan_easy) VALUES('','$user','$tanggapan')");
    if($simpan){
      echo "
      <script>
      alert('Terima kasih atas tanggapannya!!');
      document.location='gnormal.php';
      </script>
      ";
    }

  }




}


?>


<!DOCTYPE html>
<html lang="en">



<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Athena Versi 1.0</title>
  <link rel="stylesheet" href="assets/dist/css/style.css">
  <link rel="shortcut icon" href="assets/dist/img/favicon.ico">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
</head>

<body style="background-image: url(assets/dist/img/bg3.jpg); background-size: cover">
  <center><img src="assets/dist/img/favicon.ico" class="mt-2"></center>
  <h1 class="mt-2 fw-bold">Game Athena Versi 1.0</h1>
  <h2 class="mt-1">Level 1</h2>

  <div class="button-group mt-3">
    <button type="button" class="mulai easy" onclick="mulai(800, 1500)" >
      <i class="fas fa-play me-2"></i>Mulai
    </button>

    <button type="button" class="next" data-bs-toggle="modal" data-bs-target="#easy">
      <i class="fas fa-chevron-right me-2"></i>Selanjutnya
    </button>
  </div>

  <h1 class="papan-skor mt-2">0</h1>

  <div class="konten">
    <div class="tanah">
      <div class="tikus"></div>
    </div>
    <div class="tanah">
      <div class="tikus"></div>
    </div>
    <div class="tanah">
      <div class="tikus"></div>
    </div>
    <div class="tanah">
      <div class="tikus"></div>
    </div>
    <div class="tanah">
      <div class="tikus"></div>
    </div>
    <div class="tanah">
      <div class="tikus"></div>
    </div>
  </div>

  <audio hidden autoplay loop>
    <source src="assets/dist/audio/backsound.mp3" type="audio/mpeg">
      Browsermu tidak mendukung tag audio, upgrade donk!
    </audio>


    <!-- Modal -->
    <div class="modal fade" id="easy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Berikan Tanggapan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form method="post" action="">
            <div class="modal-body">
              <textarea class="form-control" name="tanggapan" id="exampleFormControlTextarea1" rows="3" required></textarea>
              <input type="hidden" name="id_user" value="<?= $_SESSION["id_user"]; ?>">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <audio src="assets/dist/audio/Pop.mp3" id="pop"></audio>
    <script src="assets/dist/js/script.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>

  </html>