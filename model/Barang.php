<?php 

/**
* 
*/

include_once 'model.php';
class barang extends model
{
	
	public function getDataBarang()
	{
		$query = $this->db->prepare("SELECT * FROM barang");
    	$query->execute();
    	$data = $query->fetchAll();

    	return $data;
	}

}


 ?>