<?php 

require_once 'View.php';
/**
* 
*/
class BerandaUI extends view
{
	
	public function tampilLengkap()
	{
		
		include_once 'pages/Beranda.php';

		$this->end();//this funsinya untuk meghentkan fungsi di kelasnya dan fungsi end ada di view
	}
}



 ?>