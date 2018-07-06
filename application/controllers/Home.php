<?php

class Home extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MKategori');
		$this->load->model('Msettings');

	}

	function index()
	{
		$data['article'] = $this->Martikel->front_article();
		$this->front_page('frontend/content',$data);
	}

	function maintenance()
	{
		$data['sosmed'] = $this->Msettings->sosmed();
		$this->load->view('frontend/maintenance',$data);
	}
}
?>