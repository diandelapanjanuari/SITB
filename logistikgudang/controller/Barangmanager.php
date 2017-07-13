<?php 
/**
* 
*/
include_once 'Controller.php';

class BarangManager extends Controller 
{
	
	public function getDaftarBarang()
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
		
		$pesan = $mbarang->(,$kode_barang,$nama_barang,$merek_barang,$satuan,$$harga,$stok);

		return $pesan;

	}
	private function getDataEditBarang(){
		
	}
	
	public function MenambahDataBarang(){
		
	}

}
}

 ?>