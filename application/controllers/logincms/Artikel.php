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
		if ($this->input->post()) {
			$input = $this->input->post();
			$this->Martikel->save($input);
			redirect('logincms/artikel', 'refresh');
		}

		$this->render_page('backend/artikel/add', $data);
	}

	function edit($article_id){
		$data['kategori'] = $this->Martikel->kategori();
		$data['artikel'] = $this->Martikel->artikel_by_id($article_id);
		if ($this->input->post()){
			$input = $this->input->post();
			$this->Martikel->edit($input, $article_id);
			redirect('logincms/artikel', 'refresh');
		}
		$this->render_page('backend/artikel/edit', $data);
	}
}

?>