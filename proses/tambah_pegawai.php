<?php
	include ("koneksi.php");
	$nip=$_POST['nip'];
	$img = $_FILES['img']['name'];
	$nama = $_POST['nama'];
	$telepon= $_POST['telepon'];
	$email= $_POST['email'];
	$jabatan= $_POST['jabatan'];
	$alamat= $_POST['alamat'];
	$gaji = $_POST['gaji'];
	$username= $_POST['username'];
	$password= $_POST['password'];
	$id_jabatan= $_POST['id_jabatan'];
	$id_departemen= $_POST['id_departemen'];
	move_uploaded_file($_FILES['img']['tmp_name'], "../images/profilimg/".$_FILES['img']['name']);

	$q = mysql_query("INSERT INTO pegawai (nip,img,nama,telepon,email,jabatan,alamat,gaji,username,password,id_jabatan,id_departemen,id,level) VALUES ('$nip','$img', '$nama', '$telepon','$email','$jabatan','$alamat','$gaji','$username','$password','$id_jabatan','$id_departemen',100,2)");
	if ($q){
			echo "<script>alert('Data Berhasil Ditambahkan')</script>";
			echo "<meta http-equiv='refresh' content='1 url=../tampil_pegawai.php'>";
	}else{
			echo "<script>alert('Gagal atau Username telah digunakan')</script>";
			echo "<meta http-equiv='refresh' content='1 url=../tampil_pegawai.php'>";
	}
?>

