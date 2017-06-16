<?php
	include("proses/koneksi.php");
	$query = mysql_query("SELECT * FROM jabatan");
?>

<section class="content">
<h1 class="font" align="center">Data Jabatan</h1>
	<table id="table">
		<thead>
			<tr>
				<th width="3%">No</th>
				<th width="10%">ID Jabatan</th>
				<th width="10%">Jabatan</th>
				<th width="10%">Min Gaji</th>
				<th width="10%">Max Gaji</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$i = 1;
				while($jabatan = mysql_fetch_array($query))
				{ ?>
					<tr>
						<td><?= $i; ?></td>
						<td><?=	$jabatan['id_jabatan']?></td>
						<td><?=	$jabatan['jabatan']?></td>
						<td><?=	$jabatan['min_gaji']?></td>
						<td><?=	$jabatan['max_gaji']?></td>
					</tr>
					<?php $i++;
				}
			?>
		</tbody>
	</table>
</section>
