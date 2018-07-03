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
		$data['kategori'] = $this->Mkategori->show_kategori();

		$this->render_page('backend/kategori/show', $data);
	}

	

}

?>