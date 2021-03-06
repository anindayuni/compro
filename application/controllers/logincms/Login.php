<?php

// session_start(); //we need to start session in order to access it through CI

Class Login extends CI_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->model('Mlogin');
	}

	function index()
	{
		$data['hasil'] =" ";
		$data['title'] = 'Company Profile';
		

		if ($this->input->post()) {
			$cek = $this->Mlogin->auth($this->input->post());
			
			if ($cek=='berhasil') {
				$data['hasil'] = "berhasil";
			}
			else
			{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger">Password / Username Anda SALAH</div>');
				$data['hasil'] = "gagal";
			}
		}


		$this->load->view('backend/login',$data);
	}
	function logout()
	{
		 $user_data = $this->session->all_userdata();
	        foreach ($user_data as $key => $value) {
	            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
	                $this->session->unset_userdata($key);
	            }
	        }
	    $this->session->sess_destroy();
	    echo "<script>alert('Anda berhasil logout !');location='".base_url("logincms")."'</script>";
	}

	function reset_password()
	{
		$input = $this->input->post();
		$receiver = $input['user_email'];
		$cek_email = $this->Mlogin->cek_user_email($receiver);
		$cek_jml = $cek_email['jml'];
		
		if ($cek_jml == 0)
		{
			$this->session->set_flashdata('msg', '<div class="alert alert-danger">Maaf, email anda tidak terdaftar</div>');
			// $data['hasil'] = "gagal";
		}
		else
		{
			$kirim_email = $this->Mlogin->sendEmail($receiver);

			if ($kirim_email)
			{
				$this->session->set_flashdata('msg', '<div class="alert alert-info">Link Reset Password Telah dikirim. Silahkan Cek Email Anda</div>');
				
			}
		}

		redirect('logincms/login');
	}

	function set_password()
	{
		$data['hasil'] =" ";
		$data['email'] = $_GET['receiver'];

		if ($this->input->post()) {
			$pass = $this->input->post('password');
			$input['user_password'] = md5(md5($pass));
			$email = $this->input->post('email');
			$status = $this->Mlogin->change_password($input, $email);

			if ($status == "berhasil")
			{
				$this->session->set_flashdata('msg', '<div class="alert alert-info">Password Anda berhasil dirubah</div>');
				// $this->load->view('backend/login', $data);
				redirect('logincms/login');
			}
			else
			{
				echo "Password Gagal Diubah";
			}
			
		}

		$this->load->view('backend/reset_password', $data);
	}

}

?>