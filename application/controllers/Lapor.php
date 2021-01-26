<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapor extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('Lapor_model');
        $this->load->model('User');
        $this->load->library('form_validation', 'url');
    }

    public function add()
    {
      if($this->User->logged_id())
  		{
        $lapor = $this->Lapor_model;
        $validation = $this->form_validation;
        $validation->set_rules('deskripsi','deskripsi','required');

        if ($validation->run()==FALSE) {
          $this->load->view("lapor");
        }else{
          //fungsi true di dalam post untuk mengamankan data dari sql injection
          $nik=$this->input->post('nik', true);
          $deskripsi=$this->input->post('deskripsi', true);
          $lapor->save($nik,$deskripsi);
          $this->session->set_flashdata('success', 'TERIMA KASIH ATAS LAPORANNYA. LAPORAN ANDA SEGERA KAMI TINDAK LANJUTI.');
          $this->load->view("lapor");
        }

  		}else{

  			//jika session belum terdaftar, maka redirect ke halaman login
  			redirect(base_url());

  		}
    }
}
