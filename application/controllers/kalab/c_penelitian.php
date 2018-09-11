<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_penelitian extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('m_penelitian');
  }

  public function index(){
    $data = array(
      'title'	=> 'Penelitian',
      'hasil'  => $this->m_penelitian->penelitian(),
      'isi'		=> 'admin/penelitian/v_penelitian'
    );

    $this->load->view('kalab/layout/wrapper', $data);
  }
}
