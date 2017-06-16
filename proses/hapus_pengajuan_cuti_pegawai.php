<?php
	include ("koneksi.php");
	$id = $_GET['id'];
	
	$q = mysql_query("DELETE from pengajuan_cuti where id='$id'");
	if ($q){
		echo "<script>alert('Data Berhasil Dihapus!'); window.location = '../tampil_pengajuan_cuti_pegawai.php'</script>";
	}else {
		echo "<script>alert('Gagal !'); history.go(-1)<script>";
	}
?>