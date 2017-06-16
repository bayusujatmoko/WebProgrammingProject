<?php
	include ("koneksi.php");
	$id_jabatan= $_GET['id_jabatan'];
	
	$q = mysql_query("DELETE from jabatan where id_jabatan='$id_jabatan'");
	if ($q){
		echo "<script>alert('Data Berhasil Dihapus!'); window.location = '../tampil_jabatan.php'</script>";
	}else {
		echo "<script>alert('Gagal !'); history.go(-1)<script>";
	}
?>