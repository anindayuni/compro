<?php 

class Mslider extends CI_Model
{

	function get_slider()
	{
		$this->db->where('a.article_status', 1);
		$this->db->where('c.category_status', 1);
		$this->db->where('c.category_type', 'slider');
		$this->db->join('_category c', 'a.article_id_category = c.category_id', 'left');
		$this->db->join('_photo p', 'a.article_id = p.photo_id_article', 'left');
		$data = $this->db->get('_article a');
		return $data->result_array();
	}

	public function list_slider()
	{
		$data = $this->db->query("select * from _article a, _category c, _photo p WHERE a.article_id_category = c.category_id and c.category_type='slider'and p.photo_id_article=a.article_id")->result();
		return $data;
	}


	


}

?>