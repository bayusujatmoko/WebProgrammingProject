<?php
	include ("koneksi.php");
	$id=$_POST['id'];
	$keterangan = $_POST['keterangan'];
	$lama = $_POST['lama'];
	$dari = $_POST['dari'];
	$sampai = $_POST['sampai'];
	$status = $_POST['status'];
	$nip=$_POST['nip_pegawai'];

	//mengecek jika kosong
	$q =mysql_query("UPDATE pengajuan_cuti SET status='$status' WHERE id='$id'");
	if ($q){
		echo "<script>alert('Data Berhasil Diubah !'); window.location = '../tampil_pengajuan_cuti_admin.php'</script>";
	} else {
		echo "<script>alert('Gagal !'); history.go(-1)</script>";
	}
?>