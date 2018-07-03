<?php 

/**
 * 
 */
class Msettings extends CI_Model
{
	

public function list()
{
	$data = $this->db->get('_settings')->result();
	return $data;
}



}


 ?>