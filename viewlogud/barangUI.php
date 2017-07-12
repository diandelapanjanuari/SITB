<?php 

require_once 'viewlogud.php';
/**
* 
*/
class barangUI extends viewlogud
{
	
	public function tampilBarang()
	{
		include_once 'model/barang.php';

		$brt = new barang();

		$isi_barang = $brt->ambilbarang();

		include_once 'pages/listbarang.php';
		$this->end();
	}
}



 ?>