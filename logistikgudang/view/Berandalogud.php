<?php 

require_once 'viewlogud.php';
/**
* 
*/
class Berandalogud extends viewlogud
{
	
	public function tampilLengkap()
	{
		
		include_once 'pages/Beranda.php';

		$this->end();
	}
}



 ?>