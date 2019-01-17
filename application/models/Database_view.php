<?php

class Database_view extends CI_Model
{
	/**
	The following function is called to insert data into identity table.
	$data variable is array prepared in newuser.php under form_validation function.
	*/

	function can_login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('identity');

		if($query->num_rows() > 0)
		{
			return;
		}
		else
		{
			return false;
		}


	}



	function fetch_identity()
	{
		$query = $this->db->get("identity");
		return $query;
	}

	function delete_data($id){
		$this->db->where("UID", $id);
		$this->db->delete("identity");
	}

	function fetch_checkout()
	{
		$query = $this->db->get("checked_out_items");
		return $query;
	}

	function delete_data_checkout($id)
	{
		$this->db->where("itemID", $id);
		$this->db->delete("checked_out_items");
	}

	function fetch_available()
	{
		$query = $this->db->get("available_inventory");
		return $query;
	}

	function delete_data_available($id){
		$this->db->where("UID", $id);
		$this->db->delete("available_inventory");
	}

	function fetch_key_lists()
	{

	}

	function delete_data_key_lists($id)
	{

	}
}
?>