<?php
	include ("koneksi.php");
	$kode = $_GET['kode'];
	
	$q = mysql_query("DELETE from berita where kode='$kode'");
	if ($q){
		echo "<script>alert('Data Berhasil Dihapus!'); window.location = '../tampil_berita.php'</script>";
	}else {
		echo "<script>alert('Gagal !'); history.go(-1)<script>";
	}
?>