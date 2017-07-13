<?php 

/**
* 
*/

include_once 'model.php';
class laporan extends Model
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