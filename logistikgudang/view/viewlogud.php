<?php 

/**
* 
*/
class viewlogud
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()
	{
		include_once 'template/navigasibarang.php';
		include_once 'template/sidebarbarang.php';
		//include_once 'content.php';
		
	}

	protected function end()
	{
		include 'template/contentbarang.php';
	}
	
}
 ?>