			<div id="page-wrapper">
				<div id="page-header" >
				Selamat datang di halaman admin
				</div>
				<img height="25 px" src="gambar/datapengguna.gif">
				<a href="admin.html">Data Ucer</a>
				<br><br>
				<h2>Olah Data User</h2>
				<div>

					<table class="tabel" border="1" width="500px" style="text-align: center">
						<tr>
							<td>No</td>
							<td>Jabatan</td>
							<td>Pilih</td>
						</tr>
						<tr>
							<td>1</td>
							<td>Kasir</td>
							<td>
								<input type="button" name="lihat" value="Lihat" onclick="kasir();">
								<a href="isidata.html"><input type="button" name="edit" value="Edit"></a>
								<input type="button" name="hapus" value="Hapus" onclick="hapus();">
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Logistik Gudang</td>
							<td>
								<input type="button" name="lihat" value="Lihat" onclick="logistik();">
								<a href="isidata.html"><input type="button" name="edit" value="Edit"></a>
								<input type="button" name="hapus" value="Hapus" onclick="hapus();">
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Suplier</td>
							<td>
								<input type="button" name="lihat" value="Lihat" onclick="suplier();">
								<a href="isidata.html"><input type="button" name="edit" value="Edit"></a>
								<input type="button" name="hapus" value="Hapus" onclick="hapus();">
							</td>
						</tr>
						<tr>
							<td>4</td>
							<td>Manajer</td>
							<td>
								<input type="button" name="lihat" value="Lihat" onclick="menejer();">
								<a href="isidata.html"><input type="button" name="edit" value="Edit"></a>
								<input type="button" name="hapus" value="Hapus" onclick="hapus();">
							</td>
						</tr>
					</table>
				</div>
				<br>
				<a href="tambahuser.html"><input type="button" name="tambah" value="Tambah"></a>
			</div>
		</div>
</div>


