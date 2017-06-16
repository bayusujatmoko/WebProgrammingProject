<?php
	include ("koneksi.php");
	$id_jabatan=$_POST['id_jabatan'];
	$jabatan = $_POST['jabatan'];
	$min_gaji = $_POST['min_gaji'];
	$max_gaji = $_POST['max_gaji'];
	
	//mengecek jika kosong
	$q =mysql_query("UPDATE jabatan SET jabatan ='$jabatan',  min_gaji ='$min_gaji', max_gaji ='$max_gaji' WHERE id_jabatan='$id_jabatan'");
	if ($q){
		echo "<script>alert('Data Berhasil Diubah !'); window.location = '../tampil_jabatan.php'</script>";
	} else {
		echo "<script>alert('Gagal !'); history.go(-1)</script>";
	}
?>