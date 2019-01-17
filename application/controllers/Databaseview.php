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
		$this->login();
	}

	public function identity()
	{
		$this->load->model("Database_view");
		$data["fetch_identity"] = $this->Database_view->fetch_identity();
		$this->load->view('backend/view-identity', $data);
	}

	public function delete_data()
	{
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

	public function available()
	{
		$this->load->model("Database_view");
		$data["fetch_available"] = $this->Database_view->fetch_available();
		$this->load->view('backend/view-availableinventory', $data);
	}	

	public function delete_data_available()
	{
		$id = $this->uri->segment(3);
		$this->load->model("Database_view");
		$this->Database_view->delete_data_available($id);
		redirect(base_url() . "Databaseview/deleted");
	}

	public function key_lists()
	{
		$this->load->model("Database_view");
		$data["fetch_key_lists"] = $this->Database_view->fetch_key_lists();
		$this->load->view('backend/view-keylists', $data);
	}

	public function delete_data_key_lists()
	{
		$id = $this->uri->segment(3);
		$this->load->model("Database_view");
		$this->Database_view->delete_data_key_lists($id);
		redirect(base_url() . "Databaseview/deleted");
	}



	public function deleted()
	{
		$this->index();
		//fix this for deleting from database, right now just redirects to logout screen
		//should go back to whatever database view it was called from. Idk how to do that
	}

	public function login()
	{
		$data['title'] = 'What up Homie?';
		$this->load->view("backend/login", $data);
	}

	public function login_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run())
		{
			//true
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->load->model('Database_view');

			if($this->Database_view->can_login($username, $password));
			{
				$session_data = array(
					'username' => $username
				);
				$this->session->set_userdata($session_data);
				redirect(base_url() . 'Databaseview/enter');
			}
			if($this->Database_view->can_login($username, $password) == false){
				$this->session->set_flashdata('error', 'Invalid username or password. If problem still persists, please contact an ITAV personnel');
				redirect(base_url() . 'Databaseview/login');
			}
		}
		else
		{
			$this->login();
		}

	}

	function enter()
	{
		if($this->session->userdata('username') != '')
		{
			echo '<h2>Welcome - '.$this->session->userdata('username').'<h2>';
			echo '<a href="'.base_url().'Databaseview/logout">Logout</a>';
		}
		else
		{
			redirect(base_url() . 'Databaseview/login');
		}
	}

	function logout()
	{
		$this->session->unset_userdata('username');
		redirect(base_url() . 'Main/frontendhome');
	}

}
