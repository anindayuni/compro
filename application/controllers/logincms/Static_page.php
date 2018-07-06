<?php 
/**
 * 
 */
class Static_page extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mstatic');
		if (!$this->session->userdata('user'))
		{
			$log = base_url("logincms");
			echo "<script>alert('Anda Harus Login Dahulu'); location='$log';</script>";
		}
	}

	function index()
	{
		$data['static'] = $this->Mstatic->show_static();
		$this->render_page('backend/static/show', $data);

	}

	function detail($article_id)
	{
		$data['static'] = $this->Mstatic->static_by_id($article_id);
		$this->render_page('backend/static/detail', $data);
	}

	function edit($article_id)
	{
		$data['kategori'] = $this->Mstatic->static_category();
		$data['static'] = $this->Mstatic->static_by_id($article_id);

		if ($this->input->post())
		{
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

				$this->Mstatic->edit($update, $article_id);
			}
			else{
				$update['article_title'] = $this->input->post('article_title');
				$update['article_create_date'] = $this->input->post('article_create_date');
				$update['article_status'] = $this->input->post('article_status');
				$update['article_id_category'] = $this->input->post('article_id_category');
				$update['article_url'] = $this->input->post('article_url');
				$update['article_content'] = $this->input->post('article_content');
				$update['article_publish_date'] = $this->input->post('article_publish_date');

				$this->Mstatic->edit($update, $article_id);
			}
			redirect('logincms/static_page', 'refresh');
		}

		$this->render_page('backend/static/edit', $data);
	}

}

?>