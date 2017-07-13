<?php 
/**

*/
include_once 'Model.php';
class Barang extends Model
{
	public $kode_barang;
	public $nama_barang;
	public $satuan;
	public $jumlah;
	public $harga;
	
	public function ambilBarang()
	{
		$query = $this->db->prepare("SELECT * FROM Barang");
    		$query->execute();
    		$data = $query->fetchAll();
    		return $data;
	}
	public function setBarang($kode_barang,$nama_barang,$satuan,$jumlah,$harga)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO Barang(kode_barang,nama_barang,satuan,jumlah,harga) VALUES(:kode_barang:nama_barang:satuan:jumlah:harga)");
		   $stmt->bindparam(":kode_barang",$kode_barang);
		   $stmt->bindparam(":nama_barang",$nama_barang);
		   $stmt->bindparam(":satuan",$satuan);
		   $stmt->bindparam(":jumlah",$jumlah);
		   $stmt->bindparam(":harga",$harga);
		   $stmt->execute();
		   return true;
		  }
		  catch(PDOException $e)
		  {
		   echo $e->getMessage(); 
		   return false;
		  }
	}
}
 ?>