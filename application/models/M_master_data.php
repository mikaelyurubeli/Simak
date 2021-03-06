<?php

class M_master_data extends CI_Model{
	public function view(){
	  $this->db->from('master_data');
		$query = $this->db->get();
		return $query;
	}

	public function get_data($table) {
		$query = $this->db->from($table)
											->get();

		return $query;
	}

	public function edit($where, $table){
    return $this->db->get_where($table, $where);
  }

  public function update($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function data_dosen() {
		$this->db->from('dosen');
		$query = $this->db->get();
		return $query->result();
	}

	public function data_nama_praktikum() {
		$this->db->from('nama_praktikum');
		$query = $this->db->get();

		return $query->result();
	}

	public function get_nama_dosen($id) {
		$query = $this->db->from('dosen')
											->where(array('id_dosen' => $id))
											->get();

		return $query->result_array();
	}

	public function get_nama_praktikum($id) {
		$query = $this->db->from('nama_praktikum')->where(array('id_nama_prak' => $id))->get();

		return $query->result_array();
	}

  public function add_dosen($data, $table){
    $this->db->insert($table, $data);
  }
  
  public function is_had_child($where, $table) {
    $query = $this->db->get_where($table, $where);
    return $query->result_array();
	}
	
	public function data_semester() {
		$this->db->from('semester');
		$query = $this->db->get();
		return $query->result();
	}

	public function check_duplicate($where, $table) {
		$query = $this->db->get_where($table, $where);
    return $query->result_array();
	}
}