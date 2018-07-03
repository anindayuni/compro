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
    
}

?>