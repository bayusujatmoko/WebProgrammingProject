<?php
include ("koneksi.php");
session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = mysql_query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
	$sql1 = mysql_query("SELECT * FROM pegawai WHERE username='$username' AND password='$password'");
	
	if((mysql_num_rows($sql) == 0) and (mysql_num_rows($sql1) == 0)){
		echo "<script>alert('Username atau Password salah')</script>";
		echo "<meta http-equiv='refresh' content='1 url=../index.php'>";
	}else{
		$row = mysql_fetch_array($sql);
		$row1 = mysql_fetch_array($sql1);
	
		if($row['level'] == 1){
			$_SESSION['admin'] = $username;
			echo '<script language="javascript">alert("Anda berhasil Login sebagai Admin!"); document.location="../admin.php";</script>';
		}else if($row1['level'] == 2) {
			$_SESSION['pegawai'] = $username;
			echo '<script language="javascript">alert("Anda berhasil Login sebagai Pegawai!"); document.location="../pegawai.php";</script>';
		}
	}
?>