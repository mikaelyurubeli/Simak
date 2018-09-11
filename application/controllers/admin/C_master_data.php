<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_master_data extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('m_master_data');
  }

  	public function index(){
	    $data = array(
	      'title' => 'Master Data',
	      'hasil' => $this->m_master_data->view()->result(),
	      'isi'   => 'admin/master_data/v_master_data'
	    );
	    $this->load->view('admin/layout/wrapper', $data);
	}

	public function edit_master_data($id_master){
    $where = array('id_master' => $id_master);
    $data = array(
      'title' => 'Edit Master Data',
      'isi'   => 'admin/master_data/v_add_masterdata',
      'data' => $this->m_master_data->edit($where, 'master_data')->result()
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function update_masterdata(){
    $this->form_validation->set_rules('semester', 'semester', 'required');
    $this->form_validation->set_rules('tahun_akademik', 'tahun_akademik', 'required');
    $this->form_validation->set_rules('daftar_praktikum', 'daftar_praktikum', 'required');

    if($this->form_validation->run() == FALSE){
      echo "<script>alert('Gagal merubah data!');</script>";
      redirect('admin/c_master_data/', 'refresh');
    } else {
      $id_master		    = $this->input->post('id_master');
      $semester			    = $this->input->post('semester');
      $tahun_akademik   = $this->input->post('tahun_akademik');
      $daftar_praktikum = $this->input->post('daftar_praktikum');

      $data = array(
        'semester'        => $semester,
        'tahun_akademik'  => $tahun_akademik,
        'daftar_praktikum'=> $daftar_praktikum,
      );

      $where = array(
        'id_master' => $id_master
      );

      $this->m_master_data->update($where, $data, 'master_data');
      echo "<script>alert('Data Berhasil diperbaharui!');</script>";
      redirect('admin/c_master_data/', 'refresh');
    }
  }
}