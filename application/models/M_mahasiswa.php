<?php

class M_mahasiswa extends CI_Model{

  public function tahun(){
    return $this->db->get('tahun');
  }

  public function mahasiswa(){
    $id_user = $data['id_user'] = $this->session->userdata('id_user');
    $query = $this->db->select('*')
                      ->from('mahasiswa')
                      ->where(array('id_user' => $id_user))
                      ->get();

    return $query->result();
  }

  public function mahasiswa_peminjaman(){
    $id_user = $data['id_user'] = $this->session->userdata('id_user');

    $query = $this->db->select('*')
                      ->from('tb_user')
                      ->join('mahasiswa', 'mahasiswa.id_user = tb_user.id_user')
                      ->where(array('tb_user.id_user' => $id_user))
                      ->get();

    return $query;
  }

  public function data_mahasiswa(){
    $id_user = $data['id_user'] = $this->session->userdata('id_user');
    $query = $this->db->select('*')
                      ->from('mahasiswa')
                      ->join('tahun', 'tahun.id_tahun = mahasiswa.id_tahun')
                      ->where(array('id_user' => $id_user))
                      ->get();

    return $query->result();
    //return $this->db->get_where('mahasiswa', array('id_user' => $id_user));
  }

  public function data_mahasiswa2(){
    $id_user = $data['id_user'] = $this->session->userdata('id_user');
    $query = $this->db->select('*')
                      ->from('mahasiswa')
                      ->join('tahun', 'tahun.id_tahun = mahasiswa.id_tahun')
                      ->where(array('id_user' => $id_user))
                      ->get();

    return $query;
    //return $this->db->get_where('mahasiswa', array('id_user' => $id_user));
  }

  public function get_angkatan_mahasiswa(){
    $id_user = $data['id_user'] = $this->session->userdata('id_user');
    $query = $this->db->select('*')
                      ->from('mahasiswa')
                      ->where(array('id_user' => $id_user))
                      ->get();

    return $query->result_array();
  }

  public function add_biodata($data, $table){
    $this->db->insert($table, $data);
  }

  public function update_data($where, $data, $table){
    $this->db->where($where);
    $this->db->update($table, $data);
  }

}
