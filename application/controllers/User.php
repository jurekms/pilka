<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		}
	}

	public function index()
	{

	}

	public function edit()
	{
		$this->load->helper('form');
		$this->load->view('user/userEditPartialView');


	}




}
