<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_asisten extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('m_asisten');
  }

  public function index(){
    $data = array(
      'title' => 'Pendaftaran Asisten',
      'hasil' => $this->m_asisten->daftar_pendaftar(),
      'isi'   => 'kalab/v_asisten'
    );

    $this->load->view('kalab/layout/wrapper', $data);
  }
}
