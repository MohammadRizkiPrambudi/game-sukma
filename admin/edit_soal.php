<?php  

include '../koneksi.php';

$id= $_GET["id"];

$ambil_data = mysqli_query($koneksi, "SELECT * FROM tbl_soal WHERE id_soal='$id'");



if (isset($_POST["edit"])) {
  $id = $_POST["id_soal"];
  $soal = $_POST["soal"];

  $query = mysqli_query($koneksi, "UPDATE tbl_soal SET soal = '$soal' WHERE id_soal='$id'");

  if(mysqli_affected_rows($koneksi) > 0){
    echo "

    <script>
    alert('soal berhasil diedit');
    document.location='?hal=soal';
    </script>
    ";
  }else{
    echo "

    <script>
    alert('soal gagal diedit');
    document.location='?hal=soal';
    </script>
    ";
  }

}


?>


<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">Edit Soal</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="" method="post" id="frmsoal">
    <?php foreach ($ambil_data as  $value): ?>


      <div class="card-body">
        <div class="form-group">
          <label for="nama">Soal</label>
          <input type="text" name="soal" id="soal" class="form-control" autocomplete="off" value="<?= $value["soal"]; ?>">
          <input type="hidden" name="id_soal" id="id_soal" class="form-control" autocomplete="off" value="<?= $id; ?>">
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-info" name="edit">Simpan</button>
        <a href="?hal=soal" class="btn btn-danger">Batal</a>
      </div>
    <?php endforeach ?>
  </form>
</div>
<!-- /.card -->
<!-- jquery-validation -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/plugins/jquery-validation/additional-methods.min.js"></script>
<script type="text/javascript">
  $('#frmdivisi').validate({
    rules: {
      namadivisi: {
        required : true,
      },
    },
    messages: {
      namadivisi: {
        required: "Form nama divisi harus diisi",
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
</script>



