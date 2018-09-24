<?php

class M_peminjaman extends CI_Model{

  public function mahasiswa($id_user){
    $query = $this->db->get_where('mahasiswa', array('id_user' => $id_user));
    
    return $query->row_array();
  }

  public function data_alat(){
    $this->db->from('alat');
    $this->db->order_by('nama_alat asc');
    $query = $this->db->get();
    return $query->result();
  }
  
  public function data_alat_instrumen(){
    $this->db->from('alat_instrumen');
    $this->db->order_by('nama_alat asc');
    $query = $this->db->get();
    return $query->result();
  }

  public function data_bahan(){
    $this->db->from('bahan');
    $this->db->order_by('nama_bahan asc');
    $query = $this->db->get();
    return $query->result();
  }

  public function add_alat_bahan($data, $table){
    $this->db->insert($table, $data);
    $query = $this->db->insert_id();
    return $query;
  }

  public function delete_alat_bahan($where, $table){
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function edit_alat_bahan($where, $table){
    return $this->db->get_where($table, $where);
  }

  public function update_alat_bahan($where, $data, $table){
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  //peminjaman mahasiswa
  public function peminjaman_alat(){
    $check = $this->db->from('peminjaman_alat')
                      ->join('mahasiswa', 'mahasiswa.id_mahasiswa = peminjaman_alat.id_mahasiswa')
                      ->get();

    //jika data lebih dari 0
    if($check->num_rows() > 0){
      foreach ($check->result() as $data) {
        $hasil_pinjam[] = $data;
      }

      return $hasil_pinjam;
    }
  }

  public function peminjaman_bahan(){
    $check = $this->db->from('peminjaman_bahan')
                      ->join('mahasiswa', 'mahasiswa.id_mahasiswa = peminjaman_bahan.id_mahasiswa')
                      //->join('daftar_peminjaman_alat', 'daftar_peminjaman_alat.id_peminjaman = peminjaman_bahan.id_peminjaman')
                      ->get();

    //jika data lebih dari 0
    if($check->num_rows()> 0){
      foreach ($check->result() as $data) {
        $hasil_pinjam[] = $data;
      }

      return $hasil_pinjam;
    }
  }

  public function daftar_peminjaman_alat($id){
    $query = $this->db->from('daftar_peminjaman_alat')
                      ->join('alat', 'alat.id_alat = daftar_peminjaman_alat.id_alat')
                      ->where(array('id_peminjaman' => $id))
                      ->get();

    return $query->row_array();
  }

  public function daftar_peminjaman_alat2($id){
    $query = $this->db->from('daftar_peminjaman_alat')
                      ->join('alat', 'alat.id_alat = daftar_peminjaman_alat.id_alat')
                      ->where(array('id_peminjaman' => $id))
                      ->get();

    return $query;
  }

  public function daftar_peminjaman_bahan($id){
    $query = $this->db->from('daftar_peminjaman_bahan')
                      ->join('bahan', 'bahan.id_bahan = daftar_peminjaman_bahan.id_bahan')
                      ->where(array('id_peminjaman' => $id))
                      ->get();
    return $query->row_array();
  }

  public function daftar_peminjaman_bahan2($id){
    $query = $this->db->from('daftar_peminjaman_bahan')
                      ->join('bahan', 'bahan.id_bahan = daftar_peminjaman_bahan.id_bahan')
                      ->where(array('id_peminjaman' => $id))
                      ->get();
    return $query;
  }

  public function add_peminjaman($data, $table){
    $this->db->insert($table, $data);
    $query = $this->db->insert_id();
    return $query;
  }

  public function pinjam_alat($id_peminjaman){
    $query = $this->db->from('peminjaman_alat')
                      ->join('mahasiswa', 'mahasiswa.id_mahasiswa = peminjaman_alat.id_mahasiswa')
                      ->join('daftar_peminjaman_alat', 'daftar_peminjaman_alat.id_peminjaman = peminjaman_alat.id_peminjaman')
                      ->join('alat', 'alat.id_alat = daftar_peminjaman_alat.id_alat')
                      ->where(array('peminjaman_alat.id_peminjaman' => $id_peminjaman))
                      ->get();

    return $query->result();
  }

  public function pinjam_bahan($id_peminjaman){
    $query = $this->db->from('peminjaman_bahan')
                      ->join('mahasiswa', 'mahasiswa.id_mahasiswa = peminjaman_bahan.id_mahasiswa')
                      ->join('daftar_peminjaman_bahan', 'daftar_peminjaman_bahan.id_peminjaman = peminjaman_bahan.id_peminjaman')
                      ->join('bahan', 'bahan.id_bahan = daftar_peminjaman_bahan.id_bahan')
                      ->where(array('peminjaman_bahan.id_peminjaman' => $id_peminjaman))
                      ->get();

    return $query->result();
  }

  public function get_persedian_alat($id) {
    $query = $this->db->select('jumlah')
                      ->from('alat')
                      ->where(array('id_alat' => $id))
                      ->get();
    
    return $query->row_array();
  }

  public function get_persedian_bahan($id) {
    $query = $this->db->select('stok')
                      ->from('bahan')
                      ->where(array('id_bahan' => $id))
                      ->get();
    
    return $query->row_array();
  }

  public function check_stok_alat($id){
    $query = $this->db->select('jumlah')
                      ->from('alat')
                      ->where(array('id_alat' => $id))
                      ->get();

    return $query->row_array();
  }

  public function check_stok_bahan($id){    
    $query = $this->db->select('stok')
                      ->from('bahan')
                      ->where(array('id_bahan' => $id))
                      ->get();

    return $query->row_array();
  }

  public function check_inven_child($table, $where) {
    $query = $this->db->get_where($table, $where);
    return $query->result_array();
  }

}
