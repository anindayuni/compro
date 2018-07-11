<?php 	


/**
 * 
 */
class Mgallery extends CI_Model
{
	
	
	function getAll($config){  
		$hasilquery=$this->db->get_where('_photo', $config['per_page'], $this->uri->segment(3));
		if ($hasilquery->num_rows() > 0) {
			foreach ($hasilquery->result() as $value) {
				$data[]=$value;
			}
			return $data;
		}      
	}


	function data($number,$offset){
		return $query = $this->db->get('_photo',$number,$offset)->result();	
	}

	// function data($number,$offset){
	// 	$this->db->limit($number, $offset); 
	// 	$query=$this->db->query('select * from _article a, _category c, _photo p WHERE a.article_id_category = c.category_id and c.category_type="gallery" and p.photo_id_article=a.article_id order by a.article_id ASC')->result();		
	// 	return $query;
	// }


}

?>  