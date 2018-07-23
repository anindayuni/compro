<?php 
/**
 * 
 */
class Home extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('user'))
		{
			$log = base_url("logincms");
			echo "<script>alert('Anda Harus Login Dahulu'); location='$log';</script>";
		}
	}

	function index(){
		$this->render_page('backend/home');
	}
	
}

?>