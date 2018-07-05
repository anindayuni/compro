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
			$string = $this->input->post('article_title');

				$replace = '-';         
				$string = strtolower($string);
				$string = preg_replace("/[\/\.]/", " ", $string);     
				$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
				$string = preg_replace("/[\s-]+/", " ", $string);
				$string = preg_replace("/[\s_]/", $replace, $string);
				$string = substr($string, 0, 100);
			
			$input['article_url'] = base_url().$string;
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
			$string = $this->input->post('article_title');

				$replace = '-';         
				$string = strtolower($string);
				$string = preg_replace("/[\/\.]/", " ", $string);     
				$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
				$string = preg_replace("/[\s-]+/", " ", $string);
				$string = preg_replace("/[\s_]/", $replace, $string);
				$string = substr($string, 0, 100);
			
			$input['article_url'] = base_url().$string;
			$this->Martikel->edit($input, $article_id);
			redirect('logincms/artikel', 'refresh');
		}
		$this->render_page('backend/artikel/edit', $data);
	}

	function detail($article_id){
		$data['artikel'] = $this->Martikel->artikel_by_id($article_id);
		$this->render_page('backend/artikel/detail', $data);
	}
}

?>