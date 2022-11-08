<?php  


// ambil koneksi
include '../koneksi.php';

// mengambil data didatabase
$data = mysqli_query($koneksi, "SELECT * FROM tbl_soal, tbl_user, tbl_jawaban WHERE tbl_user.id_user=tbl_jawaban.id_user AND tbl_soal.id_soal = tbl_jawaban.id_soal ORDER BY nama");

?>


<div class="card">
  <div class="card-header">
    <h2 class="card-title">Daftar Jawaban</h2>
    <div class="float-right">
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Soal</th>
            <th>Pre Test</th>
            <th>Post Test</th>
          </tr>
        </thead>
        <tbody>
          <?php $no =1; ?>
          <?php foreach ($data as $result ): ?>
            <tr>
              <td><?= $no; ?></td>
              <td><?= $result["nama"]; ?></td>
              <td><?= $result['soal']; ?></td>
              <td><?= $result["jawabanpre"]; ?></td>
              <td><?= $result["jawabanpost"]; ?></td>
            </tr>
            <?php $no++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
<!-- /.card -->

