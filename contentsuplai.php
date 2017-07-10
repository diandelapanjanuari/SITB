<div id="page-wrapper">
				<div id="page-header" >
				Selamat datang di halaman Logistik Gudang
				</div>

				<br><br>
				
				
				<div>
				
				<div class="barang">
				<table style="width:900px;color:black">
					<tr>
						<td>ID_Supplier</td>
						<td><input type="text" name="suplier"></td>
						<td>Nama Barang</td>
						<td><input type="text" name="barang"></td>
						
					</tr>
					
					<tr>
						<td>Alamat</td>
						<td><input type="text" name="alamat" style="width:80px"></td>
						<td>Jumlah</td>
						<td><input type="number" name="jumlah" style="width:50px"></td>
					</tr>

					<tr>
						<td>Telepon</td>
						<td><input type="text" name="telepon"></td>
						<td>Harga/ Brg</td>
						<td>Rp</td>
						
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>Total</td>
						<td>Rp</td>
					</tr>
					<tr>
						<td><input type="button" name="ok" value="OK"></td>
						<td><input type="button" name="tambah" value="Tambah"></td>
						<td><input type="button" name="simpan" value="Simpan & kirim"></td>
						<td><input type="button" name="batal" value="Batal"></td>
					</tr>
				</table><br>
				</div>

					<table class="tabel" border="2" width="900px" style="text-align: center;color:black">
						<tr>
							<td>NO</td>
							<td>Kode barang</td>
							<td>Nama barang</td>
							<td>Jumlah</td>
							<td>Satuan</td>
							<td>Harga satuan</td>
							<td>Total harga</td>
							<td>Pilihan</td>
						</tr>
						<tr>
							<td>1</td>
							<td>A13</td>
							<td>Kuas</td>
							<td>2</td>
							<td>Buah</td>
							<td>5000</td>
							<td>10000</td>
							<td>
								<input type="button" name="lihat" value="Lihat">
								<input type="button" name="edit" value="Edit">
								<input type="button" name="hapus" value="Hapus" onclick="hapus();">
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>A76</td>
							<td>Palu</td>
							<td>1</td>
							<td>buah</td>
							<td>10000</td>
							<td>10000</td>
							<td>
								<input type="button" name="lihat" value="Lihat">
								<input type="button" name="edit" value="Edit">
								<input type="button" name="hapus" value="Hapus" onclick="hapus();">
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
</div>
</div>
<script type="text/javascript">
	function hapus(){
var pilihan = confirm("Apakah anda setuju?");
if (pilihan == true) {
	alert('Anda berhasil menghapus data');
} else {

};
}
</script>
</body>
</html>