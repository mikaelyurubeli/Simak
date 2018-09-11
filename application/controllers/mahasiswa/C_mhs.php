<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_mhs extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_praktikum');
    $this->load->model('m_mahasiswa');
    $this->load->model('m_user');
	}

	public function index(){
		$data = array(
			'title' => 'Mahasiswa',
			'isi'	=> 'mahasiswa/beranda'
		);

		$this->load->view('mahasiswa/layout/wrapper', $data);
	}

	public function penelitian_aas(){
		$data = array(
			'title' => 'Penelitian AAS',
			'isi' 	=> 'mahasiswa/penelitian/v_penelitian_aas'
		);

		$this->load->view('mahasiswa/layout/wrapper', $data);
	}

	public function penelitian_saa(){
		$data = array(
			'title' => 'Penelitian SAA',
			'isi' 	=> 'mahasiswa/penelitian/v_penelitian_saa'
		);

		$this->load->view('mahasiswa/layout/wrapper', $data);
	}

	public function user(){
		$data = array(
			'title' => 'Data User',
			'isi'	=> 'mahasiswa/user/v_data_user',
			'mahasiswa' => $this->m_mahasiswa->data_mahasiswa()
			//'tahun' => $this->m_mahasiswa->detail_tahun()
		);

		$this->load->view('mahasiswa/layout/wrapper', $data);
	}

	public function edit_user(){
		$data = array(
			'title' => 'Edit Data',
			'mahasiswa' => $this->m_mahasiswa->data_mahasiswa(),
			'tahun' => $this->m_mahasiswa->tahun(),
			'isi'	=> 'mahasiswa/user/v_edit_data'
		);

		$this->load->view('mahasiswa/layout/wrapper', $data);
	}

	public function ubah_pass($id){
		$data = array(
			'title' => 'Ubas Password',
			'id'	=> $id,
			'isi'	=> 'mahasiswa/user/v_ubah_pass'
		);

		$this->load->view('mahasiswa/layout/wrapper', $data);
	}

	public function update_data(){
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('noreg', 'noreg', 'trim|required');
    $this->form_validation->set_rules('program_studi', 'program_studi', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
    $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
    $this->form_validation->set_rules('no_hp', 'no_hp', 'trim|required');
    //$this->form_validation->set_rules('url_foto', 'url_foto', 'trim|required');
    $this->form_validation->set_rules('tahun_angkatan', 'tahun_angkatan', 'trim|required');

    if($this->form_validation->run() == FALSE){
      redirect('mahasiswa/c_mhs/edit_user');
    } else {
      $nama = $this->input->post('nama');
      $noreg = $this->input->post('noreg');
      $program_studi = $this->input->post('program_studi');
      $email = $this->input->post('email');
      $alamat = $this->input->post('alamat');
      $no_hp    = $this->input->post('no_hp');
      $url_foto = $this->input->post('url_foto');
      $tahun_angkatan = $this->input->post('tahun_angkatan');
      $id_user    = $this->input->post('id_user');

			$data = array(
				'nama'  => $nama,
				'noreg'  => $noreg,
				'program_studi' => $program_studi,
				'email'  => $email,
				'alamat'  => $alamat,
				'no_hp'     => $no_hp,
				'id_tahun'  => $tahun_angkatan,
				'id_user'     => $id_user
			);

			$where = array(
				'id_user' => $id_user
			);

			$this->m_mahasiswa->update_data($where, $data, 'mahasiswa');
			echo "<script>alert('Berhasil mengubah data!');</script>";
			redirect('mahasiswa/c_mhs/user', 'refresh');
    }
	}

	public function edit_pass(){
		$this->form_validation->set_rules('pass_baru', 'pass_baru', 'trim|required');
    $this->form_validation->set_rules('konf_pass', 'konf_pass', 'trim|required|matches[pass_baru]');

		$id = $this->input->post('id');

		if($this->form_validation->run() == FALSE){
      echo "<script>alert('Password baru dan Konfimasi Password tidak sama!');</script>";
      redirect('mahasiswa/c_mhs/ubah_pass/'.$id, 'refresh');
    } else {
      $pass_baru   = $this->input->post('pass_baru');

      $data = array(
        'password'  => md5($pass_baru)
      );

      $where = array(
        'id_user' => $id
      );

      $this->m_praktikum->update_praktikum($where, $data, 'tb_user');
      echo "<script>alert('Data Berhasil diperbaharui!');</script>";
      redirect('mahasiswa/c_mhs/user', 'refresh');
    }
	}

  public function add_biodata(){
    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('noreg', 'noreg', 'trim|required');
    $this->form_validation->set_rules('program_studi', 'program_studi', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
    $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
    $this->form_validation->set_rules('no_hp', 'no_hp', 'trim|required');
    //$this->form_validation->set_rules('url_foto', 'url_foto', 'trim|required');
    $this->form_validation->set_rules('tahun_angkatan', 'tahun_angkatan', 'trim|required');

    if($this->form_validation->run() == FALSE){
      redirect('c_login/dashboard');
    } else {
      $nama = $this->input->post('nama');
      $noreg = $this->input->post('noreg');
      $program_studi = $this->input->post('program_studi');
      $email = $this->input->post('email');
      $alamat = $this->input->post('alamat');
      $no_hp    = $this->input->post('no_hp');
      $url_foto = $this->input->post('url_foto');
      $tahun_angkatan = $this->input->post('tahun_angkatan');
      $id_user    = $this->input->post('id_user');

	  $config['upload_path']          = './upload/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg';
      $config['max_size']             = 2048;
			
      $this->load->library('upload', $config);

      if ( !$this->upload->do_upload('url_foto')){
				echo "<script>alert('Gagal menyimpan data!');</script>";
				redirect('c_login/dashboard', 'refresh');
      }else{
				$image_data = $this->upload->data();

				$data = array(
					'nama'  => $nama,
					'noreg'  => $noreg,
					'program_studi' => $program_studi,
					'email'  => $email,
					'alamat'  => $alamat,
					'no_hp'     => $no_hp,
					'url_foto'  => './upload/'.$image_data['file_name'],
					'id_tahun'  => $tahun_angkatan,
					'id_user'     => $id_user
				);

				$where = array(
					'id_user' => $id_user
				);

				$data1['status'] = '0';
				$this->m_user->update_user($where, $data1, 'tb_user');

				$this->m_mahasiswa->add_biodata($data, 'mahasiswa');
				echo "<script>alert('Berhasil menyimpan data!');</script>";
				redirect('mahasiswa/c_mhs/index', 'refresh');
      }
    }
  }
}
