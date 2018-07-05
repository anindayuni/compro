<?php

class Mcontact extends CI_Model
{
	
	function add_data($input)
	{
		return $this->db->insert('_contact_us', $input);
	}
}
?>