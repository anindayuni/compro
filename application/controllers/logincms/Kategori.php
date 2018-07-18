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

		if (!$this->session->userdata('user'))
		{
			$log = base_url("logincms");
			echo "<script>alert('Anda Harus Login Dahulu'); location='$log';</script>";
		}
	}
	public function index()
	{
		$data['kategori'] = $this->Mkategori->show_kategori();

		$this->render_page('backend/kategori/show', $data);
	}

	public function add()
	{
		$data['type'] = $this->Mkategori->type();
		$data['category_name'] = $this->input->post('category_name');

		if($this->input->post())
		{
			$input = $this->input->post();
            $string = $this->input->post('category_name');

                $replace = '-';         
                $string = strtolower($string);
                $string = preg_replace("/[\/\.]/", " ", $string);     
                $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
                $string = preg_replace("/[\s-]+/", " ", $string);
                $string = preg_replace("/[\s_]/", $replace, $string);
                $string = substr($string, 0, 100);
            
            $input['category_url'] = $string;
            $status = $this->Mkategori->save($input);

            if ($status == "berhasil")
            {
	            $this->session->set_flashdata('msg', '<div class="alert alert-info">Kategori Berhasil Ditambahkan</div>');
	            redirect('logincms/kategori', 'refresh');
            }
            else{
            	$this->session->set_flashdata('msg', '<div class="alert alert-warning">Gambar gagal ditambahkan. Ukuran file lebih dari 1 MB</div>');
            	redirect('logincms/kategori', 'refresh');
            }
		}
	
		$this->render_page('backend/kategori/add', $data);
	}

	public function edit($category_id)
	{
		$data['type'] = $this->Mkategori->type();
		$data['kategori'] = $this->Mkategori->category_by_id($category_id);

		if($this->input->post())
		{
			$input = $this->input->post();
            
            $category_id = $this->input->post('category_id');
            $this->Mkategori->edit($input, $category_id);
            redirect('logincms/kategori', 'refresh');
		}

		$this->render_page('backend/kategori/edit', $data);
	}

	public function detail($category_id)
	{
		$data['kategori'] = $this->Mkategori->category_by_id($category_id);
		$this->render_page('backend/kategori/detail', $data);
	}

	public function delete($category_id)
	{
		$status = $this->Mkategori->delete($category_id);

		if ($status == "berhasil")
		{
			$this->session->set_flashdata('msg', '<div class="alert alert-info">Data berhasil dihapus</div>');
			redirect('logincms/kategori', 'refresh');
		}
		else
		{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning">Gagal menghapus kategori</div>');
			redirect('logincms/kategori', 'refresh');
		}
	}

}

?>