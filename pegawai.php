<?php
	include("proses/koneksi.php");
	include("proses/akses_pegawai.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Pegawai</title>
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
			<h1 class="font" align="center">Selamat Datang di Sistem Kepegawaian</h1>
				<table style="border: 0px;" align="center">
				<tr>
					<td id="td" style="border: 0px">
						<a href="profil_pegawai.php"><img src="images/user.png" class="radius"></a>
						<h1>Profil Pegawai</h1>
						<p align="center">Anda dapat melihat profil anda disini disini</p>
					</td>
					<td id="td" style="border: 0px">
						<a href="form_edit_profil_pegawai.php"><img src="images/edit.png" class="radius"></a>
						<h1>Edit Profil Pegawai</h1>
						<p align="center">Anda dapat mengedit profil anda disini</p>
					</td>
					<td id="td" style="border: 0px">
						<a href="form_tambah_absensi.php"><img src="images/departemen.png" class="radius"></a>
						<h1>Presensi Pegawai</h1>
						<p align="center">Anda dapat melakukan presensi kehadiran disini</p>
					</td>
				</tr>
				</table>
			</section>
		</section>

		<footer>
			<p>Project | Sistem Informasi Kepegawaian | Pemrograman Web 2017</p>
		</footer>
	</div>
</body>
</html>