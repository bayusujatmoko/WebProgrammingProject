<?php
	include("proses/koneksi.php");
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
				<li><a href="index.php">HOME</a></li>
				
				<li><a href="#" class="dropdown-slide1">SIGN IN</a>
					<ul class="dropdown1">
						<li class="load"><a href="login.html">Login</a></li>
						<li class="load"><a href="lupa.html">Reset Password</a></li>
					</ul>
				</li>
				<li class="load"><a href="tampil_pegawai_home.php">PEGAWAI</a></li>
				<li class="load"><a href="tampil_jabatan_home.php">JABATAN</a></li>
				<li class="load"><a href="tampil_departemen_home.php">DEPARTEMEN</a></li>
				<li class="load"><a href="about.html">ABOUT US</a></li>
				<li style="margin-left: 200px">
					<form method="post" action="tampil_pegawai_cari.php">
						<label>Cari Pegawai</label>
						<input type="text" name="cari" placeholder="Masukkan Nama/NIP" required>
						<button id="btn-submit">Cari</button>
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