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
		include_once 'template/navigasibarang.php';
		include_once 'template/sidebarbarang.php';
		// include_once 'content.php';
		
	}

	protected function end()
	{
		include 'template/contentbarang.php';
	}
	
}
 ?>