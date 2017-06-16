<?php
	include ("koneksi.php");
	$id_departemen=$_POST['id_departemen'];
	$nama_departemen = $_POST['nama_departemen'];
		
	$q = mysql_query("INSERT INTO departemen (id_departemen,nama_departemen) VALUES ('$id_departemen', '$nama_departemen')");
	if ($q){
		echo "<script>alert('Data Berhasil Ditambahkan')</script>";
		echo "<meta http-equiv='refresh' content='1 url=../tampil_departemen.php'>";
	}else{
		echo "<script>alert('Gagal atau Username telah digunakan')</script>";
		echo "<meta http-equiv='refresh' content='1 url=../tampil_departemen.php'>";
	}
?>

