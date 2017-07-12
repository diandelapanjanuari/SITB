<?php 
/**
* 
*/
include_once 'Controller.php';

class BarangManager extends Controller
{
	
	public function getDaftarKategori()
	{
		include_once 'model/Kategori.php';
		$kat  = new Barang();
		$daftar_barang = $kat->getDaftarBarang();

		return $daftar_kategori;
	}

	public function setBarang()
	{
		include_once 'model/Barang.php';
		$mbarang = new Barang();
		$kode_barang = $_POST['kode'];
		$nama_barang = $_POST['nama'];
		$merek_barang = $_POST ['merek'];
		$satuan = $_POST ['satuan'];
		$harga = $_POST ['harga'];
		$stok = $_POST ['stok'];
		
		$pesan = $mbarang->(,$judul,$isi,$id_kategori);

		return $pesan;

	}
///PEMBUATAN FUNCTION MIULAI
	private function getDataUntukPerubahan(){
		#ISI
	}
	
	public function ubah_berita(){
		#ISI
	}
//SELESAI
}
}

 ?>