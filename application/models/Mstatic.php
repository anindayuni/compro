<?php 
class Mstatic extends CI_Model
{
	function show_static()
	{
		$ambil = $this->db->query("SELECT * FROM _article JOIN _category ON _category.category_id = _article.article_id_category WHERE _category.category_type = 'static' ORDER BY article_id DESC");

		return $ambil->result_array();
	}
	
	function static_by_id($article_id)
	{
		$this->db->join('_category', '_category.category_id = _article.article_id_category');
		$this->db->where('article_id', $article_id);
		$ambil = $this->db->get('_article');

		return $ambil->result_array();
	}

	function static_category()
	{
		$ambil = $this->db->query("SELECT * FROM _category WHERE category_type = 'static'");
		return $ambil->result_array();
	}

	function edit($update, $article_id)
	{
		$this->db->where('article_id', $article_id);
		$this->db->update('_article', $update);
	}
	function add_contact_us($input)
	{
		return $this->db->insert('_contact_us', $input);
	}

}

?>