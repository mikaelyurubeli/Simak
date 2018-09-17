<?php

class M_praktikum extends CI_Model {

	public function nama_praktikum(){
	  return $this->db->get('nama_praktikum');
	}

	public function praktikum2(){
		return $this->db->get('praktikum');
	}

	public function get_nama_praktikum($id_praktikum) {
		$query = $this->db->get_where('praktikum', array('id_praktikum' => $id_praktikum))->row_array();

		return $query['nama_praktikum'];
	}

	public function dosen(){
		$this->db->from('dosen');
		$this->db->order_by('nama asc');
		$query = $this->db->get();
		return $query;
	}

	public function mahasiswa(){
			return $this->db->get('mahasiswa');
	}

	public function semester(){
		return $this->db->get('semester');
	}

	public function hari(){
		return $this->db->get('hari');
	}

	public function check_praktikum($kode_praktikum){
		$query = $this->db->get_where('praktikum', array('kode_praktikum' => $kode_praktikum));
		return $query->result_array();
	}

	public function check_praktikum_jadwal($id_praktikum){
		$query = $this->db->get_where('jadwal_praktikum', array('id_praktikum' => $id_praktikum));
		return $query->result_array();
	}

	public function check_praktikum_riwayat($id_praktikum){
		$query = $this->db->get_where('riwayat_praktikum', array('id_praktikum' => $id_praktikum));
		return $query->result();
	}

	public function check_jadwal_praktikum($praktikum){
		$query = $this->db->get_where('jadwal_praktikum', array('id_praktikum' => $praktikum));
		return $query->result();
	}

	public function check_period_daftar_praktikum(){
		$query = $this->db->select('daftar_praktikum')
						  ->from('master_data')
						  ->get()
						  ->row_array();

		return $query['daftar_praktikum'];
	}

	public function get_current_semester(){
		$query = $this->db->select('semester')
						  ->from('master_data')
						  ->get()
						  ->row_array();
		
		return $query['semester'];
	}

	public function praktikum(){
		$check = $this->db->get('praktikum');

		//jika data lebih dari 0
		if($check->num_rows() > 0){
			foreach($check->result() as $data){
				$hasil_praktikum[] = $data;
			}
			return $hasil_praktikum;
		}
	}

	public function jadwal_praktikum($semester){
		//$check = $this->db->get('jadwal_praktikum');
		$hasil_jadwal = $this->db->select('*')
                  ->from('jadwal_praktikum')
				  ->join('praktikum', 'praktikum.id_praktikum = jadwal_praktikum.id_praktikum')
				  ->where('semester', $semester)
                  ->get();

		if($hasil_jadwal->num_rows() > 0){
		foreach ($hasil_jadwal->result() as $data) {
			$hasil[] = $data;
		}

      		return $hasil;
    	}
	}

	public function jadwal_praktikum_all(){
		//$check = $this->db->get('jadwal_praktikum');
		$hasil_jadwal = $this->db->select('*')
                  ->from('jadwal_praktikum')
				  ->join('praktikum', 'praktikum.id_praktikum = jadwal_praktikum.id_praktikum')
                  ->get();

		if($hasil_jadwal->num_rows() > 0){
      foreach ($hasil_jadwal->result() as $data) {
        $hasil[] = $data;
      }

      return $hasil;
    }
	}

	public function edit_jadwal($where){
		$hasil_jadwal = $this->db->select('*')
								  ->from('jadwal_praktikum')
								  ->join('praktikum', 'praktikum.id_praktikum = jadwal_praktikum.id_praktikum')
								  ->where($where)
								  ->get();

		return $hasil_jadwal;
	}

	//riwayat praktikum (krs)
	public function rp_mahasiswa($id_mahasiswa){
		$query = $this->db->select('*')
						  ->from('riwayat_praktikum')
						  ->join('praktikum', 'praktikum.id_praktikum = riwayat_praktikum.id_praktikum')
						  ->join('jadwal_praktikum', 'jadwal_praktikum.id_praktikum = praktikum.id_praktikum')
						  ->where(array('id_mahasiswa' => $id_mahasiswa))
						  ->get();

		return $query->result();
	}

	public function rp_mahasiswa_detail($id_mahasiswa){
		$query = $this->db->get_where('mahasiswa', array('id_mahasiswa' => $id_mahasiswa));

		return $query->row_array();
	}

	public function rp_praktikum($id_praktikum){
		$query = $this->db->select('*')
						  ->from('riwayat_praktikum')
						  ->join('praktikum', 'praktikum.id_praktikum = riwayat_praktikum.id_praktikum')
						  ->where(array('praktikum.id_praktikum' => $id_praktikum))
						  ->get();

		return $query->row_array();
	}

