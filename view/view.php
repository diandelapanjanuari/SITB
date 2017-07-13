<?php 

/**
* 
*/
class View
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()
	{
		include_once 'head.php';
		include_once 'template/sidebar.php';
		include_once 'content.php';
		include 'foot.php';
		
	}

	protected function end()
	{
		//include 'foot.php';
	}
	
}



 ?>