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
		$this->db->set(array(
			'settings_youtube'=>$this->input->get('youtube_name'),
			'settings_twitter'=>$this->input->get('twitter_name'),
			'settings_facebook'=>$this->input->get('facebook_name'),
			'settings_instagram'=>$this->input->get('instagram_name'),
			'settings_maintenance'=>$this->input->get('maintenance_name'),
			'settings_namesite'=>$this->input->get('nama_website'),
			'settings_meta_keyword'=>$this->input->get('meta_keyword'),
			'settings_meta_description'=>$this->input->get('meta_description'),
			'settings_footer'=>$this->input->get('footer'),
		));		
		
		$this->db->where('settings_id',$id);
		$this->db->update('_settings');
		redirect('logincms/settings', 'refresh');
	}



}


?>