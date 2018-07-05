<?php 
/**
 * 
 */
class Martikel extends CI_Model
{
	function show_artikel(){
		$this->db->join('_category', '_category.category_id = _article.article_id_category');
		$this->db->order_by('article_id', 'DESC');
		$ambil = $this->db->get('_article');

		return $ambil->result_array();
	}

	function kategori(){
		$ambil = $this->db->get('_category');

		return $ambil->result_array();
	}

	function save($input){
		$this->db->insert('_article',$input);
	}

	function artikel_by_id($article_id){
		$this->db->join('_category', '_category.category_id = _article.article_id_category');
		$this->db->where('_article.article_id', $article_id );
		$ambil = $this->db->get('_article');

		return $ambil->result_array();
	}

	function edit($update, $article_id){
		$this->db->where('_article.article_id', $article_id);
		$this->db->update('_article', $update);

	}

}

?>