<?php 
/**
 * 
 */
class Artikel extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Martikel');
	}

	function index(){
		$data ['artikel'] = $this->Martikel->show_artikel();
		$this->render_page('backend/artikel/show', $data);

	}

	function add(){
		$data['kategori'] = $this->Martikel->kategori();
		$this->render_page('backend/artikel/add', $data);
	}
}

?>