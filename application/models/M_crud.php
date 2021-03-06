<?php

class M_crud extends CI_Model {
    public function get($table) {
        $query = $this->db->from($table)
                          ->get();

        return $query;
    }

    public function get_where($table, $where) {
        $query = $this->db->get_where($table, $where);
        
        return $query;
    }

    public function add($data, $table){
        $this->db->insert($table, $data);
    }

    public function edit($where, $tabel){
        return $this->db->get_where($tabel, $where);
    }

    public function update($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function delete($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}