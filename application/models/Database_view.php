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

	//the delete functions probably need fixed, I am probably not always working with "UID" table.
	//need to better understand how the deleting in this api works

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
		$this->db->where("itemID", $id);
		$this->db->delete("available_inventory");
	}

	function fetch_key_lists()
	{
		$query = $this->db->get("key_lists");
		return $query;
	}

	function delete_data_key_lists($id){
		$this->db->where("UID", $id);
		$this->db->delete("available_inventory");
	}

	function fetch_authorized_keys()
	{
		$query = $this->db->get("authorized_keys");
		return $query;
	}

	function delete_data_authorized_keys($id){
		$this->db->where("UID", $id);
		$this->db->delete("authorized_keys");
	}

	function fetch_list_editors()
	{
		$query = $this->db->get("list_editors");
		return $query;
	}

	function delete_data_list_editors($id){
		$this->db->where("UID", $id);
		$this->db->delete("list_editors");
	}

	function fetch_presets()
	{
		$query = $this->db->get("presets");
		return $query;
	}

	function delete_data_presets($id){
		$this->db->where("UID", $id);
		$this->db->delete("presets");
	}

	function fetch_preset_items()
	{
		$query = $this->db->get("preset_items");
		return $query;
	}

	function delete_data_preset_items($id){
		$this->db->where("UID", $id);
		$this->db->delete("preset_items");
	}

	function fetch_authorized_presets()
	{
		$query = $this->db->get("authorized_presets");
		return $query;
	}

	function delete_data_authorized_presets($id){
		$this->db->where("UID", $id);
		$this->db->delete("authorized_presets");
	}

	function fetch_item_types()
	{
		$query = $this->db->get("item_types");
		return $query;
	}

	function delete_data_item_types($id){
		$this->db->where("UID", $id);
		$this->db->delete("item_types");
	}
}
?>