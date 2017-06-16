<?php
	include ("koneksi.php");
	$id_jabatan=$_POST['id_jabatan'];
	$jabatan = $_POST['jabatan'];
	$min_gaji = $_POST['min_gaji'];
	$max_gaji = $_POST['max_gaji'];
		
	$q = mysql_query("INSERT INTO jabatan (id_jabatan,jabatan,min_gaji,max_gaji) VALUES ('$id_jabatan', '$jabatan','$min_gaji','$max_gaji')");
	if ($q){
		echo "<script>alert('Data Berhasil Ditambahkan')</script>";
		echo "<meta http-equiv='refresh' content='1 url=../tampil_jabatan.php'>";
	}else{
		echo "<script>alert('Gagal atau Username telah digunakan')</script>";
		echo "<meta http-equiv='refresh' content='1 url=../tampil_jabatan.php'>";
	}
	
?>

