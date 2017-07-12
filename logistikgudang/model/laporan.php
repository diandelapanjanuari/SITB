<?php 

/**
* 
*/

include_once 'Model.php';
class laporan extends model
{
	
	public function getDataLaporan()
	{
		$query = $this->db->prepare("SELECT * FROM laporan");
    	$query->execute();
    	$data = $query->fetchAll();

    	return $data;
	}

}


 ?>