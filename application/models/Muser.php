<?php 
/**
 * 
 */
class Muser extends CI_Model
{
	
	function user_check($username, $password)
	{
		$this->db->where('user_email', $username);
		$this->db->where('user_password', $password);
		$ambil = $this->db->get('_user');

		return $ambil->row_array();
	}

	function change_user_pass($id, $data){
		// $data['user_login'];
		$data['user_password'];
		$this->db->where('user_id', $id );
		$this->db->update('_user', $data);

		$status = "berhasil";

		return $status;
	}

}

?>