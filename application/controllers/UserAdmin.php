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

  public function userList($offset=0)
  {


    $config['base_url'] = site_url('userAdmin/userList');



    $config['full_tag_open']=' <div class="ui right floated pagination menu">';
    $config['full_tag_close']='</div>';

    $config['first_link'] = '<i class="backward icon"></i>';
    $config['first_tag_open'] =  '<div class="item">';
    $config['first_tag_close'] =  '</div>';

    $config['last_link'] = '<i class="forward icon"></i>';
    $config['last_tag_open'] =  '<div class="item">';
    $config['last_tag_close'] =  '</div>';

    $config['next_link']='<i class="chevron right icon"></i>';
    $config['next_tag_open'] =  '<div class="item">';
    $config['next_tag_close'] =  '</div>';

    $config['prev_link'] ='<i class="chevron left icon"></i>';
    $config['prev_tag_open'] =  '<div class="item">';
    $config['prev_tag_close'] =  '</div>';


    $config['cur_tag_open'] =  '<div class="item">';
    $config['cur_tag_close'] =  '</div>';

    $config['num_tag_open'] = '<div class="item">';
    $config['num_tag_close'] = '</div>';

    $users = $this->ion_auth->users()->result();
    $config['total_rows'] = $this->ion_auth->num_rows();
    $config['per_page'] = 5;

    $this->ion_auth->limit(5);
    $this->ion_auth->offset($offset);
    $data['users'] = $this->ion_auth->users()->result();


    $this->load->library('pagination', $config);
    $data['__pagination']=$this->pagination->create_links();

    $this->load->view('admin/userListPartialView.php',$data);
    $this->ion_auth->logout();

  }


  public function pagin()
  {

  }


  public function edit()
  {
    redirect('user/edit');
  }

}
