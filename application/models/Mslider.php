<?php 

class Mslider extends CI_Model
{

	public function list_slider()
	{
		$data = $this->db->query('select * from _article a, _photo p where a.article_id = p.photo_id_article')->result();
		return $data;
	}


	


}

?>