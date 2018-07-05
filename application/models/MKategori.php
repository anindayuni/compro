<?php
class Mkategori extends CI_Model
{
	// function __construct(){
        
 //        parent::__construct();
 //        // $this->load->database();
 //    }


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

    // public function upload(){
    //     $config['upload_path'] = '../../gambar/';
    //     $config['allowed_types'] = 'jpg|png|jpeg';
    //     $config['max_size']  = '2048';
    //     $config['remove_space'] = TRUE;

    //     $this->load->library('upload', $config); // Load konfigurasi uploadnya
    //     if($this->upload->do_upload('category_photo')){ // Lakukan upload dan Cek jika proses upload berhasil
    //       // Jika berhasil :
    //       $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
    //       return $return;
    //     }else{
    //       // Jika gagal :
    //       $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
    //       return $return;
    //     }
    // }

    public function save($input){
        $data['category_name'] = $input['category_name'];
        $data['category_date'] = $input['category_date'];
        $data['category_status'] = $input['category_status'];
        $data['category_type'] = $input['category_type'];
        $data['category_url'] = $input['category_url'];

        $config['upload_path']      = './gambar';
        $config['allowed_types']    = 'gif|jpg|png|jpeg';

        // panggil library upload
        $this->load->library('upload', $config);
        // jika benar upload gambar
        if ($this->upload->do_upload('category_photo'))
        {
            $data['category_photo'] = $this->upload->data('file_name');
        }


        $this->db->insert('_category', $input);
    }
    
}

?>