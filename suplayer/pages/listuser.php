<table class="table table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Id User</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>No Telp</th>
		</tr>
	</thead>
	<tbody>
 <?php foreach ($isi_berita as $ib) { ?>
		<tr>
			<td>1</td>
			<td><?= $ib['id_user'] ?></td>
			<td><?= $ib['nama_user'] ?></td>
			<td><?= $ib['alamat'] ?></td>
			<td><?= $ib['no_telp'] ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
