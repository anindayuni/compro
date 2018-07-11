<?php

class Home extends MY_Controller
{
	function index()
	{
		$article = $this->Martikel->front_article();
		// Pagination
		$config['base_url'] = base_url('home/index');
		$config['total_rows'] = count($article);
		$config['per_page'] = 3;
		$config['display_pages'] = FALSE;
		// pull left
		$config['first_link'] = "<i class='fa fa-angle-double-left'></i> First Posts &nbsp;&nbsp;";
		$config['first_tag_open'] = "<div class='pull-left'>";
		$config['first_tag_close'] = "</div>";
		$config['prev_link'] = "<i class='fa fa-angle-double-left'></i> Prev Posts &nbsp;&nbsp;";
		$config['prev_tag_open'] = "<div class='pull-left'>";
		$config['prev_tag_close'] = "</div>";
		// pull right
		$config['next_link'] = " Next Posts <i class='fa fa-angle-double-right'></i> ";
		$config['next_tag_open'] = "<div class='pull-right'>";
		$config['next_tag_close'] = "</div>";
		$config['last_link'] = "Last Posts <i class='fa fa-angle-double-right'></i>&nbsp;&nbsp;";
		$config['last_tag_open'] = "<div class='pull-right'>";
		$config['last_tag_close'] = "</div>";
		// $config['page_query_string'] = TRUE;
		// $config['enable_query_strings'] = TRUE;

		$this->pagination->initialize($config);
		$from = $this->uri->segment(3);
		$data['article'] = $this->Martikel->front_article_pagination($config['per_page'],$from);
		$data['mpaging'] = $this->pagination->create_links();

		$this->front_page('frontend/content',$data);
	}

	function maintenance()
	{
		$data['sosmed'] = $this->Msettings->sosmed();
		$this->load->view('frontend/maintenance',$data);
	}
}
?>