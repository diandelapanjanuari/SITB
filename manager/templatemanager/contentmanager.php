<div id="page-wrapper">
				<div id="page-header" >
				Selamat datang di halaman Manager <br>
				<img height="25 px" src="gambar/datapengguna.gif">
				<a href="laporan.html">Laporan</a>
				</div>
				
				<table>
					<tr>
						<td>Bulan</td>
						<td>
							<select name=”Bulan”>
								<option value="januari">Januari</option>
								<option value="febuari">Februari</option>
								<option value="maret">Maret</option>
								<option value="april">April</option>
								<option value="mei">Mei</option>
								<option value="juni">Juni</option>
								<option value="juli">Juli</option>
								<option value="agustus">Agustus</option>
								<option value="semtember">september</option>
								<option value="oktober">Oktober</option>
								<option value="november">November</option>
								<option value="desember">Desember</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Tahun</td>
						<td><input type="number" name="tahun" style="width: 100px"></td>
					</tr>
					<tr>
					<td>Pilihan</td>
					<td><form action="proses.php">
						<input type="radio" name="pembelian" value="Pembelian">Pembelian
						<input type="radio" name="penjualan" value="Penjualan">Penjualan
						</form>
					</td>
					</tr>
					<tr>
						<td><a href="../manager/laporan.php"><input type="button" name="ok" value="OK"></a></td>
					</tr>
				</table>
					<br>