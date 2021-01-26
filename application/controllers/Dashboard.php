<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('user');
        $this->load->model('Biodata_model');
        $this->load->model('Voting_model');
        $this->load->model('chart_model');
    }

	public function index()
	{
		if($this->user->logged_id())
		{

			$this->load->view("dashboard");

		}else{

			//jika session belum terdaftar, maka redirect ke halaman login
			redirect(base_url());

		}
	}

  public function voting()
	{
		if($this->user->logged_id())
		{
      $nik = $this->session->userdata("nik");
      $data["voting"] = $this->Voting_model->filter($nik);
      $data["biodata"] = $this->Biodata_model->getAll();
			$this->load->view("voting",$data);

		}else{

			//jika session belum terdaftar, maka redirect ke halaman login
			redirect(base_url());

		}
	}

  public function biodata()
	{
    if($this->user->logged_id())
		{
      $data["biodata"] = $this->Biodata_model->getAll();
			$this->load->view("biodata",$data);
    }else{
      //jika session belum terdaftar, maka redirect ke halaman login
			redirect(base_url());

		}
	}

  public function count()
	{
    if($this->user->logged_id())
		{
      $data['pie_data']=$this->chart_model->GetPie();
      $this->load->view('chart',$data);
    }else{
      //jika session belum terdaftar, maka redirect ke halaman login
			redirect(base_url());

		}
	}

  public function Reset_password()
  {
    if($this->user->logged_id())
		{

			$this->load->view("ganti_password");

		}else{

			//jika session belum terdaftar, maka redirect ke halaman login
			redirect(base_url());

		}
  }

  public function lapor()
	{
		if($this->user->logged_id())
		{

			$this->load->view("lapor");

		}else{

			//jika session belum terdaftar, maka redirect ke halaman login
			redirect(base_url());

		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

}
