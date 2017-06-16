<?php
	include("proses/koneksi.php");
	$query = mysql_query("SELECT * FROM departemen");
?>

<section class="content">
<h1 class="font" align="center">Data Departemen</h1>
	<table id="table">
		<thead>
			<tr>
				<th width="3%">No</th>
				<th width="10%">ID Dept</th>
				<th width="10%">Nama Dept</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$i = 1;
				while($departemen = mysql_fetch_array($query))
				{ ?>
					<tr>
						<td><?=$i; ?></td>
						<td><?=	$departemen['id_departemen']?></td>
						<td><?=	$departemen['nama_departemen']?></td>
					</tr>
					<?php $i++;
				}
			?>
		</tbody>
	</table>	
</section>
