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
	function privacy_policy()
	{
		$data['pages'] = $this->Martikel->get_privacy_policy();
		$this->front_page('frontend/static_page',$data);
	}
	function gallery()
	{
		$gallery = $this->Martikel->get_gallery();
		$config['base_url'] = base_url('statics/gallery');
		$config['total_rows'] = count($gallery);
		$config['per_page'] = 10;
		$config['display_pages'] = FALSE;
		// pull left
		$config['first_link'] = "<i class='fa fa-angle-double-left'></i> First Posts &nbsp;&nbsp;";
		$config['first_tag_open'] = "<div class='pull-left'>";
		$config['first_tag_close'] = "</div>";
		$config['prev_link'] = "<i class='fa fa-angle-double-left'></i> Prev Posts &nbsp;&nbsp;";
		$config['prev_tag_open'] = "<div class='pull-left'>";
		$config['prev_tag_close'] = "</div>";
		// pull right
		$config['next_link'] = " Next Posts <i class='fa fa-angle-double-right'></i> ";
		$config['next_tag_open'] = "<div class='pull-right'>";
		$config['next_tag_close'] = "</div>";
		$config['last_link'] = "Last Posts <i class='fa fa-angle-double-right'></i>&nbsp;&nbsp;";
		$config['last_tag_open'] = "<div class='pull-right'>";
		$config['last_tag_close'] = "</div>";
		$this->pagination->initialize($config);
		$from = $this->uri->segment(3);
		$data['gallery'] = $this->Martikel->get_gallery_pagination($config['per_page'], $from);
		$data['mpaging'] = $this->pagination->create_links();

		$this->front_page('frontend/gallery',$data);
	}
}
?>