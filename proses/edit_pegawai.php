<?php
	include ("koneksi.php");
	$nip = $_POST['nip'];
	$nama = $_POST['nama'];
	$telepon= $_POST['telepon'];
	$email= $_POST['email'];
	$jabatan= $_POST['jabatan'];
	$alamat= $_POST['alamat'];
	$gaji= $_POST['gaji'];
	
	//mengecek jika kosong
	$q =mysql_query("UPDATE pegawai SET nama ='$nama', telepon='$telepon', email='$email', jabatan='$jabatan', alamat='$alamat',gaji='$gaji' WHERE nip='$nip'");
	if ($q){
		echo "<script>alert('Data Berhasil Diubah !'); window.location = '../tampil_pegawai.php'</script>";
	} else {
		echo "<script>alert('Gagal !'); history.go(-1)</script>";
	}
?>