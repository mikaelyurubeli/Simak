<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_asisten extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('m_crud');
    $this->load->model('m_asisten');
    $this->load->model('m_praktikum');
    $this->load->model('m_master_data');
  }

  public function index(){
    $data = array(
      'title' => 'Pendaftaran Asisten',
      'hasil' => $this->m_asisten->daftar_pendaftar(),
      'isi'   => 'admin/asisten/v_pendaftaran_asisten'
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function asisten(){
    $data = array(
      'title'	=> 'Pendaftaran Asisten',
      'isi'		=> 'admin/asisten/v_asisten'
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function edit_asisten($id){
    $where = array ('id_daftar' => $id);

    $data = array(
      'title' => 'Ubah Form Pendaftaran Asisten',
      'isi' => 'admin/asisten/v_edit_form',
      'asisten' => $this->m_crud->edit($where, 'daftar_asisten')->result(),
      'praktikum' => $this->m_praktikum->praktikum2()
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function update_asisten(){
    $this->form_validation->set_rules('pilihan_praktikum1', 'pilihan_praktikum1', 'trim|required');
    $this->form_validation->set_rules('pilihan_praktikum2', 'pilihan_praktikum2', 'trim|required');
    $this->form_validation->set_rules('pilihan_praktikum3', 'pilihan_praktikum3', 'trim|required');
    $this->form_validation->set_rules('jam_kosong', 'jam_kosong', 'trim|required');

    if($this->form_validation->run() == FALSE){
      redirect('admin/c_asisten/edit_asisten');
    } else {
      $id_daftar = $this->input->post('id_daftar');
      $pilihan_praktikum1 = $this->input->post('pilihan_praktikum1');
      $pilihan_praktikum2 = $this->input->post('pilihan_praktikum2');
      $pilihan_praktikum3 = $this->input->post('pilihan_praktikum3');
      $jam_kosong = $this->input->post('jam_kosong');

      $data = array(
        'pilihan_praktikum1'  => $pilihan_praktikum1,
        'pilihan_praktikum2'  => $pilihan_praktikum2,
        'pilihan_praktikum3'  => $pilihan_praktikum3,
        'jam_kosong'  => $jam_kosong
      );

      $where = array(
        'id_daftar' => $id_daftar
      );

      $this->m_crud->update($where, $data, 'daftar_asisten');
      echo "<script>alert('Data berhasil diperbaharui');</script>";
      redirect('admin/c_asisten', 'refresh');
    }
  }

  //cetak form pdf praktikum
  //Test Fungsi Print
  public function cetak_form_daftar($id_mahasiswa, $id_daftar){
    define('FPDF_FONTPATH',$this->config->item('fonts_path'));

    $this->session->all_userdata();
    $daftar = $this->m_asisten->data_pendaftaran($id_daftar);
    $master_data = $this->m_master_data->view()->row_array();
    
    $semester = $master_data['semester'];
    $data_type_smt = 1;
    if ($daftar['semester_pk'] != NULL) {
      $semester = $daftar['semester_pk'];
      $data_type_smt = $daftar['semester_pk'];
    }

    $type_smt = strtoupper($master_data['type_smt']);
    if ($data_type_smt % 2 == 0) {
      $type_smt = "GENAP";
    } else {
      $type_smt = "GANJIL";
    }

    $tahun_akademik = $master_data['tahun_akademik'];
    if ($daftar['tahun_akademik'] != NULL) {
      $tahun_akademik = $daftar['tahun_akademik'];
    }

    $data = array(
      'title'           => 'Praktikum',
      'daftar'          => $daftar,
      'mahasiswa'       => $this->m_asisten->asisten_mahasiswa($id_mahasiswa),
      'semester'        => $master_data['semester'],
      'type_smt'        => $type_smt,
      'tahun_akademik'  => $tahun_akademik
    );

    // Load view "pdf_report" untuk menampilkan hasilnya
    $this->load->view('admin/asisten/v_print_pendaftaran', $data);
  }

}
