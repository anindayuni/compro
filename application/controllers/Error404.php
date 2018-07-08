<?php
class Error404 extends MY_Controller
{
	function index()
	{
		$data['static_page'] = $this->Martikel->get_static_page();
		$data['sosmed'] = $this->Msettings->sosmed();
		$this->load->view('frontend/error404',$data);
	}
}
?>