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
		include_once 'templateadmin/header.php';
		//include_once 'templateadmin/navigasiadmin.php';
		include_once 'templateadmin/sidebaradmin.php';
		
		


	}

	protected function end()
	{
		include_once 'templateadmin/contentadmin.php';
	}
	
}


 ?>