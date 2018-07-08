<?php
class Statics extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mstatic');
		$this->load->model('Martikel');
	}
	function contact_us()
	{
		$data['contact'] = $this->Martikel->get_contact_us();
		$input = $this->input->post();
		if ($input) {
			$this->Mstatic->add_contact_us($input);
			$this->session->set_flashdata('msg', '<div class="alert alert-success">Pesan anda berhasil dikirim ke Administrator Kami. Terima Kasih.</div>');
		}
		$this->front_page('frontend/contact',$data);
	}
	function about_us()
	{
		$data['pages'] = $this->Martikel->get_about_us();
		$this->front_page('frontend/static_page',$data);
	}
	function faq()
	{
		$data['pages'] = $this->Martikel->get_faq();
		$this->front_page('frontend/static_page',$data);
	}
	function gallery()
	{
		$this->front_page('frontend/gallery');
	}
}
?>