 <?php 

/**
* 
*/
class View
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()//construct adalah fungsi yang pertama dijalankan ketika pertama kali di buat
	{
		include_once 'tamplatemanager/headermanager.php';
		include_once 'tamplatemanager/navigasimanager.php';
		include_once 'templatemanager/sidebarmanager.php';
		include_once 'templatemanager/contentmanager';
	
		
	}

	protected function end() {}
	
}


 ?>