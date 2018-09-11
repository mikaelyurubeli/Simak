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

  public function do_delete_penelitian($id){
    $where = array('id_penelitian' => $id);

    $this->m_crud->delete($where, 'penelitian');

    echo "<script>alert('Data penelitian berhasil dihapus');</script>";
    redirect('admin/c_penelitian', 'refresh');
  }
}
