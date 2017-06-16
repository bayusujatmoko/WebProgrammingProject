<?php
	include("proses/koneksi.php");
	$query = mysql_query("SELECT nip, nama, telepon, email, jabatan, alamat, id_departemen, id_jabatan FROM pegawai");
?>

<section class="content">
<h1 class="font" align="center">Data Pegawai</h1>
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
				<th width="10%">ID Dept</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$i = 1;
				while($pegawai = mysql_fetch_array($query))
				{ ?>
					<tr>
						<td><?=$i; ?></td>
						<td><?=	$pegawai['nip']?></td>
						<td><?=	$pegawai['nama']?></td>
						<td><?=	$pegawai['telepon']?></td>
						<td><?=	$pegawai['email']?></td>
						<td><?=	$pegawai['jabatan']?></td>
						<td><?=	$pegawai['alamat']?></td>
						<td><?=	$pegawai['id_departemen']?></td>
					</tr>
					<?php $i++;
				}
			?>
		</tbody>
	</table>
</section>

		