<?php

class M_master_data extends CI_Model{
	public function view(){
	  $this->db->from('master_data');
		$query = $this->db->get();
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

  public function add_dosen($data, $table){
    $this->db->insert($table, $data);
  }
}