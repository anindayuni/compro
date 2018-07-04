<?php

class Home extends MY_Controller
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }

	function index()
	{
		$this->load->view('frontend/slider');
		$this->front_page('frontend/content');
	}
}
?>