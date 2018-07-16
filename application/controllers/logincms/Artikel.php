<?php 
/**
 * 
 */
class Artikel extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Martikel');
		if (!$this->session->userdata('user'))
		{
			$log = base_url("logincms");
			echo "<script>alert('Anda Harus Login Dahulu'); location='$log';</script>";
		}
	}

	function index(){

		$data['artikel'] = $this->Martikel->show_artikel();
		$this->render_page('backend/artikel/show', $data);

	}

	function add(){
		$data['kategori'] = $this->Martikel->kategori();
		if ($this->input->post()) {
			$input = $this->input->post();

			$string = $this->input->post('article_title');

				$replace = '-';         
				$string = strtolower($string);
				$string = preg_replace("/[\/\.]/", " ", $string);     
				$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
				$string = preg_replace("/[\s-]+/", " ", $string);
				$string = preg_replace("/[\s_]/", $replace, $string);
				$string = substr($string, 0, 100);
			
			$input['article_url'] = $string;
			
			$photo['photo_img'] = $this->Martikel->save($input); //Simpan data article di tabel article dulu
			$cari_id = $this->Martikel->artikel_terbaru(); //cari id article yang baru saja disimpan
			$photo['photo_id_article'] = $cari_id['id'];
			$photo['photo_date'] = date('Y-m-d');
			$photo['photo_information'] = 'featured-image';

			$status = $this->Martikel->save_photo($photo);

			if ($status == "berhasil")
			{
				$this->session->set_flashdata('msg', '<div class="alert alert-info">Artikel Berhasil Ditambahkan</div>');
				redirect('logincms/artikel', 'refresh');
			}
			else
			{
				$this->session->set_flashdata('msg', '<div class="alert alert-warning">Artikel Gagal Ditambahkan</div>');
				redirect('logincms/artikel', 'refresh');
			}

		}

		$this->render_page('backend/artikel/add', $data);
	}

	function edit($article_id){
		$data['kategori'] = $this->Martikel->kategori();
		$data['artikel'] = $this->Martikel->artikel_by_id($article_id);
		$data['image'] = $this->Martikel->show_image($article_id);
		if ($this->input->post()){
			$input = $this->input->post();
			$status = $this->input->post('article_status');

			if ($status == 1) {
				$update['article_title'] = $this->input->post('article_title');
				$update['article_create_date'] = $this->input->post('article_create_date');
				$update['article_status'] = $this->input->post('article_status');
				$update['article_id_category'] = $this->input->post('article_id_category');
				$update['article_url'] = $this->input->post('article_url');
				$update['article_content'] = $this->input->post('article_content');
				$update['article_publish_date'] = date('Y-m-d');

				$gambar['gambar'] = $this->Martikel->edit($update, $article_id);
				if ($gambar['gambar'] != '0')
				{
					$photo['photo_img'] = $gambar['gambar'];
				}

				$photo['photo_id_article'] = $article_id;
				$photo['photo_date'] = date('Y-m-d');
				$photo['photo_information'] = 'featured-image';

				$this->Martikel->update_photo($photo, $article_id);
			}
			else{
				$update['article_title'] = $this->input->post('article_title');
				$update['article_create_date'] = $this->input->post('article_create_date');
				$update['article_status'] = $this->input->post('article_status');
				$update['article_id_category'] = $this->input->post('article_id_category');
				$update['article_url'] = $this->input->post('article_url');
				$update['article_content'] = $this->input->post('article_content');
				$update['article_publish_date'] = $this->input->post('article_publish_date');

				$gambar['gambar'] = $this->Martikel->edit($update, $article_id);
				if ($gambar['gambar'] != '0')
				{
					$photo['photo_img'] = $gambar['gambar'];
				}

				$photo['photo_id_article'] = $article_id;
				$photo['photo_date'] = date('Y-m-d');
				$photo['photo_information'] = 'featured-image';

				$this->Martikel->update_photo($photo, $article_id);
			}

			redirect('logincms/artikel', 'refresh');
		}
		$this->render_page('backend/artikel/edit', $data);
	}

	function detail($article_id){
		$data['artikel'] = $this->Martikel->artikel_by_id($article_id);
		$data['gambar'] = $this->Martikel->show_image($article_id);

		$this->render_page('backend/artikel/detail', $data);
	}

	function delete($article_id)
	{
		$status_foto = $this->Martikel->delete_photo($article_id);
		$status_artikel = $this->Martikel->delete($article_id);

		if ($status_foto == "berhasil" && $status_artikel == "berhasil") {
			$this->session->set_flashdata('msg', '<div class="alert alert-info">Artikel Berhasil Dihapus</div>');
			redirect('logincms/artikel');
		}

	}

}

?>