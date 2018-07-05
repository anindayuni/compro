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
	public function index()
	{
		$data['kategori'] = $this->Mkategori->show_kategori();

		$this->render_page('backend/kategori/show', $data);
	}

	public function add()
	{
		$data['type'] = $this->Mkategori->type();

		if($this->input->post())
		{
			$input = $this->input->post();
			$this->Mkategori->save($input);
			redirect('logincms/kategori', 'refresh');
		}
			
	
		$this->render_page('backend/kategori/add', $data);
	}
}

?>