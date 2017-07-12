<?php 

require_once 'View.php';
/**
* 
*/
class UtamaUI extends View
{
	
	public function tampilkanBarang()
	{
		include_once 'model/Barang.php';
		$brt = new Berita();

		$isi_barang = $brt->ambilBarang();
		include_once 'pages/beranda.php';
		$this->end();//this funsinya untuk meghentkan fungdi di kelasnya dan fungsi end ada di view
	}
}

//modifikasi utama UI.php dengan memanggil class berita




 ?>