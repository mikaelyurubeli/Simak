<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_peminjaman extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('m_peminjaman');
    $this->load->model('m_mahasiswa');
  }

  public function data_alat(){
    $data = array(
      'title' => 'Daftar Alat Kimia',
      'isi'   => 'mahasiswa/peminjaman/v_alat_kimia',
      'alat' => $this->m_peminjaman->data_alat()
    );

    $this->load->view('mahasiswa/layout2/wrapper', $data);
  }

  public function data_bahan(){
    $data = array(
      'title' => 'Daftar Bahan Kimia',
      'isi'   => 'mahasiswa/peminjaman/v_bahan_kimia',
      'bahan' => $this->m_peminjaman->data_bahan()
    );

    $this->load->view('mahasiswa/layout2/wrapper', $data);
  }

  public function peminjaman_alat(){
    $data = array(
      'title' => 'Peminjaman Alat Kimia',
      'alat'  => $this->m_peminjaman->data_alat(),
      'isi'   => 'mahasiswa/peminjaman/v_peminjaman_alat'
    );

    $this->load->view('mahasiswa/layout/wrapper', $data);
  }

  public function peminjaman_bahan(){
    $data = array(
      'title' => 'Peminjaman Bahan Kimia',
      'bahan' => $this->m_peminjaman->data_bahan(),
      'isi'   => 'mahasiswa/peminjaman/v_peminjaman_bahan'
    );

    $this->load->view('mahasiswa/layout/wrapper', $data);
  }

  public function do_peminjaman_alat(){

    $this->form_validation->set_rules('jenis_kegiatan', 'jenis_kegiatan', 'required');
    $this->form_validation->set_rules('tgl_peminjaman', 'tgl_peminjaman', 'trim|required');
    $this->form_validation->set_rules('id_alat[]', 'id_alat[]', 'required');
    $this->form_validation->set_rules('jumlah_alat[]', 'jumlah_alat[]', 'required');

    if($this->form_validation->run() == FALSE){
      echo "<script>alert('Terdapat kesalahan dalam pengisian data!');</script>";
      redirect('mahasiswa/c_peminjaman/peminjaman_alat');
    } else {
        $id_mahasiswa   = $this->m_mahasiswa->mahasiswa_peminjaman()->row_array();
        $jenis_kegiatan = $this->input->post('jenis_kegiatan');
        $tgl_peminjaman = $this->input->post('tgl_peminjaman');
        $jumlah         = $this->input->post('jumlah_alat[]');
        $id_alat        = $this->input->post('id_alat[]');
        $tgl_buat_surat = $this->input->post('tgl_buat_surat');
        $param1 = true;
        $param2 = false;

        for ($i=0; $i < count($jumlah); $i++) {
          if ($param1 == true) {
            $param1 = $this->check_stok_alat($id_alat[$i], $jumlah[$i]);
            $param2 = true;
          } else {
            $param1 = false;
            $param2 = false;
            $i = count($jumlah);
          }
        }
  
        if ($param1 && $param2) {
          $data = array(
            'id_mahasiswa'   => $id_mahasiswa['id_mahasiswa'],
            'jenis_kegiatan' => $jenis_kegiatan,
            'tgl_peminjaman' => $tgl_peminjaman,
            'tgl_buat_surat' => $tgl_buat_surat
          );

          $id_peminjaman = $this->m_peminjaman->add_peminjaman($data, 'peminjaman_alat');

          for ($i=0; $i < count($jumlah); $i++) {
            $data_alat = array(
              'id_peminjaman' => $id_peminjaman,
              'id_alat'       => $id_alat[$i],
              'jumlah_peminjaman' => $jumlah[$i]
            );

            $this->min_stok_alat($id_alat[$i], $jumlah[$i]);
            $this->m_peminjaman->add_alat_bahan($data_alat, 'daftar_peminjaman_alat');
          }

          echo "<script>alert('Berhasil melakukan peminjaman alat!');</script>";
          redirect('mahasiswa/c_peminjaman/cetak_peminjaman_alat/'.$id_peminjaman, 'refresh');
        } else {
          echo "<script>alert('Jumlah alat tidak mencukupi untuk dipinjam!');</script>";
          redirect('mahasiswa/c_peminjaman/peminjaman_alat', 'refresh');
        }
    }
  }

  private function min_stok_alat($id, $jumlah){
    $stok_alat = $this->m_peminjaman->get_persedian_alat($id);
    $stok_baru = $stok_alat['jumlah'] - $jumlah;

    $data = array('jumlah' => $stok_baru);
    $where = array('id_alat' => $id);

    $this->m_peminjaman->update_alat_bahan($where, $data, 'alat');
  }

  private function check_stok_alat($id, $jumlah) {
    $result = false;
    $arrayStok = $this->m_peminjaman->check_stok_alat($id);
    $stok = $arrayStok['jumlah'];
    if ($stok >= $jumlah ) {
      $result = true;
    }

    return $result;
  }

  public function do_peminjaman_bahan(){
    $this->form_validation->set_rules('jenis_kegiatan', 'jenis_kegiatan', 'required');
    $this->form_validation->set_rules('tgl_peminjaman', 'tgl_peminjaman', 'trim|required');
    $this->form_validation->set_rules('id_bahan[]', 'id_bahan[]', 'required');
    $this->form_validation->set_rules('jumlah_bahan[]', 'jumlah_bahan[]', 'required');

    if($this->form_validation->run() == FALSE){
      echo "<script>alert('Terdapat kesalahan dalam pengisian!');</script>";
      redirect('mahasiswa/c_peminjaman/peminjaman_bahan');
    } else {
        $jenis_kegiatan = $this->input->post('jenis_kegiatan');
        $tgl_peminjaman = $this->input->post('tgl_peminjaman');
        $id_mahasiswa   = $this->m_mahasiswa->mahasiswa_peminjaman()->row_array();
        $jumlah         = $this->input->post('jumlah_bahan[]');
        $id_bahan       = $this->input->post('id_bahan[]');
        $tgl_buat_surat = $this->input->post('tgl_buat_surat');
        $param1 = true;
        $param2 = false;

        for ($i=0; $i < count($jumlah); $i++) {
          if ($param1 == true) {
            $param1 = $this->check_stok_bahan($id_bahan[$i], $jumlah[$i]);
            $param2 = true;
          } else {
            $param1 = false;
            $param2 = false;
            $i = count($jumlah);
          }
        }
  
        if ($param1 && $param2) {
          $data = array(
            'id_mahasiswa'   => $id_mahasiswa['id_mahasiswa'],
            'jenis_kegiatan' => $jenis_kegiatan,
            'tgl_peminjaman' => $tgl_peminjaman,
            'tgl_buat_surat' => $tgl_buat_surat
          );

          $id_peminjaman = $this->m_peminjaman->add_peminjaman($data, 'peminjaman_bahan');

          for ($i=0; $i < count($jumlah); $i++) {
            $data_bahan = array(
              'id_peminjaman' => $id_peminjaman,
              'id_bahan'       => $id_bahan[$i],
              'jumlah_peminjaman' => $jumlah[$i]
            );

            $this->min_stok_bahan($id_bahan[$i], $jumlah[$i]);
            $this->m_peminjaman->add_alat_bahan($data_bahan, 'daftar_peminjaman_bahan');
          }

          echo "<script>alert('Berhasil melakukan peminjaman bahan!');</script>";
          redirect('mahasiswa/c_peminjaman/cetak_peminjaman_bahan/'.$id_peminjaman, 'refresh');
        } else {
          echo "<script>alert('Jumlah Bahan tidak mencukupi untuk dipinjam!');</script>";
          redirect('mahasiswa/c_peminjaman/peminjaman_bahan', 'refresh');
        }
      }
    }

    private function min_stok_bahan($id, $jumlah){
      $stok_bahan = $this->m_peminjaman->get_persedian_bahan($id);
      $stok_baru = $stok_bahan['stok'] - $jumlah;
      
      $data = array('stok' => $stok_baru);
      $where = array('id_bahan' => $id);
  
      $this->m_peminjaman->update_alat_bahan($where, $data, 'bahan');
    }
    
    private function check_stok_bahan($id, $jumlah) {
      $result = false;
      $arrayStok = $this->m_peminjaman->check_stok_bahan($id);
      $stok = $arrayStok['stok'];
      if ($stok >= $jumlah ) {
        $result = true;
      }

      return $result;
    }

    public function cetak_peminjaman_alat($id_peminjaman){
      define('FPDF_FONTPATH',$this->config->item('fonts_path'));

      $mahasiswa = $this->m_mahasiswa->mahasiswa_peminjaman()->row_array();

      $data = array(
        'title' => 'Daftar Kebutuhan Alat',
        'lampiran' => 'Lampiran I',
        'data_alat' => $this->m_peminjaman->pinjam_alat($id_peminjaman),
        'mahasiswa' => $mahasiswa,
        'kalab'     => $this->m_crud->get('kalab')->row_array()
      );
      // Load view "pdf_report" untuk menampilkan hasilnya

      $this->load->view('mahasiswa/peminjaman/v_print_peminjamana', $data);
    }

    public function cetak_peminjaman_bahan($id_peminjaman){
      define('FPDF_FONTPATH',$this->config->item('fonts_path'));

      $mahasiswa = $this->m_mahasiswa->mahasiswa_peminjaman()->row_array();

      $data = array(
        'title' => 'Daftar Kebutuhan Bahan Kimia',
        'lampiran' => 'Lampiran II',
        'data_bahan' => $this->m_peminjaman->pinjam_bahan($id_peminjaman),
        'mahasiswa' => $mahasiswa,
        'kalab'     => $this->m_crud->get('kalab')->row_array()
      );
      // Load view "pdf_report" untuk menampilkan hasilnya

      $this->load->view('mahasiswa/peminjaman/v_print_peminjamanb', $data);
    }


}
