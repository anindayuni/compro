<?php 

class Slider extends MY_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Mslider');
		$this->load->helper(array('form', 'url'));
		$this->load->library('upload');

	}

	public function index()
	{
		$data=array(
			'slider'=>$this->Mslider->list_slider(),
			// 'judul_slider'=>$this->db->get_where('_article',array('article_id'=>$this->input->get('id_artikel')))->row_array(),
		);
		$this->render_page('backend/slider/list',$data);
	}

	public function delete($id)
	{ 
		$data['foto']=$this->Mslider->list_slider();
		$this->db->delete('_article', array('article_id' => $id));
		$this->db->delete('_photo', array('photo_id_article' => $id));
		$this->render_page('backend/slider/list',$data);
		redirect('logincms/slider', 'refresh');

	}

	public function add()
	{
		$this->render_page('backend/slider/add');
	}

	public function add_action()
	{
		$this->db->select_max('article_id','id');
		$id=$this->db->get('_article')->row_array();

		$config['upload_path']      = './gambar/slider';
		$config['allowed_types']    = 'gif|jpg|png|jpeg';
		$config['min_width']            = 400;
		$config['min_height']           = 700;
		$config['file_name'] = 'slider-'.$id['id'];

		$this->load->library('upload', $config);
		$this->upload->initialize($config);


		if ( ! $this->upload->do_upload('userfile'))
		{
			$error = array(
				'error' => $this->upload->display_errors(),
				'alert' => '
					<script>
						alert("gambar mu kudu luwih seko 400px x 900px nduk");
					</script>
				',
			);
				$this->render_page('backend/slider/list',$error);
			// $this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

                        // $this->load->view('upload_success', $data);
		}


		$id_category=$this->db->get_where('_category',array('category_type'=>'slider'))->row_array();
		$data_artikel=array(
			'article_title'=>$this->input->post('nama_slider'),
			'article_url'=>NULL,
			'article_content'=>NULL,
			'article_create_date'=>date('Y-m-d'),
			'article_publish_date'=>date('Y-m-d'),
			'article_status'=>$this->input->post('article_status'),
			'article_id_category'=>$id_category['category_id'],
			
		);

		$this->db->insert('_article',$data_artikel);

		$this->db->select_max('article_id','id');
		$id_artikel=$this->db->get('_article')->row_array();
		$data_foto=array(
			'photo_id_article'=>$id_artikel['id'],
			'photo_img'=>$this->upload->data('file_name'),
			'photo_date'=>date('Y-m-d'),
		);

		$this->db->insert('_photo',$data_foto);

		$data['slider']=$this->Mslider->list_slider();
		$this->render_page('backend/slider/list',$data);
		redirect('logincms/slider', 'refresh');
	}

	public function edit()
	{
		$data['slider']=$this->db->get_where('_article',array('article_id'=>$this->uri->segment('4')))->row_array();
		$this->render_page('backend/slider/edit',$data);

	}

	public function edit_action()
	{
		
	}

	public function update_status()
	{
		$this->db->set('article_status',$this->input->get('status_aktif'));
		// $this->db->set('article_status',$this->input->get('id'));
		$id=$this->input->get('id');

		$this->db->where('article_id',$id);
		$this->db->update('_article');
	}

}


