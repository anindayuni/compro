<?php
class Mperusahaan extends CI_Model
{
	function __construct(){
        
        parent::__construct();
        // $this->load->database();
    }

    // Login User
	function auth($input)
	{
		$username = $input['AdmUsr'];
		$password = md5(md5($input['AdmPswd']));

		$this->db->where('perusahaan_user', $username);
		$this->db->where('perusahaan_password', $password);
		$this->db->where('status', 1);
		$ambil = $this->db->get('_perusahaan');
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

	 //send confirm mail
    public function sendEmail($receiver){
        $from = "hilo73ch@gmail.com";    //senders email address
        $subject = 'Verifikasi Email Pendaftaran - Absensi Karyawan';  //email subject

        $message = 'Terima kasih sudah bergabung dengan Absensi Karyawan.<br><br> Silahkan melakukan konfirmasi pendaftaran dengan menekan link dibawah ini. <br><br>

	        <a href='.base_url().'home/confirmEmail/'.md5(md5($receiver)).'>KONFIRMASI EMAIL</a><br><br>

	        Thanks';
        
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
            echo "sent to: ".$receiver."<br>";
            echo "from: ".$from. "<br>";
            echo "protocol: ". $config['protocol']."<br>";
            echo "message: ".$message;
            return true;
        }else{
            echo "email send failed";
            echo $this->email->print_debugger();
            return false;
        } 
    }
}
?>