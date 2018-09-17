<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_asisten extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('m_asisten');
    $this->load->model('m_praktikum');
    $this->load->model('m_mahasiswa');
  }

  public function index(){
		$data = array(
			'title'  => 'Daftar Asisten',
			'isi'	   => 'mahasiswa/v_asisten',
      'praktikum' => $this->m_praktikum->praktikum2()
      //'hasil' => $this->m_praktikum->check_daftar($id_mahasiswa)
		);

		$this->load->view('mahasiswa/layout/wrapper', $data);
  }
  
  public function pendaftaran_asisten(){
		$data = array(
			'title'  => 'Pendaftaran Asisten',
			'isi'	   => 'mahasiswa/v_pendaftaran_asisten',
      'praktikum' => $this->m_praktikum->praktikum2()
		);

		$this->load->view('mahasiswa/layout/wrapper', $data);
	}

  //untuk menghandle pendaftaran
  public function do_daftar_asisten(){
    $this->form_validation->set_rules('pilihan_praktikum1', 'pilihan_praktikum1', 'required');
    $this->form_validation->set_rules('pilihan_praktikum2', 'pilihan_praktikum2', 'required');
    $this->form_validation->set_rules('pilihan_praktikum3', 'pilihan_praktikum3', 'required');
    $this->form_validation->set_rules('nilai_praktikum', 'nilai_praktikum', 'required');
    $this->form_validation->set_rules('semester', 'semester', 'required');
    $this->form_validation->set_rules('jam_kosong', 'jam_kosong', 'required');

    if($this->form_validation->run() == FALSE){
      echo "<script>alert('Terdapat kesalahan dalam pengisian form pendaftaran!');</script>";
      redirect('mahasiswa/c_asisten');
    } else {

      $pilihan1 = $this->input->post('pilihan_praktikum1');
      $pilihan2 = $this->input->post('pilihan_praktikum2');
      $pilihan3 = $this->input->post('pilihan_praktikum3');
      $nilai    = $this->input->post('nilai_praktikum');
      $semester = $this->input->post('semester');
      $jam_kosong = $this->input->post('jam_kosong');
      $id       = $this->m_mahasiswa->mahasiswa_peminjaman()->row_array();
      $id_mahasiswa = $id['id_mahasiswa'];
      $check = $this->m_asisten->check_pendaftaran($id_mahasiswa);

      if(count($check) > 2){
        echo "<script>alert('Anda sudah melakukan pendaftaran, harap hubungi administrator laboratorium!');</script>";
        redirect('mahasiswa/c_asisten', 'refresh');
      } else {
        $data = array(
          'pilihan_praktikum1' => $pilihan1,
          'pilihan_praktikum2' => $pilihan2,
          'pilihan_praktikum3' => $pilihan3,
          'nilai_kimia_organik' => $nilai,
          'jam_kosong'         => $jam_kosong,
          'semester'           => $semester,
          'status'             => '1',
          'id_mahasiswa'       => $id_mahasiswa
        );
        $this->m_asisten->add_pendaftaran($data, 'daftar_asisten');
        echo "<script>alert('Berhasil melakukan pendaftaran asisten!');</script>";
        redirect('mahasiswa/c_asisten', 'refresh');
      }
    }
  }
}
