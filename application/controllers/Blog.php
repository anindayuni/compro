<?php

class Blog extends MY_Controller
{
	
	// function __construct()
	// {
	// 	# code...
	// }

	function index()
	{
		$this->front_page('frontend/blog-list');
	}

	function single($url)
	{
		$data['single'] = $this->Martikel->single_article($url);
		$this->front_page('frontend/single-blog',$data);
	}

	function category($url){
		
	}
}
?>