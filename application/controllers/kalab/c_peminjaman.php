<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_peminjaman extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('m_peminjaman');
  }

  public function peminjaman_alat(){
    $data = array(
      'title'	=> 'Peminjaman',
      'hasil' => $this->m_peminjaman->peminjaman_alat(),
      'isi'		=> 'kalab/v_peminjaman_alat'
    );

    $this->load->view('kalab/layout/wrapper', $data);
  }

  public function peminjaman_bahan(){
    $data = array(
      'title'	=> 'Peminjaman',
      'hasil' => $this->m_peminjaman->peminjaman_bahan(),
      'isi'		=> 'kalab/v_peminjaman_bahan'

    );

    $this->load->view('kalab/layout/wrapper', $data);
  }

  public function daftar_peminjaman_alat($id_peminjaman){
    $data = array(
      'title' => 'Daftar Peminjaman',
      'daftar'=> $this->m_peminjaman->daftar_peminjaman_alat2($id_peminjaman)->result(),
      'isi'   => 'admin/inventaris/v_daftar_peminjaman_alat'
    );

    $this->load->view('kalab/layout/wrapper', $data);
  }

  public function daftar_peminjaman_bahan($id_peminjaman){
    $data = array(
      'title' => 'Daftar Peminjaman',
      'daftar'=> $this->m_peminjaman->daftar_peminjaman_bahan2($id_peminjaman)->result(),
      'isi'   => 'admin/inventaris/v_daftar_peminjaman_bahan'
    );

    $this->load->view('kalab/layout/wrapper', $data);
  }

}
