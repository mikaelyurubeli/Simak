<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Dompdf\Adapter\CPDF;
use Dompdf\Dompdf;
use Dompdf\Exception;

class c_praktikum extends CI_controller{

  function __construct(){
    parent::__construct();
    $this->load->model('m_praktikum');
    $this->load->model('m_mahasiswa');
  }

  public function praktikum(){
    $data = array(
      'title' => 'Jadwal Praktikum',
      'isi'   => 'admin/praktikum/v_praktikum',
      'hasil_praktikum' => $this->m_praktikum->praktikum(),
      'nama_praktikum' => $this->m_praktikum->nama_praktikum()
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function add_praktikum(){
    $data = array(
      'title' => 'Tambah Praktikum',
      'isi'   => 'admin/praktikum/v_add_praktikum',
      'nama_praktikum' => $this->m_praktikum->nama_praktikum(),
      'dosen' => $this->m_praktikum->dosen(),
      'semester' => $this->m_praktikum->semester()
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function jadwal_praktikum(){
    $data = array(
      'title' => 'Jadwal Praktikum',
      'isi'   => 'admin/praktikum/v_jadwal_praktikum',
      'hasil_jadwal' => $this->m_praktikum->jadwal_praktikum_all()
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function add_jadwal_praktikum(){
    $data = array(
      'title' => 'Tambah Jadwal Praktikum',
      'isi'   => 'admin/praktikum/v_add_jadwal',
      'hasil_praktikum' => $this->m_praktikum->get_dropdown_praktikum(),
      'semester' => $this->m_praktikum->semester(),
      'hari' => $this->m_praktikum->hari()
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function riwayat_praktikum(){
    $data = array(
      'title' => 'Daftar Mahasiswa',
      'isi'   => 'admin/praktikum/v_rp',
      'mahasiswa' => $this->m_praktikum->mahasiswa()->result()
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function data_rp($id_mahasiswa, $nama){
    $nama = str_replace("%20"," ", $nama);

    $data = array(
      'title' => 'Data Praktikum',
      'mahasiswa' => $this->m_praktikum->rp_mahasiswa($id_mahasiswa),
      'isi'   => 'admin/praktikum/v_data_rp',
      'nama'  => $nama
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function daftar_peserta_praktikum($id_praktikum){
    $title = $this->m_praktikum->get_nama_praktikum($id_praktikum);
    $data = array(
      'title' => "Daftar Peserta Praktikum ".$title,
      'list'  => $this->m_praktikum->get_daftar_peserta($id_praktikum)->result(),
      'isi'   => 'admin/praktikum/v_daftar_peserta',
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function do_add_praktikum(){
    $this->form_validation->set_rules('nama_praktikum', 'nama_praktikum', 'required');
    $this->form_validation->set_rules('dosen', 'dosen', 'required');
    $this->form_validation->set_rules('semester', 'semester', 'required');
    //$this->form_validation->set_rules('kuota_asisten', 'kuota_asisten', 'trim|required');
    $this->form_validation->set_rules('prasyarat', 'prasyarat', 'required');
    $this->form_validation->set_rules('kode_praktikum', 'kode_praktikum', 'required');

    if($this->form_validation->run() == FALSE){
      echo "<script>alert('Terdapat kesalahan pada data yang anda isi!')</script>";
      redirect('admin/c_praktikum/add_praktikum', 'refresh');
    } else {
      $nama_praktikum = $this->input->post('nama_praktikum');
      $dosen          = $this->input->post('dosen');
      $semester       = $this->input->post('semester');
      //$asisten        = $this->input->post('asisten');
      //$kuota_asisten  = $this->input->post('kuota_asisten');
      $prasyarat      = $this->input->post('prasyarat');
      $kode_praktikum = $this->input->post('kode_praktikum');

      $data = array(
        'nama_praktikum'  => $nama_praktikum,
        'dosen'           => $dosen,
        'semester'        => $semester,
        //'asisten'         => $asisten,
        //'kuota_asisten'   => $kuota_asisten,
        'prasyarat'       => $prasyarat,
        'kode_praktikum'  => $kode_praktikum
      );

      $check = $this->m_praktikum->check_praktikum($kode_praktikum);
      if(count($check) == 1){
        echo "<script>alert('Praktikum dengan kode praktikum ini sudah dibuat!');</script>";
        redirect('admin/c_praktikum/add_praktikum', 'refresh');
      } else {
        $this->m_praktikum->add_praktikum($data, 'praktikum');
        echo "<script>alert('Berhasil menambah data!');</script>";
        redirect('admin/c_praktikum/praktikum', 'refresh');
      }
      }
  }

  public function edit_praktikum($id_praktikum){
    $where = array('id_praktikum' => $id_praktikum);
    $data = array(
      'title' => 'Edit Praktikum',
      'isi'   => 'admin/praktikum/v_edit_praktikum',
      'praktikum' => $this->m_praktikum->edit_praktikum($where, 'praktikum')->result(),
      'nama_praktikum' => $this->m_praktikum->nama_praktikum(),
      'dosen' => $this->m_praktikum->dosen(),
      'semester' => $this->m_praktikum->semester()
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function update_praktikum(){
    $this->form_validation->set_rules('nama_praktikum', 'nama_praktikum', 'required');
    $this->form_validation->set_rules('dosen', 'dosen', 'required');
    $this->form_validation->set_rules('semester', 'semester', 'required');
   // $this->form_validation->set_rules('kuota_asisten', 'kuota_asisten', 'required');
    $this->form_validation->set_rules('prasyarat', 'prasyarat', 'required');
    $this->form_validation->set_rules('kode_praktikum', 'kode_praktikum', 'required');

    if($this->form_validation->run() == FALSE){
      echo "<script>alert('Gagal merubah data!');</script>";
      redirect('admin/c_praktikum/praktikum', 'refresh');
    } else {
      $id_praktikum   = $this->input->post('id_praktikum');
      $nama_praktikum = $this->input->post('nama_praktikum');
      $dosen          = $this->input->post('dosen');
      $semester       = $this->input->post('semester');
      //$asisten        = $this->input->post('asisten');
      //$kuota_asisten  = $this->input->post('kuota_asisten');
      $prasyarat      = $this->input->post('prasyarat');
      $kode_praktikum = $this->input->post('kode_praktikum');

      $data = array(
        'nama_praktikum'  => $nama_praktikum,
        'dosen'           => $dosen,
        'semester'        => $semester,
        //'asisten'         => $asisten,
        //'kuota_asisten'   => $kuota_asisten,
        'prasyarat'       => $prasyarat,
        'kode_praktikum'  => $kode_praktikum
      );

      $where = array(
        'id_praktikum' => $id_praktikum
      );

      $this->m_praktikum->update_praktikum($where, $data, 'praktikum');
      echo "<script>alert('Data Berhasil diperbaharui!');</script>";
      redirect('admin/c_praktikum/praktikum', 'refresh');
    }
  }

  public function do_delete_praktikum($id_praktikum){
    $where = array('id_praktikum' => $id_praktikum);

    $check = $this->m_praktikum->check_praktikum_jadwal($id_praktikum);
    $check2 = $this->m_praktikum->check_praktikum_riwayat($id_praktikum);
    if (count($check) > 0 || count($check2) > 0) {
      echo "<script>alert('Praktikum ini tidak dapat dihapus! \\nPraktikum ini terdaftar dalam jadwal praktikum!');</script>";
    } else {
      $this->m_praktikum->delete_praktikum($where, 'jadwal_praktikum');
      $this->m_praktikum->delete_praktikum($where, 'praktikum');
      echo "<script>alert('Data berhasil dihapus!');</script>";
    }
    
    redirect('admin/c_praktikum/praktikum', 'refresh');
  }

  //function jadwal praktikum
  public function do_add_jadwal(){
    $this->form_validation->set_rules('praktikum', 'praktikum', 'required');
    $this->form_validation->set_rules('hari', 'hari', 'required');
    $this->form_validation->set_rules('jam', 'jam', 'required');
    $this->form_validation->set_rules('lokasi', 'lokasi', 'required');

    if($this->form_validation->run() == FALSE){
      echo "<script>alert('Terdapat kesalahan pada data yang anda isi!')</script>";
      redirect('admin/c_praktikum/add_jadwal_praktikum', 'refresh');
    } else {
      $praktikum      = $this->input->post('praktikum');
      $hari           = $this->input->post('hari');
      $jam            = $this->input->post('jam');
      $lokasi         = $this->input->post('lokasi');

      $data = array(
        'id_praktikum'  => $praktikum,
        'hari'          => $hari,
        'jam'           => $jam,
        'lokasi'        => $lokasi
      );
      $check = $this->m_praktikum->check_jadwal_praktikum($praktikum);
      if(count($check) == 1){
        echo "<script>alert('Jadwal Praktikum dengan kode praktikum ini sudah dibuat!');</script>";
        redirect('admin/c_praktikum/add_jadwal_praktikum', 'refresh');
      } else {
        $this->m_praktikum->add_praktikum($data, 'jadwal_praktikum');
        echo "<script>alert('Berhasil Menambah Jadwal!');</script>";
        redirect('admin/c_praktikum/jadwal_praktikum', 'refresh');
      }
    }
  }

  public function edit_jadwal($id_jadwal){
    $where = array('id_jadwal' => $id_jadwal);
    $data = array(
      'title' => 'Edit Jadwal Praktikum',
      'isi'   => 'admin/praktikum/v_edit_jadwal',
      'jadwal' => $this->m_praktikum->edit_jadwal($where)->result(),
      'praktikum' => $this->m_praktikum->praktikum2(),
      'hari' => $this->m_praktikum->hari()
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function update_jadwal(){
    $this->form_validation->set_rules('praktikum', 'praktikum', 'required');
    $this->form_validation->set_rules('hari', 'hari', 'required');
    $this->form_validation->set_rules('jam', 'jam', 'required');
    $this->form_validation->set_rules('lokasi', 'lokasi', 'required');

    if($this->form_validation->run() == FALSE){
      echo "<script>alert('Terdapat kesalahan pada data yang anda isi!')</script>";
      redirect('admin/c_praktikum/jadwal_praktikum', 'refresh');
    } else {
      $id_jadwal      = $this->input->post('id_jadwal');
      $praktikum      = $this->input->post('praktikum');
      $hari           = $this->input->post('hari');
      $jam            = $this->input->post('jam');
      $lokasi         = $this->input->post('lokasi');

      $data = array(
        'id_praktikum'  => $praktikum,
        'hari'          => $hari,
        'jam'           => $jam,
        'lokasi'        => $lokasi
      );

      $where = array(
        'id_jadwal' => $id_jadwal
      );
      $check = $this->m_praktikum->check_jadwal_praktikum($praktikum);
      if(count($check) == 1){
        echo "<script>alert('Jadwal Praktikum dengan kode praktikum ini sudah dibuat!');</script>";
        redirect('admin/c_praktikum/jadwal_praktikum', 'refresh');
      } else {
        $this->m_praktikum->update_praktikum($where, $data, 'jadwal_praktikum');
        echo "<script>alert('Data Berhasil diperbaharui!');</script>";
        redirect('admin/c_praktikum/jadwal_praktikum', 'refresh');
      }
      }
  }

  public function do_delete_jadwal($id_jadwal){
    $where = array('id_jadwal' => $id_jadwal);
    $this->m_praktikum->delete_praktikum($where, 'jadwal_praktikum');
    echo "<script>alert('Data berhasil dihapus!');</script>";
    redirect('admin/c_praktikum/jadwal_praktikum', 'refresh');
  }

  //cetak form pdf praktikum
  //Test Fungsi Print
  public function cetak_form_nilai($id_mahasiswa, $id_praktikum){
    define('FPDF_FONTPATH',$this->config->item('fonts_path'));

    $this->session->all_userdata();

    $data = array(
      'title' => 'Praktikum',
      'praktikum' => $this->m_praktikum->rp_praktikum($id_praktikum),
      'mahasiswa' => $this->m_praktikum->rp_mahasiswa_detail($id_mahasiswa)
    );

    // Load view "pdf_report" untuk menampilkan hasilnya
    $this->load->view('admin/praktikum/v_print_penilaian', $data);
  }

}
