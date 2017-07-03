<?php
	include ("koneksi.php");
	$nip = $_GET['nip'];
	$tanggal = $_POST['tanggal'];
	
	$q = mysql_query("DELETE from absensi WHERE nip = '$nip' AND tanggal='$tanggal'");
	if ($q){
		echo "<script>alert('Data Berhasil Dihapus!'); window.location = '../tampil_absensi_admin.php'</script>";
	}else {
		echo "<script>alert('Gagal !'); history.go(-1)<script>";
	}
?>