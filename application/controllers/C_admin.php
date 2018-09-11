<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller{

	public function index(){
		$data = array(
			'title' => 'Admin',
			'isi'	=> 'admin/beranda'
		);

		$this->load->view('admin/layout/wrapper', $data);
	}


}
