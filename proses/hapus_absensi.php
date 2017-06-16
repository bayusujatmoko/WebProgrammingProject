<?php
	include ("koneksi.php");
	$nip = $_GET['nip'];
	
	$q = mysql_query("DELETE from absensi where nip='$nip'");
	if ($q){
		echo "<script>alert('Data Berhasil Dihapus!'); window.location = '../tampil_absensi_admin.php'</script>";
	}else {
		echo "<script>alert('Gagal !'); history.go(-1)<script>";
	}
?>