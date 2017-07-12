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


<script type="text/javascript">
	
	function kasir(){
		alert('ID_User: H1101151012		Nama: Dian lestari	Alamat: sungai kakap	No_Telp	: 085387621221')
	}

	function suplier(){
		alert('ID_User: H1101151011		Nama: Tya indriani	Alamat:	Tanray	No_Telp: 081287643521')
	}

	function menejer(){
		alert('ID_User: H1101151043		Nama: Lupita Aisyah	Alamat:	Tanray	No_Telp: 082153498749')
	}

	function logistik(){
		alert('ID_User: H1101151005		Nama: Marsyanda	Alamat: pontianak kota	No_Telp: 085387621221')
	}


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