<?php 

class Msettings extends CI_Model
{
	public function setting_list()
	{
		$data = $this->db->get('_settings')->result();
		return $data;
	}

	function sosmed()
	{
		$data = $this->db->get('_settings');
		return $data->row_array();
	}

	function update($id){	
		
		$this->db->where('settings_id',$id);
		$this->db->update('_settings');
		redirect('logincms/settings', 'refresh');
	}



}


?>