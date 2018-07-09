<?php 
class Settings extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Msettings');
	}
	

	public function index(){
		$data=array(
			'settings'=>$this->Msettings->setting_list(),
			'url'=>$this->db->get_where('_settings',array('settings_id'=>1))->row_array(),
		);
		$data['status']=$this->db->get('_settings')->row_array();
		$this->render_page('backend/settings/list',$data);
	}


	public function update()
	{
		$this->db->set('settings_youtube',$this->input->get('youtube_name'));
		$this->db->set('settings_twitter',$this->input->get('twitter_name'));
		$this->db->set('settings_facebook',$this->input->get('facebook_name'));
		$this->db->set('settings_instagram',$this->input->get('instagram_name'));
		$this->db->set('settings_maintenance',$this->input->get('maintenance_name'));
		$this->db->set('settings_namesite',$this->input->get('nama_website'));
		$this->db->set('settings_meta_keyword',$this->input->get('meta_keyword'));
		$this->db->set('settings_meta_description',$this->input->get('meta_description'));
		$this->db->set('settings_footer',$this->input->get('footer'));
		

		$this->Msettings->update('1');
		$this->render_page('backend/settings/list');


	}



}

?>