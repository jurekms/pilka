<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
			if($this->input->is_ajax_request()) {
				$this->load->view('logout_error_view');
			}
			else {
				$data['__login']='/login/loginPartialView';
				$data['__match']='/match/matchPartialView';
				$this->load->view('main_view',$data);
			}


	}


	public function authorize()
	{
		$loginName = $this->input->post('loginName');
		$password = $this->input->post('password');
		$resetPassword = $this->input->post('resetPassword');

		$this->ion_auth->login($loginName, $password);

		if ($this->ion_auth->logged_in())
		{
				$response['loggedIN']=1;
				echo json_encode($response);
				exit;
		}
		else
		{
				$response['loggedIN']=0;
				echo json_encode($response);
				exit;
		}
	}



		public function passwordReset()
	{
		if (!$this->ion_auth->logged_in())
		{
				$response['loggedIN']=0;
				echo json_encode($response);
				exit;
		}
	}



}
