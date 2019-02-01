<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
Controller mainly used for navigation
*/
class Main extends CI_Controller {

	public function index()
	{
		$this->frontendhome();
	}

	/**
	BACKEND ONLY
	Functions for Navigation
	*/

	//BACKEND home page
	public function backendhome()
	{
		$this->load->view('backend/backendhome');
	}

	//BACKEND page to view list of databases
	public function viewalldatabase()
	{
		$this->load->view('backend/view-alldatabase');
	}

	//BACKEND DATABASE-VIEW identity
	public function viewidentity()
	{
		$this->load->view('backend/view-identity');
	}

	//BACKEND new user page
	public function newuser()
	{
		$this->load->view('backend/newuser');
	}

	public function editdb()
	{
		$this->load->view('backend/editdb');
	}

	public function newcheckout()
	{
		$this->load->view('backend/newcheckout');
        //this is a comment
	}

	public function newkeylist()
	{
		$this->load->view('backend/newkeylist');
	}

	public function newitem()
	{
		$this->load->view('backend/newitem');
	}


	/**
	FRONTEND ONLY
	Functions for Navigation
	*/
	//FRONTEND home page
	public function frontendhome()
	{
		$this->load->view('frontend/home');
	}

	//FRONTEND checkout page
	public function checkout()
	{
		$this->load->view('frontend/checkout-index');
	}

	public function checkin()
	{
		$this->load->view('frontend/checkout-index');
		//right now checkin and checkout redirect to the same page.
	}




	
}
