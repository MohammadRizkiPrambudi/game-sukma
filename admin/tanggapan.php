<?php  


// ambil koneksi
include '../koneksi.php';

// mengambil data didatabase
$data = mysqli_query($koneksi, "SELECT * FROM tbl_user, tbl_tanggapan WHERE tbl_user.id_user=tbl_tanggapan.id_user");



?>


<div class="card">
  <div class="card-header">
    <h2 class="card-title">Daftar Tanggapan</h2>
    <div class="float-right">
      <!-- <a href ="?hal=soal&aksi=tambah" class="btn btn-info"><i class="fas fa-plus mr-2"></i>Tambah Soal</a> -->
      <!--  <a href="lap_divisi.php" target="_blank"  class="btn btn-success" ><i class="fas fa-print mr-2"></i>Cetak Data</a> -->
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped" style="white-space: nowrap;">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Game level 1</th>
            <th>Game level 2</th>
            <th>Game level 3</th>
          </tr>
        </thead>
        <tbody>
          <?php $no =1; ?>
          <?php foreach ($data as $result ): ?>
            <tr>
              <td><?= $no; ?></td>
              <td><?= $result["nama"]; ?></td>
              <td><?= $result['tanggapan_easy']; ?></td>
              <td><?= $result["tanggapan_normal"]; ?></td>
              <td><?= $result["tanggapan_hard"]; ?></td>
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

