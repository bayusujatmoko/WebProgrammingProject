<?php
	include("proses/koneksi.php");
	include("proses/akses_pegawai.php");
	$username = $_SESSION['pegawai'];
	$query = mysql_query("SELECT * FROM absensi WHERE nip = (SELECT nip from pegawai pegawai WHERE username='$username')");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Presensi</title>
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
			<h1 class="font" align="center">Data Presensi</h1>
				<table id="table">
					<thead>
						<tr>
							<th width="3%">No</th>
							<th width="10%">ID</th>
							<th width="10%">NIP</th>
							<th width="10%">NAMA</th>
							<th width="10%">JAM</th>
							<th width="10%">TANGGAL</th>
							<th width="10%">PRESENSI</th>
							<th width="10%">KETERANGAN</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$i = 1;
							while($result = mysql_fetch_array($query))
							{ ?>
								<tr>
									<td><?=$i; ?></td>
									<td><?=	$result['id']?></td>
									<td><?=	$result['nip']?></td>
									<td><?=	$result['nama']?></td>
									<td><?=	$result['jam']?></td>
									<td><?=	$result['tanggal']?></td>
									<td><?=	$result['status']?></td>
									<td><?=	$result['keterangan']?></td>
								</tr>
								<?php $i++;
							}
						?>
					</tbody>
				</table>
			</section>
		</section>

		<footer>
			<p>Project | Sistem Informasi Kepegawaian | Pemrograman Web 2017</p>
		</footer>
	</div>
</body>
</html>