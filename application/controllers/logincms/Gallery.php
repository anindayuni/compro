<?php 

class Gallery extends MY_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->model('Mgallery');
		// $this->load->helper(array('form', 'url'));
		$this->load->library('upload');
		// $this->load->library('pagination');
		if (!$this->session->userdata('user'))
		{
			$log = base_url("logincms");
			echo "<script>alert('Anda Harus Login Dahulu'); location='$log';</script>";
		}

	} 

	// public function upload() {
	// 	if (!empty($_FILES)) {
	// 		$tempFile = $_FILES['file']['tmp_name'];
	// 		$fileName = $_FILES['file']['name'];
	// 		$targetPath = getcwd() . '/gambar/';
	// 		$targetFile = $targetPath . $fileName ;
	// 		move_uploaded_file($tempFile, $targetFile);
	// 	}




	// }

	public function index()
	{
		$total_perpage='6';
		$total_rows=$this->db->query('select * from _article a, _category c, _photo p WHERE a.article_id_category = c.category_id and c.category_type="gallery" and p.photo_id_article=a.article_id order by a.article_id DESC')->num_rows();

		
		$this->load->database();
		$this->load->library('pagination');

		// pagination

		$config['base_url'] = base_url().'logincms/gallery/index/';
		$config['total_rows'] =  $total_rows;
		$config['per_page'] = $total_perpage;
		$config['num_links'] = 2;

		//pagination css
		
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";

		$config['num_tag_open'] = '<li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">';
		$config['num_tag_close'] = '</li>';

		$config['cur_tag_open'] = "<li class='disabled'><li class='active paginate_button page-item previous'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";

		$config['next_tag_open'] = "<li class='paginate_button page-item'>";
		$config['next_tagl_close'] = "</li>";

		$config['prev_tag_open'] = "<li class='paginate_button page-item'>";
		$config['prev_tagl_close'] = "</li>";

		$config['first_tag_open'] = " <li class='paginate_button page-item '>";
		$config['first_tagl_close'] = "</li>";

		$config['last_tag_open'] = "<li class='paginate_button page-item '>";
		$config['last_tagl_close'] = "</li>";

		$config['first_link']='< First ';
		$config['last_link']='Last > ';
		$config['next_link']='> ';
		$config['prev_link']='< ';

		$from = $this->uri->segment(4);
		$this->pagination->initialize($config);		
		$data['gallery'] = $this->Mgallery->data($config['per_page'],$from);
		$data['mpaging']= $this->pagination->create_links();
		$data['total_rows']=$total_rows;
		
		$this->render_page('backend/gallery/list',$data);
	}


	public function add()
	{
		$this->render_page('backend/gallery/add');
	}


	public function upload_form()
	{
		$this->render_page('backend/gallery/upload_form');
	}

	function error_img()
	{
		echo "gagal woi";
	}

	public function add_action()
	{
		$this->db->select_max('article_id','id');
		$id=$this->db->get('_article')->row_array();

		$config['upload_path']      = './gambar/gallery';
		$config['allowed_types']    = 'gif|jpg|png|jpeg';
		$config['max_size']    		= 1024;

		$config['file_name'] = 'gallery-'.$id['id'];

		$this->load->library('upload', $config);
		$this->upload->initialize($config);



		if ( ! $this->upload->do_upload('file'))
		{
			// $error = array(
			// 	'error' => $this->upload->display_errors(),
			// ); 
			$error = $this->upload->display_errors();
				// $this->render_page('backend/slider/list',$error);
			// $this->load->view('backend/gallery/upload_form');
			// $this->session->set_flashdata('msg', '<script>alert("waaaaa")</script>');
			// redirect('logincms/gallery/add','refresh');
			// $error='';
			// $this->load->view('error_img');
			$this->load->view($error);
			// echo "<script type='text/javascript'>
			//  alert('erorrrrrr');
			//   </script>";
			// $this->render_page('backend/gallery/add',$data);
			// redirect('logincms/gallery/add',$data);
			

		}
		else
		{


			$data = array('upload_data' => $this->upload->data());

			

			if ($this->upload->data('image_width') <= 1) {
				echo '<script>alert("Ukuran gambar terlalu besar")</script>';
				unlink("./gambar/gallery/".$this->upload->data('file_name'));		
			}
			else{


				$id_category=$this->db->get_where('_category',array('category_type'=>'gallery'))->row_array();
				$data_artikel=array(
					'article_title'=>'ini gallery',
					'article_url'=>NULL,
					'article_content'=>NULL,
					'article_create_date'=>date('Y-m-d'),
					'article_publish_date'=>date('Y-m-d'),
					'article_status'=>1,
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

				$this->render_page('backend/gallery/list',$data);

			}

		}
	}




	public function hapus()
	{

		$id=$this->input->get('id');
		$gambar = $this->db->query('SELECT * FROM _photo p, _category c, _article a WHERE c.category_id=a.article_id_category and a.article_id=p.photo_id_article AND c.category_type="gallery" and a.article_id="'.$id.'" ORDER BY article_id DESC')->row_array();

		
		unlink("./gambar/gallery/".$gambar['photo_img']);

		$this->db->delete('_article', array('article_id' => $id));
		$this->db->delete('_photo', array('photo_id_article' => $id));
		

	}


	
}

?>