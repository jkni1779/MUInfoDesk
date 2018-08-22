<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
BACKEND
Controller used to view table 
*/
class Databaseview extends CI_Controller 
{

	public function index()
	{
		//$this->load->view('backend/newuser');
		$this->identity();
	}

	public function identity()
	{
		$this->load->model("Database_view");
		$data["fetch_identity"] = $this->Database_view->fetch_identity();
		$this->load->view('backend/view-identity', $data);
	}

	public function delete_data(){
		$id = $this->uri->segment(3);
		$this->load->model("Database_view");
		$this->Database_view->delete_data($id);
		redirect(base_url() . "Databaseview/deleted"); 
	}

	public function checkout()
	{
		$this->load->model("Database_view");
		$data["fetch_checkout"] = $this->Database_view->fetch_checkout();
		$this->load->view('backend/view-checkout', $data);
	}	

	public function delete_data_checkout()
	{
		$id = $this->uri->segment(3);
		$this->load->model("Database_view");
		$this->Database_view->delete_data_checkout($id);
		redirect(base_url() . "Databaseview/deleted");
	}

	public function deleted(){
		$this->index();
	}



}
