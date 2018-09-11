<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_praktikum extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('m_praktikum');
    $this->load->model('m_mahasiswa');
  }

  public function jadwal_praktikum(){
    $data = array(
      'title' => 'Jadwal Praktikum',
      'isi'   => 'kalab/v_praktikum',
      'hasil' => $this->m_praktikum->jadwal_praktikum()
    );

    $this->load->view('kalab/layout/wrapper', $data);
  }
}
