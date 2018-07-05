<?php

class Home extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MKategori');
	}

	function index()
	{
		$this->front_page('frontend/content',$data);
	}
}
?>