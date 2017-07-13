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
		
		$pesan = $mbarang->(,$kode_barang,$nama_barang,$merek_barang,$satuan,$$harga,$stok);

		return $pesan;

	}
	private function getDataEditBarang(){
		
	}
	
	public function MenambahDataBarang(){
		
	}
}

 ?>