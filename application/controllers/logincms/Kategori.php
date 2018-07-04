<?php 
/**
 * 
 */
class Kategori extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mkategori');
	}
	public function index()
	{
		$data['kategori'] = $this->Mkategori->show_kategori();

		$this->render_page('backend/kategori/show', $data);
	}

	public function add()
	{
		$data['type'] = $this->Mkategori->type();
		if ($this->input->post()) {
				// $nama_kategori = $this->input->post('nama_kategori');
				// $status = $this->input->post('status');
				// $type = $this->input->post('type');
				// $foto = $this->input->post('foto');
			$date = date('Y-m-d');
			$input = $this->input->post();
			$this->Mkategori->save($input, $date);
				

		   	if(!empty($this->input->post('foto'))){
		   		// $date = date('Y-m-d');
		   		$input = $this->input->post();
		    	$upload = $this->Mkategori->upload();

		      	if($upload['result'] == "success")
		      	{ // Jika proses upload sukses
		         // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
		      		$this->Mkategori->save($input);

		        	redirect('logincms/kategori', 'refresh');// Redirect kembali ke halaman awal / halaman view data
		      	}
			    else
			    { // Jika proses upload gagal
			        $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			    }

			}
		}
	
		$this->render_page('backend/kategori/add', $data);
	}
}

?>