<?php
	include("proses/koneksi.php");
	include("proses/akses_pegawai.php");
	$username=$_SESSION['pegawai'];
	$query=mysql_query("SELECT * FROM pegawai WHERE username='$username'");
	$query1=mysql_query("SELECT * FROM pegawai WHERE username='$username'");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profil Pegawai</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/slide.css">
	<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src="js/slide.js"></script>
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
			<aside id="kiri">
				<?php
					while($result=mysql_fetch_array($query))
					{ ?>
						<tr>
							<center><img class="radius"  src="images/profilimg/<?php echo $result['img'];?>"></center>
							<center>Foto Profil</center>
						</tr>
					<?php
					}
				?>
			</aside>
			<section class="content">
			<!-- Main body-->
			<h1 class="font" align="left">Profil Pegawai</h1>
				<table class="font1" style="border:0px; text-align: left;" align="left">
					<tbody>
						<?php
							while($result1=mysql_fetch_array($query1))
							{ ?>
								<tr>
									<td style="border: 0px">NIP</td>
									<td style="border: 0px">:</td>
									<td style="border: 0px"><?=$result1['nip']?></td>
								</tr>
								<tr>
									<td style="border: 0px">Nama</td>
									<td style="border: 0px">:</td>
									<td style="border: 0px"><?=$result1['nama']?></td>
								</tr>				
								<tr>
									<td style="border: 0px">Telepon</td>
									<td style="border: 0px">:</td>
									<td style="border: 0px"><?=$result1['telepon']?></td>
								</tr>
								<tr>
									<td style="border: 0px">Email</td>
									<td style="border: 0px">:</td>
									<td style="border: 0px"><?=$result1['email']?></td>
								</tr>
								<tr>
									<td style="border: 0px">Jabatan</td>
									<td style="border: 0px">:</td>
									<td style="border: 0px"><?=$result1['jabatan']?></td>
								</tr>
								<tr>
									<td style="border: 0px">Alamat</td>
									<td style="border: 0px">:</td>
									<td style="border: 0px"><?=$result1['alamat']?></td>
								</tr>
								<tr>
									<td style="border: 0px">Gaji</td>
									<td style="border: 0px">:</td>
									<td style="border: 0px"><?=$result1['gaji']?></td>
								</tr>
								<tr>
									<td style="border: 0px">ID Jabatan</td>
									<td style="border: 0px">:</td>
									<td style="border: 0px"><?=$result1['id_jabatan']?></td>
								</tr>
								<tr>
									<td style="border: 0px">ID Departemen</td>
									<td style="border: 0px">:</td>
									<td style="border: 0px"><?=$result1['id_departemen']?></td>
								</tr>
								<tr>
									<td style="border: 0px;"><input type="button" value="Edit Profil" id="btn-submit" onclick="window.location = 'form_edit_profil_pegawai.php?nip=<?php echo $result['nip'];?>';"/></td>
								</tr>
								
								<?php
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