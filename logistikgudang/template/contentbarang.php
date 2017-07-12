
  <div id="page-wrapper">
				<div id="page-header" >
				<h2>Selamat datang di halaman Logistik Gudang</h2>
				</div>
				<br><br>
				Pendataan Barang <br>
				<div>

					<table >
						<tr>
							<td>Kode Barang</td>
							<td><input id="kodebarang" type="text" name="barang"></td>
							<td><input type="button" name="ok" value="OK"></td>
						</tr>
						<tr>
							<td>Nama Barang</td>
							<td><input id="namabarang" type="text" name="barang"></td>
						</tr>
						<tr>
							<td>Satuan</td>
						<td><select id="satuan"  name=”satuan”>
							<option value="kg">Kg</option>
							<option value="M">Meter</option>
							<option value="Cm">Cm</option>
							<option value="dam">Dam</option>
							</select></td>
						</tr>
						<tr>
							<td>Jumlah</td>
							<td><input id="jumlahbarang" type="text" name="barang"></td>
						</tr>
						<tr>
							<td>Harga</td>
							<td><input id="hargabarang" type="text" name="barang"></td>
						</tr>
					</table>
					<input id="tambah" type="button" name="tambah" value="Tambah">
					<input type="button" name="hapus" value="Hapus" onclick="hapus();">
					<input type="button" name="tambah" value="Simpan">
					<input type="button" name="tambah" value="Cetak">
				</div>
				<table class="tabel" border="2"  style="text-align: center;width=100px">
					<tr>
						<td>NO</td>
						<td>Kode Barang</td>
						<td>Nama Barang</td>
						<td>Jumlah barang</td>
						<td>Satuan</td>
						<td>Harga satuan</td>
						<td>Pilih</td>
					</tr>
					<tr>
						<td>1</td>
						<td>A021</td>
						<td>Kayu</td>
						<td>1000</td>
						<td>M</td>
						<td>50000/ balok</td>
						<td>
							<input type="button" name="lihat" value="Lihat">								<input type="button" name="edit" value="Edit">
							<input type="button" name="hapus" value="Hapus" onclick="hapus();">
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td>K321</td>
						<td>semen</td>
						<td>1000</td>
						<td>Sak</td>
						<td>750000</td>
						<td>
							<input type="button" name="lihat" value="Lihat">
							<input type="button" name="edit" value="Edit">
							<input type="button" name="hapus" value="Hapus" onclick="hapus();">
						</td>
					</tr>
					<tr>
						<td>3</td>
						<td id="k_barang"></td>
						<td id="n_barang"></td>
						<td id="s_barang"></td>
						<td id="j_barang"></td>
						<td id="h_barang"></td>
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
<script type="text/javascript">
	
function hapus(){
var pilihan = confirm("Apakah anda setuju?");
if (pilihan == true) {
	alert('Anda berhasil menghapus data');
} else {

};
}


document.getElementById("tambah").
addEventListener("click", tampilkan);

function tampilkan(){
	var kodebarang=document.getElementById("kodebarang").value;
	document.getElementById("k_barang").innerHTML=kodebarang;

	var jumlahbarang=document.getElementById("jumlahbarang").value;
	document.getElementById("j_barang").innerHTML=jumlahbarang;

	var hargabarang=document.getElementById("hargabarang").value;
	document.getElementById("h_barang").innerHTML=hargabarang;

	var namabarang=document.getElementById("namabarang").value;
	document.getElementById("n_barang").innerHTML=namabarang;

	var satuan=document.getElementById("satuan").value;
	document.getElementById("s_barang").innerHTML=satuan;


}
</script>
</body>
 ?>