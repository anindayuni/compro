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
	
	function get_contat_us()
	{
		$data = $this->db->order_by('contact_us_id', 'DESC');
		$data = $this->db->get('_contact_us');
		return $data->result_array();
	}

	function change_status($id)
	{
		$this->db->set('contact_us_status', '1');
		$this->db->where('contact_us_id', $id);
		$this->db->update('_contact_us');
	}

	function delete_message($contact_us_id)
	{
		$this->db->where('contact_us_id', $contact_us_id);
		$this->db->delete('_contact_us');
	}

}

?>