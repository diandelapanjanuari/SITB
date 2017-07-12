<?php 

/**
* 
*/

include_once 'Model.php';
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