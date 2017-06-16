<?php
	include ("koneksi.php");
	$kode=$_POST['kode'];
	$img = $_FILES['img']['name'];
	$judul = $_POST['judul'];
	$tanggal= $_POST['tanggal'];
	$informasi= $_POST['informasi'];
	move_uploaded_file($_FILES['img']['tmp_name'], "../images/profilimg/".$_FILES['img']['name']);
	
	$q = mysql_query("INSERT INTO berita (kode,img,judul,tanggal,informasi,id_admin) VALUES ('$kode','$img', '$judul', '$tanggal', '$informasi',100)");
	if ($q){
		echo "<script>alert('Data Berhasil Ditambahkan')</script>";
		echo "<meta http-equiv='refresh' content='1 url=../tampil_berita.php'>";
	}else{
		echo "<script>alert('Gagal atau id telah digunakan')</script>";
		echo "<meta http-equiv='refresh' content='1 url=../tampil_berita.php'>";
	}
?>

