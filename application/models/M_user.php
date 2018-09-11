<?php

class M_user extends CI_Model{

  public function data_user(){
    $query = $this->db->select('*')
              ->from('tb_user')
              ->where(array('level' => 'mahasiswa'))
              ->get();

    return $query->result();
  }

  public function block($id_user){

  }

  public function check_user($username){
    $query = $this->db->get_where('tb_user', array('username' => $username));
    return $query->result_array();
  }

  public function add_user($data, $table){
    $this->db->insert($table, $data);
  }

  public function delete_user($where, $table){
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function edit_user($where, $table){
    return $this->db->get_where($table, $where);
  }

  public function update_user($where, $data, $table){
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  public function check_user_child($where) {
    $query = $this->db->get_where('mahasiswa', $where);
    return $query->result_array();
  }

}
