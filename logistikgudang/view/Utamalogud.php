<?php 
require_once 'viewlogud.php';
/**
* 
*/
class Utamalogud extends viewlogud
{
	
	public function tampilBarang()
	{
		include_once 'model/Barang.php';
		$brt = new Barang();
		$isi_barang = $brt->ambilBarang();
		include_once 'pages/listbarang.php';
		$this->end();
	}
	public function tampilFormBarang()
	{
		include_once 'controller/BarangManager.php';
		$bm = new BarangManager();
		$daftar_barang = $bm->getDaftarBarang();
		include_once 'pages/formbarang.php';
		$this->end();
	}
	public function inputBarang()
	{
		include_once 'controller/BarangManager.php';
		$bm = new BarangManager();
		$pesan = $bm->setBarang();
		include_once 'pages/pesansukses.php';
		$this->end();
	}
}