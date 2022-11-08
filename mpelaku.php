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
    <h3 class="card-title">Materi Edukasi Cyberbullying Sebagai Pelaku</h3>

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
   <?php  

   $user = $_SESSION['id_user'];

   $tampil = mysqli_query($koneksi, "select * from tbl_edukasi");
   foreach ($tampil as $value) :
     ?>
     <?php 
     $id_kategori = $value['id_kategori'];
     $materi = mysqli_query($koneksi, "select * from tbl_edukasi WHERE id_kategori = '$id_kategori'"); 
     ?>
     <?php foreach ($materi as $key => $nilai) :
      ?>
      <?php if ($nilai['id_kategori'] == '1') : ?>
        <iframe src="assets/dist/file/<?= $nilai['materi']; ?>" width="1090" height="500"></iframe>
      <?php endif ?>
    <?php endforeach ?>
  <?php endforeach ?>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->