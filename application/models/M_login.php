<?php
class M_login extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->tbl = 'tb_user';
    }

    function cek_user($username, $password)
    {
        $query = $this->db->get_where($this->tbl, array('username' => $username, 'password' => $password));
        return $query->result_array();
    }
}
