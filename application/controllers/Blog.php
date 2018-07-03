<?php

class Blog extends MY_Controller
{
	
	// function __construct()
	// {
	// 	# code...
	// }

	function index()
	{
		$this->front_page('frontend/single-blog');
	}
}
?>