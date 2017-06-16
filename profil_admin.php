<?php
	include("proses/koneksi.php");
	include("proses/akses_admin.php");
	$username=$_SESSION['admin'];
	$query=mysql_query("SELECT * FROM admin WHERE username='$username'");
	$query1=mysql_query("SELECT * FROM admin WHERE username='$username'");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profil Admin</title>
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
				<li><a href="admin.php">HOME</a></li>
				<li><a href="profil_admin.php">PROFIL</a></li>
				<li>
					<a href="#" class="dropdown-slide1">TAMBAH</a>
					<ul class="dropdown1">
						<li><a href="form_tambah_pegawai.php">Tambah Pegawai</a></li>
						<li><a href="form_tambah_jabatan.php">Tambah Jabatan</a></li>
						<li><a href="form_tambah_departemen.php">Tambah Dept</a></li>
						<li><a href="form_tambah_berita.php">Tambah Berita</a></li>						
					</ul>
				</li>
				<li>
					<a href="#" class="dropdown-slide2">EDIT</a>
					<ul class="dropdown2">
						<li><a href="tampil_pegawai.php">Edit Pegawai</a></li>
						<li><a href="tampil_jabatan.php">Edit Jabatan</a></li>
						<li><a href="tampil_departemen.php">Edit Dept</a></li>
						<li><a href="tampil_berita.php">Edit Berita</a></li>		
					</ul>
				</li>
				<li>
					<a href="#" class="dropdown-slide3">LIHAT</a>
					<ul class="dropdown3">
						<li><a href="form_sort_absensi.php">Laporan Absensi</a></li>
						<li><a href="tampil_pengajuan_cuti_admin.php">Status Cuti</a></li>			
					</ul>
				</li>
				<li>
					<form method="post" action="tampil_pegawai_cari_admin.php">
						<label>Cari Pegawai</label>
						<input type="text" name="cari" placeholder="Masukkan Nama/NIP" required>
						<button id="btn-submit">Cari</button>
					</form>
				</li>
				<span style="color: white; margin-left:10px;">Anda Login sebagai <?php echo $_SESSION['admin']; ?></span>
				<li>
					<form>
						<input type="button" value="Logout" id="btn-submit" onclick="window.location = 'proses/logout_admin.php';"/>
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
			<h1 class="font" align="left">Profil Admin</h1>
				<table class="font1" style="border:0px; text-align: left;" align="left">
					<tbody>
						<?php
							while($result1=mysql_fetch_array($query1))
							{ ?>
								<tr>
									<td style="border: 0px">ID Admin</td>
									<td style="border: 0px">:</td>
									<td style="border: 0px"><?=$result1['id']?></td>
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
									<td style="border: 0px">Alamat</td>
									<td style="border: 0px">:</td>
									<td style="border: 0px"><?=$result1['alamat']?></td>
								</tr>
								<tr>
									<td style="border: 0px;"><input type="button" value="Edit Profil" id="btn-submit" onclick="window.location = 'form_edit_profil_admin.php?id=<?php echo $result['id'];?>';"/></td>
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