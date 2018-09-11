<?php

class M_asisten extends CI_Model{

  public function asisten_mahasiswa($id_mahasiswa){
    $query = $this->db->join('tahun', 'tahun.id_tahun = mahasiswa.id_tahun')
                      ->where(array('id_mahasiswa' => $id_mahasiswa))
                      ->get_where('mahasiswa');
                      
    return $query->row_array();
  }

  public function check_pendaftaran($id_mahasiswa){
    $query = $this->db->get_where('daftar_asisten', array('id_mahasiswa' => $id_mahasiswa));
    return $query->result_array();
  }

  public function check_daftar(){
    $id_user = $data['id_user'] = $this->session->userdata('id_user');
    $check = $this->db->from('daftar_asisten')
                      ->join('mahasiswa', 'mahasiswa.id_mahasiswa = daftar_asisten.id_mahasiswa')
                      ->where(array('daftar_asisten.id_mahasiswa' => $id_mahasiswa))
                      ->get();

    //jika data lebih dari 0
    if($check->num_rows() > 0){
    foreach ($check->result() as $data) {
    $hasil_pinjam[] = $data;
    }

    return $hasil_pinjam;
}
  }

  public function daftar_pendaftar(){
    $check = $this->db->select('*')
                      ->from('daftar_asisten')
                      ->join('mahasiswa', 'mahasiswa.id_mahasiswa = daftar_asisten.id_mahasiswa')
                      ->get('');

    //jika data lebih dari 0
    if($check->num_rows() > 0){
      foreach($check->result() as $data){
        $hasil[] = $data;
      }
      return $hasil;
    }
  }

  public function data_pendaftaran($id_daftar){
    $query = $this->db->get_where('daftar_asisten', array('id_daftar' => $id_daftar));
    return $query->row_array();
  }

  public function add_pendaftaran($data, $table){
    $this->db->insert($table, $data);
  }

}
