<?php 
/**
* 
*/
include_once 'Controller.php';

class UserManager extends Controller
{
	
	public function getDaftarUser()
	{
		include_once 'model/Kategori.php';
		$kat  = new Kategori();
		$daftar_kategori = $kat->getDaftarKategori();

		return $daftar_kategori;
	}

	public function setUser()
	{
		include_once 'model/User.php';
		$muser = new User();
		$id_user = $_POST['kode'];
		$nama = $_POST['nama'];
		$alamat = $_POST ['alamat'];
		$No_Telp = $_POST ['No_Telp'];
		
		return $pesan;
	}
	public function getDataTambahUser(){

	}
	public function ubahUser(){
		
	}
}


 ?>