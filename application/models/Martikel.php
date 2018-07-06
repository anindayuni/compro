<?php 
/**
 * 
 */
class Martikel extends CI_Model
{

	function all_articles()
	{
		$this->db->where('article_status', '1');
		$this->db->join('_category', '_category.category_id = _article.article_id_category');
		$this->db->join('_photo', '_photo.photo_id_article = _article.article_id', 'left');
		$this->db->order_by('article_id', 'DESC');
		$ambil = $this->db->get('_article');
		return $ambil->result_array();
	}

	function latest_article(){
		$this->db->limit(5);
		$this->db->where('article_status', '1');
		$this->db->join('_category', '_category.category_id = _article.article_id_category', 'left');
		$this->db->join('_photo', '_photo.photo_id_article = _article.article_id', 'left');
		$this->db->order_by('article_id', 'DESC');
		$ambil = $this->db->get('_article');
		return $ambil->result_array();
	}

	function front_article(){
		$this->db->where('article_status', '1');
		$this->db->join('_category', '_category.category_id = _article.article_id_category');
		$this->db->join('_photo', '_photo.photo_id_article = _article.article_id', 'left');
		$this->db->order_by('article_id', 'DESC');
		$ambil = $this->db->get('_article');
		return $ambil->result_array();
	}

	function single_article($url)
	{
		$this->db->like('article_url', $url);
		$this->db->where('article_status', '1');
		$this->db->join('_category', '_category.category_id = _article.article_id_category', 'left');
		$this->db->join('_photo', '_photo.photo_id_article = _article.article_id', 'left');
		$data = $this->db->get('_article');
		return $data->row_array();
	}

	function show_by_category($url)
	{
		$this->db->like('c.category_url', $url);
		$this->db->where('a.article_status', '1');
		$this->db->join('_category c', 'c.category_id = a.article_id_category');
		$this->db->join('_photo', '_photo.photo_id_article = a.article_id', 'left');
		$data = $this->db->get('_article a');
		return $data->result_array();
	}

	function show_artikel(){
		$this->db->join('_category', '_category.category_id = _article.article_id_category');
		$this->db->order_by('article_id', 'DESC');
		$ambil = $this->db->get('_article');

		return $ambil->result_array();
	}

	function kategori(){
		$ambil = $this->db->get('_category');

		return $ambil->result_array();
	}

	function save($input){
		$data['article_title'] = $input['article_title'];
        $data['article_url'] = $input['article_url'];
        $data['article_content'] = $input['article_content'];
        $data['article_create_date'] = $input['article_create_date'];
        $data['article_publish_date'] = $input['article_publish_date'];
        $data['article_status'] = $input['article_status'];
        $data['article_id_category'] = $input['article_id_category'];

        $config['upload_path']      = './gambar';
        $config['allowed_types']    = 'gif|jpg|png|jpeg';

        // panggil library upload
        $this->load->library('upload', $config);
        // jika benar upload gambar
        if ($this->upload->do_upload('photo_img'))
        {
            $kirim = $this->upload->data('file_name');
        }
        else{
            $kirim = 'no-image.jpg';
        }

        $this->db->insert('_article', $data);
        return $kirim;

	}

	function artikel_terbaru(){
		$ambil = $this->db->query('select max(article_id) as id from _article');
		return $ambil->row_array();
	}

	function save_photo($photo){
		$this->db->insert('_photo', $photo);
	}


	function artikel_by_id($article_id){
		$this->db->join('_category', '_category.category_id = _article.article_id_category');
		$this->db->where('_article.article_id', $article_id );
		$ambil = $this->db->get('_article');

		return $ambil->result_array();
	}

	function edit($update, $article_id){
		$data['article_title'] = $update['article_title'];
        $data['article_url'] = $update['article_url'];
        $data['article_content'] = $update['article_content'];
        $data['article_create_date'] = $update['article_create_date'];
        $data['article_publish_date'] = $update['article_publish_date'];
        $data['article_status'] = $update['article_status'];
        $data['article_id_category'] = $update['article_id_category'];

        $config['upload_path']      = './gambar';
        $config['allowed_types']    = 'gif|jpg|png|jpeg';

        // panggil library upload
        $this->load->library('upload', $config);
        // jika benar upload gambar
        if ($this->upload->do_upload('photo_img'))
        {
            $kirim = $this->upload->data('file_name');
        }
        else{
            $kirim = 'no-image.jpg';
        }

		$this->db->where('_article.article_id', $article_id);
		$this->db->update('_article', $data);
		return $kirim;
	}

}

?>