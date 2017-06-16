<?php
	include ("koneksi.php");
	$id=$_POST['id'];
	$img = $_FILES['img']['name'];
	$nama = $_POST['nama'];
	$telepon= $_POST['telepon'];
	$email= $_POST['email'];
	$alamat= $_POST['alamat'];
	$username= $_POST['username'];
	$password= $_POST['password'];
	move_uploaded_file($_FILES['img']['tmp_name'], "../images/profilimg/".$_FILES['img']['name']);
	
	//mengecek jika kosong
	$q =mysql_query("UPDATE admin SET img = '$img', nama ='$nama', telepon='$telepon', email='$email',alamat='$alamat', username='$username', password='$password' WHERE id='$id'");
	if ($q){
		echo "<script>alert('Data Berhasil Diubah !'); window.location = '../profil_admin.php'</script>";
	} else {
		echo "<script>alert('Gagal !'); history.go(-1)</script>";
	}
?>