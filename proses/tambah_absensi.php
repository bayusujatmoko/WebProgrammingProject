<?php
	include ("koneksi.php");

	$nip=$_POST['nip'];
	$nama=$_POST['nama'];
	
	date_default_timezone_set("Asia/Jakarta");
	$tanggal = date("Y-m-d");
	$jam = date("G:i:s");

	$sql=mysql_query("SELECT * FROM absensi WHERE tanggal='$tanggal' 
	and nip='$nip'");

	if(isset($_POST['hadir'])){
		if(mysql_num_rows($sql)>0){
			echo "<script>alert('Anda telah melakukan presensi!!'); window.location = '../tampil_absensi_pegawai.php'</script>";
		}else{
			$max=date('08:00:00');
			if($jam < $max){
				$q = mysql_query("INSERT INTO absensi (id,nip,nama,jam,tanggal,status,keterangan) VALUES ('','$nip','$nama','$jam','$tanggal','Hadir','Tepat Waktu')");
			}else{
				$q = mysql_query("INSERT INTO absensi (id,nip,nama,jam,tanggal,status,keterangan) VALUES ('','$nip','$nama','$jam','$tanggal','Hadir','Terlambat')");
			}
		}
	}else if(isset($_POST['izin'])){
		if(mysql_num_rows($sql)>0){
			echo "<script>alert('Anda telah melakukan presensi!!'); window.location = '../tampil_absensi_pegawai.php'</script>";
		}else{
			$q = mysql_query("INSERT INTO absensi (id,nip,nama,jam,tanggal,status,keterangan) VALUES ('','$nip','$nama','$jam','$tanggal','Izin','-------')");	
		}
		
	}else{
		if(mysql_num_rows($sql)>0){
			echo "<script>alert('Anda telah melakukan presensi!!'); window.location = '../tampil_absensi_pegawai.php'</script>";
		}else{
			$q = mysql_query("INSERT INTO absensi (id,nip,nama,jam,tanggal,status,keterangan) VALUES ('','$nip','$nama','$jam','$tanggal','Sakit','-------')");
		}
	}
	
	
	if ($q){
			echo "<script>alert('Presensi Berhasil')</script>";
			echo "<meta http-equiv='refresh' content='1 url=../tampil_absensi_pegawai.php'>";
	}else{
			echo "<script>alert('Gagal')</script>";
			echo "<meta http-equiv='refresh' content='1 url=../tampil_absensi_pegawai.php'>";
	}
?>

