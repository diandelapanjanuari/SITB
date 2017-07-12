<?php 

require_once 'viewlogud.php';
/**
* 
*/
class Berandalogud extends viewlogud
{
	
	public function tampilLengkap()
	{
		//i
		include_once 'pages/Beranda.php';

		$this->end();//this funsinya untuk meghentkan fungsi di kelasnya dan fungsi end ada di view
	}
}



 ?>