	public function rp($id_user){
		$smt = $this->db->select('semester')
						->from('master_data')
						->get()
						->row_array();

		$query = $this->db->select('*')
						  ->from('riwayat_praktikum')
						  ->join('praktikum', 'praktikum.id_praktikum = riwayat_praktikum.id_praktikum')
						  ->join('mahasiswa', 'mahasiswa.id_mahasiswa = riwayat_praktikum.id_mahasiswa')
						  ->where(array('id_user' => $id_user, 'praktikum.semester' => $smt['semester']))
						  ->get();

		if($query->num_rows() > 0){
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
		return $hasil;
		}
	}

	public function get_rp($id_mhs){
		$where = $this->db->select('semester')
						  ->from('master_data')
						  ->get()
						  ->row_array();

		$query = $this->db->select('*')
						  ->from('riwayat_praktikum')
						  ->join('praktikum', 'praktikum.id_praktikum = riwayat_praktikum.id_praktikum')
						  ->join('mahasiswa', 'mahasiswa.id_mahasiswa = riwayat_praktikum.id_mahasiswa')
						  ->where(array('riwayat_praktikum.id_mahasiswa' => $id_mhs, 'riwayat_praktikum.semester' => $where['semester']))
						  ->get();

		return $query->result();
	}

	public function check_praktikum_rp($tambah_praktikum){
		$result = array();
		$query = $this->db->select('*')
						  ->from('jadwal_praktikum')
						  ->join('praktikum', 'praktikum.id_praktikum = jadwal_praktikum.id_praktikum')
						  ->where(array('kode_praktikum' => $tambah_praktikum))
						  ->get();

		foreach($query->result() as $row){
			$result['id_praktikum'] = $row->id_praktikum;
		}
		if(empty($result['id_praktikum'])){
				return $result;
		} else {
			return $result['id_praktikum'];
		}

	}

	public function get_mahasiswa_rp($id_user){
		$result = array();
		$query = $this->db->get_where('mahasiswa', array('id_user' => $id_user));

		foreach($query->result() as $row){
			$result['id_mahasiswa'] = $row->id_mahasiswa;
		}
		return $result['id_mahasiswa'];
	}

	public function check_double_rp($tambah_praktikum, $id_user){
		$query = $this->db->select('*')
						  ->from('riwayat_praktikum')
						  ->join('praktikum', 'praktikum.id_praktikum = riwayat_praktikum.id_praktikum')
						  ->join('mahasiswa', 'mahasiswa.id_mahasiswa = riwayat_praktikum.id_mahasiswa')
						  ->where(array('kode_praktikum' => $tambah_praktikum, 'id_user' => $id_user))
						  ->get();

		return $query->result_array();
	}

	//data peserta praktikum
	public function get_id_praktikum($where){
		$query = $this->db->select('id_praktikum')
						  ->from('riwayat_praktikum')
						  ->where($where)
						  ->get()
						  ->row_array();

		return $query['id_praktikum'];
	}
	public function get_peserta_praktikum($table){
		$query = $this->db->select('peserta')
						  ->from($table)
						  ->get();
		
		return $query->row_array();
	}

	public function get_daftar_peserta($id_praktikum) {
		$query = $this->db->select('*')
						  ->from('riwayat_praktikum')
						  ->join('mahasiswa', 'mahasiswa.id_mahasiswa = riwayat_praktikum.id_mahasiswa')
						  ->join('praktikum', 'praktikum.id_praktikum = riwayat_praktikum.id_praktikum')
						  ->where(array('riwayat_praktikum.id_praktikum' => $id_praktikum))
						  ->get();
		
		return $query;
	}

	//crud praktikum / jadwal
	public function add_praktikum($data, $table){
		$this->db->insert($table, $data);
	}


	public function edit_praktikum($where, $table){
		return $this->db->get_where($table, $where);
	}

	public function update_praktikum($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function delete_praktikum($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function get_dropdown_praktikum(){
		$where = $this->db->select('semester')
						  ->from('master_data')
						  ->get()
						  ->row_array();

		$query = $this->db->select('*')
						  ->from('praktikum')
						  ->where(array('semester' => $where['semester']))
						  ->get();
		
		return $query;
	}

	public function get_dropdown_semester() {
		$this->db->from('semester');
		$this->db->order_by('id_semester');
		$result = $this->db->get();
		$return = array();
		$return[""] = '--Pilih Semester--';
		if($result->num_rows() > 0){
			foreach($result->result_array() as $row){
				$return[$row['semester']]= $row['semester'];
			}
		}
		return $return;
	}

	public function daftar_alat_pecah() {
		return $this->db->get('daftar_alat_pecah');
	}

	public function daftar_alat_pecah_smt($semester){
		$hasil_jadwal = $this->db->select('*')
                  ->from('daftar_alat_pecah')
				  ->where('semester', $semester)
                  ->get();

		if($hasil_jadwal->num_rows() > 0){
		foreach ($hasil_jadwal->result() as $data) {
			$hasil[] = $data;
		}

      		return $hasil;
    	}
	}
}
