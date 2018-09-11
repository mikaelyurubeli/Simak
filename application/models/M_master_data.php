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
}