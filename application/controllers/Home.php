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
		$data['article'] = $this->Martikel->front_article();
		
		$this->front_page('frontend/content',$data);
	}

	function maintenance()
	{
		$this->load->view('frontend/maintenance');
	}
}
?>