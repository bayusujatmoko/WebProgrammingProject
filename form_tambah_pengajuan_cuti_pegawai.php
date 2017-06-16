<?php
	include("proses/koneksi.php");
	include("proses/akses_pegawai.php");
	$username=$_SESSION['pegawai'];
	$query=mysql_query("SELECT * FROM pegawai WHERE username='$username'");
	$result=mysql_fetch_array($query)
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pengajuan Cuti Pegawai</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src="js/konten.js"></script>
</head>
<body>
	<div class="container">
		<header>
			<h1>Sistem Informasi Kepegawaian</h1>
		</header>

		<nav id="navbar">
			<ul>
				<li><a href="pegawai.php">HOME</a></li>
				<li><a href="profil_pegawai.php">PROFIL</a></li>
				<li>
					<a href="#" class="dropdown-slide1">PRESENSI</a>
					<ul class="dropdown1">
						<li><a href="form_tambah_absensi.php">Presensi</a></li>
						<li><a href="tampil_absensi_pegawai.php">Tampil Presensi</a></li>
					</ul>
				</li>
				<li>
					<a href="#" class="dropdown-slide2">CUTI</a>
					<ul class="dropdown2">
						<li><a href="form_tambah_pengajuan_cuti_pegawai.php">Pengajuan Cuti</a></li>
						<li><a href="tampil_pengajuan_cuti_pegawai.php">Tampil Pengajuan Cuti</a></li>
					</ul>
				</li>
				<span style="color: white; margin-left:450px;">Anda Login sebagai <?php echo $_SESSION['pegawai']; ?></span>
				<li style="margin-left: 20px">
					<form>
						<input type="button" value="Logout" id="btn-submit" onclick="window.location = 'proses/logout_pegawai.php';"/>
					</form>
				</li>
			</ul>
		</nav>
		<section class="middle">
			<section class="content">
			<!-- Main body-->
			<div class="kotak" align="left">
			<h1 style="margin-left:428px;">Form Tambah Pengajuan Cuti</h1>
				<div class="container-form">
					<form method="post" action="proses/tambah_pengajuan_cuti.php">
						<label style="color: black">Keterangan : </label><br>
						<textarea id="input" type="text" name="keterangan" placeholder="Masukkan Keterangan" required></textarea><br><br>
						<label style="color: black">Lama (hari) : </label><br>
						<input id="input" type="number" name="lama" required><br><br>
						<label style="color: black">Dari : </label><br>
						<input id="input" type="date" name="dari" required><br><br>
						<label style="color: black">Sampai : </label><br>
						<input id="input" type="date" name="sampai" required><br><br>
						<label style="color: black">Nama: </label><br>
						<input id="input" type="text" name="nama" placeholder="Masukkan Nama Pegawai" value="<?= $result['nama'];?>" readonly><br><br>
						<label style="color: black">ID Pegawai: </label><br>
						<input id="input" type="text" name="nip_pegawai" placeholder="Masukkan NIP Pegawai" value="<?= $result['nip'];?>" readonly><br><br>
						<input class="tombol" type="submit" name="submit" value="Submit" onclick="return klikTambah();" >
					</form>
					</div>
				</div>
			</section>
		</section>

		<footer>
			<p>Project | Sistem Informasi Kepegawaian | Pemrograman Web 2017</p>
		</footer>
	</div>
</body>
</html>

