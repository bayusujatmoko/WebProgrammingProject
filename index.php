<?php
	include("proses/koneksi.php");
	$query=mysql_query("SELECT * FROM berita");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
				<li><a href="index.php">HOME</a></li>
				<li><a href="#" class="dropdown-slide1">SIGN IN</a>
					<ul class="dropdown1">
						<li class="load"><a href="login.html">Login</a></li>
						<li class="load"><a href="lupa.html">Reset Password</a></li>
					</ul>
				</li>
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
			<h1 class="font" align="center">Selamat Datang di Sistem Informasi Kepegawaian</h1>
			 	<div class="slideshow-container">
			  	<div class="mySlides fade">
			  	  <div class="numbertext">1 / 3</div>
			   	 <img class="radius2" src="images/slide1.png">
			  	  <div class="text">Gedung FTI UII</div>
			  	</div>

			  	<div class="mySlides fade">
			    	<div class="numbertext">2 / 3</div>
			    	<img class="radius2" src="images/slide2.jpg">
			    	<div class="text">Universitas Islam Indonesia</div>
			  	</div>

			  	<div class="mySlides fade">
			    	<div class="numbertext">3 / 3</div>
			    	<img class="radius2" src="images/slide3.png">
			    	<div class="text">Teknik Informatika Akreditasi A</div>
			  	</div>

			 	 <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			  	<a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
			<br>

			<div style="text-align:center" class="slide">
				<script type="text/javascript">
					$(document).ready(function(){
						$("div.slide").show(currentSlide(3));
						$("div.slide").show(currentSlide(2));
						$("div.slide").show(currentSlide(1));
					});
				</script>
				<span class="dot" onclick="currentSlide(1)"></span>
				<span class="dot" onclick="currentSlide(2)"></span>
				<span class="dot" onclick="currentSlide(3)"></span>
			</div>
				<h1 class="font" align="center">Berita Terbaru</h1>
				<table style="border: 0px; margin-left: 50px;">
					<tbody>
					<?php
						$i = 1;
						while($result=mysql_fetch_array($query))
						{ ?>

							<tr class="load" style="display: inline-block;">
								<td id="td1" style="border: 0px;"><img class="radius1" src="images/profilimg/<?php echo $result['img'];?>">
									<h1><?php echo $result['judul'];?></h1>
									<h3><?php echo $result['tanggal'];?></h3>
									<a id="btn-submit" href="berita.php?kode=<?php echo $result['kode']; ?>">Baca Berita</a>
								</td>
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