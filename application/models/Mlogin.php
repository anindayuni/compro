<?php  
class Mlogin extends CI_Model {
    
// Login User
    function auth($input)
    {

        $username = $input['username'];
        // $password = md5($input['password']);
        $password = md5(md5($input['password']));

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

    function sendEmail($receiver){
        $from = "hilo73ch@gmail.com";    //senders email address
        $subject = 'Reset Password';  //email subject

        $message = '<p>Silahkan klik tombol dibawah ini untuk mereset password</p>
        <a href='.base_url().'logincms/login/set_password?receiver='.$receiver.'><button style="background-color:#5187c0;">Reset Password</button> </a>';
        
        //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_user'] = $from;
        $config['smtp_pass'] = 'sismart16';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = 'TRUE';
        $config['newline'] = "\r\n"; 
        
        $this->load->library('email', $config);
        $this->email->initialize($config);
        //send email
        $this->email->from($from);
        $this->email->to($receiver);
        $this->email->subject($subject);
        $this->email->message($message);
        
        if($this->email->send()){
            //for testing
            // echo "sent to: ".$receiver."<br>";
            // echo "from: ".$from. "<br>";
            // echo "protocol: ". $config['protocol']."<br>";
            // echo "message: ".$message;
            return true;
        }
        else
        {
            echo "email send failed";
            echo $this->email->print_debugger();
            return false;
        } 
    }

    function change_password($input, $email)
    {
        $this->db->where('user_email', $email);
        $cek = $this->db->update('_user', $input);

        if ($cek)
        {
            $status = "berhasil";
        }
        else
        {
            $status = "gagal";
        }

        return $status;
    }

    function cek_user_email($receiver)
    {
        $this->db->select('count(user_email) AS jml');
        $this->db->where('user_email', $receiver);
        $cek_jml = $this->db->get('_user');

        return $cek_jml->row_array();
    }

}

?>