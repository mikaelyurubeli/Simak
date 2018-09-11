<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_praktikum extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('m_praktikum');
    $this->load->model('m_mahasiswa');
  }

  //View
  public function index(){
    $semester = null;

    $data = array(
      'title' => 'Praktikum',
      'isi'   => 'mahasiswa/praktikum/v_praktikum',
      'jadwal' => $this->m_praktikum->jadwal_praktikum($semester),
      'list_semester' => $this->m_praktikum->get_dropdown_semester()
    );

    $this->load->view('mahasiswa/layout/wrapper', $data);
  }

  public function lihat_praktikum(){
    $semester = $this->input->post('pilihsmt');

    $data = array(
      'title' => 'Praktikum',
      'isi'   => 'mahasiswa/praktikum/v_praktikum',
      'jadwal' => $this->m_praktikum->jadwal_praktikum($semester),
      'list_semester' => $this->m_praktikum->get_dropdown_semester()
    );
    $this->load->view('mahasiswa/layout/wrapper', $data);
  }

  public function daftar_praktikum(){
    $id_user = $this->session->userdata('id_user');
    $data = array(
      'title' => 'Daftar Praktikum',
      'isi'   => 'mahasiswa/praktikum/v_daftar_praktikum',
      'rp'    => $this->m_praktikum->rp($id_user),
      'period_daftar' => $this->m_praktikum->check_period_daftar_praktikum(),
      'semester' => $this->m_praktikum->get_current_semester(),
      'mahasiswa' => $this->m_mahasiswa->mahasiswa()
    );

    $this->load->view('mahasiswa/layout/wrapper', $data);
  }

  //action
  public function do_add_praktikum(){
    $id_user = $this->session->userdata('id_user');
    $this->form_validation->set_rules('tambah_praktikum', 'tambah_praktikum', 'trim|required');

    if($this->form_validation->run() == FALSE) {
      echo "<script>alert('Terdapat kesalahan, ulangi kembali!')</script>";
      redirect('mahasiswa/c_praktikum/daftar_praktikum', 'refresh');
    } else {
      $tambah_praktikum = $this->input->post('tambah_praktikum');

      $check = $this->m_praktikum->check_double_rp($tambah_praktikum, $id_user);
      $check2 = $this->m_praktikum->check_praktikum($tambah_praktikum);

      $data['id_praktikum'] = $this->m_praktikum->check_praktikum_rp($tambah_praktikum);
      $data['id_mahasiswa'] = $this->m_praktikum->get_mahasiswa_rp($id_user);
      $data['semester'] = $this->m_praktikum->get_current_semester();

      //add peserta praktikum
      $peserta_prak = $this->m_praktikum->get_peserta_praktikum('jadwal_praktikum');
      $add_peserta = $peserta_prak['peserta'] + 1;
      $data_add = array('peserta' => $add_peserta);
      $where = array('id_praktikum' => $data['id_praktikum']);
      //if check rp == 0
      if(count($check) == 0){
        if(count($check2) == 1){
          if(empty($data['id_praktikum'])){
            echo "<script>alert('Kode praktikum salah/tidak terdaftar!');</script>";
            redirect('mahasiswa/c_praktikum/daftar_praktikum', 'refresh');
          } else {
            $this->m_praktikum->add_praktikum($data, 'riwayat_praktikum');
            $this->m_praktikum->update_praktikum($where, $data_add, 'jadwal_praktikum');
            echo "<script>alert('Berhasil menambah data!');</script>";
            redirect('mahasiswa/c_praktikum/daftar_praktikum', 'refresh');
          }
        } else {
          echo "<script>alert('Kode praktikum salah!');</script>";
          redirect('mahasiswa/c_praktikum/daftar_praktikum', 'refresh');
        }
      } else {
        echo "<script>alert('Anda sudah mengambil praktikum ini!');</script>";
          redirect('mahasiswa/c_praktikum/daftar_praktikum', 'refresh');
      }
    }
  }

  public function do_delete_praktikum_rp($id_rp){
    $where = array('id_rp' => $id_rp);
    $id_praktikum = $this->m_praktikum->get_id_praktikum($where);
    //min peserta praktikum
    $peserta_prak = $this->m_praktikum->get_peserta_praktikum('jadwal_praktikum');
    $min_peserta = $peserta_prak['peserta'] - 1;
    $data_min = array('peserta' => $min_peserta);
    $where_prak = array('id_praktikum' => $id_praktikum);
  
    $this->m_praktikum->delete_praktikum($where, 'riwayat_praktikum');
    $this->m_praktikum->update_praktikum($where_prak, $data_min, 'jadwal_praktikum');
    echo "<script>alert('Berhasil membatalkan!');</script>";
    redirect('mahasiswa/c_praktikum/daftar_praktikum', 'refresh');
  }

  //error check model buat ambil data.a
  public function cetak_bukti_praktikum(){
    define('FPDF_FONTPATH',$this->config->item('fonts_path'));

    $id_user = $this->session->userdata('id_user');
    $id_mhs = $this->m_praktikum->get_mahasiswa_rp($id_user);

    $data = array(
      'title' => 'Bukti Daftar Praktikum',
      'mahasiswa' => $this->m_mahasiswa->data_mahasiswa2()->row_array(),
      'rp'    => $this->m_praktikum->get_rp($id_mhs)
    );
    // Load view "pdf_report" untuk menampilkan hasilnya
    $this->load->view('mahasiswa/praktikum/v_print_rp', $data);
  }


}
