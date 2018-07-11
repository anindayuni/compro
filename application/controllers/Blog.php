<?php

class Blog extends MY_Controller
{
	function index()
	{
		$article = $this->Martikel->front_article();
		// Pagination
		$config['base_url'] = base_url('blog/index');
		$config['total_rows'] = count($article);
		$config['per_page'] = 6;
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
		$this->pagination->initialize($config);
		$from = $this->uri->segment(3);
		$data['articles'] = $this->Martikel->front_article_pagination($config['per_page'], $from);
		$data['mpaging'] = $this->pagination->create_links();

		$this->front_page('frontend/blog-list',$data);
	}
	function single($url)
	{
		$data['single'] = $this->Martikel->single_article($url);
		$data['random_articles'] = $this->Martikel->get_random_articles($url);
		$this->front_page('frontend/single-blog',$data);
	}
	function category($url)
	{
		$category_list = $this->Martikel->show_by_category($url);
		$data['category_name'] = $this->MKategori->get_name($url);
		// Pagination
		$config['base_url'] = base_url('blog/category/'.$url);
		$config['total_rows'] = count($category_list);
		$config['per_page'] = 6;
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
		$this->pagination->initialize($config);
		$from = $this->uri->segment(4);
		$data['category_list'] = $this->Martikel->show_by_category_pagination($url,$config['per_page'], $from);
		$data['mpaging'] = $this->pagination->create_links();
		$this->front_page('frontend/category_list',$data);
	}

	function blog_list()
	{
		$this->front_page('frontend/blog-list');
	}

	function contact_us()
	{

	}
}
?>