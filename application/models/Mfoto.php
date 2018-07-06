<?php 

class Mfoto extends CI_Model
{

	public function list()
	{
		$data = $this->db->get('_photo')->result();
		return $data;
	}


}

?>