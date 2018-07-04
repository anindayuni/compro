<?php
class Mkategori extends CI_Model
{
	// function __construct(){
        
 //        parent::__construct();
 //        // $this->load->database();
 //    }


    function show_kategori(){
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

    public function upload(){
        $config['upload_path'] = 'base_url(assets/backend/images)';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']  = '2048';
        $config['remove_space'] = TRUE;

        $this->load->library('upload', $config); // Load konfigurasi uploadnya
        if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
          // Jika berhasil :
          $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
          return $return;
        }else{
          // Jika gagal :
          $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
          return $return;
      }
    }

    public function save($input){
        $data = array(
          'deskripsi'=>$this->input->post('input_deskripsi'),
          'nama_file' => $upload['file']['file_name'],
          'ukuran_file' => $upload['file']['file_size'],
          'tipe_file' => $upload['file']['file_type']
      );

        $this->db->insert('_category', $data);
    }
    
}

?>