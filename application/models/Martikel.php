<?php 
/**
 * 
 */
class Martikel extends CI_Model
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }

	function show_artikel(){
		$this->db->join('_category', '_category.category_id = _article.article_id_category');
		$ambil = $this->db->get('_article');

		return $ambil->result_array();
	}

	function kategori(){
		$ambil = $this->db->get('_category');

		return $ambil->result_array();
	}
}

?>