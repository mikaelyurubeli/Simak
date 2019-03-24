<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_penelitian extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('m_penelitian');
    $this->load->model('m_praktikum');
  }

  public function index(){
    $data = array(
			'title'	=> 'Penelitian',
      'hasil'  => $this->m_penelitian->penelitian(),
			'isi'		=> 'admin/penelitian/v_penelitian'
		);

		$this->load->view('admin/layout/wrapper', $data);
  }
  
  public function penelitian_aas(){
    $data = array(
			'title'	=> 'Penelitian',
      'hasil'  => $this->m_penelitian->penelitian_aas(),
			'isi'		=> 'admin/penelitian/v_penelitian_aas'
		);

		$this->load->view('admin/layout/wrapper', $data);
  }
  
  public function penelitian_saa(){
    $data = array(
			'title'	=> 'Penelitian',
      'hasil'  => $this->m_penelitian->penelitian_saa(),
			'isi'		=> 'admin/penelitian/v_penelitian_saa'
		);

		$this->load->view('admin/layout/wrapper', $data);
  }
  
  public function penelitian_poten(){
    $data = array(
			'title'	=> 'Penelitian',
      'hasil'  => $this->m_penelitian->penelitian_poten(),
			'isi'		=> 'admin/penelitian/v_penelitian_poten'
		);

		$this->load->view('admin/layout/wrapper', $data);
  }
    
  public function penelitian_ocean(){
    $data = array(
			'title'	=> 'Penelitian',
      'hasil'  => $this->m_penelitian->penelitian_ocean(),
			'isi'		=> 'admin/penelitian/v_penelitian_ocean'
		);

		$this->load->view('admin/layout/wrapper', $data);
  }
    
  public function penelitian_spektro(){
    $data = array(
			'title'	=> 'Penelitian',
      'hasil'  => $this->m_penelitian->penelitian_spektro(),
			'isi'		=> 'admin/penelitian/v_penelitian_spektro'
		);

		$this->load->view('admin/layout/wrapper', $data);
  }
      
  public function surat_izin_lembur(){
    $data = array(
			'title'	=> 'Perizinan Lembur',
      'hasil'  => $this->m_penelitian->perizinan_lembur(),
			'isi'		=> 'admin/penelitian/v_perizinan_lembur'
		);

		$this->load->view('admin/layout/wrapper', $data);
  }

  public function edit_penelitian_umum($id) {
    $data = array(
			'title'	=> 'Ubah Penelitian',
      'data'  => $this->m_penelitian->data_penelitian_byid($id)->result(),
      'dosen' => $this->m_praktikum->dosen(),
			'isi'		=> 'admin/penelitian/v_edit_penelitian'
		);

		$this->load->view('admin/layout/wrapper', $data);
  }

  public function edit_perizinan_lembur($id) {
    $data = array(
			'title'	=> 'Ubah Perizinan Lembur',
      'data'  => $this->m_penelitian->data_perizinan_lembur_byid($id)->result(),
      'dosen' => $this->m_praktikum->dosen(),
			'isi'		=> 'admin/penelitian/v_edit_perizinan_lembur'
		);

		$this->load->view('admin/layout/wrapper', $data);
  }
  
  public function do_update_penelitian() {
    $this->form_validation->set_rules('judul_penelitian', 'judul_penelitian', 'trim|required');
    $this->form_validation->set_rules('pembimbing_1', 'pembimbing_1', 'trim|required');
    $this->form_validation->set_rules('pembimbing_2', 'pembimbing_2', 'trim|required');

    if($this->form_validation->run() == FALSE){
      echo "<script>alert('Terdapat kesalahan pada data yang anda isi!')</script>";
      redirect('admin/c_penelitian/edit_penelitian_umum', 'refresh');
    } else {
      $id_penelitian    = $this->input->post('id_penelitian');
      $judul_penelitian = $this->input->post('judul_penelitian');
      $pembimbing_1     = $this->input->post('pembimbing_1');
      $pembimbing_2     = $this->input->post('pembimbing_2');

      $data = array(
        'judul_penelitian'  => $judul_penelitian,
        'pembimbing_1'      => $pembimbing_1,
        'pembimbing_2'      => $pembimbing_2
      );

      $where = array(
        'id_penelitian' => $id_penelitian
      );

      
      $this->m_praktikum->update_praktikum($where, $data, 'penelitian');
      echo "<script>alert('Data Berhasil diperbaharui!');</script>";
      redirect('admin/c_penelitian', 'refresh');
    }
  }
  public function do_update_perizinan_lembur() {
    $this->form_validation->set_rules('judul_penelitian', 'judul_penelitian', 'trim|required');
    $this->form_validation->set_rules('pembimbing_1', 'pembimbing_1', 'trim|required');
    $this->form_validation->set_rules('pembimbing_2', 'pembimbing_2', 'trim|required');

    if($this->form_validation->run() == FALSE){
      echo "<script>alert('Terdapat kesalahan pada data yang anda isi!')</script>";
      redirect('admin/c_penelitian/edit_perizinan_lembur', 'refresh');
    } else {
      $id_penelitian    = $this->input->post('id_penelitian');
      $judul_penelitian = $this->input->post('judul_penelitian');
      $pembimbing_1     = $this->input->post('pembimbing_1');
      $pembimbing_2     = $this->input->post('pembimbing_2');

      $data = array(
        'judul_penelitian'  => $judul_penelitian,
        'pembimbing_1'      => $pembimbing_1,
        'pembimbing_2'      => $pembimbing_2
      );

      $where = array(
        'id_penelitian' => $id_penelitian
      );

      
      $this->m_praktikum->update_praktikum($where, $data, 'penelitian_lembur');
      echo "<script>alert('Data Berhasil diperbaharui!');</script>";
      redirect('admin/c_penelitian/surat_izin_lembur', 'refresh');
    }
  }

  public function do_delete_penelitian($id){
    $where = array('id_penelitian' => $id);

    $this->m_crud->delete($where, 'penelitian');

    echo "<script>alert('Data penelitian berhasil dihapus');</script>";
    redirect('admin/c_penelitian', 'refresh');
  }

  public function do_delete_penelitian_aas($id){
    $where = array('id_penelitian' => $id);

    $this->m_crud->delete($where, 'penelitian_aas');

    echo "<script>alert('Data penelitian berhasil dihapus');</script>";
    redirect('admin/c_penelitian/penelitian_aas', 'refresh');
  }
  
  public function do_delete_penelitian_saa($id){
    $where = array('id_penelitian' => $id);

    $this->m_crud->delete($where, 'penelitian_saa');

    echo "<script>alert('Data penelitian berhasil dihapus');</script>";
    redirect('admin/c_penelitian/penelitian_saa', 'refresh');
  }
  
  public function do_delete_penelitian_ocean($id){
    $where = array('id_penelitian' => $id);

    $this->m_crud->delete($where, 'penelitian_ocean');

    echo "<script>alert('Data penelitian berhasil dihapus');</script>";
    redirect('admin/c_penelitian/penelitian_ocean', 'refresh');
  }
  
  public function do_delete_penelitian_poten($id){
    $where = array('id_penelitian' => $id);

    $this->m_crud->delete($where, 'penelitian_poten');

    echo "<script>alert('Data penelitian berhasil dihapus');</script>";
    redirect('admin/c_penelitian/penelitian_poten', 'refresh');
  }
  
  public function do_delete_penelitian_spektro($id){
    $where = array('id_penelitian' => $id);

    $this->m_crud->delete($where, 'penelitian_spektro');

    echo "<script>alert('Data penelitian berhasil dihapus');</script>";
    redirect('admin/c_penelitian/penelitian_spektro', 'refresh');
  }

  public function do_delete_perizinan_lembur($id) {
    $where = array('id_penelitian' => $id);

    $this->m_crud->delete($where, 'penelitian_lembur');

    echo "<script>alert('Data penelitian berhasil dihapus');</script>";
    redirect('admin/c_penelitian/surat_izin_lembur', 'refresh');
  }
}
