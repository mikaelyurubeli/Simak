<?php
defined('BASEPATH') OR exit("No direct script access allowed");

class C_penelitian extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('m_praktikum');
    $this->load->model('m_peminjaman');
	  $this->load->model('m_mahasiswa');
    $this->load->model('m_penelitian');
  }

  public function index(){
    $data = array(
      'title' => 'Penelitian',
      'isi'   => 'mahasiswa/penelitian/v_penelitian_baru',
      'dosen' => $this->m_praktikum->dosen()
      //'alat'  => $this->m_peminjaman->data_alat(),
      //'bahan'  => $this->m_peminjaman->data_bahan()
    );

    $this->load->view('mahasiswa/layout/wrapper', $data);
  }

  public function penelitian_aas(){
    $data = array(
      'title' => 'Penelitian',
      'isi'   => 'mahasiswa/penelitian/v_penelitian_aas',
      'dosen' => $this->m_praktikum->dosen()
    );

    $this->load->view('mahasiswa/layout/wrapper', $data);
  }

  public function penelitian_saa(){
    $data = array(
      'title' => 'Penelitian',
      'isi'   => 'mahasiswa/penelitian/v_penelitian_saa',
      'dosen' => $this->m_praktikum->dosen()
    );

    $this->load->view('mahasiswa/layout/wrapper', $data);
  }
  
  public function penelitian_spektro(){
    $data = array(
      'title' => 'Penelitian',
      'isi'   => 'mahasiswa/penelitian/v_penelitian_spektro',
      'dosen' => $this->m_praktikum->dosen()
    );

    $this->load->view('mahasiswa/layout/wrapper', $data);
  }
  
  public function penelitian_ocean(){
    $data = array(
      'title' => 'Penelitian',
      'isi'   => 'mahasiswa/penelitian/v_penelitian_ocean',
      'dosen' => $this->m_praktikum->dosen()
    );

    $this->load->view('mahasiswa/layout/wrapper', $data);
  }
  
  public function penelitian_poten(){
    $data = array(
      'title' => 'Penelitian',
      'isi'   => 'mahasiswa/penelitian/v_penelitian_poten',
      'dosen' => $this->m_praktikum->dosen()
    );

    $this->load->view('mahasiswa/layout/wrapper', $data);
  }
  
  public function surat_izin_lembur(){
    $data = array(
      'title' => 'Surat Izin Lembur',
      'isi'   => 'mahasiswa/penelitian/v_surat_izin_lembur',
      'dosen' => $this->m_praktikum->dosen()
    );

    $this->load->view('mahasiswa/layout/wrapper', $data);
  }

  public function do_penelitian(){
    $this->form_validation->set_rules('pembimbing1', 'pembimbing1', 'required');
    $this->form_validation->set_rules('pembimbing2', 'pembimbing2', 'required');
    $this->form_validation->set_rules('instansi', 'instansi', 'required');
    $this->form_validation->set_rules('judul_penelitian', 'judul_penelitian', 'required');
    $this->form_validation->set_rules('tgl_penelitian', 'tgl_penelitian', 'required');

    if($this->form_validation->run() == FALSE){
      echo "<script>alert('Terdapat kesalahan dalam pengisian form penelitian!');</script>";
      redirect('mahasiswa/c_penelitian');
    } else {
      $pembimbing1 			= $this->input->post('pembimbing1');
      $pembimbing2 			= $this->input->post('pembimbing2');
      $judul_penelitian = $this->input->post('judul_penelitian');
      $instansi         = $this->input->post('instansi');
      $tgl_penelitian 	= $this->input->post('tgl_penelitian');
      $id_mahasiswa     = $this->m_mahasiswa->mahasiswa_peminjaman()->row_array();
      $tgl_buat_surat   = $this->input->post('tgl_buat_surat');

      $data = array(
        'pembimbing_1'      => $pembimbing1,
        'pembimbing_2'      => $pembimbing2,
        'judul_penelitian'  => $judul_penelitian,
        'instansi'          => $instansi,
        'tgl_penelitian'    => $tgl_penelitian,
        'status'            => '1',
        'id_mahasiswa'      => $id_mahasiswa['id_mahasiswa'],
        'tgl_buat_surat'    => $tgl_buat_surat
      );

      $id = $this->m_penelitian->add($data, 'penelitian');
      echo "<script>alert('Berhasil membuat pengajuan penelitian!');</script>";
      redirect('mahasiswa/c_penelitian/cetak_form_penelitian/'.$id, 'refresh');
    }
  }

  public function do_penelitian_aas(){
    $this->form_validation->set_rules('pembimbing1', 'pembimbing1', 'required');
    $this->form_validation->set_rules('pembimbing2', 'pembimbing2', 'required');
    $this->form_validation->set_rules('judul_penelitian', 'judul_penelitian', 'required');
    $this->form_validation->set_rules('instansi', 'instansi', 'required');
    $this->form_validation->set_rules('tgl_penelitian', 'tgl_penelitian', 'required');
    $this->form_validation->set_rules('jumlah_sampel', 'jumlah_sampel', 'required');
    $this->form_validation->set_rules('uji_logam', 'uji_logam', 'required');

    if($this->form_validation->run() == FALSE){
      echo "<script>alert('Terdapat kesalahan dalam pengisian form penelitian!');</script>";
      //redirect('mahasiswa/c_penelitian/penelitian_aas');
    } else {
      $pembimbing1 			= $this->input->post('pembimbing1');
      $pembimbing2 			= $this->input->post('pembimbing2');
      $judul_penelitian = $this->input->post('judul_penelitian');
      $tgl_penelitian 	= $this->input->post('tgl_penelitian');
      $instansi         = $this->input->post('instansi');
      $jumlah_sampel  	= $this->input->post('jumlah_sampel');
      $uji_logam       	= $this->input->post('uji_logam');
      $id_mahasiswa     = $this->m_mahasiswa->mahasiswa_peminjaman()->row_array();
      $tgl_buat_surat   = $this->input->post('tgl_buat_surat');

      $data = array(
        'pembimbing_1'      => $pembimbing1,
        'pembimbing_2'      => $pembimbing2,
        'judul_penelitian'  => $judul_penelitian,
        'instansi'          => $instansi,
        'tgl_penelitian'    => $tgl_penelitian,
        'jumlah_sampel'     => $jumlah_sampel,
        'uji_logam'         => $uji_logam,
        'status'            => '1',
        'id_mahasiswa'      => $id_mahasiswa['id_mahasiswa'],
        'tgl_buat_surat'    => $tgl_buat_surat
      );

      $id = $this->m_penelitian->add($data, 'penelitian_aas');
      echo "<script>alert('Berhasil membuat pengajuan penelitian!');</script>";
      redirect('mahasiswa/c_penelitian/cetak_form_penelitian_aas/'.$id, 'refresh');
    }
  }

  public function do_penelitian_saa(){
    $this->form_validation->set_rules('pembimbing1', 'pembimbing1', 'required');
    $this->form_validation->set_rules('pembimbing2', 'pembimbing2', 'required');
    $this->form_validation->set_rules('judul_penelitian', 'judul_penelitian', 'required');
    $this->form_validation->set_rules('instansi', 'instansi', 'required');
    $this->form_validation->set_rules('tgl_penelitian', 'tgl_penelitian', 'required');
    $this->form_validation->set_rules('jumlah_sampel', 'jumlah_sampel', 'required');

    if($this->form_validation->run() == FALSE){
      echo "<script>alert('Terdapat kesalahan dalam pengisian form penelitian!');</script>";
      redirect('mahasiswa/c_penelitian/penelitian_aas');
    } else {
      $pembimbing1 			= $this->input->post('pembimbing1');
      $pembimbing2 			= $this->input->post('pembimbing2');
      $judul_penelitian = $this->input->post('judul_penelitian');
      $instansi         = $this->input->post('instansi');
      $tgl_penelitian 	= $this->input->post('tgl_penelitian');
      $jumlah_sampel  	= $this->input->post('jumlah_sampel');
      $id_mahasiswa     = $this->m_mahasiswa->mahasiswa_peminjaman()->row_array();
      $tgl_buat_surat   = $this->input->post('tgl_buat_surat');

      $data = array(
        'pembimbing_1'      => $pembimbing1,
        'pembimbing_2'      => $pembimbing2,
        'judul_penelitian'  => $judul_penelitian,
        'instansi'          => $instansi,
        'tgl_penelitian'    => $tgl_penelitian,
        'jumlah_sampel'     => $jumlah_sampel,
        'status'            => '1',
        'id_mahasiswa'      => $id_mahasiswa['id_mahasiswa'],
        'tgl_buat_surat'    => $tgl_buat_surat
      );

      $id = $this->m_penelitian->add($data, 'penelitian_saa');
      echo "<script>alert('Berhasil membuat pengajuan penelitian!');</script>";
      redirect('mahasiswa/c_penelitian/cetak_form_penelitian_saa/'.$id, 'refresh');
    }
  }
  
  public function do_penelitian_spektro(){
    $this->form_validation->set_rules('pembimbing1', 'pembimbing1', 'required');
    $this->form_validation->set_rules('pembimbing2', 'pembimbing2', 'required');
    $this->form_validation->set_rules('judul_penelitian', 'judul_penelitian', 'required');
    $this->form_validation->set_rules('instansi', 'instansi', 'required');
    $this->form_validation->set_rules('tgl_penelitian', 'tgl_penelitian', 'required');
    $this->form_validation->set_rules('jumlah_sampel', 'jumlah_sampel', 'required');

    if($this->form_validation->run() == FALSE){
      echo "<script>alert('Terdapat kesalahan dalam pengisian form penelitian!');</script>";
      redirect('mahasiswa/c_penelitian/penelitian_spektro');
    } else {
      $pembimbing1 			= $this->input->post('pembimbing1');
      $pembimbing2 			= $this->input->post('pembimbing2');
      $judul_penelitian = $this->input->post('judul_penelitian');
      $instansi         = $this->input->post('instansi');
      $tgl_penelitian 	= $this->input->post('tgl_penelitian');
      $jumlah_sampel  	= $this->input->post('jumlah_sampel');
      $id_mahasiswa     = $this->m_mahasiswa->mahasiswa_peminjaman()->row_array();
      $tgl_buat_surat   = $this->input->post('tgl_buat_surat');

      $data = array(
        'pembimbing_1'      => $pembimbing1,
        'pembimbing_2'      => $pembimbing2,
        'judul_penelitian'  => $judul_penelitian,
        'instansi'          => $instansi,
        'tgl_penelitian'    => $tgl_penelitian,
        'jumlah_sampel'     => $jumlah_sampel,
        'status'            => '1',
        'id_mahasiswa'      => $id_mahasiswa['id_mahasiswa'],
        'tgl_buat_surat'    => $tgl_buat_surat
      );

      $id = $this->m_penelitian->add($data, 'penelitian_spektro');
      echo "<script>alert('Berhasil membuat pengajuan penelitian!');</script>";
      redirect('mahasiswa/c_penelitian/cetak_form_penelitian_spektro/'.$id, 'refresh');
    }
  }
  
  public function do_penelitian_ocean(){
    $this->form_validation->set_rules('pembimbing1', 'pembimbing1', 'required');
    $this->form_validation->set_rules('pembimbing2', 'pembimbing2', 'required');
    $this->form_validation->set_rules('judul_penelitian', 'judul_penelitian', 'required');
    $this->form_validation->set_rules('instansi', 'instansi', 'required');
    $this->form_validation->set_rules('tgl_penelitian', 'tgl_penelitian', 'required');
    $this->form_validation->set_rules('jumlah_sampel', 'jumlah_sampel', 'required');

    if($this->form_validation->run() == FALSE){
      echo "<script>alert('Terdapat kesalahan dalam pengisian form penelitian!');</script>";
      redirect('mahasiswa/c_penelitian/penelitian_ocean');
    } else {
      $pembimbing1 			= $this->input->post('pembimbing1');
      $pembimbing2 			= $this->input->post('pembimbing2');
      $judul_penelitian = $this->input->post('judul_penelitian');
      $instansi         = $this->input->post('instansi');
      $tgl_penelitian 	= $this->input->post('tgl_penelitian');
      $jumlah_sampel  	= $this->input->post('jumlah_sampel');
      $id_mahasiswa     = $this->m_mahasiswa->mahasiswa_peminjaman()->row_array();
      $tgl_buat_surat   = $this->input->post('tgl_buat_surat');

      $data = array(
        'pembimbing_1'      => $pembimbing1,
        'pembimbing_2'      => $pembimbing2,
        'judul_penelitian'  => $judul_penelitian,
        'instansi'          => $instansi,
        'tgl_penelitian'    => $tgl_penelitian,
        'jumlah_sampel'     => $jumlah_sampel,
        'status'            => '1',
        'id_mahasiswa'      => $id_mahasiswa['id_mahasiswa'],
        'tgl_buat_surat'    => $tgl_buat_surat
      );

      $id = $this->m_penelitian->add($data, 'penelitian_ocean');
      echo "<script>alert('Berhasil membuat pengajuan penelitian!');</script>";
      redirect('mahasiswa/c_penelitian/cetak_form_penelitian_ocean/'.$id, 'refresh');
    }
  }
  
  public function do_penelitian_poten(){
    $this->form_validation->set_rules('pembimbing1', 'pembimbing1', 'required');
    $this->form_validation->set_rules('pembimbing2', 'pembimbing2', 'required');
    $this->form_validation->set_rules('judul_penelitian', 'judul_penelitian', 'required');
    $this->form_validation->set_rules('instansi', 'instansi', 'required');
    $this->form_validation->set_rules('tgl_penelitian', 'tgl_penelitian', 'required');
    $this->form_validation->set_rules('jumlah_sampel', 'jumlah_sampel', 'required');

    if($this->form_validation->run() == FALSE){
      echo "<script>alert('Terdapat kesalahan dalam pengisian form penelitian!');</script>";
      redirect('mahasiswa/c_penelitian/penelitian_poten');
    } else {
      $pembimbing1 			= $this->input->post('pembimbing1');
      $pembimbing2 			= $this->input->post('pembimbing2');
      $judul_penelitian = $this->input->post('judul_penelitian');
      $instansi         = $this->input->post('instansi');
      $tgl_penelitian 	= $this->input->post('tgl_penelitian');
      $jumlah_sampel  	= $this->input->post('jumlah_sampel');
      $id_mahasiswa     = $this->m_mahasiswa->mahasiswa_peminjaman()->row_array();
      $tgl_buat_surat   = $this->input->post('tgl_buat_surat');

      $data = array(
        'pembimbing_1'      => $pembimbing1,
        'pembimbing_2'      => $pembimbing2,
        'judul_penelitian'  => $judul_penelitian,
        'instansi'          => $instansi,
        'tgl_penelitian'    => $tgl_penelitian,
        'jumlah_sampel'     => $jumlah_sampel,
        'status'            => '1',
        'id_mahasiswa'      => $id_mahasiswa['id_mahasiswa'],
        'tgl_buat_surat'    => $tgl_buat_surat
      );

      $id = $this->m_penelitian->add($data, 'penelitian_poten');
      echo "<script>alert('Berhasil membuat pengajuan penelitian!');</script>";
      redirect('mahasiswa/c_penelitian/cetak_form_penelitian_poten/'.$id, 'refresh');
    }
  }
    
  public function do_surat_izin(){
    $this->form_validation->set_rules('pembimbing1', 'pembimbing1', 'required');
    $this->form_validation->set_rules('pembimbing2', 'pembimbing2', 'required');
    $this->form_validation->set_rules('judul_penelitian', 'judul_penelitian', 'required');
    $this->form_validation->set_rules('instansi', 'instansi', 'required');
    $this->form_validation->set_rules('tgl_penelitian', 'tgl_penelitian', 'required');
    $this->form_validation->set_rules('jam_mulai', 'jam_mulai', 'required');
    $this->form_validation->set_rules('jam_selesai', 'jam_selesai', 'required');
    $this->form_validation->set_rules('orang_tua', 'orang_tua', 'required');

    if($this->form_validation->run() == FALSE){
      echo "<script>alert('Terdapat kesalahan dalam pengisian form penelitian!');</script>";
      redirect('mahasiswa/c_penelitian/surat_izin_lembur');
    } else {
      $pembimbing1 			= $this->input->post('pembimbing1');
      $pembimbing2 			= $this->input->post('pembimbing2');
      $judul_penelitian = $this->input->post('judul_penelitian');
      $instansi         = $this->input->post('instansi');
      $orang_tua        = $this->input->post('orang_tua');
      $tgl_penelitian 	= $this->input->post('tgl_penelitian');
      $jam_mulai  	    = $this->input->post('jam_mulai');
      $jam_selesai	    = $this->input->post('jam_selesai');
      $id_mahasiswa     = $this->m_mahasiswa->mahasiswa_peminjaman()->row_array();
      $tgl_buat_surat   = $this->input->post('tgl_buat_surat');

      $data = array(
        'pembimbing_1'      => $pembimbing1,
        'pembimbing_2'      => $pembimbing2,
        'judul_penelitian'  => $judul_penelitian,
        'tgl_penelitian'    => $tgl_penelitian,
        'instansi'          => $instansi,
        'orang_tua'         => $orang_tua,
        'jam_mulai'         => $jam_mulai,
        'jam_selesai'       => $jam_selesai,
        'status'            => '1',
        'id_mahasiswa'      => $id_mahasiswa['id_mahasiswa'],
        'tgl_buat_surat'    => $tgl_buat_surat
      );

      $id = $this->m_penelitian->add($data, 'penelitian_lembur');
      echo "<script>alert('Berhasil membuat pengajuan penelitian!');</script>";
      redirect('mahasiswa/c_penelitian/cetak_form_perizinan_lembur/'.$id, 'refresh');
    }
  }
  
  public function cetak_form_penelitian($id){
    define('FPDF_FONTPATH',$this->config->item('fonts_path'));

    $datap = $this->m_penelitian->data_penelitian($id);
    $data1 = $datap['pembimbing_1'];
    $data2 = $datap['pembimbing_2'];
    $data3 = $this->m_penelitian->get_nip($data1);
    $data4 = $this->m_penelitian->get_nip($data2);

    $data = array(
      'title' => 'Penelitian',
      'data_penelitian' => $datap,
      'a' => $data3,
      'b' => $data4,
      'kalab' => $this->m_crud->get('kalab')->row_array()
    );
    // Load view "pdf_report" untuk menampilkan hasilnya

    $this->load->view('mahasiswa/penelitian/v_print_penelitian', $data);
  }

  public function cetak_form_penelitian_aas($id){
    define('FPDF_FONTPATH',$this->config->item('fonts_path'));

    $datap = $this->m_penelitian->data_penelitian_aas($id);
    $data1 = $datap['pembimbing_1'];
    $data2 = $datap['pembimbing_2'];
    $data3 = $this->m_penelitian->get_nip($data1);
    $data4 = $this->m_penelitian->get_nip($data2);

    $data = array(
      'title' => 'Penelitian',
      'data_penelitian' => $datap,
      'a' => $data3,
      'b' => $data4,
      'kalab' => $this->m_crud->get('kalab')->row_array()
    );
    // Load view "pdf_report" untuk menampilkan hasilnya

    $this->load->view('mahasiswa/penelitian/v_print_aas', $data);
  }

  public function cetak_form_penelitian_saa($id){
    define('FPDF_FONTPATH',$this->config->item('fonts_path'));

    $datap = $this->m_penelitian->data_penelitian_saa($id);
    $data1 = $datap['pembimbing_1'];
    $data2 = $datap['pembimbing_2'];
    $data3 = $this->m_penelitian->get_nip($data1);
    $data4 = $this->m_penelitian->get_nip($data2);

    $data = array(
      'title' => 'Penelitian',
      'data_penelitian' => $datap,
      'a' => $data3,
      'b' => $data4,
      'kalab' => $this->m_crud->get('kalab')->row_array()
    );
    // Load view "pdf_report" untuk menampilkan hasilnya

    $this->load->view('mahasiswa/penelitian/v_print_saa', $data);
  }
  
  public function cetak_form_penelitian_spektro($id){
    define('FPDF_FONTPATH',$this->config->item('fonts_path'));

    $datap = $this->m_penelitian->data_penelitian_spektro($id);
    $data1 = $datap['pembimbing_1'];
    $data2 = $datap['pembimbing_2'];
    $data3 = $this->m_penelitian->get_nip($data1);
    $data4 = $this->m_penelitian->get_nip($data2);

    $data = array(
      'title' => 'Penelitian',
      'data_penelitian' => $datap,
      'a' => $data3,
      'b' => $data4,
      'kalab' => $this->m_crud->get('kalab')->row_array()
    );
    // Load view "pdf_report" untuk menampilkan hasilnya

    $this->load->view('mahasiswa/penelitian/v_print_spektro', $data);
  }
  
  public function cetak_form_penelitian_ocean($id){
    define('FPDF_FONTPATH',$this->config->item('fonts_path'));

    $datap = $this->m_penelitian->data_penelitian_ocean($id);
    $data1 = $datap['pembimbing_1'];
    $data2 = $datap['pembimbing_2'];
    $data3 = $this->m_penelitian->get_nip($data1);
    $data4 = $this->m_penelitian->get_nip($data2);

    $data = array(
      'title' => 'Penelitian',
      'data_penelitian' => $datap,
      'a' => $data3,
      'b' => $data4,
      'kalab' => $this->m_crud->get('kalab')->row_array()
    );
    // Load view "pdf_report" untuk menampilkan hasilnya

    $this->load->view('mahasiswa/penelitian/v_print_ocean', $data);
  }
  
  public function cetak_form_penelitian_poten($id){
    define('FPDF_FONTPATH',$this->config->item('fonts_path'));

    $datap = $this->m_penelitian->data_penelitian_poten($id);
    $data1 = $datap['pembimbing_1'];
    $data2 = $datap['pembimbing_2'];
    $data3 = $this->m_penelitian->get_nip($data1);
    $data4 = $this->m_penelitian->get_nip($data2);

    $data = array(
      'title' => 'Penelitian',
      'data_penelitian' => $datap,
      'a' => $data3,
      'b' => $data4,
      'kalab' => $this->m_crud->get('kalab')->row_array()
    );
    // Load view "pdf_report" untuk menampilkan hasilnya

    $this->load->view('mahasiswa/penelitian/v_print_poten', $data);
  }
  public function cetak_form_perizinan_lembur($id){
    define('FPDF_FONTPATH',$this->config->item('fonts_path'));

    $datap = $this->m_penelitian->data_perizinan_lembur($id);
    $data1 = $datap['pembimbing_1'];
    $data3 = $this->m_penelitian->get_nip($data1);

    $data = array(
      'title' => 'Surat Izin Lembur',
      'data_penelitian' => $datap,
      'a' => $data3,
      'kalab' => $this->m_crud->get('kalab')->row_array()
    );
    // Load view "pdf_report" untuk menampilkan hasilnya

    $this->load->view('mahasiswa/penelitian/v_print_perizinan_lembur', $data);
  }

}
