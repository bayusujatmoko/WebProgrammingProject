<?php
	include ("koneksi.php");
	session_start();
	$email = $_POST['email']));
	
	$sql = mysql_query("SELECT * FROM pegawai WHERE email='$email'");

	if((mysql_num_rows($sql) == 0)){
		echo "<script>alert('Email salah atau Email tidak ditemukan')</script>";
		echo "<meta http-equiv='refresh' content='1 url=../index.php'>";
	}else{
		$q =mysql_query("UPDATE pelanggan SET password='12345678' WHERE email='$email'");
		$q1 =mysql_query("UPDATE admin SET password='12345678' WHERE email='$email'");
		if ($q or $q1){
			echo "<script>alert('Password Berhasil di Reset'); window.location = '../lupa.html'</script>";
		} else {
			echo "<script>alert('Gagal !'); history.go(-1)</script>";
		}
	}
?>