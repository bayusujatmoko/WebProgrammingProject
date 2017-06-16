<?php
	include ("koneksi.php");
	$nip=$_POST['nip'];
	$img = $_FILES['img']['name'];
	$nama = $_POST['nama'];
	$telepon= $_POST['telepon'];
	$email= $_POST['email'];
	$alamat= $_POST['alamat'];
	$username= $_POST['username'];
	$password= $_POST['password'];
	move_uploaded_file($_FILES['img']['tmp_name'], "../images/profilimg/".$_FILES['img']['name']);
	
	//mengecek jika kosong
	$q =mysql_query("UPDATE pegawai SET img = '$img', nama ='$nama', telepon='$telepon', email='$email',alamat='$alamat', username='$username', password='$password' WHERE nip='$nip'");
	if ($q){
		echo "<script>alert('Data Berhasil Diubah !'); window.location = '../profil_pegawai.php'</script>";
	} else {
		echo "<script>alert('Gagal !'); history.go(-1)</script>";
	}
?>