<?php 

require_once 'View.php';
/**
* 
*/
class UtamaUI extends view
{
	
	public function tampilkanUser()
	{
		include_once 'model/User.php';
		$brt = new User();

		$isi_user = $brt->ambilUser();
		include_once 'pages/Beranda.php';
		$this->end();//this funsinya untuk meghentkan fungdi di kelasnya dan fungsi end ada di view
	}
}

//modifikasi utama UI.php dengan memanggil class berita




 ?>