<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_penelitian extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('m_penelitian');
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

  public function do_delete_penelitian($id){
    $where = array('id_penelitian' => $id);

    $this->m_crud->delete($where, 'penelitian');

    echo "<script>alert('Data penelitian berhasil dihapus');</script>";
    redirect('admin/c_penelitian', 'refresh');
  }
}
