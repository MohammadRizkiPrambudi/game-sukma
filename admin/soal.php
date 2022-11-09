<?php  


// ambil koneksi
include '../koneksi.php';

// mengambil data didatabase
$data = mysqli_query($koneksi, "SELECT * FROM tbl_soal, tbl_kategori WHERE tbl_soal.id_kategori = tbl_kategori.id");


?>


<div class="card">
  <div class="card-header">
    <h2 class="card-title">Daftar Soal</h2>
    <div class="float-right">
      <a href ="?hal=soal&aksi=tambah" class="btn btn-info"><i class="fas fa-plus mr-2"></i>Tambah Soal</a>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Soal</th>
            <th>Kategori</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php $no =1; ?>
          <?php foreach ($data as $result ): ?>
            <tr>
              <td><?= $no; ?></td>

              <td><?= $result['soal']; ?></td>
              <td><?= $result['nama_kategori']; ?></td>
              <td>
                <a href="?hal=soal&aksi=edit&id=<?= $result['id_soal'];?>" class="btn btn-primary btn-sm"  data-toggle="tooltip" data-placement="top" title="Edit Data"><i class="fas fa-edit"></i></a>  
                <a href="hapus_soal.php?id=<?= $result['id_soal']; ?>" class="btn btn-danger btn-sm hapus mt-2"  data-toggle="tooltip" data-placement="top" title="Hapus Data" onclick="return confirm('yakin di hapus?');"><i class="fas fa-trash"></i></a>
              </td>
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

