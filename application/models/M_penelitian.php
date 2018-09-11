<?php

class M_penelitian extends CI_Model{

  public function add($data, $table){
    $this->db->insert($table, $data);
    $query = $this->db->insert_id();
    return $query;
  }

  public function penelitian(){
    $query = $this->db->from('penelitian')
                      ->join('mahasiswa', 'mahasiswa.id_mahasiswa = penelitian.id_mahasiswa')
                      ->get();

    return $query->result();
  }

  public function data_penelitian($id){
    $query = $this->db->from('penelitian')
                      ->join('mahasiswa', 'mahasiswa.id_mahasiswa = penelitian.id_mahasiswa')
                      ->where(array('penelitian.id_penelitian' =>$id))
                      ->get();

    return $query->row_array();
  }

  public function data_penelitian_aas($id){
    $query = $this->db->from('penelitian_aas')
                      ->join('mahasiswa', 'mahasiswa.id_mahasiswa = penelitian_aas.id_mahasiswa')
                      ->where(array('penelitian_aas.id_penelitian' =>$id))
                      ->get();

    return $query->row_array();
  }

  public function data_penelitian_saa($id){
    $query = $this->db->from('penelitian_saa')
                      ->join('mahasiswa', 'mahasiswa.id_mahasiswa = penelitian_saa.id_mahasiswa')
                      ->where(array('penelitian_saa.id_penelitian' =>$id))
                      ->get();

    return $query->row_array();
  }

  public function get_nip($where){
    $query = $this->db->select('nip')
                      ->from('dosen')
                      ->where(array('nama' => $where))
                      ->get();

    return $query->row_array();

  }

}
