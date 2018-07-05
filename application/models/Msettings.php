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

	function update($id){	
		
		$this->db->where('settings_id',$id);
		$this->db->update('_settings');
		redirect('logincms/settings', 'refresh');
	}



}


?>