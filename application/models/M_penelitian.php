<?php

class M_penelitian extends CI_Model{

  public function add($data, $table){
    $this->db->insert($table, $data);
    $query = $this->db->insert_id();
    return $query;
  }

  //ambil data untuk tampilan admin
  public function penelitian(){
    $query = $this->db->from('penelitian')
                      ->join('mahasiswa', 'mahasiswa.id_mahasiswa = penelitian.id_mahasiswa')
                      ->get();

    return $query->result();
  }
  
  public function penelitian_aas(){
    $query = $this->db->from('penelitian_aas')
                      ->join('mahasiswa', 'mahasiswa.id_mahasiswa = penelitian_aas.id_mahasiswa')
                      ->get();

    return $query->result();
  }
  
  public function penelitian_saa(){
    $query = $this->db->from('penelitian_saa')
                      ->join('mahasiswa', 'mahasiswa.id_mahasiswa = penelitian_saa.id_mahasiswa')
                      ->get();

    return $query->result();
  }
    
  public function penelitian_spektro(){
    $query = $this->db->from('penelitian_spektro')
                      ->join('mahasiswa', 'mahasiswa.id_mahasiswa = penelitian_spektro.id_mahasiswa')
                      ->get();

    return $query->result();
  }
    
  public function penelitian_ocean(){
    $query = $this->db->from('penelitian_ocean')
                      ->join('mahasiswa', 'mahasiswa.id_mahasiswa = penelitian_ocean.id_mahasiswa')
                      ->get();

    return $query->result();
  }
    
  public function penelitian_poten(){
    $query = $this->db->from('penelitian_poten')
                      ->join('mahasiswa', 'mahasiswa.id_mahasiswa = penelitian_poten.id_mahasiswa')
                      ->get();

    return $query->result();
  }
      
  public function perizinan_lembur(){
    $query = $this->db->from('penelitian_lembur')
                      ->join('mahasiswa', 'mahasiswa.id_mahasiswa = penelitian_lembur.id_mahasiswa')
                      ->get();

    return $query->result();
  }

  //untuk ambil data tampilan mahasiswa
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
  
  public function data_penelitian_spektro($id){
    $query = $this->db->from('penelitian_spektro')
                      ->join('mahasiswa', 'mahasiswa.id_mahasiswa = penelitian_spektro.id_mahasiswa')
                      ->where(array('penelitian_spektro.id_penelitian' =>$id))
                      ->get();

    return $query->row_array();
  }
  
  public function data_penelitian_ocean($id){
    $query = $this->db->from('penelitian_ocean')
                      ->join('mahasiswa', 'mahasiswa.id_mahasiswa = penelitian_ocean.id_mahasiswa')
                      ->where(array('penelitian_ocean.id_penelitian' =>$id))
                      ->get();

    return $query->row_array();
  }
  
  public function data_penelitian_poten($id){
    $query = $this->db->from('penelitian_poten')
                      ->join('mahasiswa', 'mahasiswa.id_mahasiswa = penelitian_poten.id_mahasiswa')
                      ->where(array('penelitian_poten.id_penelitian' =>$id))
                      ->get();

    return $query->row_array();
  }
    
  public function data_perizinan_lembur($id){
    $query = $this->db->from('penelitian_lembur')
                      ->join('mahasiswa', 'mahasiswa.id_mahasiswa = penelitian_lembur.id_mahasiswa')
                      ->where(array('penelitian_lembur.id_penelitian' =>$id))
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
