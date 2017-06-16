<?php
	include ("koneksi.php");
	$id_departemen = $_GET['id_departemen'];
	
	$q = mysql_query("DELETE from departemen where id_departemen='$id_departemen'");
	if ($q){
		echo "<script>alert('Data Berhasil Dihapus!'); window.location = '../tampil_departemen.php'</script>";
	}else {
		echo "<script>alert('Gagal !'); history.go(-1)<script>";
	}
?>