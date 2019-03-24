<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_peminjaman extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('M_peminjaman');
  }

  public function peminjaman_alat(){
    $data = array(
      'title'	=> 'Peminjaman',
      'hasil' => $this->M_peminjaman->peminjaman_alat(),
      'isi'		=> 'admin/inventaris/v_peminjaman_alat'
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function peminjaman_bahan(){
    $data = array(
      'title'	=> 'Peminjaman',
      'hasil' => $this->M_peminjaman->peminjaman_bahan(),
      'isi'		=> 'admin/inventaris/v_peminjaman_bahan'

    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function alat(){
    $data = array(
      'title' => 'Invetaris',
      'isi'   => 'admin/inventaris/v_add_alat'
    );

    $this->load->view('admin/layout/wrapper', $data);
  }
  
  public function alat_instrumen(){
    $data = array(
      'title' => 'Invetaris',
      'isi'   => 'admin/inventaris/v_add_alat_instrumen'
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function bahan(){
    $data = array(
      'title' => 'Invetaris',
      'isi'   => 'admin/inventaris/v_add_bahan'
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function data_alat(){
    $data = array(
      'title' => 'Daftar Alat Kaca',
      'isi'   => 'admin/inventaris/v_alat',
      'alat'  => $this->M_peminjaman->data_alat()
    );

    $this->load->view('admin/layout/wrapper', $data);
  }
  
  public function data_alat_instrumen(){
    $data = array(
      'title' => 'Daftar Alat Instrumen',
      'isi'   => 'admin/inventaris/v_alat_instrumen',
      'alat'  => $this->M_peminjaman->data_alat_instrumen()
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function data_bahan(){
    $data = array(
      'title' => 'Daftar Bahan Kimia',
      'isi'   => 'admin/inventaris/v_bahan',
      'bahan' => $this->M_peminjaman->data_bahan()
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function do_add_alat(){
    $this->form_validation->set_rules('nama_alat', 'nama_alat', 'trim|required');
    $this->form_validation->set_rules('spesifikasi', 'spesifikasi', 'trim|required');
    $this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
    $this->form_validation->set_rules('kondisi', 'kondisi', 'trim|required');

    if($this->form_validation->run() == FALSE){
      echo "<script>alert(Gagal menambah data bahan!');</script>";
      redirect('admin/c_peminjaman/data_alat', 'refresh');
    } else {
      $nama_alat    = $this->input->post('nama_alat');
      $spesifikasi  = $this->input->post('spesifikasi');
      $jumlah       = $this->input->post('jumlah');
      $kondisi      = $this->input->post('kondisi');
      $sop          = $this->input->post('sop');

      if ($_FILES['sop']['name'] != "") {
        $config['upload_path']          = './upload/Alat-Kaca-SOP';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 2048;
        
        $this->load->library('upload', $config);

        if ( !$this->upload->do_upload('sop')){
          echo "<script>alert('Gagal menyimpan data!');</script>";
          redirect('admin/c_peminjaman/data_alat', 'refresh');
        } else {
          $sop = $this->upload->data();

          $data = array(
            'nama_alat'   => $nama_alat,
            'spesifikasi' => $spesifikasi,
            'jumlah'      => $jumlah,
            'kondisi'     => $kondisi,
            'sop'         => 'upload/Alat-Kaca-SOP/'.$sop['file_name'],
          );

          $this->M_peminjaman->add_alat_bahan($data, 'alat');
          echo "<script>alert('Berhasil menambah data alat!');</script>";
          redirect('admin/c_peminjaman/data_alat', 'refresh');
        }
      } else {
        $data = array(
          'nama_alat'   => $nama_alat,
          'spesifikasi' => $spesifikasi,
          'jumlah'      => $jumlah,
          'kondisi'     => $kondisi
        );

        $this->M_peminjaman->add_alat_bahan($data, 'alat');
        echo "<script>alert('Berhasil menambah data alat!');</script>";
        redirect('admin/c_peminjaman/data_alat', 'refresh');
      }
    }
  }
  
  public function do_add_alat_instrumen(){
    $this->form_validation->set_rules('nama_alat', 'nama_alat', 'trim|required');
    $this->form_validation->set_rules('spesifikasi', 'spesifikasi', 'trim|required');
    $this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
    $this->form_validation->set_rules('kondisi', 'kondisi', 'trim|required');

    if($this->form_validation->run() == FALSE){
      echo "<script>alert(Gagal menambah data bahan!');</script>";
      redirect('admin/c_peminjaman/data_alat_instrumen', 'refresh');
    } else {
      $nama_alat    = $this->input->post('nama_alat');
      $spesifikasi  = $this->input->post('spesifikasi');
      $jumlah       = $this->input->post('jumlah');
      $kondisi      = $this->input->post('kondisi');
      $sop          = $this->input->post('sop');

      if ($_FILES['sop']['name'] != "") {
        $config['upload_path']          = './upload/Alat-SOP';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 2048;
        
        $this->load->library('upload', $config);

        if ( !$this->upload->do_upload('sop')){
          echo "<script>alert('Gagal menyimpan data!');</script>";
          redirect('admin/c_peminjaman/data_alat_instrumen', 'refresh');
        } else {
          $sop = $this->upload->data();

          $data = array(
            'nama_alat'   => $nama_alat,
            'spesifikasi' => $spesifikasi,
            'jumlah'      => $jumlah,
            'kondisi'     => $kondisi,
            'sop'         => 'upload/Alat-SOP/'.$sop['file_name'],
          );

          $this->M_peminjaman->add_alat_bahan($data, 'alat_instrumen');
          echo "<script>alert('Berhasil menambah data alat!');</script>";
          redirect('admin/c_peminjaman/data_alat_instrumen', 'refresh');
        }
      } else {
        $data = array(
          'nama_alat'   => $nama_alat,
          'spesifikasi' => $spesifikasi,
          'jumlah'      => $jumlah,
          'kondisi'     => $kondisi
        );

        $this->M_peminjaman->add_alat_bahan($data, 'alat_instrumen');
        echo "<script>alert('Berhasil menambah data alat!');</script>";
        redirect('admin/c_peminjaman/data_alat_instrumen', 'refresh');
      }
    }
  }

  public function do_add_bahan(){
    $this->form_validation->set_rules('nama_bahan', 'nama_bahan', 'trim|required');
    $this->form_validation->set_rules('satuan_bahan', 'satuan_bahan', 'trim|required');
    $this->form_validation->set_rules('kondisi', 'kondisi', 'trim|required');
    $this->form_validation->set_rules('stok', 'stok', 'trim|required');
    $this->form_validation->set_rules('ukuran', 'ukuran', 'trim|required');

    if($this->form_validation->run() == FALSE){
      echo "<script>alert(Gagal menambah data bahan!');</script>";
      redirect('admin/c_peminjaman/data_bahan', 'refresh');
    } else {
      $nama_bahan   = $this->input->post('nama_bahan');
      $spesifikasi  = $this->input->post('spesifikasi');
      $satuan_bahan = $this->input->post('satuan_bahan');
      $kondisi      = $this->input->post('kondisi');
      $stok         = $this->input->post('stok');
      $ukuran       = $this->input->post('ukuran');
      $ldkb         = $this->input->post('ldkb');

      if ($_FILES['ldkb']['name'] != "") {
        $config['upload_path']          = './upload/Bahan-LDKB';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 2048;
        
        $this->load->library('upload', $config);

        if ( !$this->upload->do_upload('ldkb')){
          echo "<script>alert('Gagal menyimpan data!');</script>";
          redirect('admin/c_peminjaman/data_bahan', 'refresh');
        } else {
          $ldkb = $this->upload->data();

          $data = array(
            'nama_bahan'    => $nama_bahan,
            'spesifikasi'   => $spesifikasi,
            'satuan_bahan'  => $satuan_bahan,
            'kondisi'       => $kondisi,
            'stok'          => $stok,
            'ukuran'        => $ukuran,
            'ldkb'          => 'upload/Bahan-LDKB/'.$ldkb['file_name'],
          );

          $this->M_peminjaman->add_alat_bahan($data, 'bahan');
          echo "<script>alert('Berhasil menambah data bahan!');</script>";
          redirect('admin/c_peminjaman/data_bahan', 'refresh');
        }
      } else {
        $data = array(
          'nama_bahan'    => $nama_bahan,
          'spesifikasi'   => $spesifikasi,
          'satuan_bahan'  => $satuan_bahan,
          'kondisi'       => $kondisi,
          'stok'          => $stok,
          'ukuran'        => $ukuran
        );

        $this->M_peminjaman->add_alat_bahan($data, 'bahan');
        echo "<script>alert('Berhasil menambah data bahan!');</script>";
        redirect('admin/c_peminjaman/data_bahan', 'refresh');
      }
    }
  }

  public function do_delete_alat($id_alat){
    $where = array('id_alat' => $id_alat);
    $data_alat = $this->M_peminjaman->get_data_alat_by_id('alat', array('id_alat' => $id_alat));
    $path = $data_alat[0]['sop'];
    
    $check = $this->M_peminjaman->check_inven_child('daftar_peminjaman_alat', $where);
    if (count($check) > 0) {
      echo "<script>alert('Alat ini tidak dapat dihapus! \\nUntuk menghapus alat ini, silahkan hubungi administrator!');</script>";
      redirect('admin/c_peminjaman/data_alat', 'refresh');
    } else {
      delete_files(base_url($path));
      $this->M_peminjaman->delete_alat_bahan($where, 'alat');
      echo "<script>alert('Data berhasil dihapus!');</script>";
      redirect('admin/c_peminjaman/data_alat', 'refresh');
    }
  }
  
  public function do_delete_alat_instrumen($id_alat){
    $where = array('id_alat' => $id_alat);
    $data_alat = $this->M_peminjaman->get_data_alat_by_id('alat_instrumen', array('id_alat' => $id_alat));
    $path = $data_alat[0]['sop'];

    $check = $this->M_peminjaman->check_inven_child('daftar_peminjaman_alat', $where);
    if (count($check) > 0) {
      echo "<script>alert('Alat ini tidak dapat dihapus! \\nUntuk menghapus alat ini, silahkan hubungi administrator!');</script>";
      redirect('admin/c_peminjaman/data_alat_instrumen', 'refresh');
    } else {
      delete_files(base_url($path));
      $this->M_peminjaman->delete_alat_bahan($where, 'alat_instrumen');
      echo "<script>alert('Data berhasil dihapus!');</script>";
      redirect('admin/c_peminjaman/data_alat_instrumen', 'refresh');
    }
  }

  public function do_delete_bahan($id_bahan){
    $where = array('id_bahan' => $id_bahan);

    $data = $this->M_peminjaman->edit_alat_bahan($where, 'bahan')->row_array();
    $check = $this->M_peminjaman->check_inven_child('daftar_peminjaman_bahan', $where);
    if (count($check) > 0) {
      echo "<script>alert('Bahan kimia ini tidak dapat dihapus! \\nUntuk menghapus bahan kimia ini, silahkan hubungi administrator!');</script>";
      redirect('admin/c_peminjaman/data_bahan', 'refresh');
    } else {
      unlink($data['ldkb']);
      $this->M_peminjaman->delete_alat_bahan($where, 'bahan');
      echo "<script>alert('Data berhasil dihapus!');</script>";
      redirect('admin/c_peminjaman/data_bahan', 'refresh');
    }
  }

  public function edit_alat($id_alat){
    $where = array('id_alat' => $id_alat);
    $data = array(
      'title' => 'Edit Data Alat',
      'isi'   => 'admin/inventaris/v_edit_alat',
      'alat' => $this->M_peminjaman->edit_alat_bahan($where, 'alat')->result()
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function edit_bahan($id_bahan){
    $where = array('id_bahan' => $id_bahan);
    $data = array(
      'title' => 'Edit Data Bahan',
      'isi'   => 'admin/inventaris/v_edit_bahan',
      'bahan' => $this->M_peminjaman->edit_alat_bahan($where, 'bahan')->result()
    );

    $this->load->view('admin/layout/wrapper', $data);
  }
  
  public function edit_alat_instrumen($id_alat){
    $where = array('id_alat' => $id_alat);
    $data = array(
      'title' => 'Edit Data Alat Instrumen',
      'isi'   => 'admin/inventaris/v_edit_alat_instrumen',
      'bahan' => $this->M_peminjaman->edit_alat_bahan($where, 'alat_instrumen')->result()
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function update_alat(){
    $this->form_validation->set_rules('nama_alat', 'nama_alat', 'trim|required');
    $this->form_validation->set_rules('spesifikasi', 'spesifikasi', 'trim|required');
    $this->form_validation->set_rules('kondisi', 'kondisi', 'trim|required');
    $this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');

    if($this->form_validation->run() == FALSE){
      redirect('admin/c_peminjaman/edit_alat');
    } else {
      $id           = $this->input->post('id_alat');
      $nama_alat    = $this->input->post('nama_alat');
      $spesifikasi  = $this->input->post('spesifikasi');
      $kondisi      = $this->input->post('kondisi');
      $jumlah       = $this->input->post('jumlah');
      $sop          = $this->input->post('sop');

      if ($_FILES['sop']['name'] != "") {
        $config['upload_path']          = './upload/Alat-Kaca-SOP';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 2048;
        
        $this->load->library('upload', $config);
        
        if(!$this->upload->do_upload('sop')) {
          echo "<script>alert('Gagal menyimpan data!');</script>";
          redirect('admin/c_peminjaman/data_alat', 'refresh');
        } else {
          $sop = $this->upload->data();

          $data = array(
            'nama_alat'   => $nama_alat,
            'spesifikasi' => $spesifikasi,
            'kondisi'     => $kondisi,
            'jumlah'      => $jumlah,
            'sop'         => 'upload/Alat-Kaca-SOP/'.$sop['file_name']
          );

          $where = array(
            'id_alat' => $id
          );

          $this->M_peminjaman->update_alat_bahan($where, $data, 'alat');
          echo "<script>alert('Data berhasil diperbaharui');</script>";
          redirect('admin/c_peminjaman/data_alat', 'refresh');
        }
      } else {
        $data = array(
          'nama_alat'   => $nama_alat,
          'spesifikasi' => $spesifikasi,
          'kondisi'     => $kondisi,
          'jumlah'      => $jumlah
        );

        $where = array(
          'id_alat' => $id
        );

        $this->M_peminjaman->update_alat_bahan($where, $data, 'alat');
        echo "<script>alert('Data berhasil diperbaharui');</script>";
        redirect('admin/c_peminjaman/data_alat', 'refresh');
      }
    }
  }
  
  public function update_alat_instrumen(){
    $this->form_validation->set_rules('nama_alat', 'nama_alat', 'trim|required');
    $this->form_validation->set_rules('spesifikasi', 'spesifikasi', 'trim|required');
    $this->form_validation->set_rules('kondisi', 'kondisi', 'trim|required');
    $this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');

    if($this->form_validation->run() == FALSE){
      echo "<script>alert('Gagal menyimpan data!');</script>";
      redirect('admin/c_peminjaman/data_alat_instrumen');
    } else {
      $id           = $this->input->post('id_alat');
      $nama_alat    = $this->input->post('nama_alat');
      $spesifikasi  = $this->input->post('spesifikasi');
      $kondisi      = $this->input->post('kondisi');
      $jumlah       = $this->input->post('jumlah');
      $sop          = $this->input->post('sop');

      if ($_FILES['sop']['name'] != "") {
        $config['upload_path']          = './upload/Alat-SOP';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 2048;
        
        $this->load->library('upload', $config);
        
        if(!$this->upload->do_upload('sop')) {
          echo "<script>alert('Gagal menyimpan data!');</script>";
          redirect('admin/c_peminjaman/data_alat_instrumen', 'refresh');
        } else {
          $sop = $this->upload->data();

          $data = array(
            'nama_alat'   => $nama_alat,
            'spesifikasi' => $spesifikasi,
            'kondisi'     => $kondisi,
            'jumlah'      => $jumlah,
            'sop'         => 'upload/Alat-SOP/'.$sop['file_name']
          );

          $where = array(
            'id_alat' => $id
          );
          
          $old_data = $this->M_peminjaman->edit_alat_bahan($where, 'alat_instrumen')->row_array();
          unlink($old_data['sop']);
          $this->M_peminjaman->update_alat_bahan($where, $data, 'alat_instrumen');
          echo "<script>alert('Data berhasil diperbaharui');</script>";
          redirect('admin/c_peminjaman/data_alat_instrumen', 'refresh');
        }
      } else {
        $data = array(
          'nama_alat'   => $nama_alat,
          'spesifikasi' => $spesifikasi,
          'kondisi'     => $kondisi,
          'jumlah'      => $jumlah
        );
  
        $where = array(
          'id_alat' => $id
        );

        $this->M_peminjaman->update_alat_bahan($where, $data, 'alat_instrumen');
        echo "<script>alert('Data berhasil diperbaharui');</script>";
        redirect('admin/c_peminjaman/data_alat_instrumen', 'refresh');
      }
    }
  }

  public function update_bahan(){
    $this->form_validation->set_rules('nama_bahan', 'nama_bahan', 'trim|required');
    $this->form_validation->set_rules('spesifikasi', 'spesifikasi', 'trim|required');
    $this->form_validation->set_rules('kondisi', 'kondisi', 'trim|required');
    $this->form_validation->set_rules('satuan_bahan', 'satuan_bahan', 'trim|required');
    $this->form_validation->set_rules('stok', 'stok', 'trim|required');
    $this->form_validation->set_rules('ukuran', 'ukuran', 'trim|required');

    if($this->form_validation->run() == FALSE) {
      echo "<script>alert('Gagal menyimpan data!');</script>";
      redirect('admin/c_peminjaman/edit_bahan');
    } else {
      $id           = $this->input->post('id_bahan');
      $nama_bahan   = $this->input->post('nama_bahan');
      $spesifikasi  = $this->input->post('spesifikasi');
      $kondisi      = $this->input->post('kondisi');
      $satuan_bahan = $this->input->post('satuan_bahan');
      $stok         = $this->input->post('stok');
      $ukuran       = $this->input->post('ukuran');
      $ldkb         = $this->input->post('ldkb');

      if ($_FILES['ldkb']['name'] != "") {
        $config['upload_path']          = './upload/Bahan-LDKB';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 2048;
        
        $this->load->library('upload', $config);
        
        if(!$this->upload->do_upload('ldkb')) {
          echo "<script>alert('Gagal menyimpan data!');</script>";
          redirect('admin/c_peminjaman/data_bahan', 'refresh');
        } else {
          $ldkb = $this->upload->data();

          $data = array(
            'nama_bahan'    => $nama_bahan,
            'spesifikasi'   => $spesifikasi,
            'kondisi'       => $kondisi,
            'satuan_bahan'  => $satuan_bahan,
            'stok'          => $stok,
            'ukuran'        => $ukuran,
            'ldkb'          => 'upload/Bahan-LDKB/'.$ldkb['file_name']
          );
    
          $where = array(
            'id_bahan' => $id
          );
          
          $old_data = $this->M_peminjaman->edit_alat_bahan($where, 'bahan')->row_array();
          unlink($old_data['ldkb']);
          $this->M_peminjaman->update_alat_bahan($where, $data, 'bahan');
          echo "<script>alert('Data berhasil diperbaharui');</script>";
          redirect('admin/c_peminjaman/data_bahan', 'refresh');
        }
      } else {
        $data = array(
          'nama_bahan'    => $nama_bahan,
          'spesifikasi'   => $spesifikasi,
          'kondisi'       => $kondisi,
          'satuan_bahan'  => $satuan_bahan,
          'stok'          => $stok,
          'ukuran'        => $ukuran,
        );
  
        $where = array(
          'id_bahan' => $id
        );

        $this->M_peminjaman->update_alat_bahan($where, $data, 'bahan');
        echo "<script>alert('Data berhasil diperbaharui');</script>";
        redirect('admin/c_peminjaman/data_bahan', 'refresh');
      }
    }
  }

  public function daftar_peminjaman_alat($id_peminjaman){
    $data = array(
      'title' => 'Daftar Peminjaman',
      'daftar'=> $this->M_peminjaman->daftar_peminjaman_alat2($id_peminjaman)->result(),
      'isi'   => 'admin/inventaris/v_daftar_peminjaman_alat'
    );

    $this->load->view('admin/layout/wrapper', $data);
  }

  public function daftar_peminjaman_bahan($id_peminjaman){
    $data = array(
      'title' => 'Daftar Peminjaman',
      'daftar'=> $this->M_peminjaman->daftar_peminjaman_bahan2($id_peminjaman)->result(),
      'isi'   => 'admin/inventaris/v_daftar_peminjaman_bahan'
    );

    $this->load->view('admin/layout/wrapper', $data);
  }
}
