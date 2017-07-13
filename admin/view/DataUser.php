<?php 

require_once 'View.php';
/**
* 
*/
class DataaUI extends View
{
	
	public function tampilUser()
	{
		include_once 'model/User.php';

		$brt = new User();

		$isi_berita = $brt->getDataUser();

		include_once 'pages/listUser.php';
		$this->end();
	}

	public function tampilFormUser()
	{
		include_once 'controller/UserManager.php';
		$bm = new BeritaManager();
		$daftar_kategori = $bm->getDaftarKategori();
		include_once 'pages/FormUser.php';
		$this->end();
	}
	public function inputUser()
	{
		include_once 'controller/BeritaManager.php';
		$bm = new BeritaManager();
		$pesan = $bm->setBerita();

		include_once 'pages/pesansukses.php';
		$this->end();
	}
	public function tampilFormEdit(){

	}
	public function aksiUbahBerita(){
		
	}

}



 ?>