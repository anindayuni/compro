<?php 

class Foto extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mfoto');
		$this->load->helper(array('form', 'url'));
	}
	


	public function index(){
		$data=array(
			'foto'=>$this->Mfoto->list(),
			'id'=>'',
		);
		$this->render_page('backend/foto/list',$data);
	}



	public function do_upload()
	{

	}




	public function add()
	{
		$data['judul_artikel']=$this->db->get('_article')->result();
		$this->render_page('backend/foto/add',$data);
	}

	public function add_action()
	{

		// if ($this->input->post()) {

		$config['upload_path']          = 'gambar/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('userfile'))
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('upload_success', $data);
		}



		$artikel=$this->db->get_where('_article',array('article_id'=>$this->input->post('judul_artikel')))->row_array();

		$data = array(
			'photo_id_article'=> $artikel['article_id'],
			'photo_img'=> $config['upload_path'],
			'photo_date'   => date('Y-m-d')
		);

		$this->db->insert('_photo',$data);

		// }

		$data['foto']=$this->Mfoto->list();
		$this->render_page('backend/foto/list',$data);

	}


	public function delete($id)
	{	
		$data['foto']=$this->Mfoto->list();
		$this->db->delete('_photo', array('photo_id' => $id));
		$this->render_page('backend/foto/list',$data);
		// redirect('backend/foto/list');

	}


}

?>