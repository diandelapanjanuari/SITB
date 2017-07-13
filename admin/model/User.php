<?php 

/**
* 
*/

include_once 'Model.php';
class User extends model
{
	
	public function getDataUser()
	{
		$query = $this->db->prepare("SELECT * FROM User");
    	$query->execute();
    	$data = $query->fetchAll();

    	return $data;
	}

}


 ?>