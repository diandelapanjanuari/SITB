<?php 

/**
* 
*/
class viewlogud
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()//construct adalah fungsi yang pertama dijalankan ketika pertama kali di buat
	{
		include_once 'templatelogud/navigasibarang.php';
		include_once 'templatelogud/sidebarbarang.php';
		// include_once 'content.php';
		
	}

	protected function end()
	
	
}


 ?>