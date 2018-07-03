<?php 
/**
 * 
 */
class Kategori extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mkategori');
	}
	public function index(){

		$this->render_page('backend/kategori');
	}

	

}

?>