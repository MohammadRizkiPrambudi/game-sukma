<?php  

require '../koneksi.php';

$id = $_GET["id"];


$query = "DELETE FROM tbl_soal WHERE id_soal=$id";

$hapus = mysqli_query($koneksi, $query);
if ($hapus) {
	echo "
	<script>
	alert('Soal berhasil dihapus');
	document.location='index.php?hal=soal';
	</script>
	";
}else{
	echo "
	<script>
	alert('Soal gagal dihapus');
	document.location='index.php?hal=soal';
	</script>
	";
}


?>