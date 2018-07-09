<?php 
class Martikel extends CI_Model
{
	function latest_article(){
		$this->db->limit(5);
		$this->db->where('article_status', '1');
		$this->db->where('_category.category_type', 'blog');
		$this->db->join('_category', '_category.category_id = _article.article_id_category', 'left');
		$this->db->join('_photo', '_photo.photo_id_article = _article.article_id', 'left');
		$this->db->order_by('article_id', 'DESC');
		$ambil = $this->db->get('_article');
		return $ambil->result_array();
	}
	function front_article(){
		$this->db->where('article_status', '1');
		$this->db->where('_category.category_type', 'blog');
		$this->db->join('_category', '_category.category_id = _article.article_id_category');
		$this->db->join('_photo', '_photo.photo_id_article = _article.article_id', 'left');
		$this->db->order_by('article_id', 'DESC');
		$ambil = $this->db->get('_article');
		return $ambil->result_array();
	}
	function front_article_pagination($limit,$page=0){
		$this->db->limit($limit, $page);
		$this->db->where('article_status', '1');
		$this->db->where('_category.category_type', 'blog');
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
	function get_random_articles($url)
	{
		$this->db->not_like('article_url', $url);
	    $this->db->where('article_status', '1');
	    $this->db->where('_category.category_type', 'blog');
	    $this->db->join('_category', '_category.category_id = _article.article_id_category', 'left');
		$this->db->join('_photo', '_photo.photo_id_article = _article.article_id', 'left');
	    $this->db->order_by('rand()');
	    $this->db->limit(3);
	    $query = $this->db->get('_article');
	    return $query->result_array();
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
	function show_by_category_pagination($url,$limit,$page=0)
	{
		$this->db->limit($limit, $page);
		$this->db->like('c.category_url', $url);
		$this->db->where('a.article_status', '1');
		$this->db->join('_category c', 'c.category_id = a.article_id_category');
		$this->db->join('_photo', '_photo.photo_id_article = a.article_id', 'left');
		$data = $this->db->get('_article a');
		return $data->result_array();
	}
	function show_artikel() //Menampilkan artikel yang hanya bertipe blog
	{
		$ambil = $this->db->query("SELECT * FROM _article JOIN _category ON _category.category_id = _article.article_id_category WHERE _category.category_type = 'blog' ORDER BY article_id DESC");

		return $ambil->result_array();
	}

	function kategori(){
		
		$ambil = $this->db->query("SELECT * FROM _category WHERE category_type = 'blog' ");
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

        $config['upload_path']      = './gambar/article';
        $config['allowed_types']    = 'gif|jpg|png|jpeg';

        // panggil library upload
        $this->load->library('upload', $config);
        // jika benar upload gambar
        if ($this->upload->do_upload('photo_img'))
        {
            $kirim = $this->upload->data('file_name');
        }
        else
        {
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

	function show_image($article_id){ //Hanya berlaku jika gambar untuk artikel hanya 1, kalau banyak buat lagi function baru
		$this->db->where('photo_id_article', $article_id);
		$ambil = $this->db->get('_photo');

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

        $config['upload_path']      = './gambar/article';
        $config['allowed_types']    = 'gif|jpg|png|jpeg';

        // panggil library upload
        $this->load->library('upload', $config);
        // jika benar upload gambar
        if ($this->upload->do_upload('photo_img'))
        {
        	$kirim = $this->upload->data('file_name');

        	$this->db->where('photo_id_article', $article_id);
        	$hasil = $this->db->get('_photo');
        	$ambil = $hasil->row_array();

        	$gambar = $ambil['photo_img'];

        	if (!empty($gambar)) {
        		unlink("./gambar/article/".$gambar);
        	}

        }
        else{
        	$kirim = '0';
        }

		$this->db->where('_article.article_id', $article_id);
		$this->db->update('_article', $data);
		return $kirim;
	}

	function update_photo($photo, $article_id){
		$this->db->where('photo_id_article', $article_id);
		$this->db->update('_photo', $photo);
	}

	// static pages
		function get_contact_us()
	{
		$this->db->like('_article.article_url', 'contact-us');
	    $this->db->where('_article.article_status', '1');
	    $this->db->where('_category.category_status', '1');
	    $this->db->where('_category.category_type', 'static');
	    $this->db->join('_category', '_category.category_id = _article.article_id_category', 'left');
		// $this->db->join('_photo', '_photo.photo_id_article = _article.article_id', 'left');
	    $query = $this->db->get('_article');
	    return $query->row_array();
	}
	function get_about_us()
	{
		$this->db->like('_article.article_url', 'about-us');
	    $this->db->where('_article.article_status', '1');
	    $this->db->where('_category.category_status', '1');
	    $this->db->where('_category.category_type', 'static');
	    $this->db->join('_category', '_category.category_id = _article.article_id_category', 'left');
		// $this->db->join('_photo', '_photo.photo_id_article = _article.article_id', 'left');
	    $query = $this->db->get('_article');
	    return $query->row_array();
	}
	function get_faq()
	{
		$this->db->like('_article.article_url', 'faq');
	    $this->db->where('_article.article_status', '1');
	    $this->db->where('_category.category_status', '1');
	    $this->db->where('_category.category_type', 'static');
	    $this->db->join('_category', '_category.category_id = _article.article_id_category', 'left');
		// $this->db->join('_photo', '_photo.photo_id_article = _article.article_id', 'left');
	    $query = $this->db->get('_article');
	    return $query->row_array();
	}
	function get_static_page()
	{
	    $this->db->where('_article.article_status', '1');
	    $this->db->where('_category.category_status', '1');
	    $this->db->where('_category.category_type', 'static');
	    $this->db->join('_category', '_category.category_id = _article.article_id_category', 'left');
	    $query = $this->db->get('_article');
	    return $query->result_array();
	}
	function get_gallery()
	{
		$this->db->where('_article.article_status', '1');
	    $this->db->where('_category.category_status', '1');
	    $this->db->where('_category.category_type', 'gallery');
	    $this->db->join('_category', '_category.category_id = _article.article_id_category', 'left');
		$this->db->join('_photo', '_photo.photo_id_article = _article.article_id', 'left');
	    $query = $this->db->get('_article');
	    return $query->result_array();
	}
	function get_gallery_pagination($limit, $page)
	{
		$this->db->where('_article.article_status', '1');
	    $this->db->where('_category.category_status', '1');
	    $this->db->where('_category.category_type', 'gallery');
	    $this->db->join('_category', '_category.category_id = _article.article_id_category', 'left');
		$this->db->join('_photo', '_photo.photo_id_article = _article.article_id', 'left');
	    $query = $this->db->get('_article',$limit,$page);
	    return $query->result_array();
	}

	function delete_photo($article_id)
	{
		$this->db->where('photo_id_article', $article_id);
        $data = $this->db->get('_photo');
        $ambil = $data->row_array();
  
        $gambar = $ambil['photo_img'];

        if (!empty($gambar)) {
            unlink("./gambar/article/".$gambar);
        }

		$this->db->where('photo_id_article', $article_id);
		$this->db->delete('_photo');
	}

	function delete($article_id)
	{
		$this->db->where('article_id', $article_id);
		$this->db->delete('_article');
	}


}

?>