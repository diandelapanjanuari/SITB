<?php 

/**
* 
*/

include_once 'Model.php';
class Barang extends Model
{
	
	public function getDataBarang()
	{
		$query = $this->db->prepare("SELECT * FROM Barang");
    	$query->execute();
    	$data = $query->fetchAll();

    	return $data;
	}

}


 ?>