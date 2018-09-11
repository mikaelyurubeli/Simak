-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2018 at 02:35 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simak`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `id_user` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `alat`
--

CREATE TABLE `alat` (
  `id_alat` int(3) NOT NULL,
  `nama_alat` varchar(50) NOT NULL,
  `spesifikasi` varchar(50) NOT NULL,
  `jumlah` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `asisten`
--

CREATE TABLE `asisten` (
  `id_asisten` int(5) NOT NULL,
  `asisten_praktikum` varchar(70) NOT NULL,
  `status` enum('0','1') DEFAULT NULL,
  `id_daftar` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bahan`
--

CREATE TABLE `bahan` (
  `id_bahan` int(3) NOT NULL,
  `nama_bahan` varchar(50) NOT NULL,
  `spesifikasi` varchar(50) NOT NULL,
  `stok` varchar(10) NOT NULL,
  `ukuran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_asisten`
--

CREATE TABLE `daftar_asisten` (
  `id_daftar` int(5) NOT NULL,
  `pilihan_praktikum1` varchar(50) NOT NULL,
  `pilihan_praktikum2` varchar(50) NOT NULL,
  `pilihan_praktikum3` varchar(50) NOT NULL,
  `nilai_kimia_organik` char(3) NOT NULL,
  `semester` char(2) NOT NULL,
  `jam_kosong` varchar(30) NOT NULL,
  `status` enum('0','1') DEFAULT '0',
  `id_mahasiswa` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_peminjaman_alat`
--

CREATE TABLE `daftar_peminjaman_alat` (
  `id_daftar` int(5) NOT NULL,
  `jumlah_peminjaman` varchar(10) NOT NULL,
  `id_peminjaman` int(5) DEFAULT NULL,
  `id_alat` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_peminjaman_bahan`
--

CREATE TABLE `daftar_peminjaman_bahan` (
  `id_daftar` int(5) NOT NULL,
  `jumlah_peminjaman` varchar(10) NOT NULL,
  `id_peminjaman` int(5) DEFAULT NULL,
  `id_bahan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama`, `nip`) VALUES
(1, 'Prof. Dr. Nurbaity, M.Si', '19470926 197502 2 001'),
(2, 'Dr. Muktiningsih N., M.Si', '19640511 198903 2 001'),
(3, 'Dr. Sukro Muhab, M.Si', '19660417 199203 1 003'),
(4, 'Dr. Maria Paristiowati, M.Si', '19671020 199203 2 001'),
(5, 'Dr. Yusmaniar, M.Si', '19620626 199602 2 001'),
(6, 'Prof. Dr. Erdawati, M.Sc.', '19510912 198103 2 001'),
(7, 'Drs. Zulhipri, M.Si', '19580703 198903 1 001'),
(8, 'Dr. Imam Santoso, M.Si', '19640917 199003 1 018'),
(9, 'Drs. Suhartono, M.Kes', '19550712 198303 1 001'),
(10, 'Dra. Zulmanelis D., M.Si', '19560501 198803 2 001'),
(11, 'Dr. Agung Purwanto, M.Si', '19640202 199102 1 001'),
(12, 'Dr. A. Ridwan, M.Si', '19630807 198803 1 003'),
(13, 'Dra. Tritiyatma H, M.Si', '19611225 198701 2 001'),
(14, 'Dr. Ucu Cahyana, M.Si', '19660820 199403 1 002'),
(15, 'Dr. Moersilah, M.Si', '19580523 199703 2 001'),
(16, 'Dr. Suwirman N, M.Pd.', '19520405 198010 1 001'),
(17, 'Dr. Afrizal, M.Si', '19730416 199903 1 002'),
(18, 'Irma Ratna K.,M.Sc, Tech', '19721204 200501 2 001'),
(19, 'Drs. Darsef Darwis, M.Si', '19650806 199003 1 004'),
(20, 'Dr. Fera Kurniadewi, M.Si', '19761231 200112 2 002'),
(21, 'Irwan Saputra, M.Si.', '19741018 200604 1 001'),
(22, 'Dr. Setia Budi, M.Sc.', '19790621 200501 1 001'),
(23, 'Yuli Rahmawati, M.Sc.,Ph.D', '19800730 200501 2 003'),
(24, 'Arif Rahman, M.Sc', '19790216 200501 1 003'),
(25, 'Ella Fitriani, M.Pd', '19900511 201504 2 001'),
(26, 'Hanhan Dianhar, M.Si', '19900929 201504 1 003');

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE `hari` (
  `id_hari` int(3) NOT NULL,
  `nama_hari` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hari`
--

INSERT INTO `hari` (`id_hari`, `nama_hari`) VALUES
(1, 'Senin'),
(2, 'Selasa'),
(3, 'Rabu'),
(4, 'Kamis'),
(5, 'Jumat');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_praktikum`
--

CREATE TABLE `jadwal_praktikum` (
  `id_jadwal` int(5) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `peserta` tinyint(3) NOT NULL DEFAULT '0',
  `kuota` varchar(3) NOT NULL,
  `id_praktikum` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(5) NOT NULL,
  `noreg` varchar(15) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `program_studi` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` char(12) NOT NULL,
  `url_foto` varchar(50) NOT NULL,
  `status` enum('0','1','2') DEFAULT '0',
  `id_tahun` int(3) DEFAULT NULL,
  `id_user` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_data`
--

CREATE TABLE `master_data` (
  `id_master` int(3) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `tahun_akademik` varchar(10) NOT NULL,
  `type_smt` enum('Ganjil','Genap','','') NOT NULL,
  `daftar_praktikum` enum('Buka','Tutup') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_data`
--

INSERT INTO `master_data` (`id_master`, `semester`, `tahun_akademik`, `type_smt`, `daftar_praktikum`) VALUES
(1, '108', '2017/2018', 'Ganjil', 'Buka');

-- --------------------------------------------------------

--
-- Table structure for table `nama_praktikum`
--

CREATE TABLE `nama_praktikum` (
  `id_nama_prak` int(5) NOT NULL,
  `nama_praktikum` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nama_praktikum`
--

INSERT INTO `nama_praktikum` (`id_nama_prak`, `nama_praktikum`) VALUES
(1, 'Kimia Dasar I'),
(2, 'Kimia Dasar II'),
(3, 'Kimia Dasar'),
(4, 'Kimia Analisa Kualitatif Dan Kuantitatif'),
(5, 'Kimia Pemisahan'),
(6, 'Kimia Analisis Instrument'),
(7, 'Kimia Lingkungan'),
(8, 'Kimia Analisis Lingkungan'),
(9, 'Termodinamika'),
(10, 'Kinetika Kimia'),
(11, 'Kimia Koordinasi'),
(12, 'Kimia Unsur'),
(13, 'Sintesis Kimia Anorganik'),
(14, 'Kimia Organik : Identifikasi Dan Sintesis'),
(15, 'Kimia Organik : Isolasi, Pemurnian, Dan Karakteristik'),
(16, 'Metabolisme Biomolekul'),
(17, 'Struktur Dan Fungsi Biomolekul'),
(18, 'Struktur dan Dasar Reaksi Anorganik'),
(19, 'Sintesis dan Identifikasi Molekul Anorganik');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman_alat`
--

CREATE TABLE `peminjaman_alat` (
  `id_peminjaman` int(5) NOT NULL,
  `jenis_kegiatan` varchar(40) NOT NULL,
  `tgl_peminjaman` varchar(15) NOT NULL,
  `status` enum('0','1','2') DEFAULT '0',
  `id_mahasiswa` int(5) DEFAULT NULL,
  `tgl_buat_surat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman_bahan`
--

CREATE TABLE `peminjaman_bahan` (
  `id_peminjaman` int(5) NOT NULL,
  `jenis_kegiatan` varchar(40) NOT NULL,
  `tgl_peminjaman` varchar(15) NOT NULL,
  `status` enum('0','1','2') DEFAULT '0',
  `id_mahasiswa` int(5) DEFAULT NULL,
  `tgl_buat_surat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penelitian`
--

CREATE TABLE `penelitian` (
  `id_penelitian` int(5) NOT NULL,
  `judul_penelitian` varchar(150) NOT NULL,
  `tgl_penelitian` varchar(20) NOT NULL,
  `pembimbing_1` varchar(70) NOT NULL,
  `pembimbing_2` varchar(70) NOT NULL,
  `status` enum('0','1') DEFAULT '0',
  `id_mahasiswa` int(5) DEFAULT NULL,
  `tgl_buat_surat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penelitian_aas`
--

CREATE TABLE `penelitian_aas` (
  `id_penelitian` int(5) NOT NULL,
  `judul_penelitian` varchar(100) NOT NULL,
  `tgl_penelitian` varchar(20) NOT NULL,
  `uji_logam` varchar(70) NOT NULL,
  `pembimbing_1` varchar(70) NOT NULL,
  `pembimbing_2` varchar(70) NOT NULL,
  `jumlah_sampel` varchar(5) NOT NULL,
  `status` enum('0','1') DEFAULT '0',
  `id_mahasiswa` int(5) DEFAULT NULL,
  `tgl_buat_surat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penelitian_lembur`
--

CREATE TABLE `penelitian_lembur` (
  `id_penelitian` int(5) NOT NULL,
  `tgl_penelitian` date NOT NULL,
  `judul_penelitian` varchar(100) DEFAULT NULL,
  `jam_mulai` varchar(10) NOT NULL,
  `jam_selesai` varchar(10) NOT NULL,
  `pembimbing_1` varchar(70) NOT NULL,
  `pembimbing_2` varchar(70) NOT NULL,
  `orang_tua` varchar(50) NOT NULL,
  `status` enum('0','1') DEFAULT '0',
  `id_mahasiswa` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penelitian_saa`
--

CREATE TABLE `penelitian_saa` (
  `id_penelitian` int(5) NOT NULL,
  `judul_penelitian` varchar(100) NOT NULL,
  `tgl_penelitian` varchar(20) NOT NULL,
  `pembimbing_1` varchar(70) NOT NULL,
  `pembimbing_2` varchar(70) NOT NULL,
  `jumlah_sampel` varchar(5) NOT NULL,
  `status` enum('0','1') DEFAULT '0',
  `id_mahasiswa` int(5) DEFAULT NULL,
  `tgl_buat_surat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `praktikum`
--

CREATE TABLE `praktikum` (
  `id_praktikum` int(5) NOT NULL,
  `nama_praktikum` varchar(50) NOT NULL,
  `dosen` varchar(50) NOT NULL,
  `semester` varchar(4) NOT NULL,
  `asisten` varchar(20) DEFAULT NULL,
  `kuota_asisten` char(2) DEFAULT NULL,
  `prasyarat` varchar(70) NOT NULL,
  `kode_praktikum` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_praktikum`
--

CREATE TABLE `riwayat_praktikum` (
  `id_rp` int(5) NOT NULL,
  `id_mahasiswa` int(5) DEFAULT NULL,
  `id_praktikum` int(5) DEFAULT NULL,
  `semester` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id_semester` int(3) NOT NULL,
  `semester` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id_semester`, `semester`) VALUES
(1, '106'),
(2, '107'),
(3, '108'),
(4, '109');

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE `tahun` (
  `id_tahun` int(3) NOT NULL,
  `tahun_angkatan` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`id_tahun`, `tahun_angkatan`) VALUES
(1, '2012'),
(2, '2013'),
(3, '2014'),
(4, '2015'),
(5, '2016'),
(6, '2017'),
(7, '2018'),
(8, '2019'),
(9, '2020');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` enum('mahasiswa','admin','kalab') DEFAULT NULL,
  `status` enum('0','1','2') DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`, `status`) VALUES
(6, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indexes for table `asisten`
--
ALTER TABLE `asisten`
  ADD PRIMARY KEY (`id_asisten`),
  ADD KEY `id_daftar` (`id_daftar`);

--
-- Indexes for table `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indexes for table `daftar_asisten`
--
ALTER TABLE `daftar_asisten`
  ADD PRIMARY KEY (`id_daftar`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `daftar_peminjaman_alat`
--
ALTER TABLE `daftar_peminjaman_alat`
  ADD PRIMARY KEY (`id_daftar`),
  ADD KEY `id_alat` (`id_alat`),
  ADD KEY `daftar_peminjaman_alat_ibfk_1` (`id_peminjaman`);

--
-- Indexes for table `daftar_peminjaman_bahan`
--
ALTER TABLE `daftar_peminjaman_bahan`
  ADD PRIMARY KEY (`id_daftar`),
  ADD KEY `id_bahan` (`id_bahan`),
  ADD KEY `daftar_peminjaman_bahan_ibfk_1` (`id_peminjaman`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`id_hari`);

--
-- Indexes for table `jadwal_praktikum`
--
ALTER TABLE `jadwal_praktikum`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_praktikum` (`id_praktikum`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `mahasiswa_ibfk_1` (`id_user`);

--
-- Indexes for table `master_data`
--
ALTER TABLE `master_data`
  ADD PRIMARY KEY (`id_master`);

--
-- Indexes for table `nama_praktikum`
--
ALTER TABLE `nama_praktikum`
  ADD PRIMARY KEY (`id_nama_prak`);

--
-- Indexes for table `peminjaman_alat`
--
ALTER TABLE `peminjaman_alat`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `peminjaman_bahan`
--
ALTER TABLE `peminjaman_bahan`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `penelitian`
--
ALTER TABLE `penelitian`
  ADD PRIMARY KEY (`id_penelitian`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `penelitian_aas`
--
ALTER TABLE `penelitian_aas`
  ADD PRIMARY KEY (`id_penelitian`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `penelitian_lembur`
--
ALTER TABLE `penelitian_lembur`
  ADD PRIMARY KEY (`id_penelitian`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `penelitian_saa`
--
ALTER TABLE `penelitian_saa`
  ADD PRIMARY KEY (`id_penelitian`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `praktikum`
--
ALTER TABLE `praktikum`
  ADD PRIMARY KEY (`id_praktikum`);

--
-- Indexes for table `riwayat_praktikum`
--
ALTER TABLE `riwayat_praktikum`
  ADD PRIMARY KEY (`id_rp`),
  ADD KEY `id_praktikum` (`id_praktikum`),
  ADD KEY `riwayat_praktikum_ibfk_1` (`id_mahasiswa`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `alat`
--
ALTER TABLE `alat`
  MODIFY `id_alat` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `asisten`
--
ALTER TABLE `asisten`
  MODIFY `id_asisten` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bahan`
--
ALTER TABLE `bahan`
  MODIFY `id_bahan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `daftar_asisten`
--
ALTER TABLE `daftar_asisten`
  MODIFY `id_daftar` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `daftar_peminjaman_alat`
--
ALTER TABLE `daftar_peminjaman_alat`
  MODIFY `id_daftar` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `daftar_peminjaman_bahan`
--
ALTER TABLE `daftar_peminjaman_bahan`
  MODIFY `id_daftar` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `hari`
--
ALTER TABLE `hari`
  MODIFY `id_hari` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `jadwal_praktikum`
--
ALTER TABLE `jadwal_praktikum`
  MODIFY `id_jadwal` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `master_data`
--
ALTER TABLE `master_data`
  MODIFY `id_master` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nama_praktikum`
--
ALTER TABLE `nama_praktikum`
  MODIFY `id_nama_prak` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `peminjaman_alat`
--
ALTER TABLE `peminjaman_alat`
  MODIFY `id_peminjaman` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `peminjaman_bahan`
--
ALTER TABLE `peminjaman_bahan`
  MODIFY `id_peminjaman` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penelitian`
--
ALTER TABLE `penelitian`
  MODIFY `id_penelitian` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penelitian_aas`
--
ALTER TABLE `penelitian_aas`
  MODIFY `id_penelitian` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penelitian_lembur`
--
ALTER TABLE `penelitian_lembur`
  MODIFY `id_penelitian` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penelitian_saa`
--
ALTER TABLE `penelitian_saa`
  MODIFY `id_penelitian` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `praktikum`
--
ALTER TABLE `praktikum`
  MODIFY `id_praktikum` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `riwayat_praktikum`
--
ALTER TABLE `riwayat_praktikum`
  MODIFY `id_rp` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id_semester` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id_tahun` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Constraints for table `asisten`
--
ALTER TABLE `asisten`
  ADD CONSTRAINT `asisten_ibfk_1` FOREIGN KEY (`id_daftar`) REFERENCES `daftar_asisten` (`id_daftar`);

--
-- Constraints for table `daftar_asisten`
--
ALTER TABLE `daftar_asisten`
  ADD CONSTRAINT `daftar_asisten_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`);

--
-- Constraints for table `daftar_peminjaman_alat`
--
ALTER TABLE `daftar_peminjaman_alat`
  ADD CONSTRAINT `daftar_peminjaman_alat_ibfk_1` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman_alat` (`id_peminjaman`) ON DELETE CASCADE,
  ADD CONSTRAINT `daftar_peminjaman_alat_ibfk_2` FOREIGN KEY (`id_alat`) REFERENCES `alat` (`id_alat`);

--
-- Constraints for table `daftar_peminjaman_bahan`
--
ALTER TABLE `daftar_peminjaman_bahan`
  ADD CONSTRAINT `daftar_peminjaman_bahan_ibfk_1` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman_bahan` (`id_peminjaman`) ON DELETE CASCADE,
  ADD CONSTRAINT `daftar_peminjaman_bahan_ibfk_2` FOREIGN KEY (`id_bahan`) REFERENCES `bahan` (`id_bahan`);

--
-- Constraints for table `jadwal_praktikum`
--
ALTER TABLE `jadwal_praktikum`
  ADD CONSTRAINT `jadwal_praktikum_ibfk_1` FOREIGN KEY (`id_praktikum`) REFERENCES `praktikum` (`id_praktikum`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`id_tahun`) REFERENCES `tahun` (`id_tahun`);

--
-- Constraints for table `peminjaman_alat`
--
ALTER TABLE `peminjaman_alat`
  ADD CONSTRAINT `peminjaman_alat_ibfk_2` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`);

--
-- Constraints for table `peminjaman_bahan`
--
ALTER TABLE `peminjaman_bahan`
  ADD CONSTRAINT `peminjaman_bahan_ibfk_2` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`);

--
-- Constraints for table `penelitian`
--
ALTER TABLE `penelitian`
  ADD CONSTRAINT `penelitian_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`);

--
-- Constraints for table `penelitian_aas`
--
ALTER TABLE `penelitian_aas`
  ADD CONSTRAINT `penelitian_aas_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`);

--
-- Constraints for table `penelitian_lembur`
--
ALTER TABLE `penelitian_lembur`
  ADD CONSTRAINT `penelitian_lembur_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`);

--
-- Constraints for table `penelitian_saa`
--
ALTER TABLE `penelitian_saa`
  ADD CONSTRAINT `penelitian_saa_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`);

--
-- Constraints for table `riwayat_praktikum`
--
ALTER TABLE `riwayat_praktikum`
  ADD CONSTRAINT `riwayat_praktikum_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`) ON DELETE CASCADE,
  ADD CONSTRAINT `riwayat_praktikum_ibfk_2` FOREIGN KEY (`id_praktikum`) REFERENCES `praktikum` (`id_praktikum`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
