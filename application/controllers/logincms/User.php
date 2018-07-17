<?php 

/**
 * 
 */
class User extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Muser');
		if (!$this->session->userdata('user'))
		{
			$log = base_url("logincms");
			echo "<script>alert('Anda Harus Login Dahulu'); location='$log';</script>";
		}
	}

	function index()
	{
		if ($this->input->post())
		{


			$username = $this->input->post('user_login');
			$pass = $this->input->post('user_password');
			$password = md5(md5($pass));

			$cek = $this->Muser->user_check($username, $password);
			$cek_username = $cek['user_login'];
			$cek_password = $cek['user_password'];
			$cek_id = $cek['user_id'];

			if ($username == $cek_username && $password == $cek_password ) {
				$data['id'] = $cek_id;
				$data['disable'] ="";
				$this->render_page('backend/user/edit', $data);
			}
			else
			{
				echo "<script>alert('Username dan Password yang Anda Masukkan Salah !');</script>";
				
				$data['user'] = $cek_username;
				redirect('logincms/home', 'refresh', $data);
			}

		}
		
	}

	function change_user_pass($id)
	{
		$update = $this->input->post();
		$pass = $update['password'];
		$enc_pass = md5(md5($pass));

		// $data['user_login'] = $update['user_login'];
		$data['user_password'] = $enc_pass;

		if ($update) {
			$status = $this->Muser->change_user_pass($id, $data);
			if ($status == "berhasil")
			{
				$kirim['disable'] ="disabled";
				$kirim['id'] ="";
				$this->session->set_flashdata('msg', '<div class="alert alert-info">Password Anda Berhasil Diubah</div>');
			}
			else
			{
				$kirim['disable'] ="";
				$kirim['id'] ="";
				$this->session->set_flashdata('msg', '<div class="alert alert-warning">Password Anda GAGAL Diubah</div>');
			}
		$this->render_page('backend/user/edit', $kirim);

		}
	}



}

?>