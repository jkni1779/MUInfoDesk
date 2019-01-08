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

	public function deleted()
	{
		$this->index();
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
		redirect(base_url() . 'Databaseview/login');
	}

}
