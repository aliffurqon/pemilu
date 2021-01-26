<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voting extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('Voting_model');
        $this->load->model('User');
        $this->load->library('form_validation', 'url');
    }

    public function add()
    {
      if($this->User->logged_id())
  		{
        $voting = $this->Voting_model;
        $validation = $this->form_validation;
        $validation->set_rules('nik','nik','required');
        $validation->set_rules('no_urut','no_urut','required');

        if ($validation->run()==FALSE) {
          $this->load->view("voting");
        }else{
          //fungsi true di dalam post untuk mengamankan data dari sql injection
          $nik=$this->input->post('nik', true);
          $no_urut=$this->input->post('no_urut', true);
          $voting->save($nik,$no_urut);
          redirect(base_url().'index.php/dashboard/voting');
        }

  		}else{

  			//jika session belum terdaftar, maka redirect ke halaman login
  			redirect(base_url());

  		}
    }
}
