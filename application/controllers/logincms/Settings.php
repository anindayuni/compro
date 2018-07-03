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


}

 ?>