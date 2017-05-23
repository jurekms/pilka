<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserAdmin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    if (!$this->ion_auth->logged_in())
    {
      redirect('login');
    }

  }

  function index()
  {

  }

  public function userList()
  {
    $data['__edit']='admin\userListPartialView';
    $data['__menu']='/menu/userMenuPartialView';
    $data['__match']='/match/userMatchPartialView';

    $this->load->library('pagination');

    $config['base_url'] = site_url('userAdmin/pagin');
    $config['total_rows'] = 20;
    $config['per_page'] = 5;
    $config['next_tag_open'] =  '<div class="item">';
    $config['next_tag_close'] =  '</div>';

    $config['last_tag_open'] =  '<div class="item">';
    $config['last_tag_close'] =  '</div>';
    $config['cur_tag_open'] =  '<div class="item">';
    $config['cur_tag_close'] =  '</div>';

    $config['first_tag_open'] =  '<div class="item">';
    $config['first_tag_close'] =  '</div>';
    $config['num_tag_open'] = '<div class="item">';
    $config['num_tag_close'] = '</div>';

    $this->pagination->initialize($config);

    $data['__pagination']=$this->pagination->create_links();

    $this->load->view('main_view.php',$data);
  }


  public function pagin()
  {

  }


  public function edit()
  {
    redirect('user/edit');
  }

}
