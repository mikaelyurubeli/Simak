<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('m_user');
    $this->load->model('m_praktikum');
  }

  public function index(){
    $data = array(
      'title' => 'Manage User',
      'isi'   => 'admin/v_user',
      'tb_user' => $this->m_user->data_user()
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function add_user(){
    $data = array(
      'title' => 'Tambah User',
      'isi'   => 'admin/v_add_user'
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function do_add_user(){
    $this->form_validation->set_rules('username', 'username', 'trim|required');
    $this->form_validation->set_rules('password', 'password', 'trim|required');
    $this->form_validation->set_rules('level', 'level', 'trim|required');

    if($this->form_validation->run() == FALSE){
      redirect('admin/c_user/add_user');
    } else {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $level    = $this->input->post('level');

      $data = array(
        'username'  => $username,
        'password'  => md5($password),
        'level'     => $level
      );

      $check = $this->m_user->check_user($username);
      if(count($check) == 1){
        echo "<script>alert('Username sudah digunakan!');</script>";
        redirect('admin/c_user/index', 'refresh');
      } else {
        $this->m_user->add_user($data, 'tb_user');
        echo "<script>alert('Berhasil menambah data!');</script>";
        redirect('admin/c_user/index', 'refresh');
      }
      }
    }

  public function do_delete_user($id_user){
    $where = array('id_user' => $id_user);

    $check = $this->m_user->check_user_child($where);
    if (count($check) > 0) {
      echo "<script>alert('Akun mahasiswa ini tidak dapat dihapus! \\nAkun mahasiswa ini sudah terdaftar dalam praktikum \\nUntuk menghapus Akun mahasiswa ini, silahkan hubungi administrator!');</script>";
    } else {
      $this->m_user->delete_user($where, 'mahasiswa');
      $this->m_user->delete_user($where, 'tb_user');
      echo "<script>alert('Data berhasil dihapus!');</script>";
    }
    redirect('admin/c_user/index', 'refresh');
  }

  public function edit_user($id_user){
    $where = array('id_user' => $id_user);
    $data = array(
      'title' => 'Edit Data User',
      'isi'   => 'admin/v_edit_user',
      'tb_user' => $this->m_user->edit_user($where, 'tb_user')->result()
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function update_user(){
    $this->form_validation->set_rules('username', 'username', 'trim|required');
    $this->form_validation->set_rules('level', 'level', 'trim|required');

    if($this->form_validation->run() == FALSE){
      redirect('admin/c_user/edit_user');
    } else {
      $id = $this->input->post('id_user');
      $username = $this->input->post('username');
      $level = $this->input->post('level');

      $data = array(
        'username'  => $username,
        'level'     => $level
      );

      $where = array(
        'id_user' => $id
      );

      $this->m_user->update_user($where, $data, 'tb_user');
      echo "<script>alert('Data berhasil diperbaharui');</script>";
      redirect('admin/c_user/index', 'refresh');
    }
  }

  public function ubah_pass($id){
		$data = array(
			'title' => 'Ubas Password',
			'id'	=> $id,
			'isi'	=> 'admin/v_ubah_pass'
		);

		$this->load->view('admin/layout/wrapper', $data);
  }
  
  public function reset_password($id){
    $data = $this->m_user->get_data_user($id);
    $new_password = array('password' => md5($data[0]['noreg']));
    $where = array('id_user' => $id);
    $this->m_user->reset_password($where, $new_password);
    echo "<script>alert('Password berhasil diperbaharui!');</script>";
    redirect('admin/c_user', 'refresh');
  }

  public function edit_pass(){
    $this->form_validation->set_rules('pass_baru', 'pass_baru', 'trim|required');
    $this->form_validation->set_rules('konf_pass', 'konf_pass', 'trim|required|matches[pass_baru]');

    $id = $this->input->post('id');

    if($this->form_validation->run() == FALSE){
      echo "<script>alert('Password baru dan Konfimasi Password tidak sama!');</script>";
      redirect('admin/c_user/ubah_pass/'.$id, 'refresh');
    } else {
      $pass_baru   = $this->input->post('pass_baru');

      $data = array(
        'password'  => md5($pass_baru)
      );

      $where = array(
        'id_user' => $id
      );

      $this->m_praktikum->update_praktikum($where, $data, 'tb_user');
      echo "<script>alert('Password Berhasil diperbaharui!');</script>";
      redirect('admin/c_user', 'refresh');
    }
  }

  public function block_user($id_user){
    $status = 2;
    $this->m_user->block($id_user, $status);
    redirect('admin/c_user', 'refresh');
  }

}
