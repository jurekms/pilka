<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
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
		
		if($this->ion_auth->in_group('admin')) 
		{
			$data['__menu']='/menu/adminMenuPartialView';
			$data['__match']='/match/adminMatchPartialView';
		}
		else
		{
			$data['__menu']='/menu/userMenuPartialView';
			$data['__match']='/match/userMatchPartialView';
		}

		
		$this->load->view('main_view',$data);
	}
	
	public function logout()
	{
		$this->ion_auth->logout();
		redirect('login');
	}
	
	
}