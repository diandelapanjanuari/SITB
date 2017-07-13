<table class="table table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Merek</th>
			<th>Satuan</th>
			<th>Harga</th>
			<th>Stok</th>
		</tr>
	</thead>
	<tbody>
 <?php foreach ($isi_barang as $ib) { ?>
		<tr>
			<td>1</td>
			<td><?= $ib['kode_barang'] ?></td>
			<td><?= $ib['nama_barang'] ?></td>
			<td><?= $ib['merek'] ?></td>
			<td><?= $ib['satuan'] ?></td>
			<td><?= $ib['harga'] ?></td>
			<td><?= $ib['stok'] ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
