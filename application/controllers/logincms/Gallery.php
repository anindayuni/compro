<?php 

class Gallery extends MY_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->model('Mgallery');
		$this->load->helper(array('form', 'url'));
		$this->load->library('upload');
		$this->load->library('pagination');

	}


	public function pagination()
	{

			   // konfigurasi class pagination
		$config['base_url']=base_url()."logincms/gallery/index";
		$config['total_rows']= $this->db->query('SELECT * FROM _article a, _photo p, _category c where a.article_id_category=c.category_id and p.photo_id_article=a.article_id and c.category_type="gallery"')->num_rows();
		$config['per_page']=3;
		$config['num_links'] = 2;
		$config['uri_segment']=3;
		$config['first_link']='< Pertama ';
		$config['last_link']='Terakhir > ';
		$config['next_link']='> ';
		$config['prev_link']='< ';
		$this->pagination->initialize($config);

        // konfigurasi model dan view untuk menampilkan data
		$this->load->model('Mgallery');
		$data['datakontak']=$this->Mgallery->getAll($config);
		// $this->load->view('v_kontak', $data);

		// echo $this->pagination->create_links();
	# code...
	}

	public function index()
	{

		$total_rows=$this->db->query('select * from _article a, _category c, _photo p WHERE a.article_id_category = c.category_id and c.category_type="gallery" and p.photo_id_article=a.article_id order by a.article_id DESC')->num_rows();

			// $jumlah_data = $this->m_data->jumlah_data();
		$this->load->database();
		$this->load->library('pagination');

		$config['base_url'] = base_url().'logincms/gallery/index/';
		$config['total_rows'] =  $total_rows;
		$config['per_page'] = 3;
		$config['num_links'] = 2;

		
		$config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] ="</ul>";

        $config['num_tag_open'] = '<li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"> <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">';
        $config['num_tag_close'] = '</a> </li>';
        
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#' aria-controls='DataTables_Table_0' data-dt-idx='1' tabindex='0' class='page-link'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        
        $config['next_tag_open'] = "<li class='paginate_button page-item'><a href='#' aria-controls='DataTables_Table_0' data-dt-idx='1' tabindex='0' class='page-link'>";
        $config['next_tagl_close'] = "</a></li>";
        
        $config['prev_tag_open'] = "<li class='paginate_button page-item'><a href='#' aria-controls='DataTables_Table_0' data-dt-idx='1' tabindex='0' class='page-link'>";
        $config['prev_tagl_close'] = "</a></li>";
        
        $config['first_tag_open'] = " <li class='paginate_button page-item '><a href='#' aria-controls='DataTables_Table_0' data-dt-idx='3' tabindex='0' class='page-link'>";
        $config['first_tagl_close'] = "</a></li>";
        
        $config['last_tag_open'] = "<li class='paginate_button page-item '><a href='#' aria-controls='DataTables_Table_0' data-dt-idx='4' tabindex='0' class='page-link'>";
        $config['last_tagl_close'] = "</a></li>";
 
        $config['first_link']='< Pertama ';
        $config['last_link']='Terakhir > ';
        $config['next_link']='> ';
        $config['prev_link']='< ';
        // $this->pagination->initialize($config);
 

		// $config['num_tag_open'] = "<li class='paginate_button page-item active page-link'> <a href='#' aria-controls='DataTables_Table_0' data-dt-idx='0' tabindex='0' class='page-link'>";	
		// $config['num_tag_close'] = "</li>";

		// $config['first_link'] = "Pertama";
		// $config['first_tag_open'] = "<li class='paginate_button page-item active '> First P";
		// $config['first_tag_close'] = "</li>";

		// $config['first_link'] = "<li class='paginate_button page-item active'> First P";
		// $config['first_tag_open'] = "<div class='pull-left'>";
		// $config['first_tag_close'] = "</div>";

		// $config['first_link']='<li class="paginate_button page-item active"> First P ';
		// $config['last_link']='';
		// $config['next_link']=' <li class="paginate_button page-item next" id="DataTables_Table_0_next"> ';
		// $config['prev_link']='</li>';

		$from = $this->uri->segment(4);
		$this->pagination->initialize($config);		
		$data['gallery'] = $this->Mgallery->data($config['per_page'],$from);
		$data['mpaging']= $this->pagination->create_links();
		// $this->load->view('v_data',$data);


		// $data['gallery']=$this->db->query("select * from _article a, _category c, _photo p WHERE a.article_id_category = c.category_id and c.category_type='gallery' and p.photo_id_article=a.article_id order by a.article_id DESC")->result();

		// $data['row']=$total_rows;

		$this->render_page('backend/gallery/list',$data);
	}


	public function add()
	{
		$this->render_page('backend/gallery/add');
	}




	public function add_action()
	{
		$this->db->select_max('article_id','id');
		$id=$this->db->get('_article')->row_array();

		$config['upload_path']      = './gambar/gallery';
		$config['allowed_types']    = 'gif|jpg|png|jpeg';

		$config['file_name'] = 'gallery-'.$id['id'];

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		// if ($this->upload->data('image_width') < 700) {
		// 	echo '
		// 	<script>
		// 	alert("gambare gedeni");
		// 	</script>
		// 	';
		// }

		if ( ! $this->upload->do_upload('file'))
		{
			$error = array(
				'error' => $this->upload->display_errors(),
			);

				// $this->render_page('backend/slider/list',$error);
			$this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
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
			// $this->load->view('upload_sukses');


		}
	}




	public function hapus()
	{

		$id=$this->input->get('id');
		$gambar = $this->db->get('_photo')->row_array();

		unlink("./gambar/gallery/".$gambar['photo_img']);

		$this->db->delete('_article', array('article_id' => $id));
		$this->db->delete('_photo', array('photo_id_article' => $id));
		// $this->render_page('backend/gallery/list');


	}


	
}

?>