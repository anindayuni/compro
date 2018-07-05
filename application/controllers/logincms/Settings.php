<?php 


/**
 * 
 */
class Settings extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Msettings');
	}
	

	public function index(){
		$data=array(
			'settings'=>$this->Msettings->list(),
		);
		$this->render_page('backend/settings/list',$data);
	}

	public function update_youtube()
	{
		$data['url']=$this->db->get_where('_settings',array('settings_id'=>1))->row_array();
		$this->render_page('backend/settings/update_youtube',$data);
	}



	public function update_youtube_action(){

		if ($this->input->get()){
			$input = $this->input->get();

		}
		$this->db->set('settings_youtube',$this->input->get('youtube_name'));
		$this->Msettings->update_youtube('1');
		$this->render_page('backend/settings/list',$data);
	}


	public function update_twitter()
	{
		$data['url']=$this->db->get('_settings')->row_array();
		$this->render_page('backend/settings/update_twitter',$data);
	}

	public function update_twitter_action(){

		if ($this->input->get()){
			$input = $this->input->get();

		}
		$this->db->set('settings_twitter',$this->input->get('twitter_name'));
		$this->Msettings->update_twitter('1');
		$this->render_page('backend/settings/list',$data);
	}

	public function update_facebook()
	{
		$data['url']=$this->db->get('_settings')->row_array();
		$this->render_page('backend/settings/update_facebook',$data);
	}

	public function update_facebook_action(){

		if ($this->input->get()){
			$input = $this->input->get();

		}
		$this->db->set('settings_facebook',$this->input->get('facebook_name'));
		$this->Msettings->update_facebook('1');
		$this->render_page('backend/settings/list',$data);
	}

	public function update_instagram()
	{
		$data['url']=$this->db->get('_settings')->row_array();
		$this->render_page('backend/settings/update_instagram',$data);
	}

	public function update_instagram_action(){

		if ($this->input->get()){
			$input = $this->input->get();

		}
		$this->db->set('settings_instagram',$this->input->get('instagram_name'));
		$this->Msettings->update_instagram('1');
		$this->render_page('backend/settings/list',$data);
	}


	public function update_maintenance()
	{

		$data['status']=$this->db->get('_settings')->row_array();
		$this->render_page('backend/settings/update_maintenance',$data);
	}

	public function update_maintenance_action(){

		if ($this->input->get()){
			$input = $this->input->get();

		}
		$this->db->set('settings_maintenance',$this->input->get('maintenance_name'));
		$this->Msettings->update_maintenance('1');
		$this->render_page('backend/settings/list',$data);
	}



	// public function update_youtube_action_ori($id){
	// 	$this->db->set('settings_youtube',$this->input->get('youtube_name'));
	// 	$this->db->where('settings_id',$id);
	// 	$this->db->update('_settings');
	// 	$data['settings']=$this->Msettings->list();

	// 	$this->render_page('backend/settings/list',$data);
	// }

}

?>