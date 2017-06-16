<?php
	include ("koneksi.php");
	$keterangan = $_POST['keterangan'];
	$lama = $_POST['lama'];
	$dari = $_POST['dari'];
	$sampai = $_POST['sampai'];
	$nama=$_POST['nama'];
	$nip=$_POST['nip_pegawai'];
	
	$q = mysql_query("INSERT INTO pengajuan_cuti (id,keterangan,lama,dari,sampai,status,id_admin,nama,nip_pegawai) VALUES ('', '$keterangan', '$lama','$dari','$sampai','',100,'$nama','$nip')");
	if ($q){
		echo "<script>alert('Data Berhasil Ditambahkan')</script>";
		echo "<meta http-equiv='refresh' content='1 url=../tampil_pengajuan_cuti_pegawai.php'>";
	}else{
		echo "<script>alert('Gagal atau id telah digunakan')</script>";
		echo "<meta http-equiv='refresh' content='1 url=../tampil_pengajuan_cuti_pegawai.php'>";
	}
	
?>

