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
		include_once 'tamplatekasir/navigasikasir.phpp'
		include_once 'templatekasir/sidebarkasir.php';
		include_once 'templatekasir/contentkasir';
	
		
	}

	protected function end()
	{
	}
	
}


 ?>