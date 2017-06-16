<?php
	include ("koneksi.php");
	$id_departemen=$_POST['id_departemen'];
	$nama_departemen = $_POST['nama_departemen'];
	
	//mengecek jika kosong
	$q =mysql_query("UPDATE departemen SET nama_departemen ='$nama_departemen' WHERE id_departemen='$id_departemen'");
	if ($q){
		echo "<script>alert('Data Berhasil Diubah !'); window.location = '../tampil_departemen.php'</script>";
	} else {
		echo "<script>alert('Gagal !'); history.go(-1)</script>";
	}
?>