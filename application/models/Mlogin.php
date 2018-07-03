<?php  
class Mlogin extends CI_Model {
    
// Login User
    function auth($input)
    {

        $username = $input['username'];
        $password = md5($input['password']);
        // $password = md5(md5($input['password']));

        $this->db->where('user_login', $username);
        $this->db->where('user_password', $password);
        $ambil = $this->db->get('_user');
        $hasil = $ambil->num_rows();

        if($hasil>0) {
            $akun = $ambil->row_array();
            $this->session->set_userdata('user', $akun);

            return 'berhasil';
        }
        else
        {
            return 'gagal';
        }
    }
}

?>