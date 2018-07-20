<?php
class Mkategori extends CI_Model
{
    function all_categories()
    {
        $data = $this->db->query("SELECT c.category_name, c.category_url, COUNT(a.article_id_category) as jml FROM _category c
                        LEFT JOIN _article a on c.category_id = a.article_id_category
                        WHERE c.category_type = 'blog' AND c.category_status = 1 AND a.article_status = 1
                        GROUP BY c.category_name");
        return $data->result_array();
    }
    function get_name($url)
    {
        $this->db->like('category_url',$url);
        return $this->db->get('_category')->row_array();
    }
    function show_kategori(){
        $this->db->order_by('category_id', 'DESC');
        $data =  $this->db->get('_category');
        return $data->result_array();
    }
    function type(){
        $enums = array();
        // if ($table == '' || $field == '') return $enums;
        $CI =& get_instance();
        preg_match_all("/'(.*?)'/", $this->db->query("SHOW COLUMNS FROM _category LIKE 'category_type'")->row()->Type, $matches);
        foreach ($matches[1] as $key => $value) {
            $enums[$value] = $value; 
        }
        return $enums;
    }
    public function save($input){
        $data['category_name'] = $input['category_name'];
        $data['category_date'] = $input['category_date'];
        $data['category_status'] = $input['category_status'];
        $data['category_type'] = $input['category_type'];
        $data['category_url'] = $input['category_url'];

        $config['upload_path']      = './gambar/category';
        $config['allowed_types']    = 'gif|jpg|png|jpeg';
        $config['max_size']    = '1024';

        // panggil library upload
        $this->load->library('upload', $config);
        // jika benar upload gambar
        if ($this->upload->do_upload('category_photo'))
        {
            $data['category_photo'] = $this->upload->data('file_name');
            $status = "berhasil";
        }
        else
        {
            $data['category_photo'] = 'no-image.jpg';
            $status = "gagal";
        }

        $this->db->insert('_category', $data);
        

        return $status;
    }

    public function category_by_id($category_id){
        $this->db->where('category_id', $category_id);
        $ambil = $this->db->get('_category');

        return $ambil->result_array();
    }

    public function edit($input, $category_id)
    {
        $data['category_name'] = $input['category_name'];
        $data['category_date'] = $input['category_date'];
        $data['category_status'] = $input['category_status'];
        $data['category_type'] = $input['category_type'];
        $data['category_url'] = $input['category_url'];

        $config['upload_path']      = './gambar/category';
        $config['allowed_types']    = 'gif|jpg|png|jpeg';

        // panggil library upload
        $this->load->library('upload', $config);
        // jika benar upload gambar
        if ($this->upload->do_upload('category_photo'))
        {
            $data['category_photo'] = $this->upload->data('file_name');

            $this->db->where('category_id', $category_id);
            $hasil = $this->db->get('_category');
            $ambil = $hasil->row_array();

            $foto_lama = $ambil['category_photo'];

            if (!empty($foto_lama)) {
                unlink("./gambar/category/".$foto_lama);
            }

        }

        $this->db->where('category_id', $category_id);
        $this->db->update('_category', $data);
    }

    public function delete($category_id)
    {
        $this->db->where('category_id', $category_id);
        $data = $this->db->get('_category');
        $ambil = $data->row_array();
  
        $gambar = $ambil['category_photo'];

        if (!empty($gambar)) {
            unlink("./gambar/category/".$gambar);
        }
        elseif ($gambar != "no-image.jpg") {
            unlink("./gambar/category/".$gambar);
        }
        
        $this->db->where('category_id', $category_id);
        $this->db->delete('_category');

        $status = "berhasil";

        return $status;
    }
    
}

?>