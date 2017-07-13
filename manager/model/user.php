<?php 

/**
* 
*/

include_once 'model.php';
class user extends model
{
	
	public function getDataUser()
	{
		$query = $this->db->prepare("SELECT * FROM user");
    	$query->execute();
    	$data = $query->fetchAll();

    	return $data;
	}

}


 ?>