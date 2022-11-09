<?php  

require '../koneksi.php';

$id = $_GET["id"];


$query = "DELETE FROM tbl_kategori WHERE id=$id";

$hapus = mysqli_query($koneksi, $query);
if ($hapus) {
	echo "
	<script>
	alert('Kategori berhasil dihapus');
	document.location='index.php?hal=kategori';
	</script>
	";
}else{
	echo "
	<script>
	alert('Kategori gagal dihapus');
	document.location='index.php?hal=kategori';
	</script>
	";
}


?>