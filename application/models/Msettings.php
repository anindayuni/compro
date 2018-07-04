<?php 

/**
 * 
 */
class Msettings extends CI_Model
{
	
function __construct(){
$table='_settings';

}

public function list()
{
	$data = $this->db->get('_settings')->result();
	return $data;
}

function update_youtube($id){	
	
		$this->db->where('settings_id',$id);
		$this->db->update('_settings');
		redirect('logincms/settings', 'refresh');
}


function update_twitter($id){	
	
		$this->db->where('settings_id',$id);
		$this->db->update('_settings');
		redirect('logincms/settings', 'refresh');
}

function update_facebook($id){	
	
		$this->db->where('settings_id',$id);
		$this->db->update('_settings');
		redirect('logincms/settings', 'refresh');
}


function update_instagram($id){	
	
		$this->db->where('settings_id',$id);
		$this->db->update('_settings');
		redirect('logincms/settings', 'refresh');
}


function update_maintenance($id){	
	
		$this->db->where('settings_id',$id);
		$this->db->update('_settings');
		redirect('logincms/settings', 'refresh');
}


}


 ?>