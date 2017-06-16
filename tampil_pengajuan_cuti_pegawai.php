<?php
	include("proses/koneksi.php");
	include("proses/akses_pegawai.php");
	$username = $_SESSION['pegawai'];
	$query = mysql_query("SELECT * FROM pengajuan_cuti WHERE nip_pegawai = (SELECT nip FROM pegawai WHERE username='$username')");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pelanggan</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src="js/konten.js"></script>
</head>
<body>
	<div class="container">
		<header>
			<h1>Sistem Informasi TV Kabel</h1>
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
			<h1 class="font" align="center">Data Pengajuan Cuti</h1>
			<table id="table">
				<thead>
					<tr>
						<th width="10%">ID</th>
						<th width="30%">Keterangan</th>
						<th width="10%">Lama (Hari)</th>
						<th width="10%">Dari</th>
						<th width="10%">Sampai</th>
						<th width="10%">NIP Pegawai</th>
						<th width="10%">Status (Disetujui/Tidak)</th>
						<th width="20%">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while($result = mysql_fetch_array($query))
					{ ?>
									
						<tr>
							<td><?=	$result['id']?></td>
							<td><?=	$result['keterangan']?></td>
							<td><?=	$result['lama']?></td>
							<td><?=	$result['dari']?></td>
							<td><?=	$result['sampai']?></td>
							<td><?=	$result['nip_pegawai']?></td>
							<td><?=	$result['status']?></td>
							<td>
								<a id="btn-submit" href="form_edit_pengajuan_cuti_pegawai.php?id=<?php echo $result['id']; ?>">Edit</a><br><br>
								<a id="btn-submit" href="proses/hapus_pengajuan_cuti_pegawai.php?id=<?php echo $result['id']; ?> " onclick="return klikHapus();">Hapus</a>
							</td>
						</tr>
						<?php 
					}
								
					?>
				</tbody>
			</table>
		</section>

		<footer>
			<p>Project TV Kabel | UNISI VISION 2017</p>
		</footer>
	</div>
</body>
</html>


		
