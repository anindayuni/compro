<?php

class Blog extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['articles'] = $this->Martikel->all_articles();
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
		$data['category_list'] = $this->Martikel->show_by_category($url);
		$this->front_page('frontend/category_list',$data);
	}

	function blog_list()
	{
		$this->front_page('frontend/blog-list');
	}
}
?>