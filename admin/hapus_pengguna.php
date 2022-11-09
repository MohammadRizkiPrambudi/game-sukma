<?php  

require '../koneksi.php';

$id = $_GET["id"];

$filefoto = mysqli_query($koneksi, "SELECT * FROM tbl_login WHERE id_login=$id");
$pecah= mysqli_fetch_assoc($filefoto);
$ff = $pecah['foto'];


if (file_exists("../assets/dist/img/$ff")) {
	unlink("../assets/dist/img/$ff");
}


$query = "DELETE FROM tbl_login WHERE id_login=$id";

$hapus = mysqli_query($koneksi, $query);
if ($hapus) {
	echo "
	<script>
	alert('pengguna berhasil dihapus');
	document.location='index.php?hal=pengguna';
	</script>
	";
}else{
	echo "
	<script>
	alert('pengguna gagal dihapus');
	document.location='index.php?hal=pengguna';
	</script>
	";
}


?>