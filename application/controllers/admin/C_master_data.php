<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_master_data extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('m_master_data');
    $this->load->model('m_user');
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
      $type_smt         = "";

      if($semester % 2 == 0) { 
        $type_smt = "Genap";
      } else { 
        $type_smt = "Ganjil";
      }

      $data = array(
        'semester'        => $semester,
        'tahun_akademik'  => $tahun_akademik,
        'daftar_praktikum'=> $daftar_praktikum,
        'type_smt'        => $type_smt,
      );

      $where = array(
        'id_master' => $id_master
      );

      $this->m_master_data->update($where, $data, 'master_data');
      echo "<script>alert('Data Berhasil diperbaharui!');</script>";
      redirect('admin/c_master_data/', 'refresh');
    }
  }

  public function dosen() {
    $data = array (
      'title' => 'Dosen',
      'data'  => $this->m_master_data->data_dosen(),
      'isi'   => 'admin/master_data/v_dosen' 
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function tambah_dosen() {
    $data = array(
      'title' => 'Tambah Dosen',
      'isi'   => 'admin/master_data/v_tambah_dosen'
    );

    $this->load->view('admin/layout/wrapper', $data);
  }
  
	public function edit_dosen($id_dosen){
    $where = array('id_dosen' => $id_dosen);
    $data = array(
      'title' => 'Edit Dosen',
      'isi'   => 'admin/master_data/v_edit_dosen',
      'data' => $this->m_master_data->edit($where, 'dosen')->result()
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function do_add_dosen(){
    $this->form_validation->set_rules('nip', 'nip', 'trim|required');
    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
  
    if($this->form_validation->run() == FALSE){
      echo "<script>alert('Gagal menambah data!');</script>";
      redirect('admin/c_master_data/tambah_dosen');
    } else {
      $nip = $this->input->post('nip');
      $nama = $this->input->post('nama');

      $data = array(
        'nip'  => $nip,
        'nama'  => $nama
      );

      $this->m_master_data->add_dosen($data, 'dosen');
      echo "<script>alert('Berhasil menambah data!');</script>";
      redirect('admin/c_master_data/dosen', 'refresh');  
    }
  }

  public function do_update_dosen(){
    $this->form_validation->set_rules('id_dosen', 'id_dosen', 'required');
    $this->form_validation->set_rules('nip', 'nip', 'required');
    $this->form_validation->set_rules('nama', 'nama', 'required');

    if($this->form_validation->run() == FALSE){
      echo "<script>alert('Gagal merubah data!');</script>";
      redirect('admin/c_master_data/', 'refresh');
    } else {
      $id_dosen = $this->input->post('id_dosen');
      $nip      = $this->input->post('nip');
      $nama     = $this->input->post('nama');

      $data = array(
        'id_dosen'  => $id_dosen,
        'nip'       => $nip,
        'nama'      => $nama
      );

      $where = array(
        'id_dosen' => $id_dosen
      );

      $this->m_master_data->update($where, $data, 'dosen');
      echo "<script>alert('Data Berhasil diperbaharui!');</script>";
      redirect('admin/c_master_data/dosen', 'refresh');
    }
  }

  public function do_delete_dosen($id_dosen){
    $data = $this->m_master_data->get_nama_dosen($id_dosen);
    $where = array('dosen' => $data[0]['nama']);
    $where_delete = array('id_dosen' => $id_dosen);

    $check = $this->m_master_data->is_had_child($where, "praktikum");
    if (count($check) > 0) {
      echo "<script>alert('Data dosen ini tidak dapat dihapus! \\nNama dosen ini sudah terdaftar dalam praktikum \\nUntuk menghapus nama dosen ini, silahkan hubungi administrator!');</script>";
    } else {
      $this->m_user->delete_user($where_delete, 'dosen');
      echo "<script>alert('Data berhasil dihapus!');</script>";
    }
    redirect('admin/c_master_data/dosen', 'refresh');
  }

  public function view_semester() {
    $data = array (
      'title' => 'Dosen',
      'data'  => $this->m_master_data->data_semester(),
      'isi'   => 'admin/master_data/v_semester' 
    );

    $this->load->view('admin/layout/wrapper', $data);
  }
  
  public function tambah_semester() {
    $data = array (
      'title' => 'Dosen',
      'isi'   => 'admin/master_data/v_add_semester' 
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function do_add_semester(){
    $this->form_validation->set_rules('semester', 'semester', 'trim|required');
  
    if($this->form_validation->run() == FALSE){
      echo "<script>alert('Gagal menambah data!');</script>";
      redirect('admin/c_master_data/tambah_semester');
    } else {
      $semester = $this->input->post('semester');

      $data = array(
        'semester'  => $semester,
      );

      $where = array('semester' => $semester);
      $check = $this->m_master_data->check_duplicate($where, 'semester');

      if (count($check) > 0) {
        echo "<script>alert('Semester {$semester} sudah dibuat!');</script>";
        redirect('admin/c_master_data/tambah_semester', 'refresh');
      } else {
        $this->m_master_data->add_dosen($data, 'semester');
        echo "<script>alert('Berhasil menambah data!');</script>";
        redirect('admin/c_master_data/view_semester', 'refresh');
      }
    }
  }
  
  public function view_nama_praktikum() {
    $data = array (
      'title' => 'Nama Praktikum',
      'data' => $this->m_master_data->data_nama_praktikum(),
      'isi' => 'admin/master_data/v_nama_praktikum'
    );

    $this->load->view('/admin/layout/wrapper', $data);
  }

  public function tambah_nama_praktikum() {
    $data = array (
      'title' => 'Tambah Nama Praktikum',
      'isi'   => 'admin/master_data/v_add_nama_praktikum' 
    );

    $this->load->view('admin/layout/wrapper', $data);
  }
  
  public function do_add_nama_praktikum(){
    $this->form_validation->set_rules('nama_praktikum', 'nama_praktikum', 'trim|required');
  
    if($this->form_validation->run() == FALSE){
      echo "<script>alert('Gagal menambah data!');</script>";
      redirect('admin/c_master_data/tambah_nama_praktikum');
    } else {
      $nama_praktikum = $this->input->post('nama_praktikum');

      $data = array(
        'nama_praktikum'  => $nama_praktikum,
      );

      $where = array('nama_praktikum' => $nama_praktikum);
      $check = $this->m_master_data->check_duplicate($where, 'nama_praktikum');

      if (count($check) > 0) {
        echo "<script>alert('Nama Praktikum: {$nama_praktikum} sudah dibuat!');</script>";
        redirect('admin/c_master_data/tambah_nama_praktikum', 'refresh');
      } else {
        $this->m_master_data->add_dosen($data, 'nama_praktikum');
        echo "<script>alert('Berhasil menambah data!');</script>";
        redirect('admin/c_master_data/view_nama_praktikum', 'refresh');
      }
    }
  }
    
	public function edit_nama_praktikum($id){
    $where = array('id_nama_prak' => $id);
    $data = array(
      'title' => 'Edit Nama Praktikum',
      'isi'   => 'admin/master_data/v_edit_nama_praktikum',
      'data' => $this->m_master_data->edit($where, 'nama_praktikum')->result()
    );

    $this->load->view('admin/layout/wrapper', $data);
  }
  
  public function do_update_nama_praktikum(){
    $this->form_validation->set_rules('id_nama_prak', 'id_nama_prak', 'required');
    $this->form_validation->set_rules('nama_praktikum', 'nama_praktikum', 'required');

    if($this->form_validation->run() == FALSE){
      echo "<script>alert('Gagal merubah data!');</script>";
      redirect('admin/c_master_data/view_nama_praktikum', 'refresh');
    } else {
      $id_nama_prak = $this->input->post('id_nama_prak');
      $nama_praktikum     = $this->input->post('nama_praktikum');

      $data = array(
        'id_nama_prak'  => $id_nama_prak,
        'nama_praktikum' => $nama_praktikum
      );

      $where = array(
        'id_nama_prak' => $id_nama_prak
      );

      $this->m_master_data->update($where, $data, 'nama_praktikum');
      echo "<script>alert('Data Berhasil diperbaharui!');</script>";
      redirect('admin/c_master_data/view_nama_praktikum', 'refresh');
    }
  }
  
  public function do_delete_nama_praktikum($id){
    $data = $this->m_master_data->get_nama_praktikum($id);
    $where = array('nama_praktikum' => $data[0]['nama_praktikum']);
    $where_delete = array('id_nama_prak' => $id);

    $check = $this->m_master_data->is_had_child($where, "praktikum");
    if (count($check) > 0) {
      echo "<script>alert('Nama praktikum ini tidak dapat dihapus! \\nNama praktikum ini sudah digunakan \\nUntuk menghapus nama praktikum ini, silahkan hubungi administrator!');</script>";
    } else {
      $this->m_user->delete_user($where_delete, 'nama_praktikum');
      echo "<script>alert('Data berhasil dihapus!');</script>";
    }
    redirect('admin/c_master_data/view_nama_praktikum', 'refresh');
  }

}