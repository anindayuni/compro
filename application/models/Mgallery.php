<?php 	


/**
 * 
 */
class Mgallery extends CI_Model
{
	
	
	function data($number,$offset){
		$this->db->limit($number,$offset);
		$this->db->where('category_type', 'gallery');
		$this->db->join('_category', '_category.category_id = _article.article_id_category');
		$this->db->join('_photo', '_photo.photo_id_article = _article.article_id', 'left');
		$this->db->order_by('article_id', 'DESC');
		return $query = $this->db->get('_article')->result();	
	}


}

?>  