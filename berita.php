<?php
	include("proses/koneksi.php");
	$kode = $_GET['kode'];
	$query=mysql_query("SELECT * FROM berita WHERE kode = '$kode'");
?>

<?php
	while($result=mysql_fetch_array($query))
	{ ?>
		<h1 class="font" align="center"><?php echo $result['judul'];?></h1>
		<h3 align="center"><?php echo $result['tanggal'];?></h3>
					
		<div class="section" align="center">
			<img src="images/profilimg/<?php echo $result['img'];?>" class="img-services" style="height: 400px; width: 800px; margin-bottom: 30px;">
				<p id="berita" align="justify"><?php echo $result['informasi'];?></p>
		</div>

		<?php
	}
?>
			

		