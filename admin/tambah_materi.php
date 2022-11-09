<?php  

include '../koneksi.php';

if (isset($_POST["tambah"])) {

  $video = $_POST["video"];
  $kategori = $_POST['kategori'];
  $namaFile = $_FILES['materi']['name'];
  $namaSementara = $_FILES['materi']['tmp_name'];
  $dirUpload = "../assets/dist/file/";

  move_uploaded_file($namaSementara, $dirUpload.$namaFile);

  $query = mysqli_query($koneksi, "INSERT INTO tbl_edukasi VALUES('','$namaFile', '$video','$kategori')");

  if($query){
    echo "
    <script>
    alert('materi edukasi berhasil disimpan');
    document.location='?hal=materi';
    </script>
    ";
  }else{
    echo "

    <script>
    alert('materi edukasi gagal disimpan');
    document.location='?hal=materi';
    </script>
    ";
  }

}


?>


<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">Tambah Materi</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="" method="post"  enctype="multipart/form-data">
    <div class="card-body">
      <div class="form-group">
        <label for="materi">File Materi</label>
        <input type="file" name="materi" id="materi" class="form-control" autocomplete="off" required>
      </div>
      <div class="form-group">
        <label for="video">Link Video</label>
        <input type="text" name="video" id="video" class="form-control" autocomplete="off" required>
      </div>
      <?php $kategori = mysqli_query($koneksi, "SELECT * FROM tbl_kategori"); ?>
      <div class="form-group">
        <label for="kategori">Kategori</label>
        <select name="kategori" class="form-control">
          <option value="-">--Silahkan pilih--</option>
          <?php foreach ($kategori as $key => $value): ?>
            <option value="<?= $value['id']; ?>"><?= $value['nama_kategori']; ?></option>
          <?php endforeach ?>
        </select>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-info" name="tambah">Simpan</button>
      <a href="?hal=materi" class="btn btn-success">Batal</a>
    </div>
  </form>
</div>



