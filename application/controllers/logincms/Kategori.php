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
	public function(){
		
		$this->render_page('backend/home');
	}

	

}

?>