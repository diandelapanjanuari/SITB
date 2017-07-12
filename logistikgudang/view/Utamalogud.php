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

		$brt = new barang();

		$isi_barang = $brt->ambilbarang();

		include_once 'pages/listbarang.php';
		$this->end();
	}
}



 ?>