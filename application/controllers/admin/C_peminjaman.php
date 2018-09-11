<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_peminjaman extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('M_peminjaman');
  }

  public function peminjaman_alat(){
    $data = array(
      'title'	=> 'Peminjaman',
      'hasil' => $this->M_peminjaman->peminjaman_alat(),
      'isi'		=> 'admin/inventaris/v_peminjaman_alat'
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function peminjaman_bahan(){
    $data = array(
      'title'	=> 'Peminjaman',
      'hasil' => $this->M_peminjaman->peminjaman_bahan(),
      'isi'		=> 'admin/inventaris/v_peminjaman_bahan'

    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function alat(){
    $data = array(
      'title' => 'Invetaris',
      'isi'   => 'admin/inventaris/v_add_alat'
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function bahan(){
    $data = array(
      'title' => 'Invetaris',
      'isi'   => 'admin/inventaris/v_add_bahan'
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function data_alat(){
    $data = array(
      'title' => 'Daftar Alat',
      'isi'   => 'admin/inventaris/v_alat',
      'alat'  => $this->M_peminjaman->data_alat()
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function data_bahan(){
    $data = array(
      'title' => 'Daftar Bahan',
      'isi'   => 'admin/inventaris/v_bahan',
      'bahan' => $this->M_peminjaman->data_bahan()
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function do_add_alat(){
    $this->form_validation->set_rules('nama_alat', 'nama_alat', 'trim|required');
    $this->form_validation->set_rules('spesifikasi', 'spesifikasi', 'trim|required');
    $this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');

    if($this->form_validation->run() == FALSE){
      redirect('admin/c_peminjaman/data_alat_bahan');
    } else {
      $nama_alat = $this->input->post('nama_alat');
      $spesifikasi = $this->input->post('spesifikasi');
      $jumlah    = $this->input->post('jumlah');

      $data = array(
        'nama_alat'  => $nama_alat,
        'spesifikasi'  => $spesifikasi,
        'jumlah'     => $jumlah
      );

      $this->M_peminjaman->add_alat_bahan($data, 'alat');
      echo "<script>alert('Berhasil menambah data alat!');</script>";
      redirect('admin/c_peminjaman/data_alat', 'refresh');
    }
  }

  public function do_add_bahan(){
    $this->form_validation->set_rules('nama_bahan', 'nama_bahan', 'trim|required');
    $this->form_validation->set_rules('stok', 'stok', 'trim|required');
    $this->form_validation->set_rules('ukuran', 'ukuran', 'trim|required');

    if($this->form_validation->run() == FALSE){
      redirect('admin/c_peminjaman/data_alat_bahan');
    } else {
      $nama_bahan = $this->input->post('nama_bahan');
      $spesifikasi = $this->input->post('spesifikasi');
      $stok = $this->input->post('stok');
      $ukuran    = $this->input->post('ukuran');

      $data = array(
        'nama_bahan'  => $nama_bahan,
        'spesifikasi' => $spesifikasi,
        'stok'        => $stok,
        'ukuran'      => $ukuran
      );

      $this->M_peminjaman->add_alat_bahan($data, 'bahan');
      echo "<script>alert('Berhasil menambah data bahan!');</script>";
      redirect('admin/c_peminjaman/data_bahan', 'refresh');
    }
  }

  public function do_delete_alat($id_alat){
    $where = array('id_alat' => $id_alat);
    $this->M_peminjaman->delete_alat_bahan($where, 'alat');
    echo "<script>alert('Data berhasil dihapus!');</script>";
    redirect('admin/c_peminjaman/data_alat', 'refresh');
  }

  public function do_delete_bahan($id_bahan){
    $where = array('id_bahan' => $id_bahan);
    $this->M_peminjaman->delete_alat_bahan($where, 'bahan');
    echo "<script>alert('Data berhasil dihapus!');</script>";
    redirect('admin/c_peminjaman/data_bahan', 'refresh');
  }

  public function edit_alat($id_alat){
    $where = array('id_alat' => $id_alat);
    $data = array(
      'title' => 'Edit Data Alat',
      'isi'   => 'admin/inventaris/v_edit_alat',
      'alat' => $this->M_peminjaman->edit_alat_bahan($where, 'alat')->result()
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function edit_bahan($id_bahan){
    $where = array('id_bahan' => $id_bahan);
    $data = array(
      'title' => 'Edit Data Bahan',
      'isi'   => 'admin/inventaris/v_edit_bahan',
      'bahan' => $this->M_peminjaman->edit_alat_bahan($where, 'bahan')->result()
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function update_alat(){
    $this->form_validation->set_rules('nama_alat', 'nama_alat', 'trim|required');
    $this->form_validation->set_rules('spesifikasi', 'spesifikasi', 'trim|required');
    $this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');

    if($this->form_validation->run() == FALSE){
      redirect('admin/c_peminjaman/edit_alat');
    } else {
      $id = $this->input->post('id_alat');
      $nama_alat = $this->input->post('nama_alat');
      $spesifikasi = $this->input->post('spesifikasi');
      $jumlah = $this->input->post('jumlah');

      $data = array(
        'nama_alat'  => $nama_alat,
        'spesifikasi'  => $spesifikasi,
        'jumlah'     => $jumlah
      );

      $where = array(
        'id_alat' => $id
      );

      $this->M_peminjaman->update_alat_bahan($where, $data, 'alat');
      echo "<script>alert('Data berhasil diperbaharui');</script>";
      redirect('admin/c_peminjaman/data_alat', 'refresh');
    }
  }

  public function update_bahan(){
    $this->form_validation->set_rules('nama_bahan', 'nama_bahan', 'trim|required');
    $this->form_validation->set_rules('spesifikasi', 'spesifikasi', 'trim|required');
    $this->form_validation->set_rules('stok', 'stok', 'trim|required');
    $this->form_validation->set_rules('ukuran', 'ukuran', 'trim|required');

    if($this->form_validation->run() == FALSE){
      redirect('admin/c_peminjaman/edit_bahan');
    } else {
      $id = $this->input->post('id_bahan');
      $nama_bahan = $this->input->post('nama_bahan');
      $spesifikasi = $this->input->post('spesifikasi');
      $stok = $this->input->post('stok');
      $ukuran = $this->input->post('ukuran');

      $data = array(
        'nama_bahan'  => $nama_bahan,
        'spesifikasi' => $spesifikasi,
        'stok'        => $stok,
        'ukuran'      => $ukuran
      );

      $where = array(
        'id_bahan' => $id
      );

      $this->M_peminjaman->update_alat_bahan($where, $data, 'bahan');
      echo "<script>alert('Data berhasil diperbaharui');</script>";
      redirect('admin/c_peminjaman/data_bahan', 'refresh');
    }
  }

  public function daftar_peminjaman_alat($id_peminjaman){
    $data = array(
      'title' => 'Daftar Peminjaman',
      'daftar'=> $this->M_peminjaman->daftar_peminjaman_alat2($id_peminjaman)->result(),
      'isi'   => 'admin/inventaris/v_daftar_peminjaman_alat'
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function daftar_peminjaman_bahan($id_peminjaman){
    $data = array(
      'title' => 'Daftar Peminjaman',
      'daftar'=> $this->M_peminjaman->daftar_peminjaman_bahan2($id_peminjaman)->result(),
      'isi'   => 'admin/inventaris/v_daftar_peminjaman_bahan'
    );

    $this->load->view('admin/layout/wrapper', $data);
  }
}
