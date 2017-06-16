<?php
	include ("koneksi.php");
	$kode=$_POST['kode'];
	$img = $_FILES['img']['name'];
	$judul = $_POST['judul'];
	$tanggal= $_POST['tanggal'];
	$informasi= $_POST['informasi'];
	move_uploaded_file($_FILES['img']['tmp_name'], "../images/profilimg/".$_FILES['img']['name']);

	$q =mysql_query("UPDATE berita SET img = '$img', judul ='$judul', tanggal='$tanggal', informasi='$informasi' WHERE kode='$kode'");
	if ($q){
		echo "<script>alert('Data Berhasil Diubah !'); window.location = '../tampil_berita.php'</script>";
	} else {
		echo "<script>alert('Gagal !'); history.go(-1)</script>";
	}
?>