<?php

class Contact extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mcontact');
	}

	function index()
	{
		$input = $this->input->post();
		if ($input) {
			$this->Mcontact->add_data($input);
			$this->session->set_flashdata('msg', '<div class="alert alert-success">Pesan anda berhasil dikirim ke Administrator Kami. Terima Kasih.</div>');
		}

		$this->front_page('frontend/contact');
	}
}
?>