<?php
	include("proses/koneksi.php");
	include("proses/akses_admin.php");
    $nama = $_POST['cari']; 
    $nip = $_POST['cari']; 
    $query = "SELECT * from pegawai where nama like '%$nama%' or nip like '%$nip%'"; 
    $result = mysql_query($query); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Pegawai</title>
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
			<section class="content">
			<!-- Main body-->
			<h1 class="font" align="center">Hasil Pencarian Data Pegawai</h1>
				<table id="table">
					<thead>
						<tr>
							<th width="3%">No</th>
							<th width="10%">NIP</th>
							<th width="10%">Nama</th>
							<th width="10%">Telepon</th>
							<th width="10%">Email</th>
							<th width="10%">Jabatan</th>
							<th width="30%">Alamat</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$i = 1;
							while($data = mysql_fetch_array($result))
							{ ?>
								<tr>
									<td><?=$i; ?></td>
									<td><?=	$data['nip']?></td>
									<td><?=	$data['nama']?></td>
									<td><?=	$data['telepon']?></td>
									<td><?=	$data['email']?></td>
									<td><?=	$data['jabatan']?></td>
									<td><?=	$data['alamat']?></td>
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