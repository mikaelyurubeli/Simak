<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model('m_mahasiswa');
    }

    function index()
    {
        $session = $this->session->userdata('isLogin');

        if ($session == false) {
            $this->load->view('v_login');
        } else {
            redirect('c_login/dashboard', 'refresh');
        }
    }

  function do_login()
  {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $cek = $this->m_login->cek_user($username, md5($password));

      if (count($cek) == 1) {
          foreach ($cek as $cek) {
              $username = $cek['username'];
              $password = $cek['password'];
              $level = $cek['level'];
              $status = $cek['status'];
              $id_user = $cek['id_user'];
          }

          $this->session->set_userdata(array(
              'isLogin' => TRUE,
              'username' => $username,
              'password' => $password,
              'level' => $level,
              'status' => $status,
              'id_user' => $id_user));

          redirect('c_login/dashboard');

      } else {
          echo "<script>alert('Username atau Password salah. Login Gagal!')</script>";
          redirect('c_login', 'refresh');
      }
  }

    function dashboard()
    {
        $data = $this->session->all_userdata();
        $statuss = $this->session->userdata('isLogin');
        $status = $this->session->userdata('status');
        $level = $this->session->userdata('level');
        $id_user = $this->session->userdata('id_user');

        if ($statuss == true) {
            if ($level == 'admin') {
                $data['level'] = 'Administrator';
                $data['status'] = 'Active';
                $data = array(
                    'title' => 'Adm-Beranda',
                    'isi'   => 'admin/beranda'
                );
                $this->load->view('admin/layout/wrapper', $data);

            } elseif ($level == 'kalab'){
                $data['level'] = 'Kepala Lab';
                $data['status'] = 'Active';
                $data = array(
                    'title' => 'Kalab-Beranda',
                    'isi'   => 'admin/beranda'
                );
                $this->load->view('kalab/layout/wrapper', $data);

            } elseif ($level == 'mahasiswa'){
                if($status == '1'){
                  $data['level'] = 'Mahasiswa';
                  $data['status'] = 'Active';
                  $data['tahun_angkatan'] = $this->m_mahasiswa->tahun();
                  $data['id_user'] = $id_user;
                  /*$data = array(
                    'title' => 'Data Mahasiswa',
                    'isi'   => 'mahasiswa/v_biodata'
                  );

                  $this->load->view('mahasiswa/layout/wrapper', $data);
                  */
                  $this->load->view('mahasiswa/v_biodata', $data);
                } else {
                  $data['level'] = 'Mahasiswa';
                  $data['status'] = 'Active';
                  $data = array(
                      'title' => 'Mhs-Beranda',
                      'isi'   => 'mahasiswa/beranda'
                  );

                  $this->load->view('mahasiswa/layout/wrapper', $data);
                }

            }
        } else {
            echo "<script>alert('Halaman tidak dapat diakses. Silahkan login!')</script>";
            redirect('c_login', 'refresh');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('c_login', 'refresh');
    }

}
