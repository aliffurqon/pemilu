<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load library form validasi
        $this->load->library('form_validation');
        //load model admin
        $this->load->model('user');
        $this->load->model('Biodata_model');
    }

    public function index()
    {

            if($this->user->logged_id())
            {
                //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
                redirect("dashboard");

            }else{

                //jika session belum terdaftar

                //set form validation
                $this->form_validation->set_rules('nik', 'nik', 'required');
                $this->form_validation->set_rules('password', 'password', 'required');

                //set message form validation
                $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

                //cek validasi
                if ($this->form_validation->run() == TRUE) {

                //get data dari FORM
                $nik = $this->input->post("nik", TRUE);
                $password = MD5($this->input->post('password', TRUE));

                //checking data via model
                $checking = $this->user->check_login('user', array('nik' => $nik), array('password' => $password));
                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = array(
                            'nik' => $apps->nik,
                            'password' => $apps->password,
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        redirect('dashboard');

                    }
                }else{

                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> nik atau password salah!</div></div>';
                    $this->load->view('welcome_message', $data);
                }

            }else{

                $this->load->view('welcome_message');
            }

        }

    }

    public function biodata(){
      $data["biodata"] = $this->Biodata_model->getAll();
			$this->load->view("biodata_login",$data);
    }
}
