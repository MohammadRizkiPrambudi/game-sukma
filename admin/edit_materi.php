<?php  

include '../koneksi.php';

$id_materi = $_GET['id'];

$ambil_data = mysqli_query($koneksi, "SELECT * FROM tbl_edukasi WHERE id_materi = '$id_materi'");
$pecah = mysqli_fetch_assoc($ambil_data);
$fileu = $pecah['materi'];

if (isset($_POST["tambah"])) {

  $video = $_POST["video"];
  $kategori = $_POST['kategori'];
  $namaFile = $_FILES['materi']['name'];
  $materilama = $_POST['materilama'];
  $id_materi = $_POST['id_materi'];

  if ($namaFile != '' ) {
    $namaSementara = $_FILES['materi']['tmp_name'];
    $dirUpload = "../assets/dist/file/";

    if (file_exists("../assets/dist/file/$fileu")) {
      unlink("../assets/dist/file/$fileu");
    }

    move_uploaded_file($namaSementara, $dirUpload.$namaFile);

    $query = mysqli_query($koneksi, "UPDATE tbl_edukasi SET materi='$namaFile', video='$video', id_kategori = '$kategori' WHERE id_materi='$id_materi'");

    if($query){
      echo "
      <script>
      alert('materi edukasi berhasil diubah');
      document.location='?hal=materi';
      </script>
      ";
    }else{
      echo "

      <script>
      alert('materi edukasi gagal diubah');
      document.location='?hal=materi';
      </script>
      ";
    }

  }else{

    $query = mysqli_query($koneksi, "UPDATE tbl_edukasi SET materi='$materilama', video='$video', id_kategori = '$kategori' WHERE id_materi='$id_materi'");

    if($query){
      echo "
      <script>
      alert('materi edukasi berhasil diubah');
      document.location='?hal=materi';
      </script>
      ";
    }else{
      echo "

      <script>
      alert('materi edukasi gagal diubah');
      document.location='?hal=materi';
      </script>
      ";
    }

  }

}


?>


<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">Edit Materi</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="" method="post"  enctype="multipart/form-data">
    <?php foreach ($ambil_data as $key => $value): ?>
      <div class="card-body">
        <div class="form-group">
          <label for="materi">File Materi</label>
          <p><?= $value['materi']; ?></p>
          <input type="file" name="materi" id="materi" class="form-control" autocomplete="off" required>
          <input type="hidden" name="materilama" id="materi" class="form-control" autocomplete="off" required value="<?= $value['materi']; ?>">
          <input type="hidden" name="id_materi" id="materi" class="form-control" autocomplete="off" required value="<?= $value['id_materi']; ?>">
        </div>
        <div class="form-group">
          <label for="video">Link Video</label>
          <input type="text" name="video" id="video" class="form-control" autocomplete="off" required value="<?= $value['video']; ?>">
        </div>
        <?php $kategori = mysqli_query($koneksi, "SELECT * FROM tbl_kategori"); ?>
        <div class="form-group">
          <label for="video">Link Video</label>
          <select name="kategori" class="form-control">
            <?php foreach ($kategori as $key => $v): ?>
              <option value="<?= $v['id']; ?>" <?= $value['id_kategori'] == $v['id'] ? 'selected':''; ?>><?= $v['nama_kategori']; ?></option>
            <?php endforeach ?>
          </select>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-info" name="tambah">Simpan</button>
        <button type="reset" class="btn btn-danger">Hapus</button>
        <a href="?hal=materi" class="btn btn-success">Batal</a>
      </div>    
    <?php endforeach ?>
  </form>
</div>



