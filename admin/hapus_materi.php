<?php  

require '../koneksi.php';

$id = $_GET["id"];

$filemateri = mysqli_query($koneksi, "SELECT * FROM tbl_edukasi WHERE id_materi=$id");
$pecah= mysqli_fetch_assoc($filemateri);
$fm = $pecah['materi'];


if (file_exists("../assets/dist/file/$fm")) {
	unlink("../assets/dist/file/$fm");
}


$query = "DELETE FROM tbl_edukasi WHERE id_materi=$id";

$hapus = mysqli_query($koneksi, $query);
if ($hapus) {
	echo "
	<script>
	alert('materi edukasi berhasil dihapus');
	document.location='index.php?hal=materi';
	</script>
	";
}else{
	echo "
	<script>
	alert('materi edukasi gagal dihapus');
	document.location='index.php?hal=materi';
	</script>
	";
}


?>