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
		if (!$this->session->userdata('user'))
		{
			$log = base_url("logincms");
			echo "<script>alert('Anda Harus Login Dahulu'); location='$log';</script>";
		}
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
			
			$input['article_url'] = $string;
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
			$status = $this->input->post('article_status');

			if ($status == 1) {
				$update['article_title'] = $this->input->post('article_title');
				$update['article_create_date'] = $this->input->post('article_create_date');
				$update['article_status'] = $this->input->post('article_status');
				$update['article_id_category'] = $this->input->post('article_id_category');
				$update['article_url'] = $this->input->post('article_url');
				$update['article_content'] = $this->input->post('article_content');
				$update['article_publish_date'] = date('Y-m-d');
				$this->Martikel->edit($update, $article_id);
			}
			else{
				$update['article_title'] = $this->input->post('article_title');
				$update['article_create_date'] = $this->input->post('article_create_date');
				$update['article_status'] = $this->input->post('article_status');
				$update['article_id_category'] = $this->input->post('article_id_category');
				$update['article_url'] = $this->input->post('article_url');
				$update['article_content'] = $this->input->post('article_content');
				$update['article_publish_date'] = $this->input->post('article_publish_date');
				$this->Martikel->edit($update, $article_id);
			}

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