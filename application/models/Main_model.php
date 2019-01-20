<?php

class Main_model extends CI_Model
{
	/**
	The following function is called to insert data into identity table.
	$data variable is array prepared in newuser.php under form_validation function.
	*/
	function insert_data($data)
	{
		$this->db->insert("identity", $data);
	}

	//add function here to insert to other tables
}
?>