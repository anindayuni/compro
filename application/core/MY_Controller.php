<?php

class MY_Controller extends CI_Controller
{
	
	function render_page($content, $data = NULL)
	{
		$data['header'] = $this->load->view('logincms/header', $data, TRUE);
		$data['sidebar'] = $this->load->view('logincms/sidebar', $data, TRUE);
		$data['content'] = $this->load->view($content, $data, TRUE);
		$data['footer'] = $this->load->view('logincms/footer', $data, TRUE);

		$this->load->view('logincms/index', $data);
	}
}
?>