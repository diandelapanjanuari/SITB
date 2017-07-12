<?php 
/**
* 
*/
include_once 'Controller.php';

class Barangmanager extends Controller
{
	
	public function getDaftarBarang()
	{
		include_once 'model/Barang.php';
		$kat  = new Kategori();
		$daftar_kategori = $kat->getDaftarBarang();

		return $daftar_barang;
	}

	public function setbarang()
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
	public function getDataUntukPerubahan(){
		#ISI
	}
	
	public function ubah_berita(){
		#ISI
	}
//SELESAI
}
}

 ?>