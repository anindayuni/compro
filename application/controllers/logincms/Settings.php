<?php 
class Settings extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Msettings');
		if (!$this->session->userdata('user'))
		{
			$log = base_url("logincms");
			echo "<script>alert('Anda Harus Login Dahulu'); location='$log';</script>";
		}
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
		$this->Msettings->update('1');
		$this->render_page('backend/settings/list');

	}



}  

?>