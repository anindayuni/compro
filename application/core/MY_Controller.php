<?php

class MY_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('MKategori');
		$this->load->model('Martikel');
		$this->load->model('Msettings');
	}

	function render_page($content, $data = NULL)
	{
		$data['header'] = $this->load->view('backend/header', $data, TRUE);
		$data['sidebar'] = $this->load->view('backend/sidebar', $data, TRUE);
		$data['content'] = $this->load->view($content, $data, TRUE);
		$data['footer'] = $this->load->view('backend/footer', $data, TRUE);

		$this->load->view('backend/index', $data);
	}

	function front_page($content, $data = NULL)
	{
		$data['category'] = $this->MKategori->all_categories();
		$data['article'] = $this->Martikel->latest_article();
		$data['sosmed'] = $this->Msettings->sosmed();
		
		$data['slider'] = $this->load->view('frontend/slider', $data, TRUE);
		$data['sidebar'] = $this->load->view('frontend/sidebar', $data, TRUE);
		$data['content'] = $this->load->view($content, $data, TRUE);

		$this->load->view('frontend/index', $data);
	}
}
?>