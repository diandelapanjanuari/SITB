<?php 

require_once 'viewlogud.php';
/**
* 
*/
class berandaUI extends view
{
	
	public function tampilLengkap()
	{
		//i
		include_once 'pages/berandalogud.php';

		$this->end();//this funsinya untuk meghentkan fungsi di kelasnya dan fungsi end ada di view
	}
}



 ?>