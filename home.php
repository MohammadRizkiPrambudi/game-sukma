<?php 

//jika jika belum login maka akan logout
if(!isset($_SESSION['login'])){
  echo "
  <script>
  document.location.href='login.php';
  </script>
  ";
}

?>

<div class="card">
  <div class="card-header">
    <h3 class="card-title">EDUKASI CYBER BULLYING</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>
  <div class="card-body">
    <!-- <h4 class="text-center text-uppercase mb-3">Selamat datang di aplikasi SPK Siswa Berprestasi <br> Menggunakan Metode SAW</h4> -->
    <p class="text-justify">
      Cyberbullying (perundungan dunia maya) ialah bullying/perundungan dengan menggunakan teknologi digital. Hal ini dapat terjadi di media sosial, platform chatting, platform bermain game, dan ponsel. Adapun menurut Think Before Text, cyberbullying adalah perilaku agresif dan bertujuan yang dilakukan suatu kelompok atau individu, menggunakan media elektronik, secara berulang-ulang dari waktu ke waktu, terhadap seseorang yang dianggap tidak mudah melakukan perlawanan atas tindakan tersebut. Jadi, terdapat perbedaan kekuatan antara pelaku dan korban. Perbedaan kekuatan dalam hal ini merujuk pada sebuah persepsi kapasitas fisik dan mental. <br>Sumber : <a href="https://www.unicef.org/indonesia/id/child-protection/apa-itu-cyberbullying">( unicef.org )</a>
    </ul>
  </p>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->









