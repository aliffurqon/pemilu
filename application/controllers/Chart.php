<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chart extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      //load model admin
      $this->load->model('chart_model');
  }

    public function index()
    {
        $data['pie_data']=$this->chart_model->GetPie();
        $this->load->view('count_login',$data);
    }
}